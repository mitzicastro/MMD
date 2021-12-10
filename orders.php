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