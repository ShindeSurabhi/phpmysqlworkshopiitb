<?php
    $a=array(array(10,50),array(15,2));
    $b=array(array(12,3),array(9,7));
    
    echo "First Matrix is : <br>";
     for($i=0;$i<2;$i++)
    {
        for($j=0;$j<2;$j++)
        {
            echo $a[$i][$j]." ";
        }
        echo "<br>";
    }
    
    echo "Second Matrix is : <br>";
     for($i=0;$i<2;$i++)
    {
        for($j=0;$j<2;$j++)
        {
            echo $b[$i][$j]." ";
        }
        echo "<br>";
    }

    echo "Matrix Addition is: <br>";

    for($i=0;$i<2;$i++)
    {
        for($j=0;$j<2;$j++)
        {
            echo $a[$i][$j]+$b[$i][$j]." ";
        }
        echo "<br>";
    }
?>
