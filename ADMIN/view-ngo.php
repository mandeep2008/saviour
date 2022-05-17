<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="view-ngo-style.css">
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
			<li class="nav-item ">
				<a class="nav-link" href="donate.php">ADD NGO</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">ADD EXECUTIVE </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="view-donator.php">VIEW DONATOR'S DETAILS</a>
			</li>
      <li class="nav-item active">
				<a class="nav-link" href="#">VIEW NGO DETAILS <span class="sr-only">(current)</span></a>
			</li>
      <li class="nav-item">
				<a class="nav-link" href="#">LOGOUT</a>
			</li>
			</ul>
		</div>
	</nav>
  <h1 class='text-center'>Registered NGOs</h1>
  <div class='wrapper card'>
    <table class='tbl'>
      <thead>
          <th span='col'>ID</th>
          <th span='col'>NGO Name</th>
          <th span='col'>NGO's Email-id</th>
          <th span='col'>Address</th>
          <th span='col'>Mobile No.</th>
      </thead>
      
      <tr>
      <?php
          include 'connection.php';

          $conn = dbConnect();
          $query = "SELECT * FROM ngo;";

          $result = mysqli_query($conn,$query);
          foreach($result as $entry){
            
            echo "<tr>
            <td>$entry[ngoId]</td>
            <td>$entry[ngoname]</td>
            <td>$entry[mail]</td>
            <td>$entry[address]</td>
            <td>$entry[contact]</td>
            </tr>";
        }
        ?>
      </tr>
    </table>
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
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>NGO Name</th>
            <th>Email-id</th>
            <th>Address</th>
            <th>Contact No.</th>
            
        </tr> -->
        
      <!-- </table>

      <div class="row F justify-content-center">
        <div class="col-md-3 first-col">
         <pre><a href="faq.php">FAQ</a><br><br><a href="">Feedback</a>
         </pre>
        </div>
        <div class="col-md-5 feedback">
          <p class="register">NGO can register by <a href="ngo-signup.php">clicking here</a></p>
          <p class="register">User can register by <a href="user-signup.php">clicking here</a></p>
        </div>
       
        <div class="col-md-4 contact"> 
         
          <pre class="register">Email:<a href="mailto:Saviour1234@gmail.com?Subject: "> Saviour1234@gamil.com</a></pre> -->
        <!-- </div>
    </div> -->
     
 <!-- </div>  -->
      
</body>
</html>