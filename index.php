<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create An Account</title>
	<link rel="stylesheet" href="css/registerstyle.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="bg-img">
        <div class="content">
		<header>Create A New Account</header>	
<form action="login.php" class="form" method="POST">
                
	<div class="">
	<?php
		
		if (isset($success) && $success == true){
			echo '<p color="green">Yay!! Your account has been created. <a href="./login.php">Click here</a> to login!<p>';
		}
		
		else if (isset($error_msg))
			echo '<p color="red">'.$error_msg.'</p>';
		
	?>
	</div>

	<div class="field space">
	<span class="fa fa-user"></span>
		<input type="text" name="username" value="" placeholder="Enter Username" autocomplete="off" required />
	</div>
	<div class="field space">
	<span class="fa fa-envelope"></span>
		<input type="text" name="email" value="" placeholder="Enter E-mail" autocomplete="off" required />
	</div>
	<div class="field space">
	<span class="fa fa-lock"></span>
		<input type="password" name="passwd" value="" placeholder="Enter Password" autocomplete="off" required />
	</div>
				
	<div class="field space">
	<span class="fa fa-lock"></span>
		<input type="password" name="confirm_password" value="" placeholder="Confirm Password" autocomplete="off" required />
	</div>
	
	<div class="field space">
		<input class="" type="submit" name="registerBtn" value="Create Account" />
	</div>

	
	<div class="login">
		Already have an account? <a href="login.php">Login Here</a>
	</div>
</form>
</body>
</html>