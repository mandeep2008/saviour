<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Bootstrap Simple Login Form with Blue Background</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
	
		
    .form-control{
		height: 41px;
		background: #D3D3D3;
		box-shadow: none !important;
		border: none;
	}
	.form-control:focus{
		background: grey;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 390px;
		margin: 30px auto;
		/* background-color:rgba(139, 141, 145, 0.747); */
		border-radius:10px;
		box-shadow:2px 2px 15px;
	}
	.signup-form form{
		color: rgb(17, 4, 4);
		border-radius: 3px;
    	margin-bottom: 15px;
        /* background: rgba(162, 162, 165, 0.897);; */
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
		background:black;F;
		border: none;
		min-width: 140px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus{
		background: #D3D3D3 !important;
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
		/* color:#D3D3D3; */
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	}
    .signup-form .hint-text {
		padding-bottom: 15px;
		text-align: center;
    }
</style>
</head>
<body>
<div class="signup-form">
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
	<div class="hint-text">New User? <a href="index.php">Signup here</a></div>
</div>

<?php
	
?>

</body>
</html>