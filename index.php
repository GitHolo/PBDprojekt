<?php 
// Start a new session or resume the existing session
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <!-- Title of the web page -->
    <title>Papa's Restaurants</title>
    
    <!-- Character encoding for the HTML document -->
    <meta charset="utf-8" />
    
    <!-- Viewport settings for responsive web design -->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <!-- Link to Bootstrap CSS for styling -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    
    <!-- Link to custom CSS for additional styling -->
    <link rel="stylesheet" href="assets/css/index.css" />
    
    <!-- Favicon for the website -->
    <link rel="shortcut icon" type="image/x-icon" href="./images/papas-pizzeria.jpg">
    
    <!-- Link to Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/93c44cf550.js" crossorigin="anonymous"></script>
    
    <!-- Link to jQuery library -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body class="is-preload">
    <!-- Wrapper for the entire page content -->
    <div id="wrapper">

        <!-- Header section included from an external file -->
        <?php include "./assets/site/mheader.php";?>

        <!-- Menu section included from an external file -->
        <?php include "./assets/site/menu.php";?>

        <!-- Main content section included from an external file -->
        <?php include "./assets/site/main.php";?>

        <!-- Footer section included from an external file -->
        <?php include "./assets/site/footer.php";?>

    </div>

    <!-- Link to Bootstrap JavaScript for functionality -->
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Link to custom JavaScript for additional functionality -->
    <script src="assets/js/main.js"></script>

</body>
</html>
