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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="store.js"></script>

    <title>MMD</title>
</head>

<body>
    <?php 
    //credentials for database
    $servername = "localhost:3306";
    $username = "mahs_MMD";
    $password = "mustangs";
    $dbname = "mahs_MMD";

    //connect to database
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: {$conn->connect_error}");
    }
    //sql query stores pics
    $sql = "SELECT * FROM products;";
    $result = $conn->query($sql); //checks to see if there are results to the query and then storing the results in a variable
    ?>
    
    <!--Nav Bar-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-black">
        <div class="container">
            <a href="index.php" class="navbar-brand">MMD</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item active">
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
    
    <h1 align="center">MERCH</h1>

    <h5 style="border:3px; border-style:solid; border-color:#FFFFFF; padding: 1em; ">MMD has many different band themed apparel. 
    All our materials are high grade cotton. We appreciate all purchases made from this sight and donated $3 to covid relief programs per item sold.
</h5>
<div class="row product-items" id="product-items">
<!--Single Items-->
<div class="ccol-10 col-sm-6 sol-lg-4 mx-auto my-3">

<?php

    while($row = mysqli_fetch_array($result)){
        if($row['image'] != null){
        echo "
        
        <div class='card single-item'>
            <div class='img-container'>
                <center>{$row['image']}</center>
            </div>
            <div class='card-body'>
                <div class='card-text d-flex justify-content-between text-capitalize'>
                    <h5 id='name'><center>{$row['name']}</center></h5>
                    <span><i class='fas fa-dollar-sign'></i>{$row['price']}</span>
                    <a href='cart.php' class='btn btn-color slide-btn btn-lg'>ADD TO CART</a>
                   
                   

                </div>
            </div>
        </div>";
    }
    }
    ?>

<?php 
    //credentials for database
    $servername = "localhost:3306";
    $username = "mahs_MMD";
    $password = "mustangs";
    $dbname = "mahs_MMD";

    //connect to database
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: {$conn->connect_error}");
    }
    //sql query stores pics
    $sql = "SELECT * FROM products;";
    $result = $conn->query($sql); //checks to see if there are results to the query and then storing the results in a variable
    ?> 





<?php
    require 'footer.php';
?>


</body>
</html>