  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php

// session start
session_start();

// include DB connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
include "menu.php";
include "ErrorHandling.php";

$receiver = $_GET['receiver'];

$getReceiver = "SELECT * FROM data WHERE id = '$receiver'";
$getReceiverResult = mysqli_query($conn,$getReceiver) or die(mysqli_error($conn));
$getReceiverRow = mysqli_fetch_array($getReceiverResult);
?>
<img src="<?=$getReceiverRow['Image']?>" class="img-circle" width = "40"/>
<strong><?=$getReceiverRow['firstname']?></strong>
<table class="table table-striped">
<?php
$getMessage = "SELECT  messages.* ,data.firstname FROM messages INNER JOIN data on sent_by=data.ID  WHERE sent_by = '$receiver' AND received_by = ".$_SESSION['ID']." OR sent_by = ".$_SESSION['ID']." AND received_by = '$receiver' ORDER BY createdAt asc";
$getMessageResult = mysqli_query($conn,$getMessage) or die(mysqli_error($conn));
if(mysqli_num_rows($getMessageResult) > 0) {
	while($getMessageRow = mysqli_fetch_array($getMessageResult)) {	?>
	<tr><div style = "margin: 10;">
	<td>	<h4 style = "color: #007bff;display:inline"><?=$getMessageRow['firstname']?></h4></td>
	<td>	<p class="text-center" style = "display:inline"><?=$getMessageRow['message']?></p></td>
		</div>
		</tr>
<?php }
}
else {
	echo "<tr><td><p>No messages yet! Say 'Hi'</p></td></tr>";
}
?>
</table>
<form class="form-inline" action="" method = "POST">
	<input type="hidden" name = "sent_by" value = "<?=$_SESSION['ID']?>"/>
	<input type="hidden" name = "received_by" value = "<?=$receiver?>"/>
	<input type="text" name = "message" class="form-control" placeholder = "Type your message here" required/>
	<input type = "submit" value='send' name='submit' class="btn btn-default">
</form>
<?php
if(isset($_POST['submit'])) {
	$createdAt = date("Y-m-d h:i:sa");
	$sent_by = $_POST['sent_by'];
	$receiver = $_POST['received_by'];
	$message = $_POST['message'];
	$sendMessage = "INSERT INTO messages(sent_by,received_by,message,createdAt) VALUES('$sent_by','$receiver','$message','$createdAt')";
	mysqli_query($conn,$sendMessage) or die(mysqli_error($conn));
}
?>
