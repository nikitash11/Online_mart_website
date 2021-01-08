
<?php
	include 'header.php';
?>
<style>
	.overlay
	{
		margin-bottom: 20px;
	}

	.overlay img
	{
		height: 500px;
		width: 100%;
	}
	.centered 
	{
		position: absolute;
  		padding-left: 20px;
  		padding-right: 20px;
  		background: rgb(0, 0, 0); /* Fallback color */
  		background: rgba(0, 0, 0, 0.6); /* Black background with 0.6 opacity */
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		font-size: 150px;
		color: #fa6a0a;
		font-family: Times New Roman;
	}
</style>

<body>
	<div class="grid-container">
		<div class="overlay">
			<img src="images/fishmonger.jpg">
			<div class="centered">Fishmonger</div>
		</div>
		
		<div class="container">
      
      <div class="row"><!--Row starts here-->

        <?php

		// Connects to the XE service (i.e. database) on the "localhost" machine
		$conn = oci_connect('TEAMUNITED', 'United@123', 'localhost/XE');

		$pr = oci_parse($conn, 'SELECT * FROM PRODUCT_TABLE');
		oci_execute($pr);

		while ($row = oci_fetch_array($pr, OCI_ASSOC+OCI_RETURN_NULLS)) {

			echo '<div class="col-xs-18 col-sm-6 col-md-3">
			          <div class="thumbnail">
			            <img src="'.$row['IMAGE'].'" alt="">
			              <div class="caption">
			                <h4>'.$row['PRODUCT_NAME'].'</h4>
			                <p>'.$row['DESCRIPTION'].'</p>
			                <h3>Rs.'.$row['PRICE'].'</h3>
		                      <a href="login.php"><input type="submit" name="add_to_cart" class="btn btn-success" value="Add to Cart"></a>
		                      <input type="submit" name="view_detals" class="btn btn-success" value="View Details">
			            </div>
			          </div>
			        </div>';

    	}
		?>
        
      </div><!-- End row -->
		      
    </div><!-- End container -->
			</div>
		</div>
	</div>
</body>