<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "result";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE class1 SET sub5=99 WHERE name1='Rohan'";



if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}


$extract = "SELECT sub1,sub2,sub3,sub4,sub5 FROM class1 WHERE name1='Rohan'";
        while($row=mysql_fetch_assoc($extract))
        {
            $sub1=$row['$sub1'];
            $sub2=$row['$sub2'];
            $sub3=$row['$sub3'];
            $sub4=$row['$sub4'];
            $sub5=$row['$sub5'];
            
        }

        $total_obtained=$sub1+$sub2+$sub3+$sub4+$sub5;
        $total_marks=500;
        $percent=($total_obtained*100)/500;

$sql = "UPDATE class1 SET total_obtained=$total_obtained AND percent=$percent WHERE name1='Rohan'";   
$conn->close();
?>