<?php
session_start();

$servername="localhost";
$user="root";
$password="";
$database="project1";

// Create connection
$conn = new mysqli($servername, $user, $password, $database);
if(isset($_POST['submit'])){ //check if form was submitted
	$sql="Select * from data where Email = '".$_POST["email"]."' and Password ='".$_POST["pwd"]."'";
	$result = mysqli_query($conn,$sql);		
	if($row=mysqli_fetch_array($result))	
	{
		$_SESSION["fname"]=$row["fname"];
		$_SESSION["email"]=$row["email"];
		$_SESSION["pwd"]=$row["pwd"];
		$_SESSION["address"]=$row["address"];
		header("Location:menu.php");
	}
	else
	{
		echo "Invalid Email or Password";
	}
}
?>