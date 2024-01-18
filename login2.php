<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/form.css">
  <link rel="stylesheet" href="csss/w3.css">
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

<form method="post" action="login1.php">
<div class="login-form-container">
				<div class="form-head">Login</div>
                <?php
                if (isset($_SESSION["errorMessage"])) {
                    ?>
                <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
                <?php
                    unset($_SESSION["errorMessage"]);
                }
                ?>
                <div class="field-column">
					<div>
						<label for="username">Username</label><span id="user_info"
							class="error-info"></span>
					</div>
					<div>
						<input name="username" id="username" type="text"
							class="demo-input-box" placeholder="Enter Username ">
					</div>
				</div>
  	<div class="field-column">
  		<label>Password</label>
  		<input type="password" name="password" class="demo-input-box" placeholder="password">
  	</div>
			</br>

  	<div class="input-group">
  		<button type="submit" class="btnLogin" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="http://localhost/xampp/help/Untitled2.php">Sign up</a>
  	</p>
	  <p>
  	 <a href="http://localhost/xampp/help/index.html">back</a>
  	</p>
    </div>
  </form>
</body>
</html>