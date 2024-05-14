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
    $position_ID = $_POST['position_ID'];
    $hourPay = $_POST['hourPay'];

    // Fetch user information from customers table
    $customer_sql = "SELECT * FROM customers WHERE user_ID='$user_ID'";
    $customer_result = $conn->query($customer_sql);

    if ($customer_result->num_rows > 0) {
        $row = $customer_result->fetch_assoc();
        $name = $row['name'];
        $surname = $row['surname'];
        $address = $row['address'];
        $phone = $row['phone'];

        // Update employees table with cloned information
        $update_sql = "INSERT INTO employees (user_ID, position_ID, name, surname, address, phone, hourPay) 
                        VALUES ('$user_ID', '$position_ID', '$name', '$surname', '$address', '$phone', '$hourPay')";
        if ($conn->query($update_sql) === TRUE) {
            // Remove from customers table
            $delete_sql = "DELETE FROM customers WHERE user_ID='$user_ID'";
            if ($conn->query($delete_sql) === TRUE) {
                echo "<script>alert('Successfully applied for the position');</script>";
            } else {
                echo "<script>alert('Error removing from customers table');</script>";
            }
        } else {
            echo "<script>alert('Error applying for the position');</script>";
        }
    } else {
        echo "<script>alert('User information not found in customers table');</script>";
    }

    // Redirect back to profiles.php
    header("Location: profiles.php?user_ID=$user_ID");
    exit();
}

$conn->close();
?>
