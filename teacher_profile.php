
<?php
session_start();



// Create connection

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
    $_SESSION['id']=$id;
header("location:teacher_profile.php");

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
<?php
include "navteacher.php";
?>
<?php
                        
                        //for MySQLi OOP
                        $conn = new mysqli('127.0.0.1', 'root', '', 'bgc');
                        if($conn->connect_error){
                           die("Connection failed: " . $conn->connect_error);
                        }
                       $id= $_SESSION['teacher_id'];
                       
                        
							$sql = "SELECT * FROM teach where id='$id'";

							//use for MySQLi-OOP
                            $query = $conn->query($sql);
                          
							while($row = $query->fetch_assoc()){


                            echo "
                            
                            <div class='container' style='margin-top:100px'>
 
                            <div class='card' style='width:900px ;margin-left: 100px;'>
    <img class='card-img-top' src='".$row['photo']."' alt='Card image' style='height:300px;width:400px;margin-left:250px'>
    <div class='card-body bg-light'>
    <h4 class='card-title'>Name :".$row['name']."</h4>
  
      <p class='card-text'>Qualification: ".$row['qualification']."</p>
      <p class='card-text'>Gmail: ".$row['gmail']."</p>
      <p class='card-text'>Password: ".$row['password']."</p>

   
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