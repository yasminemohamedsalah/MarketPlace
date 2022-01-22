<?php
session_start();
include "menu.php";
include "ErrorHandling.php";


?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

$conn = new mysqli($servername, $username, $password, $dbname);

   $sql="DELETE FROM products where ID ='".$_GET['X']."'";
$result = mysqli_query($conn,$sql);
if($result)
       {
           header("Location:manageproducts.php");
       }
       else
       {
           echo $sql;
       }
?>
