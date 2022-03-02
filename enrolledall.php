<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
       
<link rel="stylesheet" href="dist/css/bootstrap.css">
<script src="jquery-3.1.1.js"></script>
    <script src="dist/js/bootstrap.js"></script>
   
<!-- Page level plugin CSS-->
<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

<style>
li{
list-style-type:none;

}
</style>
    <title>Document</title>
</head>
<body>
    <?php
    include "navmain.php";
    ?>

<h1 class="text-center">All Course</h1>
<div class="container">
<div class="row mt-4">
<?php

$con = mysqli_connect('127.0.0.1:3325','root','','bgc');
$sql="SELECT * from skill";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)){
$course_id=$row['id'];
echo '
<div class="col-sm-4 mb-4">

<a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align:left;padding:0px;margin:0px">
<div class="card">
<img src="../'.$row['picture'].'" class="card-img-top" height="300px" width="300px">
<div class="card-body">
<h5 class="text-center">'.$row['course_name'].'</h5>
<p class="card-text">'.$row['course_desc'].'</p>
</div>
<div class="card-footer">
<p class="card-text d-inline"><span class="font-weight-bolder">'.$row['Price'].'<span> </p>
<a href="coursedetails.php?course_id='.$course_id.'"  class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>

</div>
</div>

</a>
</div>

';

}

?>

</div>
</div>
</body>
</html>