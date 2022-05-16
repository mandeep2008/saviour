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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">$aviour</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
			<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="../Home/home.php">HOME </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../Home/about-us.php">NGO ABOUT US </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../Admin/admin-log.php">ADMIN</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">USER</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="#">NGO<span class="sr-only">(current)</span></a>
			</li>
			</ul>
		</div>
	</nav>
	<div class='d-flex justify-content-between'>
		
		<div class='image'></div>
        <div class='login'>
			<div class='wrapper'>
				<h1 class='text-right'>Welcome Back</h1>
				<p class = 'lead text-right'>Please enter your credentials</p>
				<form action="ngo-login.php" method="POST">
                  <div class="form-group">
                     <label>Username</label>
                     <input type="text" name='username' required class="form-control" placeholder="Enter Username">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" required name='password' placeholder="Enter Password">
                  </div>
					<button type="submit" class="btn button">Login</button>
               </form>
			   <p class="text-left new-user">New User?<a href='user-signup.php'>SignUp Here</a></p>
			</div>
		</div>
	</div>
    <!-- <div class="container-fluid">
        <div class="row  align-items-center ">
            <div class="col-md-4 m-auto pt-4 loginborder">
                <h3 class="content">NGO Login</h3>
                <form action="ngo-login.php" method="POST" auto_complete="off">
                    <div class="detailes">
                        <input type="text" name="username" class="input-box" placeholder=" Enter Username">
                        <span><?php if(isset($username_error)) echo $username_error; ?></span>
                    </div>
                    <div class="detailes">
                        <input type="password" name="password" class="input-box" placeholder=" Enter Password">
                        <span><?php if(isset($password_error)) echo $password_error; ?></span>
                    </div>
                    <button class="btn" >Login</button>
                   <p class="forget"> <a href="forgot_pswd.html">Forgot Password? </a></p>
                                      
                    <p class="account">
                    Have not an account?
                    <a href="ngo-signup.php">Register Here</a><br><br>
                    </p>
                    
                </form>
            </div>
        </div>
       
        </div>
    </div> -->
</body>
</html>