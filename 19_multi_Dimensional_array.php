<?php
    echo "Multi Dimensional Array <br>";
    $multiDim = array(
                        array(2,4,5,3),
                        array(2,3,0,2),
                        array(3,4,5,9));
    //echo var_dump($multiDim);
    echo $multiDim[0][1];
    echo "<br>";   
    echo $multiDim[1][1];
    echo "<br>";   
    echo $multiDim[2][3];
    echo "<br>"; 
    
    for($i=0;$i<count($multiDim);$i++){
       //echo var_dump($multiDim[$i]);
       //echo "<br>";
       for($j=0;$j<count($multiDim[$i]);$j++){
            echo $multiDim[$i][$j];
            echo " ";
       }
       echo "<br>";
    }

?>