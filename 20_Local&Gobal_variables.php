<?php 
    echo "Scope , Local And Global Varibales.  <br>";
    $a=98;
    function printVal(){
       // $a=99;

       global $a;
       $a=100;
        echo "This result of var is : $a";
    }
    printVal();
    echo "<br> $a";
    echo "<br>";
   // echo var_dump($GLOBALS);
    echo "<br>";
    echo var_dump($GLOBALS["a"]);
 

?>