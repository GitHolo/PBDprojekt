<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-box {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-box input[type="text"],
        .login-box input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
        }
        .login-box input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
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
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "htc"; 
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: profile.php");
        exit();
    } else {
        echo "<script>alert('Invalid email or password');</script>";
    }
}
$conn->close();
?>
