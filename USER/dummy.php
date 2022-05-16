<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel = 'stylesheet' href='./donate-style.css'/>
		<title>Rgister NGO</title>
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
                    <div>
                    <label for='ngo-name' class='txt'>*NGO Name:</label>
                    <input type='text' name='ngo-name' placeholder='Enter the name of ngo'>
                  
					</div>
						<div class='form-group'>
                        <label for='contact' class='txt'>*Contact No:</label>
                        <input type='number' name='contact' placeholder='Enter ngo contact'>
							</div> 
							<div class='form-group'>
                            <label for='year' class='txt'>*Year of Establishment:</label>
                            <input type='text' name='year' placeholder='Enter Year'>
							</div>
							<div class='form-group'>
                            <label for='Authoritative' class='txt'>*Name of the Authoritative Member:</label>
                            <input type='text' name='Authoritative' placeholder='Enter Name'>
							</div>
							<div class='form-group'>
                            <label for='address' class='txt'>*Address:</label>
                            <textarea name='address' id="" cols='50' rows='5'></textarea>
							</div>";
							echo "<div class='form-group'>
                            <label for='registration_certificate' class='txt file'>*Add Registration Certificate of the NGO:</label>
                            <input type='file' class='Certificate' id='myFile' name='filename'>
							</div>";
                            echo "<div class='form-group'>
                            <label for='finance' class='txt file'>*Add Financial Statements of the NGO:</label>
                                <input type='file' class='financial' id='myFile' name='filename'>
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
								<label for="fname" class='txt'>*First Name:</label>
                                <input type="text" name="fname" placeholder="Enter your first name">
							</div>
							<div class='form-group'>
                            <label for='lname' class='txt'>*Last Name:</label>
                                <input type='text' name='lname' placeholder='Enter your last name'>
							</div>
							<div class='form-group'>
                            <label for='ph-number' class='txt'>*Contact No:</label>
                                    <input type='text' name='ph-number' placeholder='Enter your contact'>
							</div>
							<div class='form-group'>
                            <label for='mail' class='txt'>*Email:</label>
                                    <input type='text' name='mail' placeholder='Enter your email'>
							</div>
                            <div class='form-group'>
                            <label for="username"class="em">Username:</label>
                        <input type='text' id='username' name='username' placeholder='Enter username to Create an account'>
							</div>
                            <div class='form-group'>
                            <label for='pswd'class='txt'>Password:</label>
                         <input type='password' id='pswd' name='password' placeholder='Enter password'>
							</div>
                            <div class='form-group'>
                            <label for='confirm-password'class="txt">confirm password</label>
                        <input type='password' id='conpswd' name='confirm-password' placeholder='Re-enter password'>
							</div>
				<button type="submit" class="btn btn-default">Submit</button>
				</form>
		</div>
	</body>
</html>
