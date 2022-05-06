<?php
    function dbConnect(){
    //     $connection = mysqli_connect('localhost', 'root');

    //     if ($connection) {
    //         echo "Connection is Establish!";
    //     }
    //     else {
    //         echo "ERROR Connection Failed!";
    //     }
        
    //    return mysqli_select_db($connection, 'authenticate');
        
    //     echo ">>>";
       
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "authenticate";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
    
    return $conn;
    }
    
   function CloseCon($conn)
    {
    $conn -> close();
    }
      
?>