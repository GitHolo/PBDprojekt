<div id="main">
    <!-- Bootstrap carousel slideshow-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <!-- Carousel slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/slider-image-1-1920x700.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slider-image-2-1920x700.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slider-image-3-1920x700.jpg" alt="Third slide">
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <br>
    <br>

    <div class="inner">
        <!-- About Us -->
        <?php include "./assets/site/header.php";?>

        <!-- Events -->
        <?php include "./assets/site/events.php";?>

        <!-- Testimonials -->
        <?php include "./assets/site/testimonials.html";?>

        <!-- Blog -->
        <?php include "./assets/site/blog.php";?>
    </div>
</div>
