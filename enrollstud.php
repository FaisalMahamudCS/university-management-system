<!DOCTYPE html>
<html>
<head>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="bootstrap.js"></script>
<script src="jquery-3.1.1.js"></script>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);


include "connection.php";

mysqli_select_db($conn,"ajax_demo");
$sql="SELECT * FROM profile WHERE id = '".$q."'";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {

?>



   




    <div class="form-group">
    <form action="" method="post">
          
<div class="row">
<label for=""  class='col-sm-4 ml-4'>Email</label>
<input type="email" class='col-sm-6 form-control' placeholder='Email' name='email' id='email' value='<?php echo $row['email']; ?>'>
</div><br><br>
<div class="row">
<label for="" class='col-sm-4 ml-4'>Department</label>
<input type="text" class='form-control col-sm-6'  placeholder='Department' name='department' id='department' value='<?php echo $row['department']; ?>' ></div><br><br>
<?php
}

?>
 <div class='row'>
    <label for='' id='' class='col-sm-4 ml-4'>Language</label>
    <select name='' class='form-control col-sm-6' id='language' style=''>
<?php

$sql="SELECT * FROM savecourse";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {
  

?>

    <option value='<?php echo $row['id']; ?>'><?php echo $row['name']; ?></option>
    <?php
}
?>
    </select>
    </div><br><br>

<div class="row">
<label for="" class="col-sm-4 ml-4">Date</label>
<input type="date" class="form-control col-sm-6" id='date'  name="date">

</div>
<input type="submit" name="submit" id="submit" value="submit" class="btn btn-success" style="margin-left:400px;margin-top:100px">

<br><br>
</form>

<?php

?>
<script>

$(document).ready(function(){

		//Add New
		$(document).on('click', '#submit', function(){
		
		
			$name=$('#name').val();
			$email=$('#email').val();	
			$department=$('#department').val();
            $language=$('#language').val();
			$date=$('#date').val();
				
				$.ajax({
					type: "POST",
					url: "addnew.php",
					data: {
                        name: $name,
                        email:$email,
                        department:$department,
                        language:$language,
                        date:$date,
						add: 1,
					},
					success: function(){
						//showUser();
                        alert('successfull');
					}
				});
			}
		});

</script>
</body>
</html>