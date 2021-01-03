<?php

    //operator in php
    /*
        1.Arithmetic Operator
        2. Assignment Operator
        3. Comparison Operator
        4. Logical Operator
    */
    //Arithmetic Operator

    $a = 30;
    $b = 20;
    echo "a + b : ".($a + $b)."<br>";
    echo "a - b : ".($a - $b)."<br>";
    echo "a * b : ".($a * $b)."<br>";
    echo "a / b : ".($a / $b)."<br>";
    echo "a % b : ".($a % $b)."<br>";
    echo "a ** b : ".($a ** $b)."<br>";

    //Assignment Operator

    $x = $a;
    echo "Value is : ".$x."<br>";
    $a += 5;
    echo "Value of  a is : ".$a."<br>";

     //  Comparison Operator

     $x = 7;
     $y = 9;
     echo " 7 === 9  and result is : ";
     echo var_dump($x == $y);
     echo "<br>";
     echo var_dump($x > $y);
     echo "<br>";
     echo var_dump($x < $y);
     echo "<br>";
     echo var_dump($x <> $y);


     //Logical Operator 

     $m = true;
     $n= false ;
     echo "<br>";
     echo var_dump($m and $n);
     echo "<br>";
     echo var_dump($m or $n);
     echo "<br>";
     echo var_dump($m && $n);
     echo "<br>";
     echo var_dump(!$m);




?>