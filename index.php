<?php include("common/header.php"); ?>


<div class="main">

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="slide-img" src=" images/d1.jpg" class="d-block " alt="...">
            </div>
            <div class=" carousel-item">
                <img class="slide-img" src=" images/d2.jpg" class="d-block " alt="...">
            </div>
            <div class="carousel-item">
                <img class="slide-img" src=" images/d4.jpg" class="d-block " alt="...">
            </div>
        </div>
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!--======= banner section========-->
<div class="container-fluid bg-info text-center">
    <div class="banner">

        <h2>FALL 2022 INTAKE</h2>

        <h1> <a href="#" class="btn btn-outline-primary ">Apply Now</a></h1>
        <h1> <a href="#" class="btn btn-outline-primary"> Admission dead line</a></h1>



    </div>

</div>


















<?php include("common/footer.php"); ?>