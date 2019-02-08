<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
welcome : <?php echo $_POST["date"]  ;?>;
<?php
    $servername = "localhost";
    $username = "root";
    $password = "ph3n1x";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo "Connection error";
    } 
    // echo "Connected";
    $conn->query("select database testdb;");
    $sql = "INSERT INTO testdb.userinfo (name, email, password)
    VALUES ('$name','$email','$password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    
?>
</body>
</html>