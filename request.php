<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="request.css">
</head>
<body>
   <div class="main">
       <div class="register">
        <h1>Request Form</h1>
        <form action="" id="register" method="post">
            <label>Name:</label>
           <input type="text" id="name" placeholder="Enter your name">
           <br><br>
           <label>Email Id:</label>
           <input type="email" id="email" placeholder="Enter your mail">
           <br><br>
           <label>Address:</label>
           <br><br>
           <input type="text" id="Add1" placeholder="House No.Building &Area">
           <br><br>
           <input type="text" id="Add2" placeholder="City/Town/District">
           <br><br>
           <input type="text"id="Add3" placeholder="State/Union Territory">
           <br><br>
           <input type="number" id="Add4" placeholder="Pincode">
           <br><br>
           <label>Branch Name:</label>
           <input type="text" id="branch" placeholder="branch">
           <br><br>
           <label>Generic Name:</label>
           <input type="text" id="generic" placeholder="Generic">
           <br><br>
           <label >Quantity:</label>
           <input type="number" id="quantity" placeholder="Enter in numbers">
           <br><br>
           <label>
               Mobile No:
           </label>
           <br>
           <input type="number" id="call1" placeholder="+">
           <input type="number" id="call2" placeholder="123456789">
           <br><br>
           <label>Medicine Type:</label>
           <br><br>
           <select id="type">
               <option value="type">Select Type</option>
               <option value="type">Tablet</option>
               <option value="type">Injection</option>
               <option value="type">Gel</option>
               <option value="type">Syrup</option>
               <option value="type">Drops</option>
           </select>
           <br><br>
           <div class="footer">
               <button id="Submit">Submit</button>
               <button id="reset">Clear</button>
           </div>
        </form>
       </div><!--end register-->
   </div><!--end main-->
</body>
</html>