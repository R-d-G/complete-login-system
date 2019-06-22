<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'Accounts');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	 <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body>
<div class="container">


	<br> <h1 class="text-center text-primary"> ZeepZoop</h1><br>
	
	<h2 class="text-center text-success"> Welcome <?php echo $_SESSION['username']; ?> </h2> <br>

<div class="col-lg-8 m-auto d-block">
	<div class="card" >


		<h3 class="text-center card-header">  Hello <?php echo $_SESSION['username']; ?>, Want to check out your cart!! </h3>

	 </div><br>
<h3><a href="ecart.php" align="text-center"><center>Go to my cart</center></a></h3>
</div>
<div class="m-auto d-block">
	<a href="logout.php" class="btn btn-primary "> LOGOUT </a>
	</div><br>

	<div>
		<h5 class="text-center">  ©2019 ZeepZoop</h5>
	</div><br><br>


	</div>
	





	
</div>
</body>
</html>