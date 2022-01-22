<html>
<head>
<style>
body {
  background-image: url("electronic-devices-background-01-vector-28098779.jpg");
}
</style>

<meta charset="utf-8">
	<title>NYMAA</title>
	<meta name="veiwport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script >
function signupvalidation(){

var name1 = document.getElementById("name").value;
var name2 = document.getElementById("name2").value;
var passw = document.getElementById("password1").value;
var password2= document.getElementById("pwd2").value;

if (name1==""){
  alert("Name can't be blank");
  return false;
}
if (name2==""){
  alert("Name can't be blank");
  return false;
}
 if(passw!==password2){
	alert("Re-Password is not correct!")
	return false;
	}
if(passw.length < 8)
{
  alert("Password length must be atleast 8 characters");
  return false;
  }


else{
return true;
	}
}
</script>

</head>
<?php 
	include'menu.php';
	include'ErrorHandling.php';      

	?>

<div class="container">
	<h2>Sign up</h2>
	<form name="myform" method="post" action = "databasesignup.php">

		<div class="form-group">
			<label for="firstname">First Name:</label>
			<input type="text" class="form-control" id="name"  placeholder="Enter First Name" name="fname" required >
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
		<input type="password" class="form-control" id="password1" placeholder="Enter password" name="password" required>
	</div>

		<div class="form-group">
			<label for="pwd"> Re-Password:</label>
			<input type="password" class="form-control" id="pwd2" placeholder="Re-Enter password" name="repass" required>
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

	<button type="submit" onclick="signupvalidation()" class="btn btn-default">Submit</button>

	</form>
</div>

</html>
