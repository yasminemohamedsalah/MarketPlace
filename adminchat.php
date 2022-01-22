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
background-color: white;
}

.button, .button2{
  position: relative;
  bottom: 35px;
  font-size: 1.25em;
  font-weight: 700;
  color: white;
  display: inline-block;
  cursor: pointer;
  border: 1px solid white;
  top:10px;
}
.button{
    background-color: red;
}
.button2{
    background-color: green;

}
.button:focus,
.button:hover,
.button2:focus,
.button2:hover{
  background-color: rgb(121, 117, 117);
}
body {
  background-image: url("electronic-devices-background-01-vector-28098779.jpg");
}
</style>

<body>
<div class="container">
  <div class="row">
    <div class="col-lg">
  <table id="mytable">
    <tr>
      <th>Name</th>
      <th>Image</th>
      <th>Profile</th>

    </tr>
</body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project1";
    // Create connection
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    $sql="SELECT * from data where role ='1'";
    $result = mysqli_query($conn,$sql);
?>
<form action="" method="post">
<?php
  while($row=mysqli_fetch_array($result))
  {
    echo" <tr>";
    echo" <td>$row[1] $row[2]</td>";

    ?>
   <td> <img src="<?php echo $row[7];?>" width=50px> </td>
   <td><span>	<a href="message.php?receiver=<?php echo $row[0];?>">Send message</a></span></td>



   <?php
    echo"</tr>";
  }
  echo"</table>";

  ?>

</form>

 </div>
</div>
</div>
