<?php
session_start(); 

if (!isset($_SESSION['user_ID'])) {
    header("Location: login.php");
    exit();
}

$user_ID = $_SESSION['user_ID'];
$email = $_SESSION['email'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <h1>Welcome, <?php echo $email; ?></h1>
    <p>User ID: <?php echo $user_ID; ?></p>
</body>
</html>
