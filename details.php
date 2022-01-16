<?php
session_start();
include "menu.php";

?>
<style>
body{
  overflow-x:hidden;
}
.button{
    background-color: #008CBA;
    border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.bold{

  font-weight:bold;
}
  .summary .counter button {
    all: unset;
  }

  .summary .add-to-card {
    all: unset;
    background-color:blue;
    color: #fff;
    padding: 7px 35px;
    font-size: 13px;
    border-radius: 40px;
    width:110px;
  }
  .rate{
    position:relative;
    left:150px;
    bottom:30px;
  }
  .name{
    position:relative;
    left:0px;
    color:blue;
  }
  .price{
    color:blue;
    font-size:50px;
  }
  .arrow{
    color:blue;
  }
  .stars{
    color:blue;
  }
  .name{
    color:blue;
    text-align:left;
  }
</style>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

$conn = mysqli_connect($servername, $username, $password, $dbname);


$sql="SELECT * from products WHERE ID='".$_GET['X']."'";
$result = mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($result))
{
  $ID=$row[0];
  $Name=$row[1];
  $Description=$row[2];
  $Price=$row[3];
  $Image=$row[5];
  $brand=$row[6];
}

?>
  <div class="summary py-100">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <img src=<?php echo ($Image); ?> width=300px>
          <span><h2 class="name"><?php echo($Name);?> </h2></span>
        <div class="col-md-7">
          <span class="price"><h5><?php echo($Price);?> EGP</h5></span>
          </div>
          <br>
          </select><br>

            <div class="d-flex">
                      <div class="counter border d-inline-block">
                        <button type="button" class="px-3 py-2 border-right" onClick="dec();">-</button>
                        <input type="text"class="counter"size="1" name="quantity" id="counter" readonly value=1></input>
                        <button type="button" class="px-3 py-2 border-left" onClick="inc();">+</button>
                      </div>
          </div><br>
            <span>
            <!-- <button type="submit" class="button">Add to cart</button> -->
            <a href='cart.php?X="$ID"'><input type="submit" class="add-to-card font-weight-bold text-uppercase" value="Add to cart" class="home-addtocart" name="addtocart" id="addtocart"></input></a></span><br>
            </form>
            <span class="title"><h5>Rate this product</h5> </span>
            <form action="" method="post">
              <input type="radio" id="star5" name="rate" value=5>
              <label for="star5" title="text">5 Stars</label>
              <input type="radio" id="star4" name="rate" value=4>
              <label for="star4" title="text">4 Stars</label>
              <input type="radio" id="star3" name="rate" value=3>
              <label for="star3" title="text">3 Stars</label>
              <input type="radio" id="star2" name="rate" value=2>
              <label for="star2" title="text">2 Stars</label>
              <input type="radio" id="star1" name="rate" value=1>
              <label for="star1" title="text">1 Star</label>

          <h5>Review this product</h5>
          <input type="text" id="review" name="review"></input><br><br>

            <input type="submit" class="add-to-card font-weight-bold text-uppercase" name="submit" id="submit" value="Submit Review"><br>
            </form>
            <?php

            if(isset($_POST["submit"]))
            {
              $Rating=$_POST["rate"];
              $sql = "Insert into ratings(ID,Email,Rating,Review) values('$ID','".$_SESSION["email"]."',$Rating,'".$_POST["review"]."')";
              $result=mysqli_query($conn,$sql);

            }
            ?>


 <script>
function inc(){
var counter=document.getElementById("counter").value;
counter++;
document.getElementById("counter").value=counter;

}
function dec(){
  var counter=document.getElementById("counter").value;
  if(counter>1){
counter--;
  }
document.getElementById("counter").value=counter;
}
   </script>

  <?php
  if(isset($_POST["addtocart"])){

$quantity=$_POST['quantity'];

    array_push($_SESSION['cart'],array("Product"=>$Name,"Price"=>$Price,"Quantity"=>$quantity,"ID"=>$ID));
    header('Location: cart.php');
  }
  ?>

<span class="title"><h5>Ratings & Reviews</h5></span>
<?php
$sql="SELECT * from ratings WHERE ID='$ID'";
$result = mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($result)){
  ?>

<?php echo"<h6>By:</h6> <h6 class='bold'>$row[1]</h6>";?>
 <span class="title"><h6><?php echo"$row[3]";?> </h6></span>

 <?php

}
?>


</div>
</div>
</div>


</div>
<?php
if(!empty($_SESSION['email'])){
 $sql= "SELECT * FROM ratings where Email='".$_SESSION["email"]."' AND ID='$ID'";
 $result=mysqli_query($conn,$sql);
 $num_rows = mysqli_num_rows($result);
if($num_rows >= 1){

 $checker=1;

 }

}
else $checker=2;

?>
<script>

(function() {


  var check=document.getElementsByName("rate");
  var checker = "<?php echo $checker; ?>";

  if(checker==1){
    document.getElementById("submit").disabled = true;
    document.getElementById("review").disabled=true;
  for (var i = 0; i < check.length; i++) {
                check[i].disabled = true;
              }
  }
  if(checker==2){
    for (var i = 0; i < check.length; i++) {
                check[i].disabled = true;
              }
    document.getElementById("submit").disabled = true;
    document.getElementById("addtocart").disabled = true;
    document.getElementById("review").disabled=true;
  }
})();
</script>
