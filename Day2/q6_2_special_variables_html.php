<html>
   <body>
   
      <form action = "marksheet.php" method = "POST">
         Name of Student: <input type = "text" name = "" >
         <p>Marks in each Subject</p>
         Subject 1: <input type = "text" name = "subject1" ><br>
         <br>
         Subject 2: <input type = "text" name = "subject2" ><br>
         <br>
         Subject 3: <input type = "text" name = "subject3" ><br>
         <br>
         Subject 4: <input type = "text" name = "subject4" ><br>
         <br>
         Subject 5: <input type = "text" name = "subject5" ><br>
         <br>
         <input type = "submit" >
         
         
      </form>
      
   </body>
   
</html>

<?php
    $a=$_POST["subject1"];
    $b=$_POST["subject2"];
    $c=$_POST["subject3"];
    $d=$_POST["subject4"];
    $e=$_POST["subject5"];
    $total=$a+$b+$c+$d+$e+$f;
    $per=($total*100)/500;
    echo "Total Marks Obtained: $total <br>";
    echo "Total Marks : 500 <br>";
    echo "Percentage : $per <br>";
?>
    

    