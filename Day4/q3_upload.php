<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
  
  $name=($_FILES["fileToUpload"]["name"]);
  $type= $_FILES["fileToUpload"]["type"];
  $size= ($_FILES["fileToUpload"]["size"]);
  $temp= $_FILES["fileToUpload"]["tmp_name"];
  $error= $_FILES["fileToUpload"]["error"];

  if($error > 0){
      die("Error Uploading File!Code. $error.");
  }else{
    echo "Upload completed! <br>";
    echo "Name of file:  ";
    echo $name;
    echo '<br>';
  
    echo "Size of file:  ";
    echo $size;
    echo '<br>';
  
    echo "Type of file:  ";
    echo $type;
    echo '<br>';

    echo "Temprary location of file:  ";
    echo $temp;
    echo '<br>';

  }
}
?>