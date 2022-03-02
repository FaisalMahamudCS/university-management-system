<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
    li{
      list-style:none;
    }
    </style>
</head>
<body>
    
</body>
</html>
<?php


include "connection.php";


if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $password=$_POST['password'];
   // echo $password;
    //echo $id;

$query="SELECT * from student_account where id='$id' && password='$password'";
$connected=mysqli_query($conn,$query);
$row_count=mysqli_num_rows($connected);


if($row_count){
 
echo "success";


}
else{
    echo "login fail";
 
}
  $course_id=$_SESSION['course_id'];
$sql="select * from skill where id='$course_id'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$course_name= $row['course_name'];
$course_desc=$row['course_desc'];
$picture=$row['picture'];
$course_duration=$row['course_duration'];
$course_id=$row['id'];

//$sql="insert into  coursestud(course_name,course_desc,course_duration) values($course_name',$course_desc','$course_duration')";
$sql="INSERT INTO `coursestud` ( `id`, `course_id`,`course_name`, `course_desc`, `course_duration`,`picture`) VALUES ( '$id','$course_id','$course_name', '$course_desc', '$course_duration','$picture')";
$exec=mysqli_query($conn,$sql);
if($exec){
  include 'workingnav.php';
   echo "

   <div class='alert alert-success' style='margin-top:100px'>
    <strong>Success!</strong> You have successfully enrolled to $course_name course
  </div>

  ";
  
}

}
?>