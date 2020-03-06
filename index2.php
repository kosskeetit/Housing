<?php
require 'config.php';
require 'header.php';
?>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="static/images/home-real-estate-106399.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="static/images/apartments.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="static/images/white-single-story-houses-beside-body-of-water-1438832.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="section-a">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="card" style="width: 100%;" >
                    <img src="static/images/white-single-story-houses-beside-body-of-water-1438832.jpg" class="card-img-top" alt="..." style="height:30vh;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
             <div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4">
                 <div class="card" style="width: 100%;" >
                     <img src="static/images/home-real-estate-106399.jpg" class="card-img-top" alt="..." style="height:30vh;">
                     <div class="card-body">
                         <h5 class="card-title">Card title</h5>
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                         <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                 </div>
             </div>
            <div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="card" style="width: 100%;">
                    <img src="static/images/apartments.jpg" class="card-img-top" alt="..." style="height:30vh;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-b" style="margin-top: 20px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-sm-8 col-md-8 col-lg-8 col-xl-8">
                <div class="card" style="height: 20vh; text-align: center;">
                    <p style="font-size:100%;">Do you have a house for rent or for sale?
                        Register with us and lets us help you look for a tenant
                    </p>
                    <a href="signup.php"><button class="btn btn-info" style="margin-top: 20px;">Lets Go</button></a>
                </div>
            </div>
            <div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <img src="static/images/apartments.jpg" alt="" style="height: 20vh; width: 100%; margin-left: -30px">

    </div>
</div>







<?php
require 'footer.php';
?>
