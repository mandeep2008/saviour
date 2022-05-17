<?php
    if(session_status()!=2){
      session_start();
    }
    function myFunction(){
      $_SESSION['ngoId']=NULL;
      $_SESSION['ngoStatus'] = 'logged_out';
      header('location:../HOME/home.php');
    }
    if(isset($_GET['logout'])){
      myFunction();
    }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="ngo-home-style.css">
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
				<a class="nav-link" href="#">NGO </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="Donated-medicines.php">Donation List <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item ">
				<a class="nav-link" href="#">Assign Executive</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Logout</a>
			</li>
			</ul>
		</div>
	</nav>
	<div class='d-flex justify-content-around'>
    <div class='image d-flex flex-column justify-content-around'>
      <div class='card trivia'>
        <p class='text-center number'>1</p>
        <h3 class='lead'>Total Donations Received</h3>
      </div>
    </div>
		<div class='login'>
			<div class='wrapper card con'>
      <form method='POST' action='sign-db.php'>
                <h5>NGO Details</h5>
                <hr/>
                <div class='form-group'>
                    <div class='d-flex justify-content-between mt-10'>
                        <div class='hf'>
                            <label>NGO NAME</label>
                            <input type="text" class="form-control" name="first_name" placeholder="Enter NGO Name" required>
                        </div>
                        <div class='hf'>
                            <label>CONTACT NUMBER</label>
                            <input type="tel" class="form-control" name="last_name" placeholder="Enter Contact Number" required>
                        </div>
                    </div>
                    <div class='d-flex justify-content-between'>
                        <div class='hf'>
                            <label>Year Of Establishment</label>
                            <input type="Number" min='1960' max='2022' class="form-control" name="first_name" placeholder="Enter NGO Name" required>
                        </div>
                        <div class='hf'>
                            <label>Name Of Authorative Member</label>
                            <input type="tel" class="form-control" name="last_name" placeholder="Enter Contact Number" required>
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
                            <input type="text" class="form-control" name="first_name" placeholder="Enter NGO Name" required>
                        </div>
                        <div class='hf'>
                            <label>Last NUMBER</label>
                            <input type="text" class="form-control" name="last_name" placeholder="Enter Contact Number" required>
                        </div>
                    </div>
                    <div class='d-flex justify-content-between'>
                        <div class='hf'>
                            <label>Contact Number</label>
                            <input type="tel" min='1960' max='2022' class="form-control" name="first_name" placeholder="Enter NGO Name" required>
                        </div>
                        <div class='hf'>
                            <label>Email</label>
                            <input type="email" class="form-control" name="last_name" placeholder="Enter Contact Number" required>
                        </div>
                    </div>
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
        <div class="row layout">
            <div class="col-md-6 logo">
                <p class="web-name"><b class="web">$</b>aviour</p>
            </div>
            <div class="col-md-6 nav align-self-center">
                    <a class="home" href="../HOME/home.php">HOME</a>
                    <a class="donation" href="Donated-medicines.php">DONATION LIST</a>
                    <a class="assign" href="assign-executive-page.php">ASSIGN EXECUTIVE</a>
                    <a href="ngo-home.php?logout=true">LOGOUT</a>
            </div>
        </div> -->

        <!-- body  -->
        <!-- <div class="row content-body">
            <div class="col-md-6">
                <img src="NGO-image.jpg" alt="ngo">
            </div>
            <div class="col-md-6 content">
                <pre class="together">  Give a Helping Hand to Those... 
    Who Need It!!! 
                </pre>
            </div>
        </div>

        <!-- footer  -->
        <!-- <div class="row F justify-content-center">
          <div class="col-md-3 first-col">
           <pre><a href="faq.php">FAQ</a>        
<a href="">Feedback</a>
           </pre>
          </div>
          <div class="col-md-5 feedback">
            <p class="register">NGO can register by <a href="ngo-signup.php">clicking here</a></p>
            <p class="register">User can register by <a href="user-signup.php">clicking here</a></p>
          </div>
         
          <div class="col-md-4 contact"> 
           
            <pre class="register">Email:<a href="mailto:Saviour1234@gmail.com?Subject: "> Saviour1234@gamil.com</a></pre>
          </div>
       
        </div>
       
    </div> -->
</body>
</html>