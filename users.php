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
</style>

<body>
<div class="container">
  <div class="row">
    <div class="col-lg">
  <table id="mytable">
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Image</th>
      <th>Profile</th>
      <th>Select</th>
    </tr>
</body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project1";
    // Create connection
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    $sql="SELECT * from data";
    $result = mysqli_query($conn,$sql);
?>
<form action="" method="post">
<?php
  while($row=mysqli_fetch_array($result))
  {
    echo" <tr>";
    echo" <td>$row[1] $row[2]</td>";
    echo" <td>$row[4]</td>";

    ?>
   <td> <img src="<?php echo $row[7];?>" width=50px> </td>
   <td><span><a class="actions"href = "showprofile.php?X=<?php echo $row[0]; ?>">Profile</a></span></td>

<td><input type="checkbox" value="<?php echo $row['email']; ?>" name="check[ ]"></td>

   <?php
    echo"</tr>";
  }
  echo"</table>";

  ?>
  <input type="submit" class="submit button2 btn" name="addadmin" id="mybutton" value="Add to admins">
  <input type="submit" class="submit button btn" name="removeadmin" id="mybutton" value="Remove from admins">
  <input type="submit" class="submit button btn" name="delete" id="mybutton" value="Delete user">
</form>
  <?php
  if(isset($_POST["delete"])){
    $checkbox = $_POST['check'];

    for ($i=0; $i<count($checkbox);$i++) {
    $delete=$checkbox[$i];
    $sql="delete from data where email ='$delete'";
    $result=mysqli_query($conn,$sql);
    }
    }
    if(isset($_POST["addadmin"])){
        $checkbox = $_POST['check'];

        for ($i=0; $i<count($checkbox);$i++) {
        $admin=$checkbox[$i];
        $sql="update data set role = 1 where email ='$admin'";
        $result=mysqli_query($conn,$sql);
        }
        }
    if(isset($_POST["removeadmin"])){
        $checkbox = $_POST['check'];

        for ($i=0; $i<count($checkbox);$i++) {
        $admin2=$checkbox[$i];
        $sql="update data set role = 0 where email ='$admin2'";
        $result=mysqli_query($conn,$sql);
        }
        }

?>
 </div>
</div>
</div>
