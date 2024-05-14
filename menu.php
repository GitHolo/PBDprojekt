<?php session_start(); ?>
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
        <?php include "./assets/site/mheader.html"; ?>

        <!-- Menu -->
        <?php include "./assets/site/menu.php"; ?>

        <!-- Main -->
        <div id="main">
            <div class="inner">
                <h1>Menu</h1>

                <div class="image main">
                    <img src="images/banner-image-5-1920x500.jpg" class="img-fluid" alt="" />
                </div>

                <!-- Food -->
                <section class="tiles">
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

                // SQL query to select items from the database
                $sql = "SELECT * FROM items";
                $result = $conn->query($sql);

                // Check if there are any items in the database
                if ($result->num_rows > 0) {
                    $style = 1;
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        if ($style == 7) {
                            $style = 1;
                        }
                        echo '<article class="style'.$style.'">';
                        $style++;
                        echo '<span class="image">';
                        echo '<img src="images/product-'.rand(1, 6).'-720x480.jpg" alt="" />';
                        echo '</span>';
                        echo '<a href="#">';
                        echo '<h2>' . $row["name"] . '</h2>';
                        echo '<p><del>$' . ($row["price"] + 2) . '</del> <strong>$' . $row["price"]  . '</strong></p>';
                        echo '</a>';
                        echo '</article>';
                    }
                } else {
                    echo "0 results";
                }
                // Close the database connection
                $conn->close();
                ?>
                </section>
            </div>
        </div>

        <!-- Footer -->
        <?php include "./assets/site/footer.php"; ?>

    </div>

    <!-- Scripts -->
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
