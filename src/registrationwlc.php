<html>
<body>
<center>
<h1> Welcome <?php echo $_POST["name"]; ?><br> </h1>

Your email address is: <?php echo $_POST["email"]; ?><br>
welcome : <?php echo $_POST["name"]  ; echo $_POST["repassword"];?>
Birthday: <?php echo $_POST["date"]; ?>
</center>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "ph3n1x";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    $date = $_POST["date"];
    
    $welcome_msg = "<h1>TEST SMS @ $name</h1>";
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo "Connection error";
    } 
    echo "Connected";

    $conn->query("select database testdb;");
    $sql = "INSERT INTO testdb.registration (name, email, password, repassword, date)
    VALUES ('$name','$email','$password','$repassword','$date')";
    
    if ($conn->query($sql) === TRUE) {
        echo $welcome_msg;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    
?>
</body>
</html>