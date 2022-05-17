<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="admin_home_style.css">
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
				<a class="nav-link" href="../Home/home.php">ADMIN <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../Home/about-us.php">ADD NGO </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="add-executive.php">ADD EXECUTIVE</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="view-donator.php">VIEW DONOR LIST</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="view-ngo.php">VIEW NGO DETAILS</a>
			</li>
      <li class="nav-item">
				<a class="nav-link" href="#">LOGOUT</a>
			</li>
			</ul>
		</div>
	</nav>
	<div class='d-flex justify-content-around'>
    <div class='image d-flex flex-column justify-content-around'>
      <div class='card trivia'>
        <p class='text-center number'>1</p>
        <h3 class='lead'>Pending NGO Approvals</h3>
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
        <div class="row layout">
            <div class="col-md-3 logo">
                <p class="web-name"><b class="web">$</b>aviour</p>
            </div>
            <div class="col-md-9 nav align-self-top">
              <a class="home" href="HOME/home.php">HOME</a>
              <a class="add-ngo" href="">ADD NGO</a>
              <a class="add-executive" href="add-executive.html">ADD EXECUTIVE</a>
              <a class="donator" href="view-donator.php">VIEW DONATOR DETAILS</a>
              <a class="ngo" href="view-ngo.php">VIEW NGO DETAILS</a>
              <a href="">LOGOUT</a>
            </div>
</div> -->
<!-- </div> -->

<!-- body  -->
<!-- <div class= "row box justify-content-center">
    <div class="col-md-4 box-col ">
      <div class="col-md-12 para1">
        <p>"The measure of life is not its duration ,but its &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;donation"</p>
      </div>
      <div class="col-md-12 para1">
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome to Donation Community</p>
      </div>
        <div class="col-md-12 mainlogo">
            <div class="row">
                 <div class="col-md-4 logo"><img src="love.jpg" alt="" srcset=""></div>
                    <div class=" col-md-6 main">
                        <p class="Saviour">Saviour</p>
                        <p class= "oumds">Online Unused Medicine Donation<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
   <!-- footer  -->
  <!-- <div class="row F justify-content-center">
    <div class="col-md-3 first-col">
      <pre><a href="faq.php">FAQ</a><br><br><a href="">Feedback</a> </pre>
    </div>
    <div class="col-md-4 feedback">
      <p class="register">NGO can register by <a href="ngo-signup.php">clicking here</a></p>
      <p class="register">User can register by <a href="user-signup.php">clicking here</a></p>
    </div>
  <div class="col-md-5 contact"> 
     <pre class="register">Email:<a href="mailto:Saviour1234@gmail.com?Subject: "> Saviour1234@gamil.com</a></pre>
  </div>
</div> -->

</body>

</html>