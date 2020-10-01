<html>
   <body>
   
      <form action = "triangleCheck.php" method = "GET">
         Enter Side1: <input type = "text" name = "side1" ><br>
         Enter Side2: <input type = "text" name = "side2" ><br>
         Enter Side3: <input type = "text" name = "side3" ><br>
         <input type = "submit" >
      </form>
      
   </body>
   
</html>

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