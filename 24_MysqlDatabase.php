<?php 
    echo "Raedy to get connected with database <br>";
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
    
?>