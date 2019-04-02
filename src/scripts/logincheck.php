<?php 
    $conntest = require('sqlconnection.php');
    
    $name = 'SAYAN MONDAL';
    $password = 12345;

    $welcome_msg = 'test';

    $conn->query("use testdb;");

    $sql = "SELECT * FROM `userinfo` WHERE name='$name'
and password='$password';";

    // echo($sql);
    // $result = $conn->query($query) ;

    // if ($conn->query($query) === TRUE) {
    //     echo $welcome_msg;
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }

    if ($conn->query($sql) === TRUE) {
            echo $welcome_msg;
        } 
    
    if($rows==1){
        header("Location: login.php");
        echo('test');
    }
    $conn->close();
?>