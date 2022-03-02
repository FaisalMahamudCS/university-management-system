
<?php
  session_start();
  $_SESSION['id']=$id;          
                        //for MySQLi OOP
                       
include "connectionoop.php";
                        
                        
							$sql = "SELECT * FROM transaction where id='$id'";

							//use for MySQLi-OOP
                            $query = $conn->query($sql);
                          
							while($row = $query->fetch_assoc()){

                            echo "
                            <tr>
          
                            <td  style='text-align:center'>".$row['id']."</td>
                            <td  style='text-align:center'>".$row['discount']."</td>
                            <td  style='text-align:center'>".$row['credits']."</td>
                          
                         

       
    </tr>"
                            ;
                            
                                }
                            ?>




  