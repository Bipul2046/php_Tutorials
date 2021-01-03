<?php
    $name = "Vipul";
    $income = 200;


    //php datatype
    /*
        1.String
        2.Integer
        3.Float
        4.Boolean
        5.Object
        6.Array
        7.Null
    */

    //String-sequence of character
    $fullName = "Vipul Dubey";
    echo "Full Name : $fullName<br>";


    //Integer - non decimal number
    $price = 5666;
    echo "Price : $price <br>";

    //Float- decimal number
    $mark  = -344.233;
    echo "Mark : $mark <br>";
    $income = 9000333.344;
    echo $income;


    //Boolean ture or false
    $x = true;
    $y = false;
    echo "<br>";
    echo $x;
    echo "<br>";
    echo var_dump($y);
    echo "<br>";
    echo $x;


    //Object - Instances of classes
    //Array - used to store multiple values in single varibles
    $friends = array("Bipul","Umar","Kiran","Aniket","Snehal");
    echo "<br>";
    echo var_dump($friends);
    echo "<br>";
    echo $friends[0];
    //echo $friends[4]; will throw error

    //NUll
    $name = NULL;
    echo "<br>";
    echo $name;
    echo var_dump($name);





?>