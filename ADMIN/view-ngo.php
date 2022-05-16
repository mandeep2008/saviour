<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../NGO/ngo-style.css">
    <link rel="stylesheet" href="view-ngo-style.css">
</head>
<body>
<div class="container-fluid">
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
            
        </tr>
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
      </table>

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
        </div>
    </div>
     
 </div>
      
</body>
</html>