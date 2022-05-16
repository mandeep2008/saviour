<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../NGO/ngo-style.css">
    <link rel="stylesheet" href="my-donation-style.css">
</head>
<body>
<div class="container-fluid">
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
    <table>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email-id</th>
          <th>Medicine Brand Name</th>
          <th>Medicine Generic Name</th>
          <th>Expiry Date</th>
          <th>Medicine Type</th>
          <th>Donation Type</th>
          <th>Receiver's Name</th>
        </tr>
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
                <td>NGO</td>
                <td>$ngo_name</td>
                </tr>";
            }
        ?>
        
      </table>

      <div class="row F justify-content-center">
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
         
          <pre class="register">Email:<a href="mailto:Saviour1234@gmail.com?Subject: "> Saviour1234@gamil.com</a></pre> -->
        </div>
    </div>
     
 </div>
      
</body>
</html>