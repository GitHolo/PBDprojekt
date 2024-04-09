<?php
session_start(); 

if (!isset($_SESSION['user_ID'])) {
    echo "Login required";
    sleep(5);
    header("Location: login.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "htc"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_ID = $_SESSION['user_ID'];

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
        echo "<h1>Welcome, ".$row['name']." ".$row['surname']."</h1>";
        echo "<p>".$user_ID."<br>Name: ".$row['name']."<br>Surname: ".$row['surname']."<br>Job title: ".$jobName."<br>Address: ".$row['address']."<br>Phone number: ".$row['phone']."<br>Hired: ".$row['hireDate']."<br>Hourly pay: ".$row['hourPay']."</p>";
    }
} else {
    $sql = "SELECT * FROM customers WHERE user_ID='$user_ID'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<h1>Welcome, ".$row['name']." ".$row['surname']."</h1>";
            echo "<p>".$user_ID."<br>Name: ".$row['name']."<br>Surname: ".$row['surname']."<br>Address: ".$row['address']."<br>Phone number: ".$row['phone']."</p>";
        }
    } else {
        echo "<p>No employee or customer information found for this user.</p>";
    }
}

$conn->close();
?>
<form action="logout.php" method="post">
    <input type="submit" value="Logout">
</form>
