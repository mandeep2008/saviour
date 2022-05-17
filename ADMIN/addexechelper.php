<?php
    include 'connection.php';
    $fname = $_POST['fname'];
    $age = $_POST['age'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$address = $_POST['address'];
$gender = $_POST['gender'];
    
    $conn = dbConnect();
    $create = "CREATE TABLE IF NOT EXISTS EXECUTIVE (EX_ID INTEGER AUTO_INCREMENT ,FNAME VARCHAR(30),AGE INTEGER,MOBILE VARCHAR(15),EMAIL VARCHAR(255),ADDRESS VARCHAR(255),GENDER VARCHAR (15),PRIMARY KEY(EX_ID));";

    $create_result = mysqli_query($conn,$create);

    $insert = "INSERT INTO EXECUTIVE (FNAME,AGE,MOBILE,EMAIL,ADDRESS) VALUES ('$fname','$age','$mobile','$email','$address')";
    $result = mysqli_query($conn,$insert);
    if($result)
    header('location:admin_home.php');
    
    if(!$result)
        echo 'SOMETHING WENT WRONG';
    
    CloseCon($conn);


?>