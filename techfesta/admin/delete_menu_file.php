<?php
require('../db.php');
if(isset($_REQUEST['file'])){
    $title=$_REQUEST['file'];
    $path="$title.php";
        if(unlink($path)){
            echo "Deleted file ";
        }
        header("refresh:2; url='/techfesta/admin/menu'"); }
?>
