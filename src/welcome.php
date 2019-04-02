<html>
<body>
<center>
<h1> Welcome <?php echo $_POST["name"]; ?><br> </h1>

Your email address is: <?php echo $_POST["email"]; ?><br>
welcome : <?php echo $_POST["name"]  ;?>;
</center>
<?php
    
    require_once('./scripts/sqlconnection.php');

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $welcome_msg = "<h1>TEST SMS @ $name</h1>";
    
    $conn->query("select database testdb;");
    $sql = "INSERT INTO testdb.userinfo (name, email, password)
    VALUES ('$name','$email','$password')";
    
    if ($conn->query($sql) === TRUE) {
        echo $welcome_msg;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    
?>
</body>
</html>