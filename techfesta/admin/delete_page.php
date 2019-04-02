<?php
require('../db.php');
if(isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    $query = "DELETE FROM admin_page WHERE id=$id"; 
    $result = $start->query($query); 
    
    if ($result){
        echo "Succesfully deleted.";
    } else {
        echo "Error.";
    }
    header("refresh:2; url='/techfesta/admin/admin_pages'"); }
?>
