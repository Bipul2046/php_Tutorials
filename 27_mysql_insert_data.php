<?php 
    echo "Insert Data in Tables <br>";
    //ways to connect with mysql database
    //1.MySqli extension
    //2.PDO
    //connecting with databse

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "vipul";


    //create connection object
    $conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die("Connection Failed to connect.".mysqli_connect_error());
    }
    else{
        echo "Connected Successfully.";
    }

    //inserdata  intable
    $name = "Ashitosh";
    $des = "UP";
    $sql = "INSERT INTO `phptrip` (`Name`, `TripDes`) VALUES ( '$name', '$des')";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "Data is Inserted  Successfully";
    }
    else{
        echo "Error ".mysqli_error($conn);
    }
     
    
?>