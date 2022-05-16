<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Bootstrap Simple Login Form with Blue Background</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="user-login.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
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
				<a class="nav-link" href="../Home/about-us.php">ABOUT US <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../Admin/admin-log.php">ADMIN</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="#">USER</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">NGO</a>
			</li>
			</ul>
		</div>
	</nav>
	<div class='d-flex justify-content-between'>
		<div class='login'>
			<div class='wrapper'>
				<h1 class='text-right'>Welcome Back</h1>
				<p class = 'lead text-right'>Please enter your credentials</p>
				<form action="loginhelp.php" method="post">
                  <div class="form-group">
                     <label>Email</label>
                     <input type="email" name='email' required class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" required name='password' placeholder="Password">
                  </div>
					<button type="submit" class="btn button">Login</button>
               </form>
			   <p class="text-left new-user">New User?<a href='user-signup.php'>SignUp Here</a></p>
			</div>
		</div>
		<div class='image'></div>
	</div>
	<!-- <div class="sidenav">
         <div class="login-main-text">
            <h2>Login!!</h2>
            <p>Please enter your credentiaks</p>
         </div>
      </div>
      <div class="card container con wrapper">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form action="loginhelp.php" method="post">
                  <div class="form-group">
                     <label>Email</label>
                     <input type="email" name='email' required class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" required name='password' placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-black mr-10">Login</button>
                  <a href='user-signup.php'><button type='button' disabled class="btn btn-secondary">Register</button></a>
               </form>
            </div>
         </div>
      </div> -->
<!-- <div class="signup-form">
    <form action="loginhelp.php" method="post">
		<h2>Login</h2>
		<p>Please enter Credentials!</p>
		<hr>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Login</button>
        </div>
    </form>
	<div class="hint-text">New User? <a href="user-signup.php">Signup here</a></div>
</div> -->

<?php
	
?>

</body>
</html>