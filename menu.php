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
		img {
float: left;
padding-top: 10px;
}
	</style>
</head>
<body>
	<div class="topnav" id="myTopnav">
			<?php
				if(isset($_SESSION['fname'])&&$_SESSION['role']==0)
				{
					echo "<a href='home.php'> Home </a>";
					echo "<img src='".$_SESSION['img']."' width=30>";
					echo "<a href='profile.php'>" .$_SESSION['fname']. "</a>";
					echo "<a href='messages.php'> Contact us </a>";
					echo "<a href='products.php'> Products </a>";
					echo "<a href='cart.php'> Cart </a>";
					echo "<a href='signout.php'> Sign out </a>";
					echo "<input type='text' placeholder='Search..'>";
					echo "<div id='magnifying-glass'> <a href=''></a></div>";

				}
			elseif (isset($_SESSION['fname'])&&$_SESSION['role']==1) {
					echo "<a href='home.php'> Home </a>";
					echo "<a href='profile.php'>" .$_SESSION['fname']. "</a>";
					echo "<a href='messages.php'> Messages </a>";
					echo "<a href='addproduct.php'> Add Products </a>";
					echo "<a href='deleteproduct.php'> Manage Products </a>";
					echo "<a href='users.php'> Users </a>";
					echo "<a href='signout.php'> Signout </a>";
					echo "<input type='text' placeholder='Search..'>";
					echo "<div id='magnifying-glass'> <a href=''></a></div>";
				}
				elseif (isset($_SESSION['fname'])&&$_SESSION['role']==2) {
					echo "<a href='home.php'> Home </a>";
					echo "<a href='profile.php'>" .$_SESSION['fname']. "</a>";
					echo "<a href='messages.php'> Messages </a>";
					echo "<a href='penalty.php'> Add penalty </a>";
					echo "<a href='signout.php'> Signout </a>";
					echo "<input type='text' placeholder='Search..'>";
					echo "<div id='magnifying-glass'> <a href=''></a></div>";
				}
				elseif (isset($_SESSION['fname'])&&$_SESSION['role']==3) {
					echo "<a href='home.php'> Home </a>";
					echo "<a href='profile.php'>" .$_SESSION['fname']. "</a>";
					echo "<a href='messages.php'> Messages </a>";
					echo "<a href='signout.php'> Signout </a>";
					echo "<input type='text' placeholder='Search..'>";
					echo "<div id='magnifying-glass'> <a href=''></a></div>";
				}
				else
				{
					echo "<a href='home.php'> MarketPlace </a>";
					echo "<a href='signin.php'> Sign in </a>";
					echo "<a href='projectbesmellah.php'> Sign up </a>";
					echo "<input type='text' placeholder='Search..'>";
					echo "<div id='magnifying-glass'> <a href=''></a></div>";
					// echo "<span class='glyphicon glyphicon-search'></span>";

				}
				?>

		</div>

</body>
</html>'
