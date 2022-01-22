

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
button{
	margin-top: 10px;
	}
	</style>
</head>
<body>
	<div class="topnav" id="myTopnav">
			<?php

      //custmor
				if(isset($_SESSION['fname']) && $_SESSION['role']==0)
				{
					echo "<a href='home.php'> Home </a>";
					echo "<img src='".$_SESSION['img']."' width=30>";
					echo "<a href='profile.php'>" .$_SESSION['fname']. "</a>";
					echo "<a href='adminchat	.php'> Contact us </a>";
					echo "<a href='products.php'> Products </a>";
					echo "<a href='cart.php'> Cart </a>";
					echo "<a href='signout.php'> Sign out </a>";
					echo "<form action='search.php' method='post'>
    					<input type='text' name='searchbar' placeholder='Search..'>
    					<button type='submit' value='submit' name='submit' class='btn2'>Search</button>
						</form>";

				}
				//admin
			elseif (isset($_SESSION['fname'])&&$_SESSION['role']==1) {
					echo "<a href='home.php'> Home </a>";
					echo "<img src='".$_SESSION['img']."' width=30>";
					echo "<a href='profile.php'>" .$_SESSION['fname']. "</a>";
					echo "<a href='messages.php'> Messages </a>";
					echo "<a href='addproduct.php'> Add Products </a>";
					echo "<a href='manageproducts.php'> Manage Products </a>";
					echo "<a href='users.php'> Users </a>";
					echo "<a href='signout.php'> Signout </a>";
					echo "<form action='search.php' method='post'>
							<input type='text' name='searchbar' placeholder='Search..'>
							<button type='submit' value='submit' name='submit' class='btn2'>Search</button>
						</form>";
				}
				//HR
				elseif (isset($_SESSION['fname'])&&$_SESSION['role']==2) {
					echo "<a href='home.php'> Home </a>";
					echo "<img src='".$_SESSION['img']."' width=30>";
					echo "<a href='profile.php'>" .$_SESSION['fname']. "</a>";
					echo "<a href='messages.php'> Messages </a>";
					echo "<a href='penalty.php'> Add penalty </a>";
					echo "<a href='signout.php'> Signout </a>";
					echo "<form action='search.php' method='post'>
							<input type='text' name='searchbar' placeholder='Search..'>
							<button type='submit' value='submit' name='submit' class='btn2'>Search</button>
						</form>";
				}
				//Auditor
				elseif (isset($_SESSION['fname'])&&$_SESSION['role']==3) {
					echo "<a href='home.php'> Home </a>";
					echo "<a href='profile.php'>" .$_SESSION['fname']. "</a>";
					echo "<a href='messages.php'> Messages </a>";
					echo "<a href='signout.php'> Signout </a>";
					echo "<form action='search.php' method='post'>
    					<input type='text' name='searchbar' placeholder='Search..'>
    					<button type='submit' value='submit' name='submit' class='btn2'>Search</button>
						</form>";
				}
				else
				{
					echo "<a href='home.php'> NYMMA </a>";
					echo "<a href='signin.php'> Sign in </a>";
					echo "<a href='projectbesmellah.php'> Sign up </a>";
					echo "<form action='search.php' method='post'>
    					<input type='text' name='searchbar' placeholder='Search..'>
    					<button type='submit' value='submit' name='submit' class='btn2'>Search</button>
						</form>";

				}
				?>

		</div>


</body>
</html>
