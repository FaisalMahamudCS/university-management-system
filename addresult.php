<?php
$conn = new mysqli("127.0.0.1:3325","root","","bgc");


  if(isset($_POST['rollNo'])){
    $roll=$_POST['rollNo'];
    $department=$_POST['department'];
    $name=$_POST['studentName'];
    $course=$_POST['course'];
    $email=$_POST['email'];
    $grade=$_POST['grade'];
    $course_name=$_POST['course_name'];
    $sql="INSERT INTO addresult(id,name,department,email,course,course_name,grade) values('$roll','$name','$department','$email','$course','$course_name','$grade')";
    if($conn->query($sql)==TRUE) {
        echo json_encode("OK");
    } else {
        echo json_encode("Fail");
    }
  }
 


?>