
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
<?php
include 'nav.php';
?>
<div style="padding-left:16px">
  

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

<div class="container " style="margin-top:100px">
<div class="container">
<div class="row mt-4">
    <?php
    

    $id=$_SESSION['id'];

include ('connection.php');  

  
    $sql1="select * from coursestud where id='$id'";
    
    $result3 = mysqli_query($conn, $sql1);
   
    while($row = mysqli_fetch_assoc($result3)){
      $course_id=$row['course_id'];
echo '
<div class="col-sm-4 mb-4">

<a href="stud_coursedet.php?course_id='.$course_id.'" class="btn" style="text-align:left;padding:0px;margin:0px">
<div class="card">

<div class="card-body">
<img src="image/'.$row['picture'].'" class="card-img-top" height="300px" width="300px">
<h5 class="text-center">'.$row['course_name'].'</h5>
<p class="card-text">'.$row['course_desc'].'</p>
</div>
<div class="card-footer">

<a href="coursedetails.php?course_id='.$course_id.'"  class="btn btn-primary text-white font-weight-bolder float-right">View</a>

</div>
</div>

</a>
</div>

';


    }

    
   
    
?>
     
</div>
</div>
