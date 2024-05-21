<?php
session_start(); // Start the session to use session variables
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Papa's Restaurants</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/index.css" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="./images/papas-pizzeria.jpg">
    <script src="https://kit.fontawesome.com/93c44cf550.js" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <?php include "./assets/site/mheader.php";?>

        <!-- Menu -->
        <?php include "./assets/site/menu.php";?>
        <div id="main">
            <div class="inner">

<?php
// Database connection credentials
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "htc"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$userID = "";
$name = "";
$surname = "";
$address = "";
$phone = "";
$position_ID = "";
$hourPay = "";
$message = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userID = isset($_POST["user_ID"]) ? $_POST["user_ID"] : "";
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $surname = isset($_POST["surname"]) ? $_POST["surname"] : "";
    $address = isset($_POST["address"]) ? $_POST["address"] : "";
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : "";

    // Determine if the user is a customer or employee
    $isCustomer = isset($_POST["isCustomer"]) ? $_POST["isCustomer"] : "";
    
    if ($isCustomer == "1") {
        // Update customer data
        $sql = "UPDATE customers SET name='$name', surname='$surname', address='$address', phone='$phone' WHERE user_ID='$userID'";
    } else {
        // Update employee data
        $position_ID = isset($_POST["position_ID"]) ? $_POST["position_ID"] : "";
        $hourPay = isset($_POST["hourPay"]) ? $_POST["hourPay"] : "";

        $sql = "UPDATE employees SET name='$name', surname='$surname', address='$address', phone='$phone', position_ID='$position_ID', hourPay='$hourPay' WHERE user_ID='$userID'";
    }

    if ($conn->query($sql) === TRUE) {
        $message = "Record updated successfully";
    } else {
        $message = "Error updating record: " . $conn->error;
    }
}

// Retrieve customer or employee data
if (isset($_GET["user_ID"])) {
    $userID = $_GET["user_ID"];
    
    // First, check the customers table
    $sql = "SELECT * FROM customers WHERE user_ID='$userID'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found in customers table
        $row = $result->fetch_assoc();
        $name = isset($row['name']) ? $row['name'] : "";
        $surname = isset($row['surname']) ? $row['surname'] : "";
        $address = isset($row['address']) ? $row['address'] : "";
        $phone = isset($row['phone']) ? $row['phone'] : "";
        $isCustomer = "1";
    } else {
        // User not found in customers table, check employees table
        $sql = "SELECT * FROM employees WHERE user_ID='$userID'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // User found in employees table
            $row = $result->fetch_assoc();
            $name = isset($row['name']) ? $row['name'] : "";
            $surname = isset($row['surname']) ? $row['surname'] : "";
            $address = isset($row['address']) ? $row['address'] : "";
            $phone = isset($row['phone']) ? $row['phone'] : "";
            $position_ID = isset($row['position_ID']) ? $row['position_ID'] : "";
            $hourPay = isset($row['hourPay']) ? $row['hourPay'] : "";
            $isCustomer = "0";
        } else {
            $message = "No user found with ID: $userID";
        }
    }
} else {
    $message = "No user ID specified.";
}

$conn->close();
?>

<?php if (!empty($message)): ?>
    <p><?php echo $message; ?></p>
<?php endif; ?>

<form method="post" action="./profiles.php?user_ID=<?php echo $userID;?>">
    <input type="hidden" name="isCustomer" value="<?php echo htmlspecialchars($isCustomer); ?>">
    <label for="user_ID">User ID:</label>
    <input type="text" id="user_ID" name="user_ID" value="<?php echo htmlspecialchars($userID); ?>" readonly><br><br>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>"><br><br>
    <label for="surname">Surname:</label>
    <input type="text" id="surname" name="surname" value="<?php echo htmlspecialchars($surname); ?>"><br><br>
    <label for="address">Address:</label>
    <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($address); ?>"><br><br>
    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($phone); ?>"><br><br>
    <?php if ($isCustomer == "0"): ?>
        <label for="position_ID">Position ID:</label>
        <input type="text" id="position_ID" name="position_ID" value="<?php echo htmlspecialchars($position_ID); ?>"><br><br>
        <label for="hourPay">Hourly Pay:</label>
        <input type="text" id="hourPay" name="hourPay" value="<?php echo htmlspecialchars($hourPay); ?>"><br><br>
    <?php endif; ?>
    <input type="submit" value="Update">
</form>

                <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
                <script src="assets/js/main.js"></script>
            </div>
        </div>
    </div>
</body>
</html>
