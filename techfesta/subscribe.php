<?php
require('db.php');

if(isset($_POST['submit'])){
    $Name = $_POST['name'];
    $Email = $_POST['email'];

    $query = "INSERT INTO subscribers (Name , Email) VALUES ('$Name', '$Email')";

    $insert = $start->query($query);
    if($insert){
        header("Location: /techfesta/");
    } else {
        echo "You have not subscribed.";
    }
}

?>