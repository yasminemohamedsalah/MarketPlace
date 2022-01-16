<?php
session_start();
include "menu.php";
?>
<head>
<style>
table,th,td,tr{
  border:1px solid black;
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
h3{
  text-align:center

}

h5{
       color:red;
       font-size:15x;

}
.details{
       font-size:20px;
}
.actions{
       color:red;
       
}
.button{
  position: relative;
  bottom: 35px;
  font-size: 1.25em;
  font-weight: 700;
  color: rgb(121, 117, 117);
  background-color: white;
  display: inline-block;
  cursor: pointer;
  border: 1px solid white;
  top:10px;
}

.button:focus,
.button:hover{
  background-color: rgb(121, 117, 117);
}
</style>
</head>

<body>
<div class="container">
  <div class="row"> 
    <div class="col-lg">
  <table id="mytable">
    <tr>
      <th>Name</th>
      <th>Description</th>
      <th>Price</th> 
      <th>Quantity</th>
      <th>Brand</th>
      <th>Image</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>

</body>               


   
<?php
  
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "project1";
              
       // Create connection
       $conn = mysqli_connect($servername,$username,$password,$dbname);
       $sql="SELECT * from products";
       $result = mysqli_query($conn,$sql);	
  
	while($row=mysqli_fetch_array($result))	
	{
              $ID=$row[0];
              $Name=$row[1];
              $Description=$row[2];
              $Price=$row[3];
              $Quantity=$row[4];
              $Image=$row[5];
              $Brand=$row[6];
              echo"<tr>";
              echo" <td>$Name</td>";
              echo" <td>$Description</td>";
              echo" <td>$Price</td>";
              echo" <td>$Quantity</td>";
              echo" <td>$Brand</td>";
              
              ?>
             <td> <img src="<?php echo $Image;?>" width=50px> </td>
              
             <td><span><a class="actions"href = "editproduct.php?X=<?php echo $row[0]; ?>">Edit</a></span></td>            
              <td><span><a class="actions"href = "deleteproduct.php?X=<?php echo $row[0]; ?>">Delete</a></span></td>
          
             <?php 
              echo"</tr>";
            
            }
            echo"</table>";
          
            ?>
           
          </form>
          <script>
</script>
</div>
</div>   
</div> 