<?php include("includes/header.php"); ?>





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
                <div class="carousel-caption">
                    <h1 class="">SIU admission fall 2023</h1>
                    <p class="">sylhet international university</p>
                </div>
            </div>
            <div class=" carousel-item">
                <img class="slide-img" src=" images/d2.jpg" class="d-block " alt="...">
                <div class="carousel-caption">
                    <h3>SIU admission</h3>
                    <p>sylhet international university</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="slide-img" src=" images/d4.jpg" class="d-block " alt="...">
                <div class="carousel-caption">
                    <h3>SIU admission fall 2022</h3>
                    <p>sylhet international university</p>
                </div>
            </div>
        </div>
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon " aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>




    </div>
</div>

<div class=admission-notice>
    <h6 class="p-3">notice</h6>

</div>
<!--=======banner section========-->

<div class=" container-fluid p-1 text-lg-center">
    <div class="bg-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg');
            height: 50vh;">


        <h2 class="display-1">FALL 2022 INTAKE</h2>
        <p class="h4">Resize the browser window to see the effect.</p>

        <h1> <a href="user_apply.php" class="btn btn-outline-primary ">Apply Now</a>
        </h1>
        <h1 class=""> <a href="admission_news.php" class="btn btn-outline-primary"> Admission dead line</a></h1>


    </div>
</div>








<?php include("includes/footer.php"); ?>