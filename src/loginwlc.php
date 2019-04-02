<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Wellcome</title>
</head>
<body>
    <?php
    
    $name = $_POST["name"];
    $password = $_POST["password"];

    $servername = "localhost";
    $username = "ph3n1x";
    $password = "ph3n1x";
    $dbname = "login";

// Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
} 
    echo "Connected successfully";

    


    ?>
</body>
</html>