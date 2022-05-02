<?php      
    include('connection.php');
    $username = $_POST['username'];  
    $pswd= $_POST['password'];  
    $conn = dbConnect();
        // to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $pass = stripcslashes($pswd);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $pswd);  
        $sql = 'SELECT * FROM `t1` WHERE PASSWORD = "'.$pswd.'" and USERNAME ="'.$username.'"'; 
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        // echo $result;
        // echo $row;
        // echo $count;
        if($count == 1){  
           header('location:ngo-home.php');
            exit;
            // echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  