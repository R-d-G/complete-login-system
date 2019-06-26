<?php

session_start();


$con = mysqli_connect("localhost","root");
if($con){
	echo" connection successful";
}else{
	echo " no connection"; 
}

mysqli_select_db($con, 'Accounts');

$name = $_POST['username'];
$pass = $_POST['pass'];


$q = " select * from `signup` where name = '$name' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	
	$_SESSION['username'] = $name;
	header('location:home.php');


}else{

	header("location:login.php");
}



?>