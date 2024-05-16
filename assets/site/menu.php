<!-- Navigation menu made using bootstrap-->
<nav id="menu">
    <!-- Heading for the menu -->
    <h2>Menu</h2>
    <!-- Unordered list for menu items -->
    <ul>
        <!-- Home link -->
        <li><a href="index.php" class="active">Home</a></li>
        <!-- Login or Profile link, based on session status -->
        <li>
            <a href='login.php'>
                <?php 
                // PHP code to determine if the user is logged in or not
                if (isset($_SESSION['user_ID'])){
                    echo "Profile"; // Display "Profile" if logged in
                } else {
                    echo "Login"; // Display "Login" if not logged in
                }
                ?>
            </a>
        </li>
        <!-- Link to book a table -->
        <li><a href="book-table.php">Book a Table</a></li>
        <!-- Link to menu -->
        <li><a href="menu.php">Menu</a></li>
        <!-- Link to contact page -->
        <li><a href="contact.php">Contact Us</a></li>
        <!-- link to readme page -->
        <li><a href="readme.php">Readme</a></li>
    </ul>
</nav>
