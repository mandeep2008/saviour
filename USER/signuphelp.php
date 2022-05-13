<?php

include 'dbconn.php';

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$address=$_POST['address'];
$pass = $_POST['password'];

$create = "CREATE TABLE IF NOT EXISTS USERS (USER_ID INTEGER NOT NULL AUTO_INCREMENT,FNAME VARCHAR(30),LNAME VARCHAR(30),EMAIL VARCHAR(255) UNIQUE,ADDRESS VARCHAR(255),PASSWORD VARCHAR(30),PRIMARY KEY(USER_ID));";


$data = "INSERT INTO users (FNAME, LNAME, EMAIL,ADDRESS, PASSWORD) VALUES ('$firstname', '$lastname', '$email','$address', '$pass')";

$conn = dbConnect();

$create_result = mysqli_query($conn,$create);
if($create_result){

    mysqli_query ($conn, $data);
    if(session_status()==0){
        session_start();
    }
    $_SESSION['userId'] = mysqli_query("SELECT USER_ID FROM USERS WHERE EMAIL = '$email'");
    $_SESSION['status'] = 'logged_in';
    // header('location:user-login-successful.php');
}
else{
    
    echo('login failed');
} 
CloseCon($conn);

?>