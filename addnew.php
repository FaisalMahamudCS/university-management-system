<?php
	
//MySQLi Procedural
$conn = mysqli_connect("127.0.0.1:3325","root","","bgc");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
	if(isset($_POST['add'])){
$name=$_POST['name'];
$email=$_POST['email'];
$department=$_POST['department'];
$language=$_POST['language'];
$date=$_POST['date'];
	
		
		mysqli_query($conn,"insert into enroll(name,email,department,language,date) values ('$name', '$email','$department','$language','$date')");
		
	}
?>