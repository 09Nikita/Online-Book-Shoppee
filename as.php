<?php

session_start();
header('location:submitted.php');
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');
$pname = $_POST['pname'];
$email = $_POST['email'];
$fathername = $_POST['fathername'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$nationality = $_POST['nationality'];
$qname = $_POST['qname'];
$birthdate = $_POST['birthdate'];
$mobile = $_POST['mobile'];
$district = $_POST['district'];
$state = $_POST['state'];


$s = "select * from student where email = '$email'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1){
    echo "Username already taken";
}
else{
    $reg = "insert into student(pname,email,fathername,gender,city,nationality,qname,birthdate,mobile,district,state) values('$pname','$email','$fathername','$gender','$city','$nationality','$qname','$birthdate','$mobile','$district','$state')";
    mysqli_query($con,$reg);
    echo "Data Submitted Successfully";
}
?>
