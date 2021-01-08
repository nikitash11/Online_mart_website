<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="index2.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<style type="text/css">
  #cart:hover{
    color: #fa6a0a;
  }
  #acc:hover{
    color:  #fa6a0a;
  }
</style>
<header>
<div class="container-fluid">
  <div class="row">
    <div class="col-3"><img src="finallogo.png" style="width: 82%; height: 100%; position: relative; float: right;"></div>
    <div class="col-7">
      <ul id="left-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="">Today's Deals</a></li>
        <li><a href="about.php">About Us</a></li>
      
      <ul id="right-nav">
        <li><a href="signup.php">Sign up</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
      </ul>

      <div class="search-container" style="color: black;">
      <form action="server.php" method="GET">
        <input type="text" placeholder="Find products , Categories......" name="search" style="padding-left: 15px;">
        <button type="submit" name="search-pr"><i class="fa fa-search"></i></button>
      </form>
    </div>


    </div>

    <div class="col-2">
      <div style="width: 10%; float: left; margin-top: 50px;">
         <a href="shopping_cart.php">
          <i class="glyphicon glyphicon-shopping-cart" id="cart" style="font-size:40px;"></i>
        </a>
      </div>

      <div style="width: 80%; float: right;">
        <a href=""><i class="material-icons" id="acc" style="font-size:70px; float: left; margin-left: 35px;">account_circle</i></a>
          <p style="text-align: center;font-weight: bold;text-transform: uppercase;float: right;"></p></div>
      </div>
        
  </div>
</div>
</header>   
<?php if(isset($_GET['message'])) echo "<script type='text/javascript'>swal(\"Registered Successfully!\", \"We're sending you a confirmation email.\", \"success\")</script>"; ?>
<?php $message ?>
