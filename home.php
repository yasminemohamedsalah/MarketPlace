<!DOCTYPE html>
<html>
<title> NYMMA</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.products{
  border: 5px solid white;
  width: 350px;
  height: 470px;
  float: left;
  background-color: lightgrey;
  margin-left:  70px;
  margin-top: 20px;
  color: none;
  border: none;

}

.button {
  background-color: transparent;
  border: none;
  color: black;
  }

button:hover {
  background-color: grey;
}

body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
/* slide show        */

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 80%;
  position: relative;
  margin: auto;
  text-align:center;
    }


/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
.container {
  position: relative;
  text-align: left;
  color: white;
  margin-top: 190px;

}
.centered {
  position: absolute;
  top: 50%;
  left: 300px;
  transform: translate(-50%, -50%);
}
.container2 {
  position: relative;
  text-align: right;
  color: white;
  margin-top: -360px;

}
.centered2 {
  position: absolute;
  top: 90%;
  right: : 333px;
  transform: translate(160%, 160%);
  /* margin-left: 70px; */

}
/* logooooo*/
.fa {
  padding: 20px;
  font-size: 25px;
  width: 55px;
  text-align: center;
  text-decoration: none;
  margin: 10px 5px;

}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}



.p1 {
  font-family: "fantasy", Times, serif;
}


@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

</style>

<body>
<?php
session_start();
include_once 'menu.php';
?>

<!-- Sidebar (hidden by default) -->
<div class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="" onclick="w3_close()" class="w3-bar-item w3-button">Food</a>
  <a href="" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
</div>

<!--<div class ="sale">
  <img src="4.jpg" alt="AirPods" style="width:100%">
  </div> --> <!--
  <div class="products">
    <h2 style="text-align: center">Categories:</h2>
  <h3> <button  class="button">Mobile</button></h3><br>
    <h3><button  class="button">Laptops</button></h3><br>
   <h3>  <button class="button">Televisions</button></h3><br>
    <h3> <button class="button">Smart Watches</button></h3><br>
    <h3> <button class="button">AirPods</button></h3><br>

</div> -->
   <!-- slide show-->


<div class="slideshow-container">
  <div class="curve">
<div class="mySlides fade">
  <img src="slide3.png" width="1200" height="400" >
</div>

<div class="mySlides fade" >
  <img src="slidee6.png" width="1200" height="400">
</div>

<div class="mySlides fade">
  <img src="slide4.jpg" width="1200" height="400">
</div>

</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>


<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
     <button class="button"> <img src="Airpods.jpeg" alt="AirPods" style="width:100%">
      <h3>Apple AirPods Pro with Wireless Charging Case</h3>
      <p>  3,699.00 ‎EGP </p> </button>
    </div>


    <div class="w3-quarter">
      <button class="button"><img src="SamsungWatchp.jpg" alt="Watch" style="width:70%">
      <h3>Samsung Galaxy Watch Active2 - Fitness LTE</h3>
      <p> 4,999.00 EGP </p></button>
    </div>
    <div class="w3-quarter">
     <button class="button"> <img src="Macbook1.jpg" alt="MacBook" style="width:100%">
      <h3>Apple MacBook pro M1 Max (2021)</h3>
      <p>  28,900.00 EGP </p> </button>

    </div>
     <div class="w3-quarter">
      <button class="button"><img src="galaxy-s21.png" alt="Mobile" style="width:100%">
      <h3>Samsung Galaxy S21 8GB RAM 128GB</h3>
      <p> 7,199.00 EGP</p></button>
    </div>

  </div>

  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <button class="button"><img src="SamsungTV.jpg" alt="Popsicle" style="width:100%">
      <h3>Samsung 55 Inch 4K Crystal UHD Smart LED TV</h3>
      <p>7,899.00 EGP</p></button>
    </div>
    <div class="w3-quarter">
      <button class="button"><img src="iphone-13.png" alt="Mobile" style="width:100%">
      <h3>Apple iPhone 13 , 5G , 128GB , 4GB Ram , Blue - tejerra</h3>
      <p>18,333.00 EGP</p></button>
    </div>
    <div class="w3-quarter">
     <button class="button"> <img src="blackAirpods.jpg" alt="Airpods" style="width:100%">
      <h3>Samsung Galaxy Buds Live Mystic Black</h3>
      <p>3,745.00 EGP</p></button>
    </div>
    <div class="w3-quarter">
     <button class="button"> <img src="applewatch.jpg" alt="Watch" style="width:100%">
      <h3>Apple Watch Series 3 GPS, Black Aluminum Case</h3>
      <p> 7,199.00 EGP</p></button>
    </div>
  </div>


<!-- !image! -->
<div class="container">

  <a href= "products.php"><img src="mobiles.jpg" alt="Snow" style="width:47%;"></a>
  <div class="centered"><h1 class="p1"><b>20% off our mobiles collection</b></h1></div>

</div>

<div class="container2">

  <a href= "products.php"><img src="watches.jpg" alt="Snow1" style="width:46%;"></a>
  <div class="centered2"><h1 class="p1"><b>10% off on smart watches</b></h1></div><br>
</div>




  <hr id="about">

  <!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center">
    <h3 style="color:orange"> <b>More about NYMMA</b></h3>
    <div class="w3-padding-32">
      <h5><i>Let Your Electronics Do The Walking.</i></h5>
      <p>Nymma is an easy platform to use when you’re online shopping for any type of electronics you’re looking for. Even if you’re just browsing, we assure you that you will find something you like in our catalog. Our electronics store provides you with over one million products and variations to choose from! Nymma Egypt is one of the biggest online shopping sites because we always try to expand our catalog to provide any possible products our customer could be searching to buy online!</p>
    </div>
  </div>
  <hr>

  <!-- Footer -->
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>NYMMA International</h3>
      <p><mark>Kenya</mark>
      <mark>Germany</mark>
      <mark>France</mark></p>
      <p><mark>Italy</mark>
      <mark>Nigeria</mark>
      <mark>Greece</mark></p>
      <p><mark>Tunisia</mark>
        <mark>Turkey</mark>
      </p>
    </div>

    <div class="w3-third">
      <h3>Let Us Help You</h3>
      <p><i>Returns & Replacement</i></p>
      <p><i>Message our administrators</i></p>
      <p><i>Manage Your Content and Devices</i></p>
    </div>

    <div class="w3-third w3-serif">
      <h3>FOLLOW</h3>

       <a href="#" class="fa fa-facebook"></a>
       <a href="#" class="fa fa-twitter"></a>
       <a href="#" class="fa fa-youtube"></a>
       <a href="#" class="fa fa-instagram"></a>
      </p>
    </div>
  </footer>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
//slide show
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>
