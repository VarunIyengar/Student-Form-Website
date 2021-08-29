<?php 
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$rollno = $_POST['Rollno'];
$branch = $_POST['Branch'];
$addr = $_POST['Address'];
$con = mysqli_connect('localhost','root','vba_3112','Student');
$sql = "insert into student(Rollno,first_name,last_name,Branch,Address) values('$rollno','$fname','$lname','$branch','$addr')";
$res = mysqli_query($con,$sql);
// echo"<script> alert('Your form has been submitted. Redirecting!!!') </script>";

mysqli_close($con);

$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'index.html';
header("Location: http://$host$uri/$extra",true,301);

// header("Location: /index.html",TRUE,301);   Used for deploying in server
?>