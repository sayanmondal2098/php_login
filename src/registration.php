<!DOCTYPE html>
<html>
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/bootstrap.css">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="script" href="./js/bootstrap.js">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/mycss.css">
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
<div class="container col-md-12 border-left-2 loginbackground">
        <div class="">
            <img src=".//img//loginsidepic.png" >

            <div class="col-md-2 float-right border-top-5 p-md-1 loginpanelborder loginpanelouter align-content-center">
                    <center>
                <img src="./img/logo2.png" class="loginpagelogo"  width= "109px" height= "70px"  >
                <br>
                <h2>
                        Registration Desk
                    </h2></center>
                <div class="loginallborder">
                <form action="./registrationwlc.php" method="POST">
                Name: <input type="text" name="name" placeholder="Enter your name">
                Email: <input type="email" name="email" placeholder="Enter your email">
                Password: <input type="password" name="password" placeholder="Enter your password">
                RePassword: <input type="password" name="repassword" placeholder="Enter your password">
                <!-- <input type="date" name="date" placeholder="ENTER D.O.B"> -->
                Date Of birth: <input type="date" name="date" placeholder="ENTER D.O.B">

                <div>
                    <button type="submit">Submit</button>
                    <button type="reset">Cancel</button>
                </div>
            </div>
            <div>Existing User ? <a href="../index.php">Login</a></div>
                </form>
            </div>
            
        </div>
    </div>
</body>
</html>

