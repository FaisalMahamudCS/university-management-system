<?php
  // Create database connection
  $conn = new mysqli('127.0.0.1:3325', 'root', '', 'bgc');
                        if($conn->connect_error){
                           die("Connection failed: " . $conn->connect_error);
                        }

  // Initialize message variable


  // If upload button is clicked ...
  if (isset($_POST['submit'])) {
	  // Get image name
	  $id=$_POST['id'];
	
	  $name=$_POST['name'];
	  $email=$_POST['email'];
	  $password=$_POST['password'];
	  $confirm=$_POST['confirm'];
  	$picture= $_FILES['picture']['name'];
$sign=$_FILES['sign']['name'];

	  // Get text
 

  	// image file directory
      $target =basename($image);
     // $target="C:/xampp/htdocs/dashboard/working_file/".basename($image);
      $target=basename($image);
  	$sql = "INSERT INTO image(id,name,email,password,confirm,sign,picture ) VALUES ('$id','$name','$email','$password','$confirm','$picture',$sign')";
  	// execute query
  	mysqli_query($db, $sql);
	  if (move_uploaded_file($_FILES['picture']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
		echo $msg;
	}else{
		$msg = "Failed to upload image";
	}



  	if (move_uploaded_file($_FILES['sign']['tmp_name'], $target)) {
		  $msg = "Image uploaded successfully";
		  echo $msg;
  	}else{
  		$msg = "Failed to upload image";
  	}
  }  

 ?>
</body>
</html>
