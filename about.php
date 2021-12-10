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
    $sql = "SELECT * FROM band;";
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
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="product.php" class="nav-link">Merchandise</a>
                    </li>
                    <li class="nav-item active">
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
    <div id="one">
    <h1 align="center">ABOUT PAGE</h1>
    
       
    <div id="container">
        <div>
           <p style="border:3px; border-style:solid; border-color:	#FFFFFF; padding: 1em;"> MMD was formed by Mitzi Castro when she was attending the University of Memphis. It started when she met Daniel and Morgan while street performing in downtown Memphis. 
        Since then, MMD has traveled all around the world touring and performing live. MMD has been together for 15 years and has won numerous music and performing awards for many songs and 
        performances. </p>
        </div>
    
</div>
</div>
<br>

<?php

    while($row = mysqli_fetch_array($result)){
        if($row['image'] != null){
        echo "
        <div class='card single-item'>
        <div class='img-container'>
            <center>{$row['image']}</center>
        </div>
        <div class='card-body'>
            
                <h5 id='name'><center><b>{$row['name']}</b></center></h5>
                <p class='card-text' style='margin-left:20%; margin-right:20%; border: ridge;'<center>{$row['description']}</p>
                <span><center><i class='fa fa-smile-o'></i></center></span>
               
               

            </div>
        </div>
    </div>";


    }
    }
    ?>



<?php
    require 'footer.php';
?>


</body>
</html>