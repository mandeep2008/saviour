<!DOCTYPE html>
<html lang="en">
<head>
<style>

div.main
{
width:400px;
margin: 100px auto 100px auto;
color:black;
border-radius:10px;
	box-shadow:2px 2px 15px;
}
h1
{
text-align:center;
padding:20px;
font-family: sans-serif;
color:black;
}
div.register
{
background-color:white;
width: 100%;
font-size:18px;
border-radius:10px;
border:1px solid rgba(113, 189, 252, 0.507);
box-shadow:2px 2px 15px
rgba(0,0,0,0.3);
color:rgb(237, 244, 248);
}
form#register{
margin: 40px;
}
label
{
font-family:sans-serif;
color:black;

}
input#name
{
margin-left:40px;
width:300px;
border:1px solid #ddd;
border-radius:3px;
outline: 0;
padding:7px;
background-color:white;
box-shadow: inset 1px 1px 5px rgba(0,0,0,0.3);
}

label{
    margin-left:15px;
}
#male{
	color:black;
}
#female{
	color:black;
}
input#submit
{
width:200px;
padding:7px;
font-family:sans-serif;
font-size:16px;
font-weight:600px;
border:none;
border-radius:3px;
background-color:black;
color:#fff;
border:1px solid rgba(75, 153, 255, 0.3);
box-shadow: 1px 1px 5px rgba(0,0,0,0.3);
margin-left:90px;
}
label,span,h1
{
 text-shadow:1px 1px 5px rgba(0,0,0,0.3); 
}
select{
	margin-left:40px;
width:300px;
border:1px solid #ddd;
border-radius:3px;
outline: 0;
padding:7px;
/* color:blue; */
background-color:white;
box-shadow: inset 1px 1px 5px rgba(0,0,0,0.3);
}
</style>
</head>
<body>
	<div class="main">
	<div class="register">
	<h1> Donate Medicine </h1>
	<form action="donationhelp.php" method="post">
	<label> First Name : </label>
	<br>
	<input type="text" name="fname" id="name" placeholder="Enter Your Full Name" require="require">
	<br>
	<br>
	<label> Your Age : </label>
	<br>
	<input type="number" name="age" id="name" placeholder="Enter Your Age" require="require">
	<br>
	<br>
	<label> Mobile Number : </label>
	<br>
	<input type=" " name="mobile" id="name" placeholder="Enter Your Valid Mobile Number" require="require">
	<br>
	<br>
	<label> Email : </label>
	<br>
	<input type="email" name="email" id="name" placeholder="Enter Your valid Email " require="require">
	<br>
	<br>
	<label> Address : </label>
	<br>
	<input type="text" name="address" id="name" placeholder="Enter Your Address" require="require">
	<br>
	<br>
	<label> Gender: </label>
	<br>
	&nbsp;&nbsp;&nbsp;
	<input type="radio" name="gender" id="male">
	&nbsp;
	<span id="male"> Male </span>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="radio" name="gender" id="female">
	&nbsp;
	<span id="female"> Female </span>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<br>
	<br>
	<label for="ngo">NGO Name:</label>
	<br>
	<select name="ngo" id="ngo">
	<option value=''>Select ngo</option>
	<?php
		include 'dbconn.php';
		$conn = dbConnect();

		$query = "SELECT ngoname,ngoId from ngo";
		$result = mysqli_query($conn,$query);
		
		foreach($result as $ngo){
			echo "<option value = $ngo[ngoId]>$ngo[ngoname]</option>";
		}
	?>
	
  	
	</select>
	<br>
	<br>
	<label> Medicine Name : </label>
	<br>
	<input type="text" name="Mname" id="name" placeholder="Enter the Medicine " require="require">
	<br>
	<br>
	<label> Brand Name : </label>
	<br>
	<input type="text" name="Bname" id="name" placeholder="Enter the Medicine Brand" require="require">
	<br>
	<br>
	<label> Manufacturing Date : </label>
	<br>
	<input type="date" name="Mfd" id="name" placeholder="Manufacturing Date" require="require">
	<br>
	<br>
	<label> Expiery Date : </label>
	<br>
	<input type="Date" name="exp" id="name" placeholder="Expiery Date" require="require">
	<br>
	<br>
	
	<input type="submit" value="Submit" name="submit" id="submit">
	</form>
	</div>
	</div>
	</body>
	</html>
