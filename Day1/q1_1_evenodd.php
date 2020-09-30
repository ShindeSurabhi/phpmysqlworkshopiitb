<?php
$numbers = array(11,23,72,44);
foreach($numbers as $num)
{
    if($num % 2 == 0)
    {
        echo "The number $num is even number.<br>";
    }
    else
    {
        echo "The number $num is an odd number.<br>";
    }
}
?>

