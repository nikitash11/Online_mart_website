<?php
	include 'header_login.php';
?>

<style>
  div#ex1 {
      height: 520px;
      overflow: scroll;
    }
</style>

<body>

<div class="grid-container">
	<div class="left-container">
		<h3>Manage Items</h3>
		<ul>
			<li><a href="trader_add.php"><h4>Add Items</h4></a></li>
			<li><a href="trader_delete.php"><h4>Delete Items</h4></a></li>
			<li><a href="trader_stock.php"><h4>Stock Availability</h4></a></li>
    </ul>
	</div>
	
	<div class="right-container" id="ex1">
		
        <h3>STOCK AVAILABILITY</h3>
           <div class="table-responsive">
           <table class="table table-bordered" style="text-align: center;">
            <tr>
              <th width="20%">Thumbnail</th>
             <th width="30%">Product Name</th>
             <th width="50%">Stock Available</th>
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
                                </tr>';
                              }
                              ?>
                        </table>
                      

	</div><!--end right-container-->
</div><!--end grid container-->


</body>


</html>