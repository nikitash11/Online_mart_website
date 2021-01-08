<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

<style>

  html{
    background-image: url("images/Orange.jpg");
  }
  
  * {box-sizing: border-box;}
/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 100%;
}

/* Add padding to container elements */
.container {
  padding: 25px;
  width: 50%;
  height: auto;
  margin: 0 auto;
  border: 2px solid #fff;
  box-shadow: 0 15px 40px rgba(0,0,0,.5);
}
/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 50%;
}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}

</style>

	<form action="server.php" method="POST">

    <div class="container">
        <div class="imgcontainer">
    <a href="index.php"><img src="finallogo.png" alt="Avatar" class="avatar"></a> 
  </div>
      <hr>
      <div style="width: 48%; float: left;">
      <label><b>First Name</b></label>
      <input type="text" placeholder="Enter Firstname" name="firstname"  required>
    </div>

      <div style="width: 48%; float: right;">
      <label><b>Last Name</b></label>
      <input type="text" placeholder="Enter Lastname" name="lastname" required>
    </div>

      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" style="width: 100%;
    padding: 15px; margin: 5px 0 22px 0; display: inline-block; border: none; background: #f1f1f1;" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label><b>Confirm Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-confirm" required>

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>Already have an account? Go to<a href="login.php" style="color:dodgerblue"> Login</a> page.</p>

      <div class="clearfix">
        <a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
        <button type="submit" name="reg_user" class="signup" onclick="sweet();">Sign Up</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>