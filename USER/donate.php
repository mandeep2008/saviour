<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel = 'stylesheet' href='./donate-style.css'/>
			<title>Donate Medicine</title>
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">$aviour</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="../Home/home.php">Home </a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="#">Donate <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="my-donation.php">My Donation</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Logout</a>
			</li>
			</ul>
		</div>
	</nav>
	<div class='wrapper'>
		<blockquote class="blockquote heading">
	  		<h6 class='display-4'>Donate Medicines</h6>
		</blockquote>

	
		<div class="con container card ">		
				<form action='donationhelp.php' metho='POST'>
					<?php
						include 'dbconn.php';

						$conn = dbConnect();
						session_start();
						$userid = $_SESSION['userId'];
						$query = "SELECT FNAME,LNAME,EMAIL,ADDRESS FROM USERS WHERE USER_ID = $userid";

						$result = mysqli_query($conn,$query);
						$arr = $result->fetch_array();
						echo " <div class='form-group'>
									<label for='fname'>Name</label>
									<input type='text' required disabled class='form-control' id='fname' name='fname' value='$arr[FNAME] $arr[LNAME]'  placeholder='Enter Your Name'>
								</div>
								<div class='form-group'>
									<label for='age'>Your Age</label>
									<input type='number' required min='12' class='form-control' id='age' name='age' placeholder='Enter Your Age'>
								</div> 
								<div class='form-group'>
									<label for='mobile'>Mobile Number</label>
									<input type='tel' required class='form-control' id='mobile' name='mobile' placeholder='Enter Your mobile number'>
								</div>
								<div class='form-group'>
									<label for='email'>Email</label>
									<input type='email' required class='form-control' id='email' disabled name='email' value = '$arr[EMAIL]'  placeholder='Enter Your email address'>
								</div>
								<div class='form-group'>
									<label for='address'>Mobile Number</label>
									<input type='text' required class='form-control' id='address' name='address' value='$arr[ADDRESS]' placeholder='Enter Your Address'>
								</div>";
								echo "<div class='form-group'>
									<label>Gender</label>
									<div class='form-check form-check-inline'>
										<input class='form-check-input' type='radio' name='gender' id='inlineRadio1' value='male'>
										<label class='form-check-label' for='inlineRadio1'>Male</label>
									</div>
									<div class='form-check form-check-inline'>
										<input class='form-check-input' type='radio' name='gender' id='inlineRadio2' value='female'>
										<label class='form-check-label' for='inlineRadio2'>Female</label>
									</div>
									<div class='form-check form-check-inline'>
										<input class='form-check-input' type='radio' name='gender' id='inlineRadio2' value='Decline to tell'>
										<label class='form-check-label' for='inlineRadio2'>Decline to tell</label>
									</div>
								</div>";
								echo "<div class='form-group'>
									<select class='form-select' name='ngo' required>
										<option selected>Select Ngo</option>";
										$ngo_query = "SELECT ngoname,ngoId from ngo ORDER BY ngoname";
										$ngo_result = mysqli_query($conn,$ngo_query);

										foreach($ngo_result as $ngo){
											echo"<option value='$ngo[ngoId]'>$ngo[ngoname]</option>";
										}
								echo"	</select>
								</div>";
								
								?>
								
									
								<div class='form-group'>
									<label for='med_name'>Medicine Name</label>
									<input type='text' class='form-control' id='med_name' name='Mname' required placeholder='Enter Medicine Name'>
								</div>
								<div class='form-group'>
									<label for='brand'>Brand Name</label>
									<input type='text' class='form-control' name='Bname' id='brand' required placeholder='Enter brand of medicine'>
								</div>
								<div class='form-group'>
									<label for='mfg'>Manufacturing Date</label>
									<input type='date' class='form-control' id='mfg' name='Mfd' required placeholder='Enter Manufactering date'>
								</div>
								<div class='form-group'>
									<label for='exp'>Expiry Date</label>
									<input type='date' class='form-control' id='exp' name='exp' required placeholder='Enter Expiry date'>
								</div>
					<button type="submit" class="btn btn-default">Submit</button>
					</form>
			</div>
		</div>
	
	
	</body>
</html>
