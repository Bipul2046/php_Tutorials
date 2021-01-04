<?php 
    echo "Create Tables in mysql <br>";
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

    //crete table in db

    $sql = "CREATE TABLE `phptrip` ( `SR.No` INT(11) NOT NULL AUTO_INCREMENT , `Name` VARCHAR(11) NOT NULL , `TripDes` VARCHAR(11) NOT NULL , PRIMARY KEY (`SR.No`))";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "Table Created Successfully";
    }
    else{
        echo "Error ".mysqli_error($conn);
    }
     
    
?>