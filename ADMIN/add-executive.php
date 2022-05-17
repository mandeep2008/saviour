

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Executive</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="add-executive-style.css">
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
    <div class='wrapper container con card'>
        <form action='addexechelper.php' method='POST'>
            <div class='form-group'>
                <label >First Name</label>
                <input type="text" required class="form-control" name="fname">        
            </div> 
            <div class='form-group'>
                <label >Age</label>
                <input type="number" min='20' required  class="form-control" name="age">        
            </div>
            <div class='form-group'>
                <label >Mobile Number</label>
                <input type="tel" required class="form-control" name="mobile">        
            </div> 
            <div class='form-group'>
                <label >Email</label>
                <input type="email" required  class="form-control" name="email">        
            </div>  
            <div class='form-group'>
                <label >Address</label>
                <textarea name="address" required class='form-control' id="" cols="50" rows="5"></textarea>       
            </div>
            <div class='form-group'>

            </div>
            <div class='d-flex justify-content-around'>
                  <button type='submit' class='btn'>Add Executive</button>
                  <button type='button' class='btn'>Reset</button>
            </div>
        </form>
    </div>
   
</body>
</html>




