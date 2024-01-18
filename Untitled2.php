<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/form.css">
  <style>
body {
	font-family: Arial;
	color: #333;
	font-size: 0.95em;
	background-image:url(./images/Doctors_For_Men-732x549-thumbnail.webp);
background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>
<body>
 
	
  <form method="post" action="Untitled2.php">
  <div class="login-form-container">
  <div class="form-head">Register</div>
                <?php
                if (isset($_SESSION["error"])) {
                    ?>
                <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
                <?php
                    unset($_SESSION["error"]);
                }
                ?>
  <div class="header">
  </div>
  <div class="field-column">
  	  <label>Username</label>
  	  <input type="text" name="username"class="demo-input-box"   placeholder="Username" value="<?php echo $username; ?>">
  	</div>
	  <div class="field-column">
	  <label> First Name</label> <input type="text" class="demo-input-box"
	  placeholder="firstName"       name="firstName">
  	</div>
	  <div class="field-column">
	  <label>Last Name</label> <input type="text" class="demo-input-box"  
	  placeholder="lastName"          name="lastName">
  	</div>
  	<div class="field-column">
  	  <label>Email</label>
  	  <input type="email" name="email"class="demo-input-box" placeholder="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="field-column">
  	  <label>Password</label>
  	  <input type="password"class="demo-input-box" name="password_1" placeholder="password" >
  	</div>
	
  	<div class="field-column">
  	  <label>Confirm password</label>
  	  <input type="password"class="demo-input-box" name="password_2" placeholder="Confirm password"  >
  	</div>
	  <div class="field-column">
	  <input type="radio" name="gender" value="Male"
                    class="gender-radio"> Male<input type="radio"
                    name="gender" value="Female" class="radio-align gender-radio"> Female
  	</div>
	  <div class="field-column">
	  age </br> <input type="number" name="date" value="age" placeholder="age"
	  class="demo-input-box">
  	</div>
  	<div class="field-column">
  	  <button type="submit" class="btnLogin" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="http://localhost/xampp/help/login1.php"  >Sign in</a>
  	</p>
  </div>
  </form>
</body>
</html>