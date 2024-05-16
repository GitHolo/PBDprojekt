<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- Link to external CSS for styling the login page -->
    <link href="assets/css/login.css" rel="stylesheet" />
    <script>
        // Function to validate email format using a regular expression pattern
        function validateEmail(email) {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailPattern.test(email);
        }

        // Function to check email validity and display an error message if invalid
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

        // Function to validate the entire form by checking the email
        function validateForm() {
            return checkEmail();
        }

        // Event listener to validate the form on submission
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
        <!-- Login form to submit email and password -->
        <form method="post" action="">
            <input type="text" name="email" placeholder="Email" required spellcheck="true" oninput="checkEmail()"><br>
            <div id="email-error" style="color: red;"></div>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" name="submit" value="Login">
        </form>
        <br>
        <!-- Button to navigate to the registration page -->
        <form style="justify-content: center; display: flex;" action="register.php" method="post">
            <input style="width: 60%;" type="submit" value="Go to Register">
        </form>
        <br>
        <!-- Button to navigate to the home page -->
        <form style="justify-content: center; display: flex;" action="index.php" method="post">
            <input style="width: 40%;" type="submit" value="Home">
        </form>
    </div>
</body>
</html>

<?php
// Start the session to track user information
session_start(); 

// Database connection parameters
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "htc"; 

// Create a new connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If the user is already logged in, redirect to their profile page
if (isset($_SESSION['user_ID'])) {
    header("Location: profiles.php?user_ID=me");
    exit();
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure both email and password are provided
    if(isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Validate the email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Invalid email format');</script>";
        } else {
            // Prepare and execute the SQL query to check the user's email
            $sql = $conn->prepare("SELECT user_ID, email, password FROM login WHERE email = ?");
            $sql->bind_param("s", $email);
            $sql->execute();
            $result = $sql->get_result();
            // If a matching user is found, verify the password
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $a = $row['password'];
                $b = password_verify($password, $row['password']);
                if (password_verify($password, $row['password'])) {
                    $_SESSION['user_ID'] = $row['user_ID'];
                    $_SESSION['email'] = $row['email'];
                    header("Location: profiles.php?user_ID=me");
                    exit();
                } else {
                    echo "<script>alert('1. ".$b.$password.$a."');</script>";
                }
            } else {
                echo "<script>alert('2. ".$password."');</script>";
            }
        }
    }
}

// Close the database connection
$conn->close();
?>
