<?php

$servername= "localhost:3306";
$dBUsername= "mahs_MMD";
$dBPassword = "mustangs";
$dBName = "mahs_MMD";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}