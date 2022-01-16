<?php
session_start();
include "menu.php";

?>
<head>
<style>
body{
       overflow-x:hidden;
}

h5{
       color:blue;
       font-size:15x;

}
h5.sub{
color:black;

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
.size{
       width:300px;
       height:300px;
}
.drop{
       height:29px;
       width:100px;
}
.filter{
       width:100px;
       height:29px;
       background-color:transparent;
       border-radius:5px;
}
.filters{
       width:100px;
       height:29px;
       font-weight:bold;
       background-color:transparent;
       border-radius:5px;
}
.filter:hover{
       background-color:grey;
}

.stars{
    color:blue;
  }
</style>
</head>
<div class="container">
       <div class="row">
              <div class="col-lg-4">
              <div class="dropdown">
<form action="" method="post">
<select class="drop"name="brand" id="brand">
<option hidden disabled selected value> Brand </option>

<?php

       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "project1";
              
       // Create connection
       $conn = mysqli_connect($servername,$username,$password,$dbname);
      


       $sql2="SELECT * from products";
       $i=0;
       $result2 = mysqli_query($conn,$sql2);	
       while($row2=mysqli_fetch_array($result2))	
       {
       $brands[$i]=$row2[6];
       $i++;

       }
       $brands2=array_unique($brands);
?>

       <?php 
           foreach($brands2 as $result) {
          
              ?>
              <option value=<?php echo $result?>><?php echo $result?></option>
              <?php  
           }
       ?>
</select>
       <input class="filter"type="submit" name="submit" value ="Filter" id="submit">
</form>
</div>
              </div>
       </div>
</div>


  <div class="featured py-100">
     <div class="container">
            <div class="row">
<?php
       if(isset($_POST["submit"])&& (!empty($_POST['brand']) ||!empty($_POST['color']))){
     if(empty($_POST['brand'])&& !empty($_POST['color'])){
$sql="SELECT * from products where Color='".$_POST['color']."'";
     }
     else  if(!empty($_POST['brand'])&& empty($_POST['color'])){
       $sql="SELECT * from products where Brand='".$_POST['brand']."'";
     }
     else if(!empty($_POST["brand"])&& !empty($_POST["color"])){
       $sql="SELECT * from products where Brand='".$_POST['brand']."' AND Color='".$_POST['color']."' ";
     }
       }
       
    else $sql="SELECT * from products";
       $result = mysqli_query($conn,$sql);	
  
	while($row=mysqli_fetch_array($result))	
	{
           
              $ID=$row[0];
              $Name=$row[1];
              $Description=$row[2];
              $Price=$row[3];
              $Quantity=$row[4];
              $Image=$row[5];
?>
 
       <div class=col-md-3>  
              <div class="image position-relative mb-3">
                     <img src=<?php echo ($Image); ?> class="img-thumbnail size">
                     <div class="inner d-flex justify-content-center align-items-center flex-column"> <br>
                            <form method="post" action="details.php?X=<?php echo $row[0];?>">
                            <span><button class="filters"type="submit">Details</button></span>
                     </div>
              </div>
              <span class="font-weight-bolder product-home-name"><h5>Product title</h5> <h5 class="sub"><?php echo ($Name);?></span></h5>
              <span class="font-weight-bolder d-block product-home-price details"><h5>Price</h5> <h5 class="sub"><?php echo ($Price);?> EGP</span></h5>
              <span class="font-weight-bolder d-block product-home-price details"><h5>Current rating</h5></span>
              </div>
           
           </form> 
<?php 
             }
             ?>
                         

                     </div>
              </div>
       </div>
    
