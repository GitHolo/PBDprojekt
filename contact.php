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
        <?php include "./assets/site/mheader.html";?>

        <!-- Menu section included from an external file -->
        <?php include "./assets/site/menu.php";?>

        <!-- Main content section -->
        <div id="main">
            <div class="inner">
                <!-- Page title -->
                <h1>Contact Us</h1>
                
                <!-- Image for the page -->
                <span class="image main"><img src="images/map.jpg" alt="" /></span>
                
                <!-- Paragraph with dummy text -->
                <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris. Curabitur sapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique.</p>
            </div>
        </div>

        <!-- Footer section included from an external file -->
        <?php include "./assets/site/footer.php";?>

    </div>

    <!-- Link to Bootstrap JavaScript for functionality -->
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Link to custom JavaScript for additional functionality -->
    <script src="assets/js/main.js"></script>

</body>
</html>
