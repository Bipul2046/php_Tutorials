<?php
    $name = "Vipul kumar Dubey";
    echo $name;
    echo "<br>";
    echo "The length of string is : ".strlen($name);
    echo "<br>";
    echo str_word_count($name);
    echo "<br>";
    echo strrev($name);
    echo "<br>";
    echo strpos($name, "kumar");
    echo "<br>";
    echo str_replace("Vipul", "Bipul",$name);
    echo "<br>";
    echo str_repeat($name,4);
    echo "<br>";
    echo rtrim(" This is good course    ");
?>