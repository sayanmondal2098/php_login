<script>
    console.log("TESTING.....")
</script>

<?php
    
    //require('./scripts/sqlconnection.php');
    
    //get value from index (login) file
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    //to prevent sqlinjection
    $name = stripcslashes($name);
    $email = stripcslashes($email);
    $password = stripslashes($password);

    // $name = mysql_real_escape_string($name);
    // $email = mysql_real_escape_string($email);
    // $password = mysql_real_escape_string($password);

    //mysql connection

    
    $servername = "localhost";
    $username = "ph3n1x";
    $password = "ph3n1x";

    // Create connection
    $conn = new mysqli($servername, $username, $password);
    

    //result
    $name = string($name);
    $conn->query("select database testdb;");
    $sql = "SELECT * FROM testdb where name=$name";
    
    echo([$sql]);
    $row = mysql_fetch_array($sql);
    echo($row);
    
    $conn->close();
    
?>
