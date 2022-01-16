<html>
<script>
function validate(){
var name=document.myform.fname.value;
var password=document.myform.password.value;
//var passw = document.getElementById('pwd').value;

var regex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");

if (name==""){
  alert("Name can't be blank");
  return false;
}
else if(password=="1234"){
{
  alert("Password must contain character and more than 6 ");
  return false;
  }
	else{
return true;
	}
}
</script>
<head>
<meta charset="utf-8">
	<title>NYMAA</title>
	<meta name="veiwport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<?php include'menu.php'; ?>

<div class="container">
	<h2>Sign up</h2>
	<form name="myform" method="post" onsubmit="return validate();" action = "databasesignup.php">

		<div class="form-group">
			<label for="firstname">First Name:</label>
			<input type="text" class="form-control" id="name"  placeholder="Enter First Name" name="fname" >
		</div>

		<div class="form-group">
			<label for="lastname">Last Name:</label>
			<input type="text" class="form-control" id="name2" placeholder="Enter Last Name" name="name2" required>
		</div>

		<div class="form-group">
			<label for="mobile">Mobile:</label>
			<input type="text" class="form-control" id="mobile" placeholder="Enter Number" name="number" required>
		</div>


	<div class="form-group">
		<label for="mail">Email:</label>
		<input type="email" class="form-control" id="mail" placeholder="Enter email" name="email" required>
	</div>

	<div class="form-group">
		<label for="pwd">Password:</label>
		<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" >

		<div class="form-group">
			<label for="pwd"> Re-Password:</label>
			<input type="password" class="form-control" id="pwd" placeholder="Re-Enter password" name="repass" minlength="4" required>

		</div>
	</div>
	<div class="form-group">
		<label for="add"> Address:</label>
		<input type="address" class="form-control" id="add" placeholder="Enter Address" name="address" required>
</div>



<div class="form-group">
<label for="img"> Image:</label>
<input type="file" class=" inputfile btn w-100 py-3" name="img" accept="image/*" >
</div>


<div class="radiobutton">
		<label><input type="radio" name="gender[]">Male</label>
		<label><input type="radio" name="gender[]">Female</label>
	</div>

	<button type="submit" class="btn btn-default">Submit</button>

	</form>
</div>

</html>
