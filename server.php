<?PHP
$conn = oci_connect('TEAMUNITED', 'United@123', 'localhost/XE');


session_start();

if (isset($_POST['reg_user'])) {

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password1 = $_POST['psw'];
$password2 = $_POST['psw-confirm'];

 if ($password1 != $password2) {
  echo "The two passwords do not match!";
  exit();
  }

 if(strlen(trim($password1)) < 5) {
   echo"Password must be more than 5characters";
   exit();
   }

  else {
    $password = md5($password1);//encrypt the password before saving in the database

 $stmt = oci_parse($conn, "insert into USER_TABLE (firstname, lastname, email, password, username)
              values('$firstname', '$lastname', '$email', '$password', '$username')");
    oci_execute($stmt);

$user = $_POST['username'];
$s = oci_parse($conn, "select * from USER_TABLE where username='$user'");
			            oci_execute($s);
			            $row = oci_fetch_all($s, $res);
			            if($row){
			                    $_SESSION['$user']=$user;

    $message = "Successfully registered.";

			$to = $email;
			$subject = "Account registered successfully!";
			$mssg = "Hello! Welcome to our Cleckhuddersfax Online shopping mart.Thankyou for signing up. You can now start shopping.";
			$from = "From: cleckhuddersfaxonlinemart@gmail.com";

			mail($to,$subject,$mssg,$from);
			header('location: customer.php?message='.$message);}
	}
}

$msg = '';
if (isset($_POST['add_to_cart'])) {

	if (isset($_COOKIE['shopping_cart'])) {
		$cookie_data = stripcslashes($_COOKIE['shopping_cart']);

		$cart_data = json_decode($cookie_data, true);

	}
	else{
		$cart_data = array();
	}

	$item_id_list = array_column($cart_data, 'item_id');

	if (in_array($_POST['hidden_id'], $item_id_list)) {
		foreach ($cart_data as $keys => $values) {
			if ($cart_data[$keys]['item_id'] == $_POST['hidden_id']) {
				$cart_data[$keys]['item_quantity'] = $cart_data[$keys]['quantity'];
			}
		}
	}

	else{
			$item_array = array(
			'item_id' => $_POST['hidden_id'],
			'item_name' => $_POST['hidden_name'], 
			'item_price' => $_POST['hidden_price'],
	   		'item_quantity'  => $_POST["quantity"]
   			);
   			$cart_data[] = $item_array;
	}

	
	$item_data = json_encode($cart_data);
	setcookie('shopping_cart', $item_data, time() + (86400 * 30));
	header('location:shop.php?success=1');

}

if (isset($_GET['action'])) {
	if ($_GET['action'] == 'delete') {
		$cookie_data = stripcslashes($_COOKIE['shopping_cart']);
		$cart_data = json_decode($cookie_data, true);
		foreach ($cart_data as $keys => $values) {
			if ($cart_data[$keys]['item_id'] == $_GET['id']) {
				unset($cart_data[$keys]);
				$item_data = json_decode($cart_data);
				setcookie('shopping_cart', $item_data, time() + (86400 * 30));
				header('location:shopping_cart.php?remove=1'); 
			}
		}
	}
	if ($_GET['action'] == 'clear') {
		setcookie('shopping_cart', '', time() - 3600);
		header('location:shopping_cart.php?clearall=1');
	}
}

if (isset($_GET['success'])) {
	$msg = '
		<div class="alert alert-success alert-dismissible">
		  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		  Item added to the cart.
		 </div>';
}

if (isset($_GET['remove'])) {
	$msg = '
		<div class="alert alert success alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		Item removed from the cart.
		</div>';
}

	if (isset($_GET['clearall'])) {
		$msg = '
	<div class="alert alert-success alert-dismissible">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	Your Shopping Cart has been cleared.</div>';
}	

if(isset($_POST['login'])){
			    $user=$_POST['un'];
			    $password=$_POST['pw'];

			    $password=md5($password);

			           $s = oci_parse($conn, "select * from USER_TABLE where username='$user' and password='$password'");
			            oci_execute($s);
			            $row = oci_fetch_all($s, $res);
			            if($row){
			                    $_SESSION['$user']=$user;
			                    $_SESSION['time_start_login'] = time();
			                    header("location: customer.php");
			            }else{

			                echo "wrong password or username";
			            }
			}


	?>