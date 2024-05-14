<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="assets/css/login.css" rel="stylesheet" />
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form method="post" action="">
            <input type="text" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</body>
</html>

<?php
session_start(); 

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "htc"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_SESSION['user_ID'])) {
    header("Location: profiles.php?user_ID=me");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT user_ID, email FROM login WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $_SESSION['user_ID'] = $row['user_ID'];
        $_SESSION['email'] = $row['email'];

        header("Location: profiles.php?user_ID=me");
        exit();
    } else {
        echo "<script>alert('Invalid email or password');</script>";
    }
}

$conn->close();
?>
<br>
<form action="index.php" method="post">
    <input type="submit" value="Home">
</form>