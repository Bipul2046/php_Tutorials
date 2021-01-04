<?php 
    echo "Function <br>";
    function processMarks($markArr){
        $sum = 0;
        foreach($markArr as $val){
            $sum +=$val;
        }
        return $sum;
    }
    function avg($markArr){
        $sum = 0;
        $i=0;
        foreach($markArr as $val){
            $sum +=$val;
            $i++;
        }
        return $sum/$i;
    }


    $rohan=[67,78,98,99,76];
    $totalMarks=processMarks($rohan);
    echo "Total Marks Obtained  by Rohan : $totalMarks <br>";
    $avgrohan=avg($rohan);
    echo "AVG of Rohan is : $avgrohan<br>";

    $vipul=[98,98,99,89,99];
    $totalMarksVipul=processMarks($vipul);
    echo "Total Marks Obtained Vipul : $totalMarksVipul <br>";

?>