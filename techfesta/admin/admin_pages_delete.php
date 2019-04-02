<?php
require('../db.php');
if(isset($_REQUEST['page'])){
    $page=$_REQUEST['page'];
    $query = "DELETE FROM admin_page WHERE Page=$page"; 
    $result = $start->query($query); 
    
    if ($result){
        echo "Succesfully deleted.";
        $path="$page.php";
        if(unlink($path)){
            echo "Deleted file ";
        }
    } else {
        echo "Error.";
    }}
    // header("refresh:2; url='/techfesta/admin/admin_pages'"); }
?>
