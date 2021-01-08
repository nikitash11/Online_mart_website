<?php include 'header.php';
		include 'server.php'
?>

<style>
  body{
    background-image: url(images/Orange.jpg);
  }
	.shop_container{
		margin: 20px auto 20px auto;
		width: 75%; padding: 10px;
		border: 2px solid gray;
    background-color: white;
    opacity: 0.8;
    overflow: scroll;
    height: 500px;
    box-shadow: 0 15px 40px rgba(0,0,0,.5);
	}
	.shop_container > h3{
		border-bottom: 2px solid gray;
		padding-bottom: 20px;
		margin: 30px 30px 30px 30px;
	}
	.table-responsive{
		margin: 20px;
		width: auto;
	}
	table tr{
		height: 75px;
	}
  #bts{
    width:20%;
    margin-left:100px;
  }

</style>

		<div class="shop_container">
		<h3>Your Shopping Cart</h3>
       <div class="table-responsive">
       <?php echo $msg?>
       <div align="right">
        <a href="shopping_cart.php?action=clear"><b>Clear Cart</b></a>
       </div>
       <table class="table table-bordered">
        <tr>
         <th width="40%">Item Name</th>
         <th width="10%">Quantity</th>
         <th width="20%">Price</th>
         <th width="15%">Total</th>
         <th width="5%">Action</th>
        </tr>

        <?php 
        if (isset($_COOKIE['shopping_cart'])) {
            $total = 0;
            $cokkie_data = stripslashes($_COOKIE['shopping_cart']);
            $cart_data = json_decode($cokkie_data, true);

            foreach ($cart_data as $keys => $values) {
        ?>

              <tr>
                 <td><?php echo $values["item_name"]; ?></td>
                 <td><?php echo $values["item_quantity"]; ?></td>
                 <td>$ <?php echo $values["item_price"]; ?></td>
                 <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
                 <td><a href="shopping_cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                </tr>
            
               <?php 
                 $total = $total + ($values["item_quantity"] * $values["item_price"]);
                }
               ?>
                <tr>
                 <td colspan="3" align="right">Total</td>
                 <td align="right">$ <?php echo number_format($total, 2); ?></td>
                 <td></td>
                </tr></table>


              <?php
            }
        
        else{
           echo '
                  <tr>
                   <td colspan="5" align="center">No Item in Cart</td>
                  </tr></div>
                  ';
        }
        ?>
        <div> 
          <div id="bts" style="float: left;"><a href="shop.php"> <input type="button" value="Continue Shopping"/></a> </div>

        <div id="bts" style="float: right;"><a href="shop.php"> <input type="button" value="Proceed to checkout"/></a> </div></div>