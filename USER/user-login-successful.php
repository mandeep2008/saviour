<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>....</title>
  <link rel="stylesheet" href="bootstrap.css">
  

      <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Estonia&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
<style>
body 
{ 
background-image:url('userhome.png');
background-size:cover;
background-repeat:no-repeat;
background-position:fixed;
}

 

  .web-name{
    color: white;
    font-size: 30px;
    font-weight: bold;
    font-style: italic;
    margin-left: 20px;
  
  }
 .web{
    color: red;
      font-size: 80px;
 }

 /* navigation bar  */
 .navigation{
  /* background-color: rgba(0,0,0,0.5);  */
 }
 .nav a{
   padding: 10px 20px;
   text-decoration: none;
   color: white;
  
 }
 
.nav {
  display: inline-block;
  color: black;
  text-align: center;
  font-size: 17px;
  font-weight:bold;
}
 .home{
   margin-left: 100px;
 }
.nav a:hover {
  color: red;
  /* background-color: skyblue; */
  font-weight: bold;
  text-align: center;
  text-decoration: none;
}

/* center of the page  */
.body{
  padding: 45px;
  height:470px
  
}


/* welcome content  */
.col-md-8,.welcome{
  
  margin-top: 30px;
}
.welcome{
  background-color: rgba(0,0,0,0.5); 
}
.col-md-8 h2{
  	font-family:  cursive;
  font-size: 60px ;
  color:brown;
  text-align: center;
}

/* quote */
.center{
 margin-top:40px;
 margin-bottom: 50px;
 padding: 30px;

}
.p1{
  text-align: center;
  font-size: 25px;
  font-family: 'cursive';
  color: white;
}
b{
  font-weight: bold;
  font-family:'cursive';
  color: rgb(255, 10, 10);
  text-align: center;
  font-size: 40px;
}
.p2{
  text-align: center;
  font-size: 15px;
  font-family:sans-serif;
  color: black;
}
.sh{
  margin: 80px 0px 0px 0px;
}

/* footer of the page  */
.F{
 padding: 4px;
 background-color: rgba(97, 97, 97, 0.5);

}
.FAQ{
  text-align: center;
  margin-left: 50px;
  font-size: 25px;
  color: white;
}
.contact{
  font-size: 20px;
  margin-left: 850px;
  color: blue;
}
</style>
</head>
<body>
  
  <div class="container-fluid">
      <div class="row navigation">

      <!-- logo  -->
       <div class="col-md-5 logo">  
        <p class="web-name"><b class="web">$</b>aviour</p>

       </div>

      <!-- navigation -->
          <div class="col-md-7 ml-auto  nav align-self-center">
              <a class="home" href="HOME/home.php">Home</a>
              <a  href="">REGESTERED NGOs</a>
              <a href="my-donation.php">DONATE</a>
               <a href="#">MY DONATION</a>
              <a href="#">LOGOUT</a>
        </div>

          <!-- body of page -->
        <div class="row body justify-content-center">

        <!-- welcome -->
           <div class="col-md-8 welcome  ">
               <h2 class="sh"> TOGETHER TO HELP THE WORLD BETTER.... </h2>
            </div>

          
            
     </div>
</body>
</html>