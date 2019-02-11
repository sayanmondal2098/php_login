<?php
$servername = "localhost";
$username = "root";
$password = "ph3n1x";

// Create connection
$conn = new mysqli($servername, $username, $password);
    
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "Connection error";
} 
echo "Connected";
?>