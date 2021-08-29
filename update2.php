<?php 
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$rollno = $_POST['Rollno'];
$branch = $_POST['Branch'];
$addr = $_POST['Address'];
$con = mysqli_connect('localhost','root','vba_3112','Student');
$sql = "update student set Rollno ='$rollno',first_name = '$fname',last_name = '$lname',Branch = '$branch',Address = '$addr' where Rollno = '$rollno'" ;
$res = mysqli_query($con,$sql);

mysqli_close($con);

$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'index.html';
header("Location: http://$host$uri/$extra",true,301);
