<?php
$servername = "localhost";
$username = "root";
$password = "ph3n1x";
$db = "gym";
// $con = mysqli_connect($servername, $username, $password,$db);
// Check connection
$start = new mysqli($servername, $username, $password,$db);

if($start === false){
    die("Unable to connect");
}
?>


<!-- -->