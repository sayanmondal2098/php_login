<?php
require('db.php');
if(isset($_POST['submit'])) {
    $sql = "INSERT INTO 'gym' VALUES('','".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."')";
    $db->query($sql);
    $msg = "Name: ".$_POST['name']."\nEmail: ".$_POST['email']."\nPhone: ".$_POST['phone'];
    $msg = wordwrap($msg, 70);
    //mail('sgundy1@hotmail.com', $_POST['name']." filled out the form on your website", $msg, "From:Everyday Atlas<admin@portal.myeverydayatlas.com>");
}
?>