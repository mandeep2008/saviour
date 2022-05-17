<?php

include 'connection.php';

$ngoname = $_POST['ngo-name'];
$contact = $_POST['contact'];
$add = $_POST['address'];
$fname=$_POST['fname'];
$lname = $_POST['lname'];
$number = $_POST['ph-number'];
$mail = $_POST['mail'];
$username = $_POST['username'];
$pswd = $_POST['password'];
$conpswd = $_POST['confirm-password'];
$yoe = $_POST['yoe'];
$noam = $_POST['noam'];

$sql = "CREATE TABLE IF NOT EXISTS NGO (ngoId INTEGER UNIQUE NOT NULL AUTO_INCREMENT,ngoname VARCHAR(255), contact VARCHAR(15), address VARCHAR(255), fname VARCHAR(30),lname VARCHAR(30), Rnumber VARCHAR(15),mail VARCHAR(255),username VARCHAR(30),pswd VARCHAR(30),PRIMARY KEY(ngoId));";

$data = "INSERT INTO NGO (ngoId,ngoname, contact, address, fname,lname, Rnumber,mail,username,pswd) VALUES ('1','$ngoname', '$contact', '$add','$fname', '$lname','$number','$mail','$username','$pswd')";

$conn = dbConnect();

$result = mysqli_query ($conn, $data);

if($result)
    {echo 'succesful';
    header('location:ngo-home.php');}
else
    echo 'failed';
// CloseCon($conn);

?>