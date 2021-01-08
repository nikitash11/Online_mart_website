<?php
	include 'header.php';
?>
<?PHP
$conn = oci_connect('TEAMUNITED', 'United@123', 'localhost/XE');
  
    if (isset($_POST['remove'])) {
      $key = $_POST['keytodelete'];
      $success='';

        $querydelete = oci_parse($conn, "DELETE FROM PRODUCT_TABLE WHERE PRODUCTID = '$key'");
        oci_execute($querydelete);
        $success='<div style="border=:1px solid green; color:green;">Item removed.<div>';
        echo $success;
        header('location:trader_delete.php');
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
      <li><a href="trader_index.php"><h4>Item Lists</h4></a></li>
			<li><a href="trader_add.php"><h4>Add Items</h4></a></li>
      <li><a href="trader_delete.php"><h4>Delete Items</h4></a></li>
      <li><a href="trader_stock.php"><h4>Stock Availability</h4></a></li>
		</ul>
	</div>
	
	<div class="right-container" id="ex1">
		
        <h3>DELETE ITEMS</h3>
           <div class="table-responsive">
            <form method="post">
           <table class="table table-bordered" style="text-align: center;">
            <tr>
              <th width="20%">Thumbnail</th>
             <th width="20%">Product Name</th>
             <th width="5%">Stock Available</th>
             <th width="15%">Price</th>
             <th width="15%">Description</th>
             <th width="15%">Allergy Information</th>
             <th width="10%">Delete</th>
            </tr>

            <?PHP
                      $conn = oci_connect('TEAMUNITED', 'United@123', 'localhost/XE');
                        $qry= "Select * from PRODUCT_TABLE";
                        $stid= oci_parse($conn, $qry);
                        oci_execute($stid);
                        while($row=oci_fetch_assoc($stid))
                          {
                           echo '<tr>
                                  <td><img src="'.$row['IMAGE'].'" style="height:150px; width:180px;"></td>
                                 <td>'.$row["PRODUCT_NAME"].'</td>
                                 <td>'.$row["STOCK"].'</td>
                                 <td> Rs. '.$row["PRICE"].'</td>
                                 <td>'.$row["DESCRIPTION"].'</td>
                                 <td>'.$row["ALLERY_INFORMATION"].'</td>
                                 <td><input type="checkbox" name="keytodelete" value="'.$row['PRODUCTID'].'"/>
                                 <input class="remove-btn" value="Remove" type="submit" name="remove"/></td>
                                </tr>';
                              }
                              ?>
                        </table></form>
                      

	</div><!--end right-container-->
</div><!--end grid container-->


</body>


</html>