
 <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
     integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/8c0e009bf4.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <!--Nav Bar-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-black">
        <div class="container">
            <a href="index.php" class="navbar-brand">MMD</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">    
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="product.php" class="nav-link">Merchandise</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="account.php" class="nav-link">Log In or Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a href="cart.php" class="nav-link">
                            <i class="fas fa-shopping-cart fa-2x"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--End of Nav Bar-->
    <!--Slider-->
    <section id="main">
        <div id="Carousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#Carousel" data-slide-to="0" class="active"></li>
            <li data-target="#Carousel" data-slide-to="1"></li>
            <li data-target="#Carousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item carousel-image-1 active">
              <div class="container">
                <div class="carousel-caption d-none d-sm-block text-right mb-5">
                <center><img src="https://i.ibb.co/dBLtd2v/band.jpg" alt="band" border="0" /><center>
                  <h1 class="display-3 title-color">MMD</h1>
                </div>
              </div>
            </div>
            <!--End-->
              <div class="carousel-item carousel-image-2 ">
                <div class="container">
                  <div class="carousel-caption d-none d-sm-block mb-5">
                  <img src="https://i.ibb.co/60YgsLP/hoodie.jpg" alt="hoodie" border="0" />
                    <h1 class="display-3 title-color">NEW MMD HOODIES OUT NOW</h1>
                    <a href="product.php" class="btn btn-color slide-btn btn-lg">
                    Shop Now</a>
                  </div>
                </div>
              </div>
  
                <div class="carousel-item carousel-image-3">
                  <div class="container">
                    <div class="carousel-caption d-none d-sm-block mb-5">
                    <img src="https://i.ibb.co/9wxKGJH/vinyl.jpg" alt="vinyl" border="0" />
                      <h1 class="display-3 title-color">MMD VINYL OUT NOW</h1>
                      <a href="product.php" class="btn btn-color slide-btn btn-lg">
                        Shop Now
                    </a>
                    </div>
                  </div>
                </div>
          <a href="#Carousel" data-slide="prev" class="carousel-control-prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a href="#Carousel" data-slide="next" class="carousel-control-next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </section>
      <!--End of slider-->
    

    <!--Service Section-->
    <section class="services py-5 text-center">
        <div class="container">
            <div class="row">
                <!--Single Service-->
                <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                    <span class="service-icon">
                        <i class="fas fa-box-open fa-2x"></i>
                    </span>
                    <h5 class="font-weight-bold text-uppercase">
                        Ships Worldwide
                    </h5>
                    <p class="text-capitalize">No matter where you are, we got you! </p>
                </div>

                <!--End of Single Service-->
                <!--Single Service-->
                <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                    <span class="service-icon">
                        <i class="fas fa-phone fa-2x"></i>
                    </span>
                    <h5 class="font-weight-bold text-uppercase">
                        Support
                    </h5>
                    <p class="text-capitalize">Having issues?? Call 777-7777-777 for assistance</p>
                </div>

                <!--End of Single Service-->
                <!--Single Service-->
                <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                    <span class="service-icon">
                        <i class="fas fa-thumbs-up fa-2x"></i>
                    </span>
                    <h5 class="font-weight-bold text-uppercase">
                        Authenticity
                    </h5>
                    <p class="text-capitalize">Guaranteed authentic. If you are not happy with our product, too bad. No refunds.</p>
                </div>


            </div>
        </div>
    </section>
    <!--End of Single Service-->
    
    <!--About Section-->
    <section id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 text-center">
                <a href="https://imgbb.com/"><img src="https://i.ibb.co/VW1g1TC/gunner.jpg" alt="gunner" border="0" /></a>
                    
                </div>
                <div class="col-lg-7 text-lg-right text-center text-color about-text">
                    <h1>Manager of MMD</h1>
                    <p align= "left" style="border: ridge;"> Gunner Salley is our manager of ten years. He approached us while we were still only performing on the streets of Memphis.
                     He is a current rising sound cloud rapper by the name of Big G. He is a self-proclaimed straight chief keef trap lord. Gunner has since been a great contributor to our success.   </p>
                </div>
            </div>
        </div>
        <center><button id=btn><a href="orderslisting.php">don't click me</a></button><center>
    </section>
    <!--End of About Section-->
    <!--contact us section-->
    <section class="contact py-5">
    
    </section>
    <!--end of contact us section-->
 
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <!---Footer--->
    <?php

   
    require 'footer.php';
    ?>
    <!---End of Footer--->
