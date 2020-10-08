<?php
    $a=$_POST["subject1"];
    $b=$_POST["subject2"];
    $c=$_POST["subject3"];
    $d=$_POST["subject4"];
    $e=$_POST["subject5"];
    $total=$a+$b+$c+$d+$e;
    $per=($total*100)/500;
    echo "Total Marks Obtained: $total <br>";
    echo "Total Marks : 500 <br>";
    echo "Percentage : $per % <br>";
?>
    
