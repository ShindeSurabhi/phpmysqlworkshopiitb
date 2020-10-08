<?php
    $a=$_GET["side1"];
    $b=$_GET["side2"];
    $c=$_GET["side3"];
   if($a==$b && $a==$c && $b==$c )
    {
	echo "Your Triangle is Equilateral .";
    }
    elseif($a==$b || $a==$c || $b==$c)
    {
	echo "Your Triangle is Isosceles.";
    }
    else
    {
	echo "Your Triangle is Scalene.";
    }
?>