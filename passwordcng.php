
<form action="" method="post">
<label for="">Recover Email

</label>
<input type="email" name="email" >
<input type="submit" name="submit">
</form>
<?php
include "connection.php";
if(isset($_POST['submit'])){
    $tomail=$_POST['email'];
 
    $query="SELECT * FROM student_account where email='$tomail'";
    $result=mysqli_query($connection,$query);
    $count=mysqli_num_rows($result);
    if($count>0){
       while($row=mysqli_fetch_assoc($result)){
           $rec_password=$row['password'];
 $subject="Password Recovery";          
$body="Your password is :$rec_password";
$headers="From:fmfahim1203@gmail.com";
if(mail($tomail,$subject,$body,$headers)){
    echo "Password sent to".$toemail;
}
else{
    echo "Password recover fail";
}

       } 
       
    }
    else{
        echo "YOur email not match";
    }
}

?>






