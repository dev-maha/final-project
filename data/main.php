<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/x-icon" href="img/favicon.ico">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <title>Welcome to Jolly :) </title>
</head>

<body>
  <section id="header">
    <a href="#"><img src="img/logo.png" class="logo" alt="" width="100" height="50"></a>
    <div>
      <ul id="navbar">
        <li><a class="active" href="index.html">Home</a></li>
        <li><a href="shop.html">Shop</a></li>
        <li><a href="aboutus.html">About Us</a></li>
        <li><a href="contactus.html">Contact Us</a></li>
        <li><a href="karta.html">Location</a></li>
        <li><a href="http://localhost/final-project/data/login.php"><img src="img/login.png" class="cartimg" alt="" width="37px"></a></li>
        <li><a href="cart.html"><img src="img/cart.png" class="cartimg" alt="" width="37px"></a></li>
      </ul>
    </div>
  </section>
  <div class="content">
    <div><img src="img/banner-1.jpg" alt="" width="100%" height="600px"></div>
  </div>
  <div id="f">
    <h2>NEW BOXES</h2>
    <p>Bestsellers of the month</p>
  </div>
  <hr>
  <section id="product1" class="section-p1">
    <div class="pro-container">
      <div class="pro" onclick="window.location.href='onsproduct.html';">
        <img src="img/box1.jpg" alt="">
        <div class="des">
          <span>Yves Rocher</span>
          <h5>Box of little things</h5>
          <h4>15$</h4>

        </div>
      </div>

      <div class="pro" onclick="window.location.href='onsproduct1.html';">
        <img src="img/box2.jpg" alt="">
        <div class="des">
          <span>Yves Rocher</span>
          <h5>Box of little things</h5>
          <h4>25$</h4>
        </div>
      </div>
      <div class="pro" onclick="window.location.href='onsproduct2.html';">
        <img src="img/box3.jpg" alt="">
        <div class="des">
          <span>Yves Rocher</span>
          <h5>Box of little things</h5>
          <h4>25$</h4>
        </div>
      </div>
      <div class="pro">
        <img src="img/box4.jpg" alt="">
        <div class="des">
          <span>Yves Rocher</span>
          <h5>Box of little things</h5>
          <h4>25$</h4>
        </div>
      </div>
      <div class="pro">
        <img src="img/box5.jpg" alt="">
        <div class="des">
          <span>Yves Rocher</span>
          <h5>Box of little things</h5>
          <h4>25$</h4>
        </div>
      </div>
      <div class="pro">
        <img src="img/box6.jpg" alt="">
        <div class="des">
          <span>Yves Rocher</span>
          <h5>Box of little things</h5>
          <h4>25$</h4>
        </div>
      </div>
      <div class="pro">
        <img src="img/box7.jpg" alt="">
        <div class="des">
          <span>Yves Rocher</span>
          <h5>Box of little things</h5>
          <h4>25$</h4>
        </div>
      </div>
      <div class="pro">
        <img src="img/box8.jpg" alt="">
        <div class="des">
          <span>Yves Rocher</span>
          <h5>Box of little things</h5>
          <h4>25$</h4>
        </div>
      </div>
    </div>
  </section>
  <div class="content-banner">
    <div><img src="img/add1.jpg" alt="" width="100%" height="300px"></div>
  </div>
  <footer class="section-p1">
    <div class="col">
      <img class="logo1" src="img/logo.png" alt="" width="100" height="50">
      <h4>Contact</h4>
      <p><strong>Address: </strong>Abylay-Hana, 1/1, Qaskelen</p>
      <p><strong>Phone: </strong>+7 777 7777</p>
      <p><strong>Hours: </strong>9:00 - 17:00, Mon - Sat</p>
      <div class="follow">
        <h4>Follow us</h4>
        <img src="img/ff.png" alt="" width="200" height="50">
      </div>
    </div>
    <div class="col">
      <h4>About</h4>
      <a href="#">About us</a>
      <a href="#">Delivery Information</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Terms & Conditions</a>
      <a href="#">Contact Us</a>
    </div>
    <div class="col">
      <h4>My Account</h4>
      <a href="#">Sign In</a>
      <a href="#">View cart</a>
      <a href="#">My Wishlist</a>
      <a href="#">Track My Order</a>
      <a href="#">Help</a>
    </div>
    <div class="col install">
      <h4>Install App</h4>
      <p>From App Store or Google Play</p>
      <div class="row">
        <img src="img/app.jpg" alt="">
        <img src="img/play.jpg" alt="">
      </div>
      <p>Secured Payment Gateways</p>
      <img src="img/pay.png" alt="">
    </div>
  </footer>
  <script src='script.js'></script>
  <script type="text/javascript">
    $(document).ready(function () {
      $(document).snowfall({ image: "img/snow4.png", minSize: 10, maxSize: 20 });
    });
  </script>
</body>

</html>
