  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

$conn = new mysqli($servername, $username, $password, $dbname);

include "menu.php";
include "ErrorHandling.php";

?>

<form class="form-inline" method = "POST" action = "">
	<p>Suggestions: <span id="txtHint"></span></p>
	<input type="text" id="txt1" onkeyup="showHint(this.value)" name = "name" placeholder="Search" class="form-control">
	<input type="submit" value='Search' name='search' class="btn btn-default">
	<script>
		function showHint(str){
			if (str.length == 0) {
				document.getElementById("txtHint").innerHTML = "";
				return;
			}
			xhttp = new XMLHttpRequest();
			xhttp.onload = function(){
				document.getElementById("txtHint").innerHTML = this.responseText;
			}
			xhttp.open("GET", "ajaxnames.php?q="+str);
			xhttp.send();
		}
	</script>

</form>
<?php
if(isset($_POST['search'])) {
	$search=$_POST['name'];
	$searchUser = "select * from data where firstname = '$search'";
	$searchUserResult = mysqli_query($conn,$searchUser) or die( mysqli_error($conn));

	while($searchUserRow = mysqli_fetch_array($searchUserResult)){	?>
		<div>
		<?=$searchUserRow['firstname']?>
		<?=$searchUserRow['lastname']?>
		<a href="./message.php?receiver=<?=$searchUserRow['ID']?>">Send message</a>
		</div>
<?php }
}
?>
