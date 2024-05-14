<?php
session_start(); ?>
<!DOCTYPE HTML>
<html>
	<head>
	<title>Papa's Restaurants</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/index.css" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="./images/papas-pizzeria.jpg">
    <script src="https://kit.fontawesome.com/93c44cf550.js" crossorigin="anonymous"></script>


    <!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

	</head>
    <body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<?php include "./assets/site/mheader.html";?>


				<!-- Menu -->
				<?php include "./assets/site/menu.php";?>
                <div id="main">
                    <div class="inner">
                        
    <?php
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
            ?><form action="retire.php" method="post">
    <input type="hidden" name="user_ID" value="<?php echo $user_ID; ?>">
    <input type="submit" value="Retire">
</form>
<?php
        }
    } else {
        $sql = "SELECT * FROM customers WHERE user_ID='$user_ID'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<h1>User Information</h1>";
                echo "<p>User ID: ".$user_ID."<br>Name: ".$row['name']."<br>Surname: ".$row['surname']."<br>Address: ".$row['address']."<br>Phone number: ".$row['phone']."</p>";
                ?>
                <form action="apply_employee.php" method="post">
    <input type="hidden" name="user_ID" value="<?php echo $user_ID; ?>">
    <select name="position_ID" required>
    <option value="" disabled selected>Select Position</option>
    <?php

    // Fetch positions from jobs table
    $sql = "SELECT position_ID, jobName FROM jobs";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['position_ID'] . "'>" . $row['jobName'] . "</option>";
        }
    }

    // Close database connection
    $conn->close();
    ?>
</select><br>
    <input type="text" name="hourPay" placeholder="Hourly Pay" required><br>
    <input type="submit" value="Apply">
</form><?php
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
    // Check if the user's position ID is 1
    $sql = "SELECT position_ID FROM employees WHERE user_ID='$user_ID'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row['position_ID'] == 1) {
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
            echo "<h2>List of users:</h2>";
            echo "<ul>";
        while ($row = $userListResult->fetch_assoc()) {
            echo "<li><a href='profiles.php?user_ID=" . $row['user_ID'] . "'>" . $row['name'] . "</a> - " . $row['user_type'] . "</li>";
        }
        echo "</ul>";
        }}
}
?>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/main.js"></script>
</div></div>
</div>
</body>