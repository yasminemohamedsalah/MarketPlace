<?php 
session_start(); 
include "menu.php"; 
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
    $sql="SELECT * from data where role = 1";
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
  <input type="submit" class="submit button btn" name="addpenalty" id="mybutton" value="Add penalty">
  <input type="submit" class="submit button2 btn" name="removepenalty" id="mybutton" value="Remove penalty">
</form>
  <?php
    if(isset($_POST["addpenalty"])){
        $checkbox = $_POST['check'];  
         
        for ($i=0; $i<count($checkbox);$i++) { 
        $email=$checkbox[$i];
        $sql="insert into penalty (Email) values ('$email')";
        $result=mysqli_query($conn,$sql); 
        } 
        }
    if(isset($_POST["removepenalty"])){
        $checkbox = $_POST['check'];  
         
        for ($i=0; $i<count($checkbox);$i++) { 
        $email2=$checkbox[$i];
        $sql="delete from penalty where Email = '$email2'";
        $result=mysqli_query($conn,$sql); 
        } 
        }
        
?>
 </div>
</div>   
</div>     
