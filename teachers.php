

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
<div class="wrapper">
<h2 class="text-center"> CLUBS OF CSE DEPT</h2>




<div class='card-columns'>           
<?php
                        
                        //for MySQLi OOP
                     
include "connectionoop.php";
                        if($conn->connect_error){
                           die("Connection failed: " . $conn->connect_error);
                        }
                        
                        
                        
							$sql = "SELECT * FROM teach";

							//use for MySQLi-OOP
                            $query = $conn->query($sql);
                            $i=1;
                        
							while($row = $query->fetch_assoc()){
                                $image=$row['image'];
                                echo "
                          
                                <div class='card' style='width:450px;margin-left:10px'>
                                    
                                 
                                     <img class='card-img-top' src='".$image."' alt='Card image' style='width:100%'>
                                      
                                    <div class='card-body  ".$row['style-card']." '>
                                       <div class='card-header'>".$row['name']."</div>
                                       <a href='regestreation.html' class='btn btn-primary'>".$row['login']."</a>
                                        <a href='login.php' class='btn btn-secondary' class='btn btn-primary'>".$row['login']."</a>
                                <button class='btn btn-secondary'>".$row['club-member']."</button>
                                <a href='register.php' class='btn btn-primary'>".$row['registration']."</a>
                                        
                                  
                                
                                  
                                  
                                    </div>
                                        </div>
                                        
                        ";
                        if($i%8== 0)
                        echo "</div> </div><div class='card-columns'>";
                        $i++;
					
                            }
                            ?>











                        </body>
                        </html>