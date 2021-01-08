<?php
  include 'header_login.php';
?>
<?PHP
$conn = oci_connect('TEAMUNITED', 'United@123', 'localhost/XE');


      if (isset($_POST['addtrader'])) {
         $trader_name = $_POST['name'];
         $trader_username = $_POST['username'];
         $trader_password = $_POST['password'];
         $success = '';

         $qry = oci_parse($conn, "INSERT INTO TRADER_TABLE (TRADER_NAME, TRADER_PASSWORD, TRADER_USERNAME) 
          VALUES ('$trader_name', '$trader_password', '$trader_username')");
         oci_execute($qry);
       } 

    
?>


<style>
  div#ex1 {
      height: 520px;
      overflow: scroll;
    }
     .remove-btn{
      background-color: #FF4C4C;
      border: 1px solid red;
      color: white;
      border-radius: 5px;
    }
    .remove-btn:hover{
      background-color: #FF6666;
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

      <li><a href="trader_stock.php"><h4>Stock Availability</h4></a></li>

    </ul>
  </div>
  
  <div class="right-container" id="ex1">
    <form method="POST" action="admin_addtrader.php">

    <div class="tradecontainer" style="height: auto; font-size: 16px; margin:auto; width: 80%; 
  border: 2px solid #fff; box-shadow: 0 15px 40px rgba(0,0,0,.5); padding: 50px;">
      <h1 style="border-bottom: 1px solid gray; padding-bottom: 10px;"><center>ADD TRADER</center></h1>
      

      <hr>
      <label for="pn"><b>Trader Name:</b></label>
      <input type="text" name="name" required style="width: 100%;"><br><br>

      <label for="Description"><b>Trader Username:</b></label><br>
      <textarea type="text"  name="username" required style="width: 100%;border: 1px solid gray; background-color: #f1f1f1;"></textarea><br><br>

      <label for="Description"><b>Password:</b></label>
      <input type="password"  name="password" required style="width: 100%; border: 1px solid gray; background-color: #f1f1f1;"><br><br>


        <input name="addtrader" type="submit" value="Add trader" class="btn btn-success" style="font-size: 16px; width: 100%; margin:auto; text-align: center;">

     
    </div>
  </form>
  </div><!--end right-container-->
</div><!--end grid container-->


</body>


</html>