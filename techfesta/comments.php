<?php
require('db.php');

if(isset($_POST['submit'])){
    $username = $_POST['name'];  
    // $post_id = $_POST['id'];
    $email = $_POST['email'];
    $comment = $_POST['message'];
    $date = date('Y-m-d H:i:s');

    $sql = "INSERT INTO comments (Username, Email, Comment, Date) VALUES ('$username', '$email', '$comment', '$date')";
    $query = $start->query($sql);
    if($query){
        echo"Done";
        header("Location: /techfesta/blog-single.php");
    }
}


?>
