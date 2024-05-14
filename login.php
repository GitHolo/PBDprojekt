<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="assets/css/login.css" rel="stylesheet" />
    <script>
        function validateEmail(email) {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailPattern.test(email);
        }

        function checkEmail() {
            const emailInput = document.querySelector('input[name="email"]');
            const errorDiv = document.getElementById('email-error');
            if (!validateEmail(emailInput.value)) {
                errorDiv.textContent = 'Please enter a valid email address.';
                emailInput.focus();
                return false;
            } else {
                errorDiv.textContent = '';
                return true;
            }
        }

        function validateForm() {
            return checkEmail();
        }

        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            form.addEventListener('submit', function(event) {
                if (!validateForm()) {
                    event.preventDefault();
                }
            });
        });
    </script>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form method="post" action="">
            <input type="text" name="email" placeholder="Email" required spellcheck="true" oninput="checkEmail()"><br>
            <div id="email-error" style="color: red;"></div>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" name="submit" value="Login">
            
        </form>
        <br>
        <form action="register.php" method="post">
        <input type="submit" value="Register">
        </form>
        <br>
        <form style="justify-content: center; display: flex;" action="index.php" method="post">
        <input style="width: 40%;" type="submit" value="Home">
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
    if(isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Invalid email format');</script>";
        } else {
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
    }
}

$conn->close();
?>
