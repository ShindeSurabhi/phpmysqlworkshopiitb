
<html>
   <body>
   
      <form action = "q2_string_functions.php" method = "POST">
         Enter a string: <input type = "text" name = "string" ><br>
         <br>
         Enter substring to be replaced: <input type = "text" name = "substring" ><br>
         <br>
         Replaced with: <input type = "text" name = "newsubstring" ><br>
         <br>

        <input type = "submit" >
    
     </form>
      
   </body>
   
</html>

<?php
if(isset($_POST['string'],$_POST['substring'],$_POST['newsubstring'])){
    $string=$_POST['string'];
    $substring=$_POST['substring'];
    $new_substring=$_POST['newsubstring'];

    $length=strlen($string);
    echo '1. Number of characters in "'. $string .'" is ' .$length.'.<br>';

    $exparray = explode(" ",$string);
    echo '2."'. $string.'" in arrray:'. $exparray.'<br>';

    $rev=strrev($string);
    echo '3. Reverse of "'. $string.'": '.$rev.' <br>';

    $lower=strtolower($string);
    echo '4. "'. $string.'" in Lower Case: ' .$lower.' <br>';

    $upper=strtoupper($string);
    echo '5. "'.$string.'" in Upper Case: '.$upper.' <br>';



    $replace=substr_replace($string,$new_substring);
    echo '6. Substring is: '.$substring.'<br>';
    echo '6. New String is: '.$replace.'<br>';

}
?>

