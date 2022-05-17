<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>User Sign Up</title>
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
				<h1 class='text-right'>Welcome</h1>
				<p class = 'lead text-right'>Please Fill the form</p>
				<form action="signuphelp.php" method="post">
					<div class="form-group">
						<div class='d-flex justify-content-between'>
							<div class='hf'>

								<input type="text" class="form-control" name="first_name" placeholder="First Name" required>
							</div>
							<div class='hf'>

								<input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
							</div>
						</div>
						<!-- <div class="row">
							<div class="col-xs-6 md-2"><input type="text" class="form-control" name="first_name" placeholder="First Name" required> </div>
							<div class="col-xs-6 md-3"> <input type="text" class="form-control" name="last_name" placeholder="Last Name" required></div>
						</div>        	 -->
					</div>
					<div class="form-group">
						<input type="mobile" class="form-control" name="mobile" placeholder="Mobile" required="required">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Email" required="required">
					</div>
					<div class="form-group">
						<input type="address" class="form-control" name="address" placeholder="Address" required="required">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
					</div>        
					<button type="submit" class="btn button">Register</button>
               </form>
			   <p class="text-left new-user">Already Registered?<a href='user-login.php'>Login</a></p>
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
<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title> Sign up page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
	
		
    .form-control{
		height: 41px;
		background: white;
		box-shadow: none !important;
		iport : java;
		i
		border: none;
	}
	.form-control:focus{
		background:white;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 390px;
		margin: 30px auto;
		border-radius:10px;
		box-shadow:2px 2px 15px;
		/* background-color:rgba(139, 141, 145, 0.747); */
	}
	.signup-form form{
		color: rgb(17, 4, 4);
		border-radius: 3px;
    	margin-bottom: 15px;
        /* background: rgba(162, 162, 165, 0.897); */
        box-shadow: 0px 2px 2px rgba(2, 39, 73, 0.685);
        padding: 30px;
    }
	.signup-form h2 {
		color: rgb(14, 1, 1);
		font-weight: bold;
        margin-top: 0;
    }
    .signup-form hr {
        margin: 0 -30px 20px;
    }    
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}
    .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;
		background: black;
		border: none;
		min-width: 140px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus{
		background: white !important;
        outline: none;
	}
    .signup-form a{
		/* color: #fff; */
		text-decoration: underline;
	}
	.signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		/* color:white; */
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	}
    .signup-form .hint-text {
		padding-bottom: 15px;
		text-align: center;
		/* color:blue; */
    }
</style>
</head>
<body>
<div class="signup-form">
    <form action="signuphelp.php" method="POST">
		<h2>Sign Up</h2>
		<p>Please fill in this form to create an account!</p>
		<hr>
        <div class="form-group">
			<div class="row">
				<div class="col-xs-6"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
				<div class="col-xs-6"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
			</div>        	
        </div>
		<div class="form-group">
        	<input type="mobile" class="form-control" name="mobile" placeholder="Mobile" required="required">
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
        	<input type="address" class="form-control" name="address" placeholder="Address" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
        </div>        
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
        </div>
    </form>
	<div class="hint-text">Already have an account? <a href="login.php">Login here</a></div>
</div>
</body>
</html> -->