

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="request_style.css">
</head>
<body>
<script>
function myFunction() {
    alert("HI")
}
</script>
   <div class="main">
       <div class="register">
        <h1>Request Form</h1>
        <div>
        <form action="request_form_db.php" id="register" method="post">
            <label>Name:</label>
           <input type="text" name='user_name' required id="name" placeholder="Enter your name">
           
           <br><br>
           <label>Email Id:</label>
           <input type="email" name='user_email' required id="email" placeholder="Enter your mail">
           <br><br>
           <label>Address:</label>
           <br><br>
           <input type="text" name = 'user_add1' required id="Add1" placeholder="House No.Building &Area">
           <br><br>
           <input type="text" name = 'user_add2' required id="Add2" placeholder="City/Town/District">
           <br><br>
           <input type="text" name = 'user_add3' id="Add3" required placeholder="State/Union Territory">
           <br><br>
           <input type="number" name = 'user_add4' id="Add4" required placeholder="Pincode">
           <br><br>
           <label>Branch Name:</label>
           <input type="text" name = 'branch' id="branch" placeholder="branch">
           <br><br>
           <label>Generic Name:</label>
           <input type="text" name = 'generic' required id="generic" placeholder="Generic">
          
           <br><br>
           <label >Quantity:</label>
           <input type="number" name = 'quantity' required id="quantity" placeholder="Enter in numbers">
           <br><br>
           <label>
               Mobile No:
           </label>
           <br>
           <input type="number" id="call1" name = 'country_code' required placeholder="+" >
           <input type="number" id="call2" name = 'contact_number' required placeholder="phone number">
           <br><br>
           <label>Medicine Type:</label>
           <br><br>
           <select id="type" required name = 'med_type' >
               <option name = 'med_type' value="">Select Type</option>
               <option name = 'med_type' value="Tablet">Tablet</option>
               <option name = 'med_type' value="Injection">Injection</option>
               <option name = 'med_type' value="Gel">Gel</option>
               <option name = 'med_type' value="Syrup">Syrup</option>
               <option name = 'med_type' value="Drops">Drops</option>
           </select>
           <br><br>
           <div class="footer">
               <button id="Submit" onclick="myFunction()">Submit</button>
               <button id="reset">Clear</button>
           </div>
</form>
       </div><!--end register-->
   </div><!--end main-->
   <script>
       
   </script>
</body>
</html>
