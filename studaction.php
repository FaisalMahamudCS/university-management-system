<?php
session_start();

// Create connection

include "connection.php";

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $password=$_POST['password'];
   // echo $password;
    //echo $id;

$query="SELECT * from profile where id='$id' && password='$password'";
$connected=mysqli_query($conn,$query);
$row_count=mysqli_num_rows($connected);
if($row_count){
    $_SESSION['id']=$id;
header("location:studentportal.php");

    echo "welcome success";
}
else{
    echo "login fail";
    require('register.php');
}
}
?>