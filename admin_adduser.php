<?php
	include 'header.php';
?>

<?PHP
$conn = oci_connect('TEAMUNITED', 'United@123', 'localhost/XE');


    
      if (isset($_POST['adduser'])) {

         $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
         $success = '';

         $stmt = oci_parse($conn, "INSERT INTO USER_TABLE (FIRSTNAME, LASTNAME, EMAIL, PASSWORD, USERNAME) VALUES ('$firstname', '$lastname', '$email','$password','$username')");
        oci_execute($stmt);
        $success = 'Item has been added successfully.';
        echo $success;
       } 

           
  ?>

<style>
  html{
    background-image: url(images/bgpng.png);
  }
  div#ex1 {
      height: 520px;
      overflow: scroll;
      background-image: url(images/bg.jpg);
    }
</style>

<body>

<div class="grid-container">
	<div class="left-container">
		<h3>Manage Items</h3>
		<ul>
      <li><a href="admin_index.php"><h4>Trader Lists</h4></a></li>
      <li><a href="admin_addtrader.php"><h4>Add Trader</h4></a></li>
      <li><a href="admin_user.php"><h4>User Lists</h4></a></li>

      <li><a href="admin_adduser.php"><h4>Add User</h4></a></li>
		</ul>
	</div>
	
	<div class="right-container" id="ex1">

		<form method="POST" action="admin_adduser.php">

    <div class="tradecontainer" style="height: auto; font-size: 16px; margin:auto; width: 80%; 
  border: 2px solid #fff; box-shadow: 0 15px 40px rgba(0,0,0,.5); padding: 50px;">
      <h1 style="border-bottom: 1px solid gray; padding-bottom: 10px;"><center>ADD USER</center></h1>
      

      <hr>
      <label><b>FIRSTNAME:</b></label>
      <input type="text" name="firstname" required style="width: 100%;"><br><br>

      <label><b>LASTNAME:</b></label>
      <input type="text" name="lastname" required style="width: 100%;"><br><br>

      <label><b>EMAIL:</b></label>
      <input type="text" name="email" required style="width: 100%;"><br><br>

      <label><b>USERNAME:</b></label>
      <input type="text" name="username" required style="width: 100%;"><br><br>

      <label><b>PASSWORD:</b></label>
      <input type="password" name="password" required style="width: 100%;"><br><br>

        <input name="adduser" type="submit" value="Add user" class="btn btn-success" style="font-size: 16px; width: 100%; margin:auto; text-align: center;">

     
    </div>
  </form>
	</div><!--end right-container-->
</div><!--end grid container-->


</body>


</html>