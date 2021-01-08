<?php
	include 'header.php';
?>
<?PHP
$conn = oci_connect('TEAMUNITED', 'United@123', 'localhost/XE');

      if(isset($_FILES['image'])){
            $errors= array();
            $file_name = $_FILES['image']['name'];
            $file_size =$_FILES['image']['size'];
            $file_tmp =$_FILES['image']['tmp_name'];
            $file_type=$_FILES['image']['type'];
           
            
            if($file_size > 2097152){
               $errors[]='File size must be excately 2 MB';
            }
            
            if(empty($errors)==true){
               move_uploaded_file($file_tmp,"images/".$file_name);
               echo "Success";
            }
          }



    
      if (isset($_POST['additem'])) {
         $item_name = $_POST['pn'];
         $item_des = $_POST['des'];
         $item_allergyinfo = $_POST['alr'];
         $item_price = $_POST['price'];
         $item_stock = $_POST['stock'];
         $success = '';

         $image = $_FILES['image']['name'];

         $stmt = oci_parse($conn, "INSERT INTO PRODUCT_TABLE (PRODUCT_NAME, DESCRIPTION, PRICE, STOCK, ALLERY_INFORMATION, IMAGE, TRADER )VALUES ('$item_name', '$item_des', '$item_price','$item_stock','$item_allergyinfo','images/$image','s')");
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
      <li><a href="trader_index.php"><h4>Item Lists</h4></a></li>
			<li><a href="trader_add.php"><h4>Add Items</h4></a></li>
      <li><a href="trader_delete.php"><h4>Delete Items</h4></a></li>
      <li><a href="trader_stock.php"><h4>Stock Availability</h4></a></li>
		</ul>
	</div>
	
	<div class="right-container" id="ex1">
		<form method="POST" enctype="multipart/form-data" action="trader_add.php">

    <div class="tradecontainer" style="height: auto; font-size: 16px; margin:auto; width: 80%; 
  border: 2px solid #fff; box-shadow: 0 15px 40px rgba(0,0,0,.5); padding: 50px;">
      <h1 style="border-bottom: 1px solid gray; padding-bottom: 10px;"><center>ADD ITEMS</center></h1>
      

      <hr>
      <label for="pn"><b>Product Name:</b></label>
      <input type="text" name="pn" required style="width: 100%;"><br><br>

      <label for="Description"><b>Description:</b></label><br>
      <textarea type="text"  name="des" required style="width: 100%; height: 100px; border: 1px solid gray; background-color: #f1f1f1;"></textarea><br><br>

      <label for="Description"><b>Allergy Information:</b></label>
      <textarea type="text"  name="alr" required style="width: 100%; height: 100px; border: 1px solid gray; background-color: #f1f1f1;"></textarea><br><br>

      <label for="price"><b>Price:</b></label><br>
      <input type="text"  name="price" required style="width: 100%;"><br><br>

       <label for="dis"><b>Stock:</b></label><br>
      <input type="text"  name="stock" required style="width: 100%;"><br><br>

       <label for="image"><b>Upload an image:</b></label>
      <input type="file" name="image"><br><br><br>

        <input name="additem" type="submit" value="Add item" class="btn btn-success" style="font-size: 16px; width: 100%; margin:auto; text-align: center;">

     
    </div>
  </form>
	</div><!--end right-container-->
</div><!--end grid container-->


</body>


</html>