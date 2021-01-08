<?php include 'header.php';
      include 'server.php';
?>

	<style>
		div#ex1 {
      height: 520px;
      overflow: scroll;
    }
      .pagination-container{
        margin: auto;
      }
    .pagination 
    {
    display: inline-block;
     left: 0;
     bottom: 0;
     width: 100%;
     color: white;
     text-align: center;
  }

  .pagination a {
    color: black;
    padding: 8px 16px;
    text-decoration: none;
    border: 1px solid #fa6a0a;
  }

  .pagination a.active {
    background-color: #fa6a0a;
    color: white;
    border: 1px solid #fa6a0a;
  }

  .pagination a:hover:not(.active) {background-color: #ddd;}

  .pagination a:first-child {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
  }

  .pagination a:last-child {
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
  }
	</style>
<body>
	<div class="grid-container">
		<div class="left-container">

	  	<h4>RECOMMENDED</h4>
	  	<ul>
	  		<li><a href="">Fishmonger (20% off)</a></li>
	  		<li><a href="">Butcher</a></li>
	  		<li><a href="">Greengrocer</a></li>
	  	</ul>

	  	<h4>BROWSE CATEGORIES</h4>
	  	<ul>
	  		<li><a href="">Fishmonger</a></li>
	  		<li><a href="">Butcher</a></li>
	  		<li><a href="">Greengrocer</a></li>
	  		<li><a href="">Bakery</a></li>
	  		<li><a href="">delicatessen</a></li>
	  		<li><a href="">delicatessen</a></li>
	  		<li><a href="">delicatessen</a></li>
	  	</ul>

	  	<h4>BROWSE BY TRADERS</h4>
	  	<ul>
	  		<li><a href="">Fishmonger</a></li>
	  		<li><a href="">Butcher</a></li>
	  		<li><a href="">Greengrocer</a></li>
	  		<li><a href="">Bakery</a></li>
	  		<li><a href="">delicatessen</a></li>
	  	</ul>

	</div>

	
	<div class="right-container"  id="ex1">

      <?php

    $pr = oci_parse($conn, 'SELECT * FROM PRODUCT_TABLE');
    oci_execute($pr);

    while ($row = oci_fetch_array($pr, OCI_ASSOC+OCI_RETURN_NULLS)) {

      echo ' <form method="POST">
              <div class="col-md-4">
                <div class="thumbnail">
                  <img src="'.$row['IMAGE'].'" alt="" style="height:190px; width:285px;">
                    <div class="caption">
                      <h4>'.$row['PRODUCT_NAME'].'</h4>
                      <p>'.$row['DESCRIPTION'].'</p>
                      <h3>Rs.'.$row['PRICE'].'</h3>
                      <p>Select Quantity:<input type="text" name="quantity" value="1" class="form-control"/></p>
                      <input type="hidden" name="hidden_id" value="'.$row['PRODUCTID'].'">
                      <input type="hidden" name="hidden_name" value="'.$row['PRODUCT_NAME'].'">
                      <input type="hidden" name="hidden_price" value="'.$row['PRICE'].'">
                      <input type="submit" name="add_to_cart" class="btn btn-success" style="margin-left:10px;" value="Add to Cart">
                      <input type="submit" name="view_detals" class="btn btn-success" style="margin-left:10px;"  value="View Details">
                  </div>
                </div>
              </div></form>';

      }
    ?>
			</div></div>

</body>
<?php include 'footer.php' ?>