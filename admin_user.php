<?php
	include 'header_login.php';
?>
<?PHP
$conn = oci_connect('TEAMUNITED', 'United@123', 'localhost/XE');
  
    if (isset($_POST['remove'])) {
      $key = $_POST['keytodelete'];
      $success='';

        $querydelete = oci_parse($conn, "DELETE FROM USER_TABLE WHERE USERID = '$key'");
        oci_execute($querydelete);
        $success='<div style="border=:1px solid green; color:green;">Trader removed.<div>';
        echo $success;
        header('location:admin_user.php');
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
		
        <h3>ADMIN DASHBOARD</h3>
           <div class="table-responsive">
            <form method="post">
           <table class="table table-bordered" style="text-align: center;">
            <tr>
              <th width="10%">User id</th>
             <th width="20%">Firstname</th>
             <th width="20%">Lastname</th>
             <th width="20%">Email</th>
             <th width="15%">Username</th>
             <th width="15%">Action</th>
            </tr>

            <?PHP
                      $conn = oci_connect('TEAMUNITED', 'United@123', 'localhost/XE');
                        $qry= "Select * from USER_TABLE";
                        $stid= oci_parse($conn, $qry);
                        oci_execute($stid);
                        while($row=oci_fetch_assoc($stid))
                          {
                           echo '<tr>
                                  <td>'.$row["USERID"].'</td>
                                 <td>'.$row["FIRSTNAME"].'</td>
                                 <td>'.$row["LASTNAME"].'</td>
                                 <td>'.$row["EMAIL"].'</td>
                                 <td>'.$row["USERNAME"].'</td>
                                 <td><input type="checkbox" name="keytodelete" value="'.$row['USERID'].'"/>
                                 <input class="remove-btn" value="Remove" type="submit" name="remove"/></td>
                                 </tr>';
                              }
                              ?>
                        </table></form>
                      

	</div><!--end right-container-->
</div><!--end grid container-->


</body>


</html>