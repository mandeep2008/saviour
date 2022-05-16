<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="ngo-signup-style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5 mb-5">

            <!-- form title  -->
            <div class="col-md-6 signup">
                     <h1>Register</h1>

                <form action="sign-db.php" method="POST"id="signup">

                    <!-- form body -->
                <div class="row form-body">

                        <!-- first name last name -->
                      <div class="row horizontal-group" id="ngo-details">
                        <div class="col-md-12">
                            <h5>NGO Details</h5>
                          
                        </div>
                            <!-- name of ngo and address -->
                            <div class="col-md-6 left">
                            <label for="ngo-name" class="txt">*NGO Name:</label>
                            <input type="text" name="ngo-name" placeholder="Enter the name of ngo">
                            </div>
                            <div class="col-md-6 right">
                            <label for="contact" class="txt">*Contact No:</label>
                            <input type="number" name="contact" placeholder="Enter ngo contact">
                            </div>
                            <div class="col-md-6 left">
                                <label for="year" class="txt">*Year of Establishment:</label>
                                <input type="text" name="year" placeholder="Enter Year">
                                </div>
                                <div class="col-md-6 right">
                                <label for="Authoritative" class="txt">*Name of the Authoritative Member:</label>
                                <input type="text" name="Authoritative" placeholder="Enter Name">
                                </div>
                              <div class="col-md-12">
                                  <label for="address" class="txt">*Address:</label>
                                  <textarea name="address" id="" cols="50" rows="5"></textarea>
                              </div>
                              
                              <div class="col=col-md-12 ">
                                <label for="registration_certificate" class="txt file">*Add Registration Certificate of the NGO:</label>
                                <input type="file" class="Certificate" id="myFile" name="filename">
                              </div>
                              <div class="col=col-md-12 ">
                                <label for="finance" class="txt file">*Add Financial Statements of the NGO:</label>
                                <input type="file" class="financial" id="myFile" name="filename">
                              </div>
                        
                              
                              
                        
                        </div>    
                        <div class="row horizontal-group">
                            <div class="col-md-12">
                                <h5>Representative Details:</h5>
                            </div>
                            <div class="col-md-6 left">
                                <label for="fname" class="txt">*First Name:</label>
                                <input type="text" name="fname" placeholder="Enter your first name">
                                </div>
                                <div class="col-md-6 right">
                                <label for="lname" class="txt">*Last Name:</label>
                                <input type="text" name="lname" placeholder="Enter your last name">
                                </div>
                                <div class="col-md-6 left">
                                    <label for="ph-number" class="txt">*Contact No:</label>
                                    <input type="text" name="ph-number" placeholder="Enter your contact">
                                    </div>
                                    <div class="col-md-6 right">
                                    <label for="mail" class="txt">*Email:</label>
                                    <input type="text" name="mail" placeholder="Enter your email">
                                    </div>
                                   

                        </div>
                        

                    <!-- password cnf password  -->
                 <div class="row horizontal-group account ">
                     <div class="col-md-12 "> 
                         <h5>Create Account</h5>
                     </div>
                    <div>
                        <label for="username"class="em">Username:</label>
                        <input type="text" id="username" name="username" placeholder="Enter username to Create an account">
                   </div>
                     <div class="col-md-6 left ">
                        <label for="pswd"class="txt">Password:</label>
                         <input type="password" id="pswd" name="password" placeholder="Enter password">
                     </div>
                     <div class="col-md-6 right">
                        <label for="confirm-password"class="txt">confirm password</label>
                        <input type="password" id="conpswd" name="confirm-password" placeholder="Re-enter password">    
                     </div>
                   
                     
                </div>
                <!-- button  -->
                <DIV class="row BTN ">
                         <input class="button" type="submit">
                </DIV>
                
            </form>
            </div>    
         </div>
    </div>
</body>
</html>