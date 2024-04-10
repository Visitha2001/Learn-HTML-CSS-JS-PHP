<?php 
    //$connection = mysqli_connect("dbserver","dbusername","dbpassword","dbname");

    $connection = mysqli_connect("localhost", "root", "", "userdb");
    if(mysqli_connect_errno()){
        die("database connection failed: " . mysqli_connect_error());
    }else{
        echo "database connected sucessully";
    }
?>