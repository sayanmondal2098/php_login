<?php
// Initialize the session
setcookie("name", "", time() - 3600);
 
// Unset all of the session variables
// $_SESSION = array();
 
// Destroy the session.
// session_destroy();
 
// Redirect to login page
header('location: /techfesta/admin');
// exit;
?>