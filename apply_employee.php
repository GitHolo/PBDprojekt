<?php
// Start a new session or resume the existing session
session_start(); 

// Database connection details
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "htc"; 

// Create a new database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the request method is POST and the session has a user_ID set
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['user_ID'])) {
    // Get the form data
    $user_ID = $_POST['user_ID'];
    $position_ID = $_POST['position_ID'];
    $hourPay = $_POST['hourPay'];

    // Fetch user information from customers table
    $customer_sql = "SELECT * FROM customers WHERE user_ID='$user_ID'";
    $customer_result = $conn->query($customer_sql);

    // Check if the customer exists in the database
    if ($customer_result->num_rows > 0) {
        // Fetch customer details
        $row = $customer_result->fetch_assoc();
        $name = $row['name'];
        $surname = $row['surname'];
        $address = $row['address'];
        $phone = $row['phone'];

        // Insert the user details into the employees table
        $update_sql = "INSERT INTO employees (user_ID, position_ID, name, surname, address, phone, hourPay) 
                        VALUES ('$user_ID', '$position_ID', '$name', '$surname', '$address', '$phone', '$hourPay')";
        if ($conn->query($update_sql) === TRUE) {
            // Delete the user from the customers table
            $delete_sql = "DELETE FROM customers WHERE user_ID='$user_ID'";
            if ($conn->query($delete_sql) === TRUE) {
                // If the delete operation was successful, show a success alert
                echo "<script>alert('Successfully applied for the position');</script>";
            } else {
                // If the delete operation failed, show an error alert
                echo "<script>alert('Error removing from customers table');</script>";
            }
        } else {
            // If the insert operation failed, show an error alert
            echo "<script>alert('Error applying for the position');</script>";
        }
    } else {
        // If the customer information was not found, show an error alert
        echo "<script>alert('User information not found in customers table');</script>";
    }

    // Redirect back to profiles.php with the user_ID as a query parameter
    header("Location: profiles.php?user_ID=$user_ID");
    exit();
}

// Close the database connection
$conn->close();
?>
