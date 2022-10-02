<?php require("login.class.php") ?>
<?php

if (isset($_POST['submit'])){
 $user = new LoginUser($_POST['username'],$_POST['password']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="bg-img">
        <div class="content">
            <header>Login</header>
            <form action="home.php"method="post" enctype="multipart/form-data" autocomplete= "off">
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" required placeholder="Username">
                </div>
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" class="password" required placeholder="Password">
    
                </div>
                
                <br>
                <div class="field">
        
                
                    <input type="submit" value="LOGIN">
                </div>
                <p class="error"><?php echo @$user->error?></p>
                <p class="success"><?php echo @$user->success?></p>

            </form>
        </div>
    
</body>
</html>