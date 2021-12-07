<?php

session_start();
header('location:index.php');
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');
$fname = $_POST['fname'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$s = "select * from usertable where email = '$email'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1){
    echo "Username already taken";
}
else{
    $reg = "insert into usertable(fname,email,password,cpassword) values('$fname','$email','$password','$cpassword')";
    mysqli_query($con,$reg);
    echo "Registration successful";
}
?>