<?php
session_start(); // Start the session to use session variables

// Database connection credentials
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "htc"; 

// Create connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection to the database failed
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the request method is POST and if the user is logged in
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['user_ID'])) {
    $user_ID = $_POST['user_ID']; // Get the user ID from the POST request

    // Check if the user is an employee
    $employee_check_sql = "SELECT * FROM employees WHERE user_ID='$user_ID'";
    $employee_check_result = $conn->query($employee_check_sql);

    if ($employee_check_result->num_rows > 0) { // If the user is found in the employees table
        // Fetch user information from employees table
        $employee_sql = "SELECT * FROM employees WHERE user_ID='$user_ID'";
        $employee_result = $conn->query($employee_sql);

        if ($employee_result->num_rows > 0) { // If employee information is found
            $row = $employee_result->fetch_assoc();
            $name = $row['name'];
            $surname = $row['surname'];
            $address = $row['address'];
            $phone = $row['phone'];

            // Insert the user information into the customers table
            $insert_sql = "INSERT INTO customers (user_ID, name, surname, address, phone) 
                           VALUES ('$user_ID', '$name', '$surname', '$address', '$phone')";
            if ($conn->query($insert_sql) === TRUE) { // If insertion is successful
                // Remove the user from the employees table
                $delete_sql = "DELETE FROM employees WHERE user_ID='$user_ID'";
                if ($conn->query($delete_sql) === TRUE) { // If deletion is successful
                    echo "<script>alert('Successfully retired');</script>";
                } else { // If there is an error removing from employees table
                    echo "<script>alert('Error removing from employees table');</script>";
                }
            } else { // If there is an error inserting into customers table
                echo "<script>alert('Error retiring');</script>";
            }
        } else { // If employee information is not found
            echo "<script>alert('Employee information not found');</script>";
        }
    } else { // If the user is not found in the employees table
        echo "<script>alert('User is not an employee');</script>";
    }

    // Redirect back to profiles.php with the user ID
    header("Location: profiles.php?user_ID=$user_ID");
    exit();
}

// Close the database connection
$conn->close();
?>
