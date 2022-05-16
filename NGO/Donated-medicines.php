<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="ngo-style.css">
    <link rel="stylesheet" href="./Donated-Medicine-style.css">
</head>
<body>
<div class="container-fluid c">
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
         <pre><a href="faq.php">FAQ</a>        
<a href="">Feedback</a>
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
     
 </div>
      
</body>
</html>