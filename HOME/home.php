<?php
  if(session_status()!=2)
    session_start();
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Cache-control" content="no-cache">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>....</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="./home.css">
  

      <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Estonia&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container-fluid">
      <div class="row navigation">

      <!-- logo  -->
       <div class="col-md-4 logo">  
        <p class="web-name"><b class="web">$</b>aviour</p>

       </div>

      <!-- navigation -->
          <div class="col-md-8 ml-auto  nav align-self-center">
              <a class="home" href="home.php">HOME</a>
              <a href="about-us.php">ABOUT US</a>
              <!-- <a href = "request_form.php">REQUEST</a> -->
               <a href="../ADMIN/admin_home.php">ADMIN</a>
               <?php
                if(isset($_SESSION['status']) && $_SESSION['status'] == 'logged_in')
                  echo '<a href="../USER/user-login-successful.php">USER</a>';
                  
                else 
                  echo '<a href="../USER/user-login.php">USER</a>';
                if(isset($_SESSION['ngoStatus']) && $_SESSION['ngoStatus'] == 'logged_in')
                  echo '<a href="../NGO/ngo-home.php">NGO</a>';
                else 
                  echo '<a href="../NGO/ngolog.php">NGO</a>';
               ?>
              
             </div>
        </div>

          <!-- body of page -->
        <div class="row body justify-content-center">

        <!-- welcome -->
           <div class="col-md-8 welcome  ">
               <h2> WELCOME TO SAVIOUR </h2>
            </div>

            <!-- quote -->
              <div class="col-md-6 center">
                <p class="p1">The greatest <b>GOOD</b> is what we do for one another.</p>
                <p class="p2"> ~ MOTHER TERESA</p>
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
            <p class="register">NGO can register by <a href="NGO/ngo-signup.php">clicking here</a></p>
            <p class="register">User can register by <a href="USER/user-signup.php">clicking here</a></p>
          </div>
         
          <div class="col-md-4 contact"> 
           
            <pre class="register">Email:<a href="mailto:Saviour1234@gmail.com?Subject: "> Saviour1234@gamil.com</a></pre>
          </div>
       
        </div> -->
     </div>
</body>
</html>