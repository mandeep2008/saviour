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
			<li class="nav-item active">
				<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Donate</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">My Donation</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Logout</a>
			</li>
			</ul>
		</div>
	</nav>
		
	<div class="con container card ">		
			<form>
				<?php
					include 'dbconn.php';

					$conn = dbConnect();
					session_start();
					$userid = $_SESSION['userId'];
					$query = "SELECT FNAME,LNAME,EMAIL,ADDRESS FROM USERS WHERE USER_ID = $userid";

					$result = mysqli_query($conn,$query);
					$arr = $result->fetch_array();
					echo " <div class='form-group'>
								<label for='Name'>Name</label>
								<input type='text' disabled class='form-control' id='Name' value='$arr[FNAME] $arr[LNAME]'  placeholder='Enter Your Name'>
							</div>
							<div class='form-group'>
								<label for='age'>Your Age</label>
								<input type='number' min='12' class='form-control' id='age' placeholder='Enter Your Age'>
							</div> 
							<div class='form-group'>
								<label for='mobile'>Mobile Number</label>
								<input type='tel' class='form-control' id='mobile' placeholder='Enter Your mobile number'>
							</div>
							<div class='form-group'>
								<label for='email'>Email</label>
								<input type='email' class='form-control' id='email' disabled value = '$arr[EMAIL]'  placeholder='Enter Your email address'>
							</div>
							<div class='form-group'>
								<label for='address'>Mobile Number</label>
								<input type='text' class='form-control' id='address' value='$arr[ADDRESS]' placeholder='Enter Your Address'>
							</div>";
							echo "<div class='form-group'>
								<label>Gender</label>
								<div class='form-check form-check-inline'>
									<input class='form-check-input' type='radio' name='inlineRadioOptions' id='inlineRadio1' value='option1'>
									<label class='form-check-label' for='inlineRadio1'>Male</label>
								</div>
								<div class='form-check form-check-inline'>
									<input class='form-check-input' type='radio' name='inlineRadioOptions' id='inlineRadio2' value='option2'>
									<label class='form-check-label' for='inlineRadio2'>Female</label>
								</div>
								<div class='form-check form-check-inline'>
									<input class='form-check-input' type='radio' name='inlineRadioOptions' id='inlineRadio2' value='option2'>
									<label class='form-check-label' for='inlineRadio2'>Decline to tell</label>
								</div>
							</div>";
							echo "<div class='form-group'>
								<select class='form-select'>
									<option selected>Select Ngo</option>";
									$ngo_query = "SELECT ngoname from ngo ORDER BY ngoname";
									$ngo_result = mysqli_query($conn,$ngo_query);

									foreach($ngo_result as $ngo){
										echo"<option>$ngo[ngoname]</option>";
									}
							echo"	</select>
							</div>";
							
							?>
							
								
							<div class='form-group'>
								<label for='med_name'>Medicine Name</label>
								<input type='text' class='form-control' id='med_name' placeholder='Enter Medicine Name'>
							</div>
							<div class='form-group'>
								<label for='brand'>Brand Name</label>
								<input type='text' class='form-control' id='brand' placeholder='Enter brand of medicine'>
							</div>
							<div class='form-group'>
								<label for='mfg'>Manufacturing Date</label>
								<input type='date' class='form-control' id='mfg' placeholder='Enter Manufactering date'>
							</div>
							<div class='form-group'>
								<label for='exp'>Expiry Date</label>
								<input type='date' class='form-control' id='exp' placeholder='Enter Expiry date'>
							</div>
				<button type="submit" class="btn btn-default">Submit</button>
				</form>
		</div>
	</body>
</html>
