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

$sql = "CREATE TABLE IF NOT EXISTS DONATIONS (ID INTEGER AUTO_INCREMENT,FNAME VARCHAR(255),AGE INTEGER,CONTACT VARCHAR(15),EMAIL VARCHAR(255),ADDRESS VARCHAR(255),GENDER VARCHAR(15),NGO VARCHAR(255),MEDICINE VARCHAR(255),BRAND VARCHAR(255),MANUFACTURING_DATE DATE,EXPIRY DATE,USER_ID INTEGER,PRIMARY KEY(ID),FOREIGN KEY(NGO) REFERENCES NGO(NGOID),FOREIGN KEY(USER_ID) REFERENCES USERS(USER_ID));";

mysqli_query($conn,$sql);

session_start();
$userid= $_SESSION['userId'];
$data = "INSERT INTO DONATIONS (FNAME,age,CONTACT,email,address,gender,MEDICINE,BRAND,MANUFACTURING_DATE,EXPIRY,NGO,USER_ID) VALUES ('$name','$age','$mobile','$email','$address','$gen','$medi_name','$medi_brand','$mfd','$exp','1','$userid')";
$res = mysqli_query ($conn, $data);
// print_r($res);

if( $res == 1){
    $query = "SELECT mail from NGO where ngoId = 1 ";
    $result = mysqli_query($conn,$query);
    $ngoEmail =  $result->fetch_array()['mail'];
    // need to set up smtp server
    // mail('1840030@sliet.ac.in',"Donation Request","Hi\n $name wanted to donate some medicines to your NGO details of which are as following : \nMedicine Name : $medi_name\n BRAND : $medi_brand \n Manufacturing Date : $mfd\nExpiry Date : $exp Contact Details : \n Contact Number:$mobile\n Email:$email \n Address:$address\n THANK YOU","From: 1907saviour@gmail.com");
    header('location:donation-success.php');
} else { 
    echo $res->error;
}

CloseCon($conn);

?>