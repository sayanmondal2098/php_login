<?php
require('../db.php');
if(isset($_REQUEST['page'])){
    $page=$_REQUEST['page'];
    $path="$page.php";
        if(unlink($path)){
            echo "Deleted file ";
        }
        header("refresh:2; url='/techfesta/admin/admin_pages'"); }
?>
