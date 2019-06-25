<?php

session_start();
header('location:login.php');

$con = mysqli_connect("localhost","root");
if($con){
	echo" connection successful";
}else{
	echo " no connection"; 
}

mysqli_select_db($con, 'Accounts');

$name = $_POST['user'];
$pass = $_POST['password'];
$mobile=$_POST['m_no'];
$email=$_POST['email'];

$q = " select * from `signup` where name = '$name' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num >= 1){
	echo" duplicate data ";
}else{

	$qy= "INSERT INTO `signup`(`name`, `mobile`, `password`, `email`) values ('$name' , '$mobile', '$pass', '$email') ";
	mysqli_query($con, $qy);
}



?>