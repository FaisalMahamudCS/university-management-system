<?php
$rollno1=$_REQUEST['rollNo'];
$connection = mysqli_connect("127.0.0.1:3325","root","","bgc");
if($rollno1 !==""){
    $query=mysqli_query($connection,"select * from profile where id='$rollno1'");
    $row=mysqli_fetch_array($query);
    $sname=$row["name"];
    $sdepartment=$row["department"];
    $semail=$row["email"];

}

  
