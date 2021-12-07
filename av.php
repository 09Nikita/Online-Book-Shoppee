<?php

session_start();
header('location:history.php');
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');
$prn = $_POST['prn'];
$email = $_POST['email'];
$college = $_POST['college'];
$year = $_POST['year'];
$sem = $_POST['sem'];
$marks = $_POST['marks'];
$outof = $_POST['outof'];
$percentage = $_POST['percentage'];
$grade = $_POST['grade'];
$result = $_POST['result'];
$clear = $_POST['clear'];
$fail = $_POST['fail'];


$s = "select * from academic where email = '$email'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1){
    echo "Username already taken";
}
else{
    $reg = "insert into academic(pname,email,fathername,gender,city,nationality,qname,birthdate,mobile,district,state) values('$pname','$email','$fathername','$gender','$city','$nationality','$qname','$birthdate','$mobile','$district','$state')";
    mysqli_query($con,$reg);
    echo "Data Submitted Successfully";
}
?>
?>