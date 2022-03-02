<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php 
include "navmain.php";
?>
<h4 class="text-center" style="margin-top:100px;padding:15px">Notice Board</h4>

<table class='table table-bordered  ' >
<thead class="table bg-success text-light" style="" >

                            <th style="">Notice</th>
                            <th>Date</th>
                            <th>download</th>
                           
                            </thead>




                            <?php
                        
                        //for MySQLi OOP
                        
include "connectionoop.php";
                        if($conn->connect_error){
                           die("Connection failed: " . $conn->connect_error);
                        }
                        
                       
                            $sql = "SELECT * FROM notice";
                           

							//use for MySQLi-OOP
                            $query = $conn->query($sql);
                          
							while($row = $query->fetch_assoc()){

?>
                          
                            <tr>
                          
                            <td><?php echo $row['notice_name']?></td>
                            <td><?php echo $row['date']?></td>
                        <td>   <a id='downloadlink' href='<?php echo $row['link'] ?>' target='_blank' type='application/octet-stream' download='<?php echo $row['link'] ?>'>Click</a></td>
                          

                            
                           
                            </tr>
                            
                        
                            <?php

                                }
                            ?>




                            </table>
</tbody>















