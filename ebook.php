<?php
include "navmain.php";

?>
<h4 class="text-center"  style="margin-top:100px">EBOOK/All Resource</h4>

<table class='table table-bordered  ' style="margin-top:50px" >
<thead class="table bg-success text-light" style="" >

                            <th style="">Book/Document Name </th>
                            <th>Semester</th>
                            <th>download</th>
                           
                            </thead>




                            <?php
                        
                        //for MySQLi OOP
                        $conn = new mysqli('127.0.0.1:3325', 'root', '', 'bgc');
                        if($conn->connect_error){
                           die("Connection failed: " . $conn->connect_error);
                        }
                        
                       
                            $sql = "SELECT * FROM ebook";
                           

							//use for MySQLi-OOP
                            $query = $conn->query($sql);
                          
							while($row = $query->fetch_assoc()){

?>
                          
                            <tr>
                          
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['semester']?></td>
                        <td>   <a id='downloadlink' href='<?php echo $row['link'] ?>' target='_blank' type='application/octet-stream' download='<?php echo $row['link'] ?>'>Click</a></td>
                          

                            
                           
                            </tr>
                            
                        
                            <?php

                                }
                            ?>




                            </table>
</tbody>

