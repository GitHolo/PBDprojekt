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
                <h1>Book a table</h1>

                <!-- Image for the page -->
                <div class="image main">
                    <img src="images/banner-image-6-1920x500.jpg" class="img-fluid" alt="" />
                </div>

                <!-- Paragraph with dummy text -->
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, est. Totam aperiam, atque! Distinctio quo, voluptate asperiores. Delectus sapiente, repellendus esse cupiditate error. Alias veritatis, iusto assumenda eum a sint veniam ab illum voluptas, minima nam aliquid maxime cum, corporis perspiciatis commodi beatae optio? Porro consequuntur modi expedita earum quidem! Vel, tenetur, ex. Quaerat nemo modi architecto harum asperiores hic.</p>
                
                <!-- Section title -->
                <h2>Tables</h2>
                <section class="tiles">
                    <?php
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

                    // SQL query to select all items from the tables table
                    $sql = "SELECT * FROM tables";
                    $result = $conn->query($sql);

                    // Check if there are any results from the query
                    if ($result->num_rows > 0) {
                        $style = 1;
                        // Output data for each row
                        while ($row = $result->fetch_assoc()) {
                            // Reset style after 6
                            if ($style == 7) {
                                $style = 1;
                            }
                            echo '<article class="style' . $style . '">';
                            $style++;
                            echo '<span class="image">';
                            echo '<img src="images/product-' . rand(1, 6) . '-720x480.jpg" alt="" />';
                            echo '</span>';
                            echo '<a href="#">';
                            echo '<h2>' . $row["table_ID"] . '</h2>';
                            echo '<p>NO. Seats: <strong>' . $row["seats"] . '</strong></p>';
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

        <!-- Footer section -->
        <footer id="footer">
            <div class="inner">
                <section>
                    <h2>Book a Table</h2>
                    <form method="post" action="#">
                        <div class="fields">
                            <!-- Date input field -->
                            <div class="field half">
                                <input type="text" placeholder="08.07.2020" />
                            </div>
                            
                            <!-- Time input field -->
                            <div class="field half">
                                <input type="text" placeholder="20:00" />
                            </div>

                            <!-- Table selection dropdown -->
                            <div class="field half">
                                <select>
                                    <?php
                                    // Re-open the database connection to fetch tables again
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    $sql = "SELECT * FROM tables";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // Output data for each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<option value="' . $row["table_ID"] . '">' . $row["table_ID"] . ' - <strong>NO. Seats: ' . $row["seats"] . '</strong></option>';
                                        }
                                    } else {
                                        echo "<option value=''>No tables available</option>";
                                    }
                                    $conn->close();
                                    ?>
                                </select>
                            </div>

                            <!-- Name input field -->
                            <div class="field half">
                                <input type="text" name="name" id="name" placeholder="Name" />
                            </div>

                            <!-- Notes textarea -->
                            <div class="field">
                                <textarea name="message" id="message" rows="3" placeholder="Notes"></textarea>
                            </div>

                            <!-- Submit button -->
                            <div class="field text-right">
                                <label>&nbsp;</label>
                                <ul class="actions">
                                    <li><input type="submit" value="Check Availability" class="primary" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </section>
                
                <!-- Additional footer section included from an external file -->
                <?php include "./assets/site/fsection.php"; ?>
            </div>
        </footer>
    </div>

     <!-- Link to Bootstrap JavaScript for functionality -->
	 <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Link to custom JavaScript for additional functionality -->
<script src="assets/js/main.js"></script>
</body>
</html>
