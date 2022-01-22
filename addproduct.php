<html>
<head>
<meta charset="utf-8">
	<title>NYMAA</title>
	<meta name="veiwport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<?php
session_start();
include'menu.php';
include'ErrorHandling.php';
 ?>

<div class="container">
	<h2>Add a product</h2>
	<form method="post" action = "addproductdatabase.php">

		<div class="form-group">
			<label for="productname">Product Name:</label>
			<input type="text" class="form-control" id="productname" placeholder="Product Name" name="productname" required>
		</div>

		<div class="form-group">
			<label for="description">Description:</label>
			<input type="text" class="form-control" id="description" placeholder="Description" name="description" required>
		</div>

		<div class="form-group">
			<label for="price">Price:</label>
			<input type="text" class="form-control" id="price" placeholder="Enter price" name="price" required>
		</div>


	<div class="form-group">
		<label for="quantity">Quantity:</label>
		<input type="text" class="form-control" id="quantity" placeholder="Enter quantity" name="quantity" required>
	</div>

		<div class="form-group">
			<label for="brand"> Brand:</label>
			<input type="text" class="form-control" id="brand" placeholder="Enter brand" name="brand" required>

    </div>

	Product's Picture: <input type="file" name="image" >
	<br>

	<button type="submit" class="btn btn-default">Submit</button>

	</form>
</div>

</html>
