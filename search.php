<?php
session_start();
include "menu.php";
include "ErrorHandling.php";
?>

<style>
	body{
  overflow-x: hidden;
}
table,th,td,tr{
  border:1px solid black;
  position:relative;
}
th,td{
  padding: 15px;
  text-align: left;
}
th{
  background-color: grey;
  color: white;
}
table{
  width: 100%;
  position:relative;
  
}
</style>


<body>
<div class="container">
  <div class="row"> 
    <div class="col-lg">
  <table id="mytable">
    <tr>
      <th>Name</th>
      <th>Description</th>
      <th>Price</th>
      <th>Image</th>
      <th>Brand</th>
    </tr>
</body>


<?php
if(isset($_POST['searchbar']))
{
$key=$_POST["searchbar"];  //key=pattern to be searched
$conn=mysqli_connect('localhost','root','','project1') or die('Error');

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
       $sql="select * from products where Name LIKE '%$key%'";
       $result = mysqli_query($conn,$sql);	
   
while($row=mysqli_fetch_array($result))
{
// Print your search variables 
     

echo" <tr>";
    echo" <td>$row[Name]</td>";
    echo" <td>$row[Description]</td>";  
    echo" <td>$row[Price]</td>";  
    echo "<td> <img src='$row[Image]' width=50px> </td>";
    echo" <td>$row[Brand]</td>";  
    echo"</tr>";

}
  echo "</table>";

//  else {
//   echo "0 results";
// }

}
}


?>