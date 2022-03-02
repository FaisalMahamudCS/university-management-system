                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
<?php
session_start();

// Create connection

include "connection.php";

// Check connection


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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
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

</style>
</head>
<body>
<?php include "nav.php";?>

<div class="" style="margin-top:100px">
<h4 style="margin-top:100px;text-align:center">Semester Wise GPA and CGPA</h4>


<table class='table table-bordered  ' >
<thead class="table bg-success text-light" style="" >
<th>Semester </th>
                            <th style="">Credit Completed</th>
                            <th>GPA</th>
                            <th>CGPA</th>
                           
                            </thead>




                            <?php
                        
                        //for MySQLi OOP
                        $conn = new mysqli('127.0.0.1:3325', 'root', '', 'bgc');
                        if($conn->connect_error){
                           die("Connection failed: " . $conn->connect_error);
                        }
                        
                        $id=$_SESSION['id'];
                            $sql = "SELECT * FROM semestercg where id='$id' order by semester";
                           

							//use for MySQLi-OOP
                            $query = $conn->query($sql);
                          
							while($row = $query->fetch_assoc()){


                            echo "
                            <tr>
                          
                            <td> ".$row['semester']."</td>
                            <td> ".$row['totalcredit']."</td>
                            <td> ".$row['gpa']."</td>
                            <td> ".$row['cgpa']."</td>

                            
                           
                            </tr>
                            
                            ";

                                }
                            ?>




                            </table>
</tbody>



<h4 style="margin-top:100px;text-align:center">Semester Wise GPA </h4>


<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
<form>
<select name="users" class="form-control" onchange="showUser(this.value)">
  <option value="">Select a semester</option>
  <option value="193">1st</option>
  <option value="201">2nd</option>

  </select>
</form>
<br>
<div id="txtHint"><b></b></div>




  </div>

</body>
</html>