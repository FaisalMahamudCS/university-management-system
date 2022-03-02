
<?php
session_start();


include "connection.php";

if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $password=$_POST['password'];
    
   // echo $password;
    //echo $id;

$query="SELECT * from teach where id='$id' && password='$password'";
$connected=mysqli_query($conn,$query);
$row_count=mysqli_num_rows($connected);
if($row_count){
    $_SESSION['teacher_id']=$id;
header("location:teacherfron.php");

    echo "<h2 class='alert alert-success'>welcome success<h2>";
}


else{
    echo "login fail";
    require('register.php');
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}
li{
      list-style-type: none;
    }

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

*{
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

</style>
</head>
<body>

<nav class="navbar navbar-expand navbar-dark bg-success fixed-top">

<a class="navbar-brand mr-1 btn btn-success" href="index.php"> Teacher Panel</a>

<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
  <i class="fas fa-bars"></i>
</button>

<!-- Navbar Search -->
<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
  
</form>

<!-- Navbar -->
<ul class="navbar-nav ml-auto ml-md-0">


</ul>

<li class="nav-item">
  <a class="nav-link  btn btn-success" href="admin_info.html">
    <i class="fas fa-user  "></i>
    <span style="text-shadow: 0px 1px 5px black;">Students</span></a>
</li>
<li class="nav-item">
  <a class="nav-link   btn btn-success" href="phpexcel.php">
    <i class="fa fa-list"></i>
    <span style="text-shadow: 0px 1px 5px black;">Add Result</span></a>
</li>
<li class="nav-item">
  <a class="nav-link   btn btn-success" href="admin_student_details.html">
    <i class="fa fa-lock "></i>
    <span style="text-shadow: 0px 1px 5px black;">Change Password</span></a>
</li>


<li class="nav-item">
  <a class="nav-link  btn btn-success" href="result.html">
    <i class=""></i>
    <span style="text-shadow: 0px 1px 5px black;">Salary</span></a>
</li>
<li class="nav-item">
  <a class="nav-link  btn btn-success" href="enroll.html">
    <i class="fa fa-user-plus"></i>
    <span style="text-shadow: 0px 1px 5px black;">Enroll student</span></a>
</li>

 
  
</nav>
      
<?php
                        
                        //for MySQLi OOP
                        $conn = new mysqli('127.0.0.1', 'root', '', 'bgc');
                        if($conn->connect_error){
                           die("Connection failed: " . $conn->connect_error);
                        }
                        
                        $id=$_SESSION['id'];
							$sql = "SELECT * FROM teach where id='$id'";

							//use for MySQLi-OOP
                            $query = $conn->query($sql);
                          
							while($row = $query->fetch_assoc()){


                            echo "
                            
                            <div class='container mt-5'>
 
                            <div class='card' style='width:900px ;margin-left: 100px;'>
    <img class='card-img-top' src='".$row['photo']."' alt='Card image' style='height:300px;width:400px;margin-left:250px'>
    <div class='card-body bg-light'>
    <h4 class='card-title'>Name :".$row['name']."</h4>
      <h4 class='card-title'>Salary :".$row['salary']."</h4>
      <p class='card-text'>Qualification: ".$row['qualification']."</p>
      <p class='card-text'>Gmail: ".$row['gmail']."</p>
      <p class='card-text'>Password: ".$row['password']."</p>

      <a href='' class='btn btn-primary ml-4'>See Profile</a>
    </div>
  </div>
  <br>
  
                            
                            
                            ";

                                }
                            ?>




  
</tbody>
  </table>


</body>
</html>