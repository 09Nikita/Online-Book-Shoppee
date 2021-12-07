<?php

session_start();
if(!isset($_SESSION['email'])){
    header('location:login.php');

}
?>

<html>
    <head>
        <title>Home Page</title>
    </head>
    <body>
        <div class="container">
            <a class="float-right" href="logout.php">LOGOUT</a>
            
        <h1>Welcome<br><?php echo $_SESSION['email']; ?></h1>
        </div>
    </body>
</html>