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
$pswd = $_POST['pswd'];
$conpswd = $_POST['confirm-password'];




$data = "INSERT INTO t1 (ngoname, contact, address, fname,lname, Rnumber,mail,username,pswd,Cpswd) VALUES ('$ngoname', '$contact', '$add','$fname', '$lname','$number','$mail','$username','$pswd','$co')";

$conn = dbConnect();

mysqli_query ($conn, $data);

 header('location:ngolog.php');
CloseCon($conn);

?>