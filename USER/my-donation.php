<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="my-donation-style.css">
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
				<a class="nav-link" href="donate.php">DONATE</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="#">MY DONATIONS <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">LOGOUT</a>
			</li>
			</ul>
		</div>
	</nav>
  <div class='wrapper card'>
    <table class='tbl'>
      <thead>
        <th span='col'>ID</th>
        <th span='col'>Name</th>
        <th span='col'>Email</th>
        <th span='col'>Medicine Brand</th>
        <th span='col'>Medicin Generic Name</th>
        <th span='col'>Expiry Date</th>
        <th span='col'>Manufacturing Date</th>
        <th span='col'>NGO Name</th>
      </thead>
      
      <tr>
        <?php
                include 'dbconn.php';
                $conn = dbConnect();
  
                session_start();
                $user_id = $_SESSION['userId'];
                $query = "SELECT * FROM DONATIONS WHERE USER_ID = $user_id";
  
                $result = mysqli_query($conn,$query);
  
                foreach($result as $entry){
                    // echo "$entry[]";
                    $ngo_query = "SELECT ngoname FROM NGO WHERE ngoId = $entry[NGO]";
                    $ngo_result = mysqli_query($conn,$ngo_query);
                    $ngo_name = $ngo_result->fetch_array()['ngoname'];
                    echo "<tr>
                    <td>$entry[ID]</td>
                    <td>$entry[FNAME]</td>
                    <td>$entry[EMAIL]</td>
                    <td>$entry[BRAND]</td>
                    <td>$entry[MEDICINE]</td>
                    <td>$entry[EXPIRY]</td>
                    <td>$entry[MANUFACTURING_DATE]</td>
                    <td>$ngo_name</td>
                    </tr>";
                }
            ?>
        </tr>
    </table>
  </div>
  <footer>
    
  </footer>
      
</body>
</html>