<?php
session_start();
include "menu.php";
include "ErrorHandling.php";
?>

<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style>
		h1{
			color: white;
		}
		body {
  background-image: url("electronic-devices-background-01-vector-28098779.jpg");
}
	</style>
</head>


<div class="container">
	<h2>Profile</h2>
	<form method="post" action = "">

		<div class="form-group">
			<label for="firstname">First Name:</label>
			<input type="text" class="form-control" id="name" value="<?php echo $_SESSION['fname'];?>" name="fname">
		</div>

		<div class="form-group">
			<label for="lastname">Last Name:</label>
			<input type="text" class="form-control" id="name2" value="<?php echo $_SESSION['name2'];?>" name="name2">
		</div>

		<div class="form-group">
			<label for="mobile">Mobile:</label>
			<input type="text" class="form-control" id="mobile" value="<?php echo $_SESSION['mobile'];?>" name="mobile">
		</div>


	<div class="form-group">
		<label for="mail">Email:</label>
		<input type="email" class="form-control" id="mail" value="<?php echo $_SESSION['email'];?>" name="email">
	</div>

	<div class="form-group">
		<label for="pwd">Current Password:</label>
		<input type="password" class="form-control" id="pwd" value="<?php echo $_SESSION['password'];?>" name="password">
	</div>

	<div class="form-group">
		<label for="add"> Address:</label>
		<input type="address" class="form-control" id="add" value="<?php echo $_SESSION['address'];?>" name="address">
</div>


<button type="submit" value="delete" name="delete" class="btn btn-default">Delete</button>

<button type="submit" value="submit" name="submit" class="btn btn-default">Save Changes</button>


	</form>
</div>
</html>

<?php
$servername="localhost";
$user="root";
$password="";
$database="project1";

// Create connection
$conn = new mysqli($servername, $user, $password, $database);
if(isset($_POST['submit'])){ //check if form was submitted
	$sql="update data set firstname ='".$_POST['fname']."', lastname = '".$_POST['name2']."', mobile = '".$_POST['mobile']."', email = '".$_POST['email']."', address = '".$_POST['address']."', password = '".$_POST['password']."' where ID = '".$_SESSION['ID']."'";

	$result = mysqli_query($conn,$sql);

	if(!$result){

		die("Error");
	}
	else{


		$_SESSION["fname"]=$_POST["fname"];
		$_SESSION["name2"]=$_POST["name2"];
		$_SESSION["mobile"]=$_POST["mobile"];
		$_SESSION["email"]=$_POST["email"];
		$_SESSION["password"]=$_POST["password"];
		$_SESSION["address"]=$_POST["address"];

		header("Location:home.php");

	}
}

if(isset($_POST['delete'])){ //check if form was submitted
	$sql="Delete from data where ID = '".$_SESSION['ID']."'";
	$result = mysqli_query($conn,$sql);

	if(!$result){

		die("Error");
	}
	else{
		session_destroy();
		header("Location:home.php");
	}
}
?>
