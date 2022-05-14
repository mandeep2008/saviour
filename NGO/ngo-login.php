<?php
    include 'connection.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = dbConnect();

    $query = "SELECT ngoId FROM ngo WHERE username='$username' AND pswd='$password'";
    $result = mysqli_query($conn,$query);
      
    $count = mysqli_num_rows($result);  

    if($count == 1 ){
        session_start();
        $_SESSION['ngoId'] = $result->fetch_array()['ngoId'];
        $_SESSION['ngoStatus'] = 'logged_in';      
        header('location:ngo-home.php');
    }else{
        echo 'login failed';
    }
?>