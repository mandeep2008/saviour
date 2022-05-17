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
    <link rel="stylesheet" href="exec.css">
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
			<li class="nav-item">
				<a class="nav-link" href="donate.php">DONATION LIST </a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="#">ASSIGN EXECUTIVE <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">LOGOUT</a>
			</li>
			</ul>
		</div>
	</nav>
  <h1 class='text-center'>Medicines Recieved</h1>
  <div class='wrapper card'>
    <table class='tbl'>
      <thead>
          <th>ID</th>
          <th span='col'>Donator's Name</th>
          <th span='col'>Donator's Email-id</th>
          <th span='col'>Donator's Contact no</th>
          <th span='col'>Donator's Address</th>
          <th span='col'>Medicine Brand Name</th>
          <th span='col'>Medicine Generic Name</th>
          <th span='col'>Executive</th>
          <th span='col'></th>
      </thead>
      
      <tr>
      <?php
            include 'connection.php';
            $conn = dbConnect();

            session_start();
            $ngo_id = $_SESSION['ngoId'];
            $query = "SELECT * FROM DONATIONS WHERE NGO = $ngo_id";

            $result = mysqli_query($conn,$query);
            $exec_query = "SELECT * FROM EXECUTIVE";
            $exec_result = mysqli_query($conn,$exec_query);
            foreach($result as $entry){                
                echo "<form method='POST'>
                <tr>
                <td>$entry[ID]</td>
                <td>$entry[FNAME]</td>
                <td>$entry[EMAIL]</td>
                <td>$entry[CONTACT]</td>
                <td>$entry[ADDRESS]</td>
                <td>$entry[BRAND]</td>
                <td>$entry[MEDICINE]</td>
                <td>
                    <select name='exec' required class='form-control'>
                    <option value=''>Assign Executive</option>";
                    foreach($exec_result as $exec){
                        echo"<option name='exec' value='$exec[EX_ID]'>$exec[FNAME]</option>";
                    }
                        
                    echo"</select>
                </td>
                <td>
                    <div class='d-flex '>
                    <button class='btn' type='button'>Cancel</button>
                    <button class='btn btn-primary ml-2' type='submit'>Confirm</button>
                    </div>
                </td>
                
                
                </tr>
                </form>";
            }
        ?>
        </tr>
    </table>
  </div>
<!-- <div class="container-fluid c">
    <div class="row layout">
        <div class="col-md-6 logo">
            <p class="web-name"><b class="web">$</b>aviour</p>
        </div>
        <div class="col-md-6 nav align-self-center">
                <a class="home" href="../HOME/home.php">HOME</a>
                <a class="donation" href="donation-list.php">DONATION LIST</a>
                <a class="assign" href="Assign-Executive-page-style.php">ASSIGN EXECUTIVE</a>
                <a href="">LOGOUT</a>
        </div>
    </div>
    <h1>Donated Medicines</h1>
    <table>
        <tr>
          <th>ID</th>
          <th>Donator's Name</th>
          <th>Donator's Email-id</th>
          <th>Donator's Contact no</th>
          <th>Donator's Address</th>
          <th>Medicine Brand Name</th>
          <th>Medicine Generic Name</th>
          
          <th>Expiry Date</th>
          <th>Manufacturing date</th>
          
        </tr>
        <?php
            include 'connection.php';
            $conn = dbConnect();

            session_start();
            $ngo_id = $_SESSION['ngoId'];
            $query = "SELECT * FROM DONATIONS WHERE NGO = $ngo_id";

            $result = mysqli_query($conn,$query);

            foreach($result as $entry){
                // echo "$entry[]";
                
                echo "<tr>
                <td>$entry[ID]</td>
                <td>$entry[FNAME]</td>
                <td>$entry[EMAIL]</td>
                <td>$entry[CONTACT]</td>
                <td>$entry[ADDRESS]</td>
                <td>$entry[BRAND]</td>
                <td>$entry[MEDICINE]</td>
                <td>$entry[EXPIRY]</td>
                <td>$entry[MANUFACTURING_DATE]</td>              
                </tr>";
            }
        ?>
        
      </table>

      <div class="row F justify-content-center">
        <div class="col-md-3 first-col">
         <pre><a href="faq.php">FAQ</a>         -->
<!-- <a href="">Feedback</a>
         </pre>
        </div>
        <div class="col-md-4 feedback">
          <p class="register">NGO can register by <a href="ngo-signup.php">clicking here</a></p>
          <p class="register">User can register by <a href="user-signup.php">clicking here</a></p>
        </div>
       
        <div class="col-md-3 contact"> 
         
          <pre class="register">Email:<a href="mailto:Saviour1234@gmail.com?Subject: "> Saviour1234@gamil.com</a></pre> -->
        </div>
    </div>
     
 </div> -->
      
</body>
</html>