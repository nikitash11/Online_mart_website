<?php 
$conn = oci_connect('TEAMUNITED', 'United@123', 'localhost/XE');

	if(isset($_POST['login'])){
			    $user=$_POST['username'];
			    $password=$_POST['password'];
			           $s = oci_parse($conn, "select * from TRADER_TABLE where TRADER_USERNAME='$user' and TRADER_PASSWORD='$password'");
			            oci_execute($s);
			            $row = oci_fetch_all($s, $res);
			            if($row){
			                    $_SESSION['user']=$user;
			                    $_SESSION['time_start_login'] = time();
			                    header("location: trader_index.php");
			            }else{

			                echo "wrong password or username";
			            }
			}
?>
<style>
body
{
	margin: 0;
	padding: 0;
	background: url(back.jpg);
	background-size: cover;
	font-family: Times New Roman;
}

.container
{
	width: 50%;
	height: 600px;
	margin: 40px auto;
	border: 2px solid #fff;
	box-shadow: 0px 15px 40px black;
	opacity: 0.8;
	background-color: white;
}
.container .left
{
	float: left;
	width: 50%;
	height: 300px;
	box-sizing: border-box;
}
.container .right
{
	float: right;
	width: 50%;
	height: 200px;
	box-sizing: border-box;
}

.title
{
	text-align: center;
	padding: 0px 0 20px;
}

.formBox{
	width: 100%;
	padding: 20px 40px;
	box-sizing: border-box;
	height: 320px;
	background: #fff;
	font-size: 20px;
}
.formBox p {
	margin: 0;
	padding: 0;
	font-family: Times New Roman;
	font-weight: bold;
	color:#a6af13;

}
.formBox input{
	margin-bottom: 20px;
}
.formBox input[type="text"],
.formBox input [type="Password"]
{
	border: none;
	border-bottom: 2px solid #a6af13;
	outline: none;
	height: 40px;
}
.formBox input[type="text"]:focus,
.formBox input [type="Password"]:focus
{
	border-bottom: 2px solid #a6af13;
}
.formBox input [type="submit"]
{
	border: none;
	outline: none;
	height: 40px;
	color: #fff;
	background: #262626;
	cursor: pointer;
}
.formBox input [type="submit"]:hover
{
	background: #a6af13;
}
.formBox a{
	color: #262626
	font-size:12px;
	font-family: Times New Roman;
	font-weight: bold;
}

.left img
{
	width: 100%;
	height: 320px;

}
.btn{
	display: inline-block;
	border: 1px solid transparent;
	padding: 6px 12px;
	border-radius: 4px;
	background-color: #5cb85c;
	color: #fff;
}

.btn-cancel{
	display: inline-block;
	border: 1px solid transparent;
	padding: 6px 12px;
	border-radius: 4px;
	color: white;
	background-color: #f44336;
}
</style>



<body>
	<div class="container">
		<div class="title">
			<a href="index.php"><img src="finallogo.png" alt="some text" width="300px" height="120px"></a>
			<h1>Trader Login</h1>
		</div>
		<div class="left">
			<img src="log.jpeg">
		</div>
		<div class="right">
			<div class="formBox">
				<form method="POST"> 
					<p>Email</p>
					<input type="text" name="username" placeholder="username" style="width: 100%; height: 30px;"><br>
					<p>Password</p>
					<input type="Password" name="password" placeholder="*******" style="width: 100%; height: 30px;"><br>
					
					<a href="#"><input class="btn" type="submit" name="login" value="Login" style="width: 100%; height: 30px;"></a>
					<a href="#"><input class="btn-cancel" type="submit" name="" value="Cancel" style="width: 100%; height: 30px;"></a>
				</form>
			</div>
		</div>
	</div>
</body>
