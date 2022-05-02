<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
if(empty($_POST['username']))
{
    $username_error = "Please enter the username";
}
if(empty($_POST['password']))
{
    $password_error = "Please enter the password";
}
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="ngolog.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row  align-items-center ">
            <div class="col-md-4 m-auto pt-4 loginborder">
                <h3 class="content">NGO Login</h3>
                <form action="" method="POST" auto_complete="off">
                    <div class="detailes">
                        <input type="text" name="username" class="input-box" placeholder=" Enter Username">
                        <span><?php if(isset($username_error)) echo $username_error; ?></span>
                    </div>
                    <div class="detailes">
                        <input type="password" name="password" class="input-box" placeholder=" Enter Password">
                        <span><?php if(isset($password_error)) echo $password_error; ?></span>
                    </div>
                    <button class="btn" ><a href="ngo-home.php">Login</a></button>
                   <p class="forget"> <a href="forgot_pswd.html">Forgot Password? </a></p>
                                      
                    <p class="account">
                    Have not an account?
                    <a href="ngo-signup.php">Register Here</a><br><br>
                    </p>
                    
                </form>
            </div>
        </div>
       
        </div>
    </div>
</body>
</html>