<?php
    include 'dbconn.php';
    $userName = $_POST['user_name'];
    $userEmail = $_POST['user_email'];
    $userAdd1 = $_POST['user_add1'];
    $userAdd2 = $_POST['user_add2'];
    $userAdd3 = $_POST['user_add3'];
    $userAdd4 = $_POST['user_add4'];
    $branch = $_POST['branch'];
    $generic = $_POST['generic'];
    $quantity = $_POST['quantity'];
    $country_code = $_POST['country_code'];
    $mobile = $_POST['contact_number'];
    $med_type = $_POST['med_type'];
    

    $create = "CREATE TABLE IF NOT EXISTS REQUESTS(\n"

    . "    NAME VARCHAR(30),\n"

    . "    EMAIL VARCHAR(255),\n"

    . "    ADDRESS VARCHAR(255),\n"

    . "    BRANCH VARCHAR(30),\n"

    . "    GENERIC VARCHAR(50),\n"

    . "    QUANTITY INTEGER,\n"

    . "    CONTACT_NUMBER VARCHAR(15),\n"

    . "    MED_TYPE VARCHAR(20)\n"

    . ");";

    $add = "INSERT INTO requests (NAME,EMAIL,ADDRESS,BRANCH,GENERIC,QUANTITY,CONTACT_NUMBER,MED_TYPE) VALUES ('$userName', '$userEmail', '$userAdd1, $userAdd2, $userAdd3, $userAdd4','$branch','$generic','$quantity','+$country_code $mobile','$med_type')";
    echo htmlspecialchars($_SERVER["PHP_SELF"]);
    $conn = dbConnect();
    mysqli_query ($conn, $create);
    mysqli_query ($conn, $add);
    CloseCon($conn);
?>