<!DOCTYPE html>
<html>
	<head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="ngo-signup-style.css">
        <title>NGO Registration</title>
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
        <div class='container con card'>
            <form method='POST' action='sign-db.php'>
                <h5>NGO Details</h5>
                <hr/>
                <div class='form-group'>
                    <div class='d-flex justify-content-between mt-10'>
                        <div class='hf'>
                            <label>NGO NAME</label>
                            <input type="text" class="form-control" name="ngo-name" placeholder="Enter NGO Name" required>
                        </div>
                        <div class='hf'>
                            <label>CONTACT NUMBER</label>
                            <input type="tel" class="form-control" name="contact" placeholder="Enter Contact Number" required>
                        </div>
                    </div>
                    <div class='d-flex justify-content-between'>
                        <div class='hf'>
                            <label>Year Of Establishment</label>
                            <input type="Number" min='1960' max='2022' class="form-control" name="yoe" placeholder="Enter year of Establishment" required>
                        </div>
                        <div class='hf'>
                            <label>Name Of Authorative Member</label>
                            <input type="tel" class="form-control" name="noam" placeholder="Enter Contact Number" required>
                        </div>
                    </div>
                    <div class='f'>
                        <label>Address</label>
                        <textarea name="address" class='form-control' id="" cols="50" rows="5"></textarea>
                    </div>
                </div>
                <h5>Representative Details</h5>
                <hr/>
                <div class='form-group'>
                    <div class='d-flex justify-content-between'>
                        <div class='hf'>
                            <label>First NAME</label>
                            <input type="text" class="form-control" name="fname" placeholder="Enter First Name" required>
                        </div>
                        <div class='hf'>
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="lname" placeholder="Enter Last Name" required>
                        </div>
                    </div>
                    <div class='d-flex justify-content-between'>
                        <div class='hf'>
                            <label>Contact Number</label>
                            <input type="tel" class="form-control" name="ph-number" placeholder="Enter Contact Number" required>
                        </div>
                        <div class='hf'>
                            <label>Email</label>
                            <input type="email" class="form-control" name="mail" placeholder="Enter email address" required>
                        </div>
                    </div>
                </div>
                <h5>Create Account</h5>
                <hr/>
                <div class='form-group'>
                    <div class='d-flex flex-column justify-content-between'>
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Enter User Name" required>
                        
                    </div>
                    <div class='d-flex justify-content-between'>
                        <div class='hf'>
                            <label>Password</label>
                            <input type="password"class="form-control" name="password" placeholder="Enter Password" required>
                        </div>
                        <div class='hf'>
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="confirm-password" placeholder="Re-Enter Password" required>
                        </div>
                    </div>
                </div>
                <button class='btn'>Register</button>
            </form>
        </div>
    </div>
	
	</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="ngo-signup-style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5 mb-5">

            <!-- form title  -->
            <!-- <div class="col-md-6 signup">
                     <h1>Register</h1>

                <form action="sign-db.php" method="POST"id="signup"> -->

                    <!-- form body -->
                <!-- <div class="row form-body">

                        <!-- first name last name -->
                      <!-- <div class="row horizontal-group" id="ngo-details">
                        <div class="col-md-12">
                            <h5>NGO Details</h5>
                          
                        </div> --> 
                            <!-- name of ngo and address -->
                            <!-- <div class="col-md-6 left">
                            <label for="ngo-name" class="txt">*NGO Name:</label>
                            <input type="text" name="ngo-name" placeholder="Enter the name of ngo">
                            </div>
                            <div class="col-md-6 right">
                            <label for="contact" class="txt">*Contact No:</label>
                            <input type="number" name="contact" placeholder="Enter ngo contact">
                            </div>
                            <div class="col-md-6 left">
                                <label for="year" class="txt">*Year of Establishment:</label>
                                <input type="text" name="year" placeholder="Enter Year">
                                </div>
                                <div class="col-md-6 right">
                                <label for="Authoritative" class="txt">*Name of the Authoritative Member:</label>
                                <input type="text" name="Authoritative" placeholder="Enter Name">
                                </div>
                              <div class="col-md-12">
                                  <label for="address" class="txt">*Address:</label>
                                  <textarea name="address" id="" cols="50" rows="5"></textarea>
                              </div>
                              
                              <div class="col=col-md-12 ">
                                <label for="registration_certificate" class="txt file">*Add Registration Certificate of the NGO:</label>
                                <input type="file" class="Certificate" id="myFile" name="filename">
                              </div>
                              <div class="col=col-md-12 ">
                                <label for="finance" class="txt file">*Add Financial Statements of the NGO:</label>
                                <input type="file" class="financial" id="myFile" name="filename">
                              </div> -->
                        
                              
                              
                        
                        <!-- </div>    
                        <div class="row horizontal-group">
                            <div class="col-md-12">
                                <h5>Representative Details:</h5>
                            </div>
                            <div class="col-md-6 left">
                                <label for="fname" class="txt">*First Name:</label>
                                <input type="text" name="fname" placeholder="Enter your first name">
                                </div>
                                <div class="col-md-6 right">
                                <label for="lname" class="txt">*Last Name:</label>
                                <input type="text" name="lname" placeholder="Enter your last name">
                                </div>
                                <div class="col-md-6 left">
                                    <label for="ph-number" class="txt">*Contact No:</label>
                                    <input type="text" name="ph-number" placeholder="Enter your contact">
                                    </div>
                                    <div class="col-md-6 right">
                                    <label for="mail" class="txt">*Email:</label>
                                    <input type="text" name="mail" placeholder="Enter your email">
                                    </div>
                                   

                        </div>
                         -->

                    <!-- password cnf password  -->
                 <!-- <div class="row horizontal-group account ">
                     <div class="col-md-12 "> 
                         <h5>Create Account</h5>
                     </div>
                    <div>
                        <label for="username"class="em">Username:</label>
                        <input type="text" id="username" name="username" placeholder="Enter username to Create an account">
                   </div>
                     <div class="col-md-6 left ">
                        <label for="pswd"class="txt">Password:</label>
                         <input type="password" id="pswd" name="password" placeholder="Enter password">
                     </div>
                     <div class="col-md-6 right">
                        <label for="confirm-password"class="txt">confirm password</label>
                        <input type="password" id="conpswd" name="confirm-password" placeholder="Re-enter password">    
                     </div>
                   
                     
                </div> -->
                <!-- button  -->
                <!-- <DIV class="row BTN ">
                         <input class="button" type="submit">
                </DIV>
                
            </form>
            </div>    
         </div>
    </div> -->
<!-- </body>
</html> -->