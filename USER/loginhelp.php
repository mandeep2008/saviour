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
        $sql = "SELECT USER_ID FROM USERS WHERE EMAIL = '$email' and PASSWORD='$pass'"; 
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        // echo $result;
        // echo $row;
        // echo $count;
        if($count == 1){  
            $user_id = mysqli_query($conn,"SELECT USER_ID FROM USERS WHERE EMAIL = '$email' and PASSWORD='$pass'")->FETCH_ARRAY()['USER_ID'];;
            if(session_status() != 2)
                session_start();
            $_SESSION['userId'] = $user_id;
            $_SESSION['status'] = 'logged_in';
            echo $_SESSION['status'];
            header('location:user-login-successful.php');
            exit;
            // echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid email or password.</h1>";  
        }     
?>  