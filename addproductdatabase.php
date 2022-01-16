<?php

include'menu.php';

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

$i=$_FILES['img']['name'];
move_uploaded_file($_FILES["img"]["tmp_name"], "C:\xampp\htdocs\Project\images" . $i);


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
