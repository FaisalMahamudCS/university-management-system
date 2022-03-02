<?php
include "navadmin.php";

?>

<h4 class="text-center " style="margin-top:100px">Notice Board</h4>
<a href="add_notice.php" class="btn btn-success">Add Notice</a>
<table class='table table-bordered  ' >
<thead class="table bg-success text-light" style="" >

                            <th style="">Notice</th>
                            <th>Date</th>
                            <th>download</th>
                           <th>Edit</th>
                           <th>Delete</th>
                            </thead>

                            <?php
                        
                        //for MySQLi OOP
                      include "connectionoop.php";
                   
                       
                            $sql = "SELECT * FROM notice";
                           

							//use for MySQLi-OOP
                            $query = $conn->query($sql);
                      
							while($row = $query->fetch_assoc()){

?>
                          
                            <tr>
                          
                            <td><?php echo $row['notice_name']?></td>
                            <td><?php echo $row['date']?></td>
                        <td>   <a id='downloadlink' href='<?php echo $row['link'] ?>' target='_blank' type='application/octet-stream' download='<?php echo $row['link'] ?>'>Click</a></td>

<td><a href="delete_notice.php?admin_id=<?php echo $row['notice_id']; ?>"><span class="label label-danger">Delete</span></a></td>
                                                <td><a href="edit_notice.php?admin_id=<?php echo $row['notice_id']; ?>"><span class="label label-primary">Edit</span></a></td>
                           
                            </tr>
                            
                        
                            <?php

                                }
                            ?>




                            </table>
</tbody>

























