<?php

session_start();
if(!isset($_SESSION['email'])){
    header('location:register.php');

}
?>

<html>
    <head>
        <title></title>
    </head>
    <body>
        <div class="container">
            
            
        <h1>Your Data submitted successfully...<br></h1>
        <h3><a href="menu.php">Back to Dashboard</a></h3>
        </div>
    </body>
</html>