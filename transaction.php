<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap.css">
</head>
<body>
    <?php 
    include 'navbar.php';
    ?>
<table class="table  table-bordered table-hover table-dark" >
<h3 class='bg-light' style='padding-left:500px'>Payment</h3>
    <thead>
   
    
        
        <th class='bg-info' style='text-align:center;font-size:20px'>transaction Id</th>
        <th class='bg-info' style='text-align:center;font-size:20px' >Discount</th>
        <th class='bg-info' style='text-align:center;font-size:20px' >Date</th>
        <th class='bg-info' style='text-align:center;font-size:20px'>Payment amount</th>
      
      </tr>
    </thead>
    <tbody>
      

<?php
  session_start();
  $id=$_SESSION['id'];

  include "connection.php";
  $sql = "SELECT * FROM payment_status where id='$id'";

							//use for MySQLi-OOP
                            $query = $conn->query($sql);
                          
							while($row = $query->fetch_assoc()){
                            $total=$row['total_amount'];
                           echo "
                           <div class='row'>
                           <h5 style='margin-left:200px' class='col-sm-4'> Payment Status:".$row['payment_status']."</h5>
                           <h5 class='col-sm-4'style='margin-left:100px'>Payable:".$row['total_amount']."</h5>";
                          
                            }

                        //for MySQLi OOP
                        $conn = new mysqli('127.0.0.1:3325', 'root', '', 'bgc');
                        if($conn->connect_error){
                           die("Connection failed: " . $conn->connect_error);
                        }
                        
                        
                        
							$sql = "SELECT * FROM transaction where id='$id'";

							//use for MySQLi-OOP
                            $query = $conn->query($sql);
                          
							while($row = $query->fetch_assoc()){
                                $amount=$row['amount'];

                            echo "
                            <tr>
          
                            <td  style='text-align:center'>".$row['id']."</td>
                            <td  style='text-align:center'>".$row['discount']."</td>
                            <td  style='text-align:center'>".$row['somoy']."</td>
                            <td  style='text-align:center'>".$row['amount']."</td>
                          
                         

       
    </tr>";
                          
                            
                            }

                                $tot=$total-$amount;
                              
                              echo "<h5 style='padding-left:450px;padding-bottom:20px'>Total Payable ".$tot."<h5> </div>"
                            ?>




</body>
</html>