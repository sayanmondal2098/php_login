<!DOCTYPE html>
<html>
<link rel="stylesheet" href="src/css/bootstrap.min.css">
<link rel="stylesheet" href="src/css/bootstrap.css">

<head>
</head>
<body>

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
// // echo "Connected";
// $conn->query("select database testdb;");
// $sql = "INSERT INTO testdb.userinfo (name, email, password)
// VALUES ('test', 'john@example.com','testpass')";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();
?>
<div class="">
<form action="src/welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Password: <input type="password" name="password"><br>
Date: <input type="date" name="date">
    <input type="submit">

</form>
</div>
</body>
</html>

