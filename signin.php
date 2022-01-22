<style>
body {
  background-image: url("electronic-devices-background-01-vector-28098779.jpg");
}
</style>

<?php

try{
$servername="localhost";
$user="root";
$password="";
$database="project1";

// Create connection
$conn = new mysqli($servername, $user, $password, $database);
}
catch(Exception $e) {
	echo $e->errorMessage();
}
if(isset($_POST['submit'])){ //check if form was submitted
	$sql="Select * from data where email = '".$_POST["email"]."' and password ='".$_POST["pwd"]."'";
	$result = mysqli_query($conn,$sql);
	if($row=mysqli_fetch_array($result))
	{
session_start();
		$_SESSION["ID"]=$row[0];
		$_SESSION["fname"]=$row['firstname'];
		$_SESSION["name2"]=$row['lastname'];
		$_SESSION["mobile"]=$row['mobile'];
		$_SESSION["email"]=$row['email'];
		$_SESSION["password"]=$row['password'];
		$_SESSION["address"]=$row['address'];
		$_SESSION["img"]=$row['Image'];
   	$_SESSION["role"]=$row['role'];

	}
	else
	{
		echo "Invalid Email or Password";
	}
	 if(isset($_SESSION["fname"])) {
    header("Location:home.php");
    }
}
?>

<?php include "menu.php";
      include "ErrorHandling.php";
?>

<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Login</title>
	<meta name="veiwport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>


<div class="container">
	<h1 style="color:black"><b>Login</b></h1>
	<form name="signinform" method="POST" action="">
	<div class="form-group">
		<label for="email">Email:</label>
		<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
	</div>

	<div class="form-group">
		<label for="pwd">Password:</label>
		<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
	</div>

	<div class="checkbox">
		<label><input type="checkbox" name="remember">Remember me</label>
	</div>
	<button type="submit" value="submit" name="submit" class="btn btn-default">Login</button>

	</form>
</div>

</body>
</html>
