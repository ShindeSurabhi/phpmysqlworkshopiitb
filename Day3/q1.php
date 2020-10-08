



<html>
   <body>
   
      <form action = "q1.php" method = "POST">
         Name of Student: <input type = "text" name = "name" >
         <p>Enter your marks in each Subject</p>
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


$id=0;
if(isset($_POST['name'],$_POST['subject1'],$_POST['subject2'],$_POST['subject3'],$_POST['subject4'],$_POST['subject5'])){
        $id++;
        $name=$_POST["name"];
        $sub1=$_POST["subject1"];
        $sub2=$_POST["subject2"];
        $sub3=$_POST["subject3"];
        $sub4=$_POST["subject4"];
        $sub5=$_POST["subject5"];
        $total_obtained=$sub1+$sub2+$sub3+$sub4+$sub5;
        $total_marks=500;
        $percent=($total_obtained*100)/500;


        if($name && $sub1 && $sub2 && $sub3 && $sub4 && $sub5){
            echo "Name: $name <br>";
            echo "Subject 1: $sub1 <br>";
            echo "Subject 2: $sub2 <br>";
            echo "Subject 3: $sub3 <br>";
            echo "Subject 4: $sub4 <br>";
            echo "Subject 5: $sub5 <br>";
            echo "Total Marks Obtained: $total_obtained <br>";
            echo "Total Marks : 500 <br>";
            echo "Percentage : $percent % <br>";
        }

        $sql="INSERT INTO class1 (name1,sub1,sub2,sub3,sub4,sub5,total_obtained,total_marks,percent) VALUES('$name',$sub1,$sub2,$sub3,$sub4,$sub5,$total_obtained,$total_marks,$percent)";
        


        
        if ($conn->query($sql) === TRUE) {
          echo "Records added to Database successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        
        $conn->close();

    }    


?>      


    
    
    
    

