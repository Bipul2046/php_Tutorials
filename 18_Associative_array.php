<?php
    echo "Associative Array<br>";
    $arr = array('this','that','what');
   /* echo $arr[0];
    echo "<br>";
    echo $arr[1];
    echo "<br>";
    echo $arr[2];
    echo "<br>";*/

    $favCol = array(
        'vipul' => 'Red',
        'Umar' => 'Blue',
        'Kiran ' => 'Green',
        'Snehal' => 'Yellow',
        8 => 'this',
    );
    echo $favCol['vipul'];
    echo "<br>";
    
    echo $favCol[8];
    echo "<br>";

    foreach($favCol as $key => $val){
        echo "Fav color of $key is $val <br>";
    }
    
?>