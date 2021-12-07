<?php

session_start();
if(!isset($_SESSION['email'])){
    header('location:menu.php');

}
?>

<html>
    <head>
        <title>Submitted</title>
    </head>
    <body>
        <div class="container">
            
            <h3>Your data have been submitted successfully!</h3>
            <br>
            <br>
            <a class="float-right" href="menu.php">Back to Dashboard</a>
        </div>
    </body>
</html>