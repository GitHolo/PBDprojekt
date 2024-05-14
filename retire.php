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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['user_ID'])) {
    $user_ID = $_POST['user_ID'];

    // Check if the user is an employee
    $employee_check_sql = "SELECT * FROM employees WHERE user_ID='$user_ID'";
    $employee_check_result = $conn->query($employee_check_sql);

    if ($employee_check_result->num_rows > 0) {
        // Fetch user information from employees table
        $employee_sql = "SELECT * FROM employees WHERE user_ID='$user_ID'";
        $employee_result = $conn->query($employee_sql);

        if ($employee_result->num_rows > 0) {
            $row = $employee_result->fetch_assoc();
            $name = $row['name'];
            $surname = $row['surname'];
            $address = $row['address'];
            $phone = $row['phone'];

            // Move data back to customers table
            $insert_sql = "INSERT INTO customers (user_ID, name, surname, address, phone) 
                           VALUES ('$user_ID', '$name', '$surname', '$address', '$phone')";
            if ($conn->query($insert_sql) === TRUE) {
                // Remove from employees table
                $delete_sql = "DELETE FROM employees WHERE user_ID='$user_ID'";
                if ($conn->query($delete_sql) === TRUE) {
                    echo "<script>alert('Successfully retired');</script>";
                } else {
                    echo "<script>alert('Error removing from employees table');</script>";
                }
            } else {
                echo "<script>alert('Error retiring');</script>";
            }
        } else {
            echo "<script>alert('Employee information not found');</script>";
        }
    } else {
        echo "<script>alert('User is not an employee');</script>";
    }

    // Redirect back to profiles.php
    header("Location: profiles.php?user_ID=$user_ID");
    exit();
}

$conn->close();
?>
