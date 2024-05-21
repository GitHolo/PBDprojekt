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
    // database connection details
    $servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "htc"; 

    // create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // initialize variables
    $userID = "";
    $name = "";
    $surname = "";
    $address = "";
    $phone = "";

    // check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userID = $_POST["user_ID"];
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $address = $_POST["address"];
        $phone = $_POST["phone"];

        // update query
        $sql = "UPDATE customers SET name='$name', surname='$surname', address='$address', phone='$phone' WHERE user_ID=$userID";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

    // retrieve customer data
    if (isset($_GET["user_ID"])) {
        $userID = $_GET["user_ID"];
        $sql = "SELECT * FROM customers WHERE user_ID=$userID";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $name = $row['name'];
            $surname = $row['surname'];
            $address = $row['address'];
            $phone = $row['phone'];
        } else {
            echo "No customer found with ID: $userID";
        }
    } else {
        echo "No user ID specified.";
    }

    $conn->close();
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
        <input type="submit" value="Update">
    </form>
</body>
</html>
