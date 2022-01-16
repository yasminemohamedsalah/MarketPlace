<?php

$servername="localhost";
$user="root";
$password="";
$database="project1";

$n=$_POST['fname'];
$l=$_POST['name2'];
$m=$_POST['number'];
$e=$_POST['email'];
$p=$_POST['password'];
$a=$_POST['address'];
$image=$_POST['img'];

$emaill = $_POST['email'];
$role = 0;
if(strpos("$emaill","@admin")){
  $role = 1;
 }
 if(strpos("$emaill","@hr")){
  $role = 2;
 }
 if(strpos("$emaill","@auditor")){
  $role = 3;
 }

$conn= mysqli_connect($servername ,$user,$password, $database);
if(!$conn)
{
echo " error database cannot be found";
}
$i=$_FILES['img']['name'];
move_uploaded_file($_FILES["img"]["tmp_name"], "C:\xampp\htdocs\proo" . $i);
if($i==""){
  $i="user.png";
 $sql = "INSERT INTO  data(firstname,lastname, mobile, email, password, address,Image, role) VALUES ('$n' , '$l' , '$m' , '$e' , '$p' , '$a','$i', $role)";
}
else $sql = "INSERT INTO  data(firstname,lastname, mobile, email, password, address,Image, role) VALUES ('$n' , '$l' , '$m' , '$e' , '$p' , '$a','$image', $role)";
$result=mysqli_query($conn,$sql);
    header("Location:signin.php");
 ?>
