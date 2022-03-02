
<?php
session_start();

// Create connection

include "connection.php";

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $password=$_POST['password'];
    $_SESSION['id']=$id;
    $_SESSION['islogin']=true;
   // echo $password;
    //echo $id;

$query="SELECT * from profile where id='$id' && password='$password'";
$connected=mysqli_query($conn,$query);
$row_count=mysqli_num_rows($connected);
if($row_count){
  
header("location:studentportal.php");

    echo "welcome success";
}


}


?>



<?php
include 'nav.php';
?>
<div style="padding-left:16px">
  

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


      
<?php
                        
                        //for MySQLi OOP
                        $conn = new mysqli('127.0.0.1', 'root', '', 'bgc');
                        if($conn->connect_error){
                           die("Connection failed: " . $conn->connect_error);
                        }
                        
                        $_SESSION['id']=$id;
							$sql = "SELECT * FROM profile where id='$id'";

							//use for MySQLi-OOP
                            $query = $conn->query($sql);
                          
							while($row = $query->fetch_assoc()){


                            echo "
                            <div class='container'>
 
                            <div class='card' style='width:700px ;margin-left:300px'>
                            
                          
    <img class='card-img-top' src='".$row['picture']."' alt='Card image'style='height:300px;width:700px;'>
    <div class='card-body '>
      <h4 class='card-title text-center'>Name :".$row['name']."</h4>
      <p class='card-text'>Student Id: ".$row['id']."</p>
    
      <p class='card-text'>Phone NO: ".$row['telephone']."</p>
      <p class='card-text'>Semester: ".$row['semester']."</p>
      <p class='card-text'>Department: ".$row['department']."</p>
     
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