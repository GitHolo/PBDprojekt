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
    <style>

        .color-box {
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-right: 10px;
            border: 1px solid #ccc;
        }
        .color-info {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }
    </style>
</head>
<body class="is-preload">
    <!-- Wrapper for the entire page content -->
    <div id="wrapper">

        <!-- Header section included from an external file -->
        <?php include "./assets/site/mheader.html";?>
        
        <!-- Menu section included from an external file -->
        <?php include "./assets/site/menu.php";?>
        <div id="main">
            <div class="inner">
        <h1>Restaurant Website "Papas Restaurant" by Maksymilian Felczak</h1>
    <p>This project encompasses a web application with various components styled using CSS hex values. Below is a breakdown of the colors used and their corresponding purposes:</p>
    
    <div class="color-info"><div class="color-box" style="background-color: #585858;"></div><code>#585858</code> - Used for text color, form color, and sidebar menu color.</div>
    <div class="color-info"><div class="color-box" style="background-color: #f2849e;"></div><code>#f2849e</code> - Pinkish color utilized for <code>:before</code> background image.</div>
    <div class="color-info"><div class="color-box" style="background-color: #c9c9c9;"></div><code>#c9c9c9</code> - Represents border color.</div>
    <div class="color-info"><div class="color-box" style="background-color: #ee5f81;"></div><code>#ee5f81</code> - Applied to the button when active.</div>
    <div class="color-info"><div class="color-box" style="background-color: #7ecaf6;"></div><code>#7ecaf6</code> - Light blue color for <code>:before</code> background image.</div>
    <div class="color-info"><div class="color-box" style="background-color: #c75b9b;"></div><code>#c75b9b</code> - Light purple color for <code>:before</code> background image.</div>
    <div class="color-info"><div class="color-box" style="background-color: #ae85ca;"></div><code>#ae85ca</code> - Light violet color for <code>:before</code> background image.</div>
    <div class="color-info"><div class="color-box" style="background-color: #8499e7;"></div><code>#8499e7</code> - Light indigo color for <code>:before</code> background image.</div>
    <div class="color-info"><div class="color-box" style="background-color: #ccc;"></div><code>#ccc</code> - Border color for the login box.</div>
    <div class="color-info"><div class="color-box" style="background-color: #007bff;"></div><code>#007bff</code> - Color for the login button.</div>
    <div class="color-info"><div class="color-box" style="background-color: #333;"></div><code>#333</code> - Used for hovered articles with semi-transparent image overlays.</div>
    <div class="color-info"><div class="color-box" style="background-color: #fff;"></div><code>#fff</code> - Applied to the header, body, and buttons for a white background.</div>
    <div class="color-info"><div class="color-box" style="background-color: #f6f6f6;"></div><code>#f6f6f6</code> - Utilized for the footer.</div>

    <h2>Libraries Used:</h2>
    <ul>
        <li>jQuery</li>
        <li>Bootstrap</li>
        <li>Font Awesome</li>
    </ul>

    <h2>Font Used:</h2>
    <p>Source Sans Pro</p>

    <p>For further details on the database schema, refer to the <a href=".db/scheme.txt">database schema layout</a> file.</p>

    <h2>Project Evaluation Criteria:</h2>
    <ul>
        <li>Code readability and structure (directories, names, comments, structure, hierarchy, etc.) [10%]</li>
        <li>Fulfillment of basic recommendations regarding cascading styles (positioning, references, inclusion of appropriate elements) [20%]</li>
        <li>Compilation of fonts and colors used on the website (additional page) [10%]</li>
        <li>Content of the website according to recommendations (existing elements on the site: banner, logo) [15%]</li>
        <li>Website composition and its graphic presentation (selection of cascading styles, use of advanced styles, visually pleasing aesthetics, animations, interactivity, clear communication for the user) [25%]</li>
        <li>Responsiveness (including mobile version) [10%]</li>
    </ul>

    <p>This README serves as a guide to understand the color usage and libraries involved in the project.</p>
        </div></div>
        <!-- Footer section included from an external file -->
        <?php include "./assets/site/footer.php";?>
</div>
 <!-- Link to Bootstrap JavaScript for functionality -->
 <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Link to custom JavaScript for additional functionality -->
<script src="assets/js/main.js"></script>

</body>
</html>
