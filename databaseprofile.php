<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project1";
session_start();
include "menu.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check if form is submitted and update the values
if(isset($_POST['submit'])){
$sql="update data set firstname ='".$_POST['fname']."', address = '".$_POST['address']."' where ID = '".$_SESSION['id']."'";
$result= mysqli_query($conn,$sql);
//check if query is executed sucessfully
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

}
}

?>
