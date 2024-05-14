<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
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
        <h2>Register</h2>
        <form method="post" action="register.php">
            <input type="text" name="email" placeholder="Email" required spellcheck="true" oninput="checkEmail()"><br>
            <div id="email-error" style="color: red;"></div>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="text" name="name" placeholder="Name" required><br>
            <input type="text" name="surname" placeholder="Surname" required><br>
            <input type="text" name="address" placeholder="Address" required><br>
            <input type="text" name="phone" placeholder="Phone" required><br>
            <input type="submit" name="submit" value="Register">
        </form>
        <br>
        <form style="justify-content: center; display: flex;" action="login.php" method="post">
            <input style="width: 60%;" type="submit" value="Login">
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['address']) && isset($_POST['phone'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];

        // Check if email already exists
        $check_sql = "SELECT user_ID FROM login WHERE email='$email'";
        $check_result = $conn->query($check_sql);

        if ($check_result->num_rows > 0) {
            echo "<script>alert('Email already exists');</script>";
        } else {
            // Insert into login table
            $insert_login_sql = "INSERT INTO login (email, password) VALUES ('$email', '$password')";
            if ($conn->query($insert_login_sql) === TRUE) {
                // Get the last inserted user_ID
                $user_ID = $conn->insert_id;

                // Insert into customers table
                $insert_customers_sql = "INSERT INTO customers (user_ID, name, surname, address, phone) VALUES ('$user_ID', '$name', '$surname', '$address', '$phone')";
                if ($conn->query($insert_customers_sql) === TRUE) {
                    echo "<script>alert('Account created successfully');</script>";
                } else {
                    echo "<script>alert('Error creating account');</script>";
                }
            } else {
                echo "<script>alert('Error creating account');</script>";
            }
        }
    }
}

$conn->close();
?>