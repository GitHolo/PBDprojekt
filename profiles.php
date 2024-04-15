<?php
session_start(); 

if (!isset($_SESSION['user_ID']) || ($_SESSION['user_ID'] != 1 && $_GET['user_ID'] !== 'me')) {
    echo "<script>alert('Login required');</script>";
    echo "<script>window.location = 'login.php';</script>";
    exit();
} else {
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "htc"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if($_GET['user_ID']=='me'){
        $user_ID = $_SESSION['user_ID'];
    } else {
        $user_ID = $_GET['user_ID'];
    }

    if (!isset($user_ID) || empty($user_ID)) {
        echo "User ID not provided.";
        exit();
    }

    $sql = "SELECT * FROM employees WHERE user_ID='$user_ID'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $jobName = ""; 
            $jobSql = "SELECT jobName FROM jobs WHERE position_ID=" . $row['position_ID'];
            $jobResult = $conn->query($jobSql);
            if ($jobResult->num_rows > 0) {
                $jobRow = $jobResult->fetch_assoc();
                $jobName = $jobRow['jobName'];
            }
            if($_GET['user_ID']=='me' || $_GET['user_ID']==$_SESSION['user_ID']){
                echo "<h1>Welcome, ".$row['name']." ".$row['surname']."</h1>";
            } else {
                echo "<h1>User Information</h1>";
            }
            echo "<p>User ID: ".$user_ID."<br>Name: ".$row['name']."<br>Surname: ".$row['surname']."<br>Job title: ".$jobName."<br>Address: ".$row['address']."<br>Phone number: ".$row['phone']."<br>Hired: ".$row['hireDate']."<br>Hourly pay: ".$row['hourPay']."</p>";
        }
    } else {
        $sql = "SELECT * FROM customers WHERE user_ID='$user_ID'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<h1>User Information</h1>";
                echo "<p>User ID: ".$user_ID."<br>Name: ".$row['name']."<br>Surname: ".$row['surname']."<br>Address: ".$row['address']."<br>Phone number: ".$row['phone']."</p>";
            }
        } else {
            echo "<p>User information not found for the provided user ID.</p>";
        }
    }?>
    <form action="logout.php" method="post">
    <input type="submit" value="Logout">
</form>
<form action="index.php" method="post">
    <input type="submit" value="Home">
</form>
<?php
    echo "<br>";
    if ($_SESSION['user_ID'] == 1) {
        $userListSql = "SELECT 
            CASE
                WHEN employees.user_ID IS NOT NULL THEN employees.name
                WHEN customers.user_ID IS NOT NULL THEN customers.name
            END AS name,
            CASE
                WHEN employees.user_ID IS NOT NULL THEN employees.user_ID
                WHEN customers.user_ID IS NOT NULL THEN customers.user_ID
            END AS user_ID,
            CASE
                WHEN employees.user_ID IS NOT NULL THEN 'Employee'
                WHEN customers.user_ID IS NOT NULL THEN 'Customer'
            END AS user_type
        FROM 
            login
        LEFT JOIN 
            employees ON login.user_ID = employees.user_ID
        LEFT JOIN 
            customers ON login.user_ID = customers.user_ID;";
        $userListResult = $conn->query($userListSql);
        echo "<br>";
        echo "<h2>Lista użytkowników:</h2>";
        echo "<ul>";
        while ($row = $userListResult->fetch_assoc()) {
            echo "<li><a href='profiles.php?user_ID=" . $row['user_ID'] . "'>" . $row['name'] . "</a> - " . $row['user_type'] . "</li>";
        }
        echo "</ul>";
    }

    $conn->close();
}
?>