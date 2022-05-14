<?php
include('dbconn.php');

$name = $_POST['fname'];
$age=$_POST['age'];
$mobile=$_POST['mobile'];
$email = $_POST['email'];
$address=$_POST['address'];
$gen=$_POST['gender'];
$medi_name=$_POST['Mname'];
$medi_brand=$_POST['Bname'];
$mfd=$_POST['Mfd'];
$exp=$_POST['exp'];

$conn = dbConnect();

$create = "CREATE TABLE IF NOT EXISTS DONATIONS "

$data = "INSERT INTO DONATIONS (name,age,mobile,email,address,gender,med_name,med_brand,mfg_date,exp_date) VALUES ('$name','$age','$mobile','$email','$address','$gen','$medi_name','$medi_brand','$mfd','$exp')";
$res = mysqli_query ($conn, $data);
print_r($res);

if( $res == 1){
    header('location:donation-success.php');
} else { 
    echo "Something went Wrong";
}

CloseCon($conn);

?>