<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  
  <link rel="stylesheet" type="text/css" href="data.css">
</head>
<body>
  <div class="header">
  	<h2>Registeration</h2>
  </div>
	
  <form method="post" action="register.php">
  <?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
      <div class="input-group">
        <label>Age</label>
  <input type="number" name="age">
                    </div>
                    <div>
                    <input type="radio" name="gender" value="Male">
                    <label for="gender">Male</label><br>
                    <input type="radio"  name="gender" value="Female">
                    <label for="gender">Female</label>
</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Sign Up</button>
  	</div>
  	<p>
  		Already have an account? <a href="login.php">Log In</a>
  	</p>
  </form>
</body>
</html>