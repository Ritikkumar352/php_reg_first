<?php
    $db_server="localhost";
    $db_user="root";
    $db_pass="";
    $db_name="form1"; // db name not table name
    $conn="";

    //connection done
    try{
        $conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);

    }catch(mysqli_sql_exception){
        echo"Not connected !! Try restarting XAMPP";
    }

    // if($conn){
    //     echo"connected";
    // }else{
    //     echo"not connected!";
    // }

?>