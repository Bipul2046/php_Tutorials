<?php
    echo "Display Data<br>";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "contact";


    //create connection object
    $conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die("Connection Failed to connect.".mysqli_connect_error());
    }
    else{
        echo "Connected Successfully. <br>";
    }
    $sql = "SELECT * FROM `contactus`";
    $result = mysqli_query($conn,$sql);

    //find the number of record
    $numrows =  mysqli_num_rows($result);
    // Display rows retured by sql

    if($numrows > 0){
        /*$row = mysqli_fetch_assoc($result);
        echo var_dump($row);
        echo "<br>"*/

        //better way to fetch data using while loops
        echo "Record Found In DataBase <br>";
        while($row = mysqli_fetch_assoc($result)){
            //echo var_dump($row);
            echo "Email is : ".$row['email']." Password : ".$row['pass'];
            echo "<br>";
        }
    }


?>