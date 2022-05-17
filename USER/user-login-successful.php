<!DOCTYPE html>
<html lang="en">
  <?php
    if(session_status()!=2){
      session_start();
    }
    function myFunction(){
      $_SESSION['userid']=NULL;
      $_SESSION['status'] = 'logged_out';
      header('location:../HOME/home.php');
    }
    if(isset($_GET['logout'])){
      myFunction();
    }
  ?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User</title>
  <!-- <link rel="stylesheet" href="bootstrap.css"> -->
  

      <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Estonia&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="user-style.css">
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
      <li class="nav-item active">
        <a class="nav-link" href="#">USER <span class="sr-only">(current)</span></a>
      </li>
			<li class="nav-item">
				<a class="nav-link" href="donate.php">Donate </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="my-donation.php">My Donation</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="user-login-successful?logout=true">Logout</a>
			</li>
			</ul>
		</div>
	</nav>
	<div class='d-flex justify-content-around'>
    <div class='image d-flex flex-column justify-content-around'>
      <div class='card trivia'>
        <p class='text-center number'>1</p>
        <h3 class='lead'>Total Donations</h3>
      </div>
    </div>
		<div class='login'>
			<div class='wrapper card con'>
				<form method='POST' action='loginhelp.php'>
            <div class='form-group'>
                    <div class='d-flex justify-content-between mt-10'>
                        <div class='hf'>
                            <label>First NAME</label>
                            <input type="text" class="form-control" name="first_name" placeholder="Enter NGO Name" required>
                        </div>
                        <div class='hf'>
                            <label>Last Name</label>
                            <input type="tel" class="form-control" name="last_name" placeholder="Enter Contact Number" required>
                        </div>
                    </div>
            </div>
            <div class='form-group'>

              <div class='f'>
                <label>Email</label>
                <input type="tel" class="form-control" name="last_name" placeholder="Enter Contact Number" required>
                        
              </div>
            </div>
            <div class='form-group'>
            <div class='f'>
                      <div>
                        <label>Address</label>
                        <textarea name="address" class='form-control' id="" cols="50" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class='form-group'>
            <label>Contact Number</label>
                <input type="tel" class="form-control" name="last_name" placeholder="Enter Contact Number" required>
            </div>
            <div class='d-flex justify-content-around'>
              <button type='submit' class='btn'>Update</button>
              <button type='button' class='btn'>Cancel</button>
            </div>
        </form>
			</div>
		</div>
	</div>
  <!-- <div class="container-fluid">
      <div class="row navigation">

      <!-- logo  -->
       <!-- <div class="col-md-5 logo">  
        <p class="web-name"><b class="web">$</b>aviour</p>

       </div> -->

      <!-- navigation -->
          <!-- <div class="col-md-7 ml-auto  nav align-self-center">
              
          <a class="home" href="../HOME/home.php">Home</a>
        
              <a href="donate.php">DONATE</a>
               <a href="my-donation.php">MY DONATION</a>
               
              <a href="user-login-successful.php?logout=true">LOGOUT</a>
              
        </div> -->

          <!-- body of page -->
        <!-- <div class="row body justify-content-center"> -->

        <!-- welcome -->
           <!-- <div class="col-md-8 welcome  ">
               <h2 class="sh"> TOGETHER TO HELP THE WORLD BETTER.... </h2>
            </div>

          
            
     </div> --> 
</body>
</html>