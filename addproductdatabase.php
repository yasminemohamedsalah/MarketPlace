<?php

include'menu.php';
include'ErrorHandling.php';

$servername="localhost";
$user="root";
$password="";
$database="project1";

$n=$_POST['productname'];
$d=$_POST['description'];
$p=$_POST['price'];
$q=$_POST['quantity'];
$b=$_POST['brand'];
$image=$_POST['image'];




$conn= mysqli_connect($servername ,$user,$password, $database);
if(!$conn)
{
echo " error database cannot be found";
}

$sql = "INSERT INTO  products(Name,Description, Price, Quantity, Image, Brand) VALUES ('$n' , '$d' , '$p' , '$q' , '$image' , '$b')";

if($conn ->query($sql)===TRUE)
{
    header("Location:Home.php");

}
else{
echo "error";
}
$conn ->close();
 ?>
