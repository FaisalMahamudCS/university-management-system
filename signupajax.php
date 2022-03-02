
<?php
session_start();

// Create connection
$conn = mysqli_connect('127.0.0.1:3325','root','','bgc');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['stuid'])){
    $id=$_POST['stuid'];
    $password=$_POST['pass'];
    
   // echo $password;
    //echo $id;
    $_SESSION["uid"] =$id;
$query="SELECT * from profile where id='$id' && password='$password'";
$connected=mysqli_query($conn,$query);
$row_count=mysqli_num_rows($connected);
if($row_count){
    echo json_encode("ok");
    $_SESSION['id']=$id;

    echo "welcome success";
    header('location:indexmain.php');
}


else{
    echo json_encode("failed");
    echo "login fail";
    require('register.php');
}
}


?>
