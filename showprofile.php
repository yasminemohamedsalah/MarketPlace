<?php
session_start();
include "menu.php";
include "ErrorHandling.php";

$servername="localhost";
$user="root";
$password="";
$database="project1";

$conn = new mysqli($servername, $user, $password, $database);


$sql="select * from data where ID = '".$_GET['X']."'";
$result = mysqli_query($conn,$sql);
	if($row=mysqli_fetch_array($result))
	{
		$n=$row['firstname'];
		$ln=$row['lastname'];
		$m=$row['mobile'];
		$e=$row['email'];
		$p=$row['password'];
		$a=$row['address'];
		$i=$row['Image'];
	}
?>

<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="menu.css">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style>
		h1{
			color: white;
		}
	</style>
</head>


<div class="container">
	<h2><?php echo $n;?>'s Profile</h2>
	<form method="post" action = "">

        <div class="form-group">
            <img src="<?php echo $i;?>"  width="200" height="200"><br>
		</div><br><br><br><br><br><br><br><br><br>

		<div class="form-group">
			<label for="firstname">First Name:</label>
			<input type="text" class="form-control" id="name" value="<?php echo $n;?>" name="fname" readonly>
		</div>

		<div class="form-group">
			<label for="lastname">Last Name:</label>
			<input type="text" class="form-control" id="name2" value="<?php echo $ln;?>" name="name2" readonly>
		</div>

		<div class="form-group">
			<label for="mobile">Mobile:</label>
			<input type="text" class="form-control" id="mobile" value="<?php echo $m;?>" name="mobile" readonly>
		</div>


	<div class="form-group">
		<label for="mail">Email:</label>
		<input type="email" class="form-control" id="mail" value="<?php echo $e;?>" name="email" readonly>
	</div>

	<div class="form-group">
		<label for="add"> Address:</label>
		<input type="address" class="form-control" id="add" value="<?php echo $a;?>" name="address" readonly>
</div>

	</form>
</div>
</html>
