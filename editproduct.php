<?php
session_start();
include "menu.php";
include "ErrorHandling.php";

       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "project1";

       // Create connection
       $conn = mysqli_connect($servername,$username,$password,$dbname);
       $sql="select * from products where ID = '".$_GET['X']."'";
       $result = mysqli_query($conn,$sql);

	while($row=mysqli_fetch_array($result))
	{
              $Name=$row[1];
              $Description=$row[2];
              $Price=$row[3];
              $Quantity=$row[4];
              $Image=$row[5];
              $Brand=$row[6];
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
	<h2>Edit a product</h2>
	<form method="POST" action = "">

		<div class="form-group">
            <label for="productname">Product Name:</label>
            <input type="text" class="form-control" id="productname" value="<?php echo $Name;?>" name="productname">


		</div>

		<div class="form-group">
        <label for="description">Description:</label>
		<input type="text" class="form-control" id="description" value="<?php echo $Description;?>" name="description">
	    </div>


        <div class="form-group">
			<label for="price">Price:</label>
			<input type="text" class="form-control" id="price" value="<?php echo $Price;?>" name="price">
		</div>


	<div class="form-group">
		<label for="quantity">Quantity:</label>
		<input type="text" class="form-control" id="quantity" value="<?php echo $Quantity;?>" name="quantity">
	</div>

		<div class="form-group">
			<label for="brand"> Brand:</label>
			<input type="text" class="form-control" id="brand" value="<?php echo $Brand;?>" name="brand">

    </div>


<button type="submit" value="submit" name="submit" class="btn btn-default">Submit</button>


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

if(isset($_POST['submit'])){
	$sql="update products set Name ='".$_POST['productname']."', Description = '".$_POST['description']."', Price = '".$_POST['price']."', Quantity = '".$_POST['quantity']."', Brand = '".$_POST['brand']."' where ID = '".$_GET['X']."'";
	$result = mysqli_query($conn,$sql);

	if(!$result){

		die("Error");
	}
	else{


		$_SESSION["productname"]=$_POST["productname"];
		$_SESSION["description"]=$_POST["description"];
		$_SESSION["price"]=$_POST["price"];
		$_SESSION["quantity"]=$_POST["quantity"];
		$_SESSION["brand"]=$_POST["brand"];
		header("Location:manageproducts.php");
	}
}

?>
