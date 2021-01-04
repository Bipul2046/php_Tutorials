<?php 
    echo "Create data base in mysql <br>";
    //ways to connect with mysql database
    //1.MySqli extension
    //2.PDO
    //connecting with databse

    $servername = "localhost";
    $username = "root";
    $password = "";


    //create connection object
    $conn = mysqli_connect($servername,$username,$password);

    if(!$conn){
        die("Connection Failed to connect.".mysqli_connect_error());
    }
    else{
        echo "Connected Successfully.";
    }

     //create DB
     $sql = "CREATE DATABASE vipulDB";
     $result = mysqli_query($conn,$sql);
     if($result){
         echo "Database Created Successfully";
     }
     else{
         echo "Error ".mysqli_error($conn);
     }
     
    
?>