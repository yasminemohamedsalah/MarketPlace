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
 
?>

<form class="form-inline" method = "POST" action = "">
	<input type="text" name = "name" placeholder="Search" class="form-control">
	<input type="submit" value='Search' name='search' class="btn btn-default">
</form>
<?php
if(isset($_POST['search'])) {
	$search=$_POST['name'];
	// $searchUser = "SELECT * FROM data WHERE name = '$search'";
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
<div>
<?php
$lastMessage = "SELECT DISTINCT sent_by FROM messages WHERE received_by = ".$_SESSION['ID'];
$lastMessageResult = mysqli_query($conn,$lastMessage) or die(mysqli_error($conn));
if(mysqli_num_rows($lastMessageResult) > 0) {
	while($lastMessageRow = mysqli_fetch_array($lastMessageResult)) {
		$sent_by = $lastMessageRow['sent_by'];
		$getSender = "select * from data where ID = '$sent_by'";
		$getSenderResult = mysqli_query($conn,$getSender) or die(mysqli_error($conn));
		$getSenderRow = mysqli_fetch_array($getSenderResult);
		?>
		<div>
		<?=$getSenderRow['firstname'];?>
		<?=$getSenderRow['lastname'];?>
		<a href="./message.php?receiver=<?=$sent_by?>">Send message</a>
		</div><br>
<?php }
} 
else {
	echo "No conversations yet!";
}
?>
</div>

