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
    <link rel="stylesheet" href="dist/css/bootstrap.css">
</head>
<body>
    
</body>
</html>
<?php

include 'navteacher.php';

?>
<?php



include "connectionoop.php";
 if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
 }
 
$id= $_SESSION['teacher_id'];
     $sql = "SELECT * FROM  teacher_course where id='$id'";

     //use for MySQLi-OOP
     $query = $conn->query($sql);
   
     while($row = $query->fetch_assoc()){
     }
?>

<h4 class="text-center" style="margin-top:100px">All Courses</h4>

<table class='table table-bordered  ' >
<thead class="table bg-success text-light" style="" >

                            <th style="">Course Name</th>
                            <th>Course Code</th>
                            <th>Semester</th>
                           <th>Credit</th>
                            </thead>




                            <?php
                        
include "connectionoop.php";
                        //for MySQLi OOP
                       // $conn = new mysqli('127.0.0.1:3325', 'root', '', 'bgc');
                        if($conn->connect_error){
                           die("Connection failed: " . $conn->connect_error);
                        }
                        
                       
                        $sql = "SELECT * FROM  teacher_course where id='$id'";
                           

							//use for MySQLi-OOP
                            $query = $conn->query($sql);
                          
							while($row = $query->fetch_assoc()){

?>
                          
                            <tr>
                          
                            <td><?php echo $row['course_name']?></td>
                            <td><?php echo $row['course']?></td>
                            <td><?php echo $row['semester']?></td>
                            <td><?php echo $row['credit']?></td>

                          

                            
                           
                            </tr>
                            
                        
                            <?php

                                }
                            ?>




                            </table>
</tbody>


