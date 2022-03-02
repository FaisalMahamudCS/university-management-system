<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<?php
session_start();
  $id=$_SESSION['id'];

  if(isset($_POST['submit'])){
 
include "connection.php";
   
   
  
        $email=$_POST['email'];
    
    
        $password=$_POST['password'];
    
    
    $newpass=$_POST['password1'];

    $query="SELECT * from teach where id='$email' && password='$password'";
    $result=mysqli_query($conn,$query);
    $num=mysqli_num_rows($result);
    if($num){
        $row=mysqli_fetch_array($result,MYSQLI_NUM);
        $q="update teach set password='$newpass' where id='$id'";
        $result1=mysqli_query($conn,$q);
       
        if($result1){
            echo "<h2 class='alert alert-success'>Successfully   changed your password <a href='teacheraction.php' class='alert-link'>Return To Home Page</a>.</h2>";
        }
    }

}


?>