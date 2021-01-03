<?php
    echo "Foreach Loop<br>";
    $arr=array("Apple","Banana","Orange","Grapes","Mango");
    
    /*for($i=0;$i<count($arr);$i++){
        echo $arr[$i];
        echo "<br>";
    }*/
    foreach( $arr  as $val){
        echo "$val <br>";
    }
?>