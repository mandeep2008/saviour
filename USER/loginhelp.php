<?php      
    include('dbconn.php');
    $email = $_POST['email'];  
    $pass= $_POST['password'];  
    $conn = dbConnect();
        // to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $pass = stripcslashes($pass);  
        $email = mysqli_real_escape_string($conn, $email);  
        $password = mysqli_real_escape_string($conn, $pass);  
        $sql = 'SELECT * FROM `p1` WHERE PASSWORD = "'.$pass.'" and EMAIL ="'.$email.'"'; 
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        // echo $result;
        // echo $row;
        // echo $count;
        if($count == 1){  
           header('location:user-login-successful.php');
            exit;
            // echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid email or password.</h1>";  
        }     
?>  