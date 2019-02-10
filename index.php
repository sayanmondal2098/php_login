<!DOCTYPE html>
<html>
<link rel="stylesheet" href="src/css/bootstrap.min.css">
<link rel="stylesheet" href="src/css/bootstrap.css">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./src/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./src/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="script" href="./src/js/bootstrap.js">
    <link rel="stylesheet" type="text/css" media="screen" href="./src/css/mycss.css">
</head>
<body>

<div class="">
<div class="container col-md-12 border-left-2 loginbackground">
        <div class="">
            <img src="./src//img//loginsidepic.png" >

            <div class="col-md-2 float-right border-top-5 p-md-1 loginpanelborder loginpanelouter align-content-center">
                    <center>
                <img src="./src/img/logo2.png" class="loginpagelogo"  width= "109px" height= "70px"  >
                <br>
                <h2>
                        Login Panel
                    </h2></center>
                <div class="loginallborder">
                <form action="./src/welcome.php" method="POST">
                Name: <input type="text" name="name" placeholder="Enter your name">
                Email: <input type="email" name="email" placeholder="Enter your email">
                Password: <input type="password" name="password" placeholder="Enter your password">
                <div>
                    <button type="submit">Submit</button>
                    <button type="reset">Cancel</button>
                </div>
            </div>
            <div>New User ? <a href="./src/registration.php">Registration</a></div>
                </form>
            </div>
            
        </div>
    </div>
</body>
</html>

