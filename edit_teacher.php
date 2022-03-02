<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
include "navadmin.php";
?>
<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Edit Teacher Details</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active"><a href="admin_teacher_details.php">Teacher Details</a></li>
                        <li class="breadcrumb-item active"><a href="#">Edit Teacher</a></li>
                    </ol>
                </div>
            </div>
<div class="container-fluid">
                

                <div class="row">
                    
                     <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <?php
                          
include "connection.php";

$teacher_id = $_GET['teacher_id'];
$get_teachers_data = "select * from teach where id = '$teacher_id'";
$run_teachers_data = mysqli_query($conn,$get_teachers_data);
$row_teachers_data = mysqli_fetch_array($run_teachers_data);


?>
                                
                                <h4 class="card-title">Edit Teacher '<?php echo $row_teachers_data['teachername']; ?>'</h4>
                                <h6 class="card-subtitle">You can edit this Teacher here</h6>
                                
                                <form method="post" action="" enctype="multipart/form-data">
                                    
                                <p>Name</p>
                                    <input class="input form-control" placeholder="Enter  Name" type="text" name="name" value="<?php echo $row_teachers_data['name']; ?>" required><br>
                                    <p>Teacher Name</p>
                                    <input class="input form-control" placeholder="Enter Teacher Name" type="text" name="teacher_name" value="<?php echo $row_teachers_data['teachername']; ?>" required >
                                   <br>
                                    <p>Style</p>
                                    <input class="input form-control" placeholder="Enter Style Name" type="text" name="style" value="<?php echo $row_teachers_data['Style']; ?>" required>
                                   
                                    <br>
                                    <p>Qualification</p>
                                    <input class="input form-control" placeholder="Enter Style Name" type="text" name="qualification" value="<?php echo $row_teachers_data['qualification']; ?>" required>
                                   
                                    <br>
                                    <center>
                                    <img width="100" src="<?php echo $row_teachers_data['photo']; ?>">
                                    </center>
                                    <p>Select New Image (only select if you want to change)</p>
                                    <input class="input form-control" type="file" name="teacher_image" >
                                    <br>
                                    <p>Teacher Email</p>
                                    <input class="input form-control" placeholder="Enter Teacher Email" type="email" name="teacher_email"  value="<?php echo $row_teachers_data['gmail']; ?>" required>
                                    <br>
                                    <p>Teacher Password</p>
                                    <input class="input form-control" placeholder="Enter Teacher Password" type="password" value="<?php echo $row_teachers_data['password']; ?>" name="teacher_pass" required>
                                    <br>
                                    <input class="btn btn-block btn-success" type="submit" name="update" value="Update">

                                </form>
                            </div>
                    
                </div>
</div>

                

<?php 


      if(isset($_POST['update']))
      {
          $style=$_POST['style'];
          $qualifiacation=$_POST['qualification'];
          $name=$_POST['name'];
        $teacher_email = $_POST['teacher_email'];
        $teacher_pass = $_POST['teacher_pass'];
        $teacher_name = $_POST['teacher_name'];
        

       if($_FILES['teacher_image']['name'] == '')
       {
           $teacher_image = '';
       }
       else{
            
        $teacher_image = $_POST['teacher_image'];
            $teacher_image = $_FILES['teacher_image']['name'];
            $teacher_image = preg_replace("/\s+/","_",$teacher_image);
            $image_tmp = $_FILES['teacher_image']['tmp_name'];
            $teacher_image_ext = pathinfo($teacher_image,PATHINFO_EXTENSION);
      $teacher_image = pathinfo($teacher_image,PATHINFO_FILENAME);
      
      $teacher_image = $teacher_image."_".date("mjYHis").".".$teacher_image_ext;
      
            move_uploaded_file($image_tmp,"$teacher_image");
       }

       

      $update_teachers = "update teach set name = '$name' ,Style='$style',qualification='$qualifiacation',password='$teacher_pass', gmail='$teacher_email' , teachername = '$teacher_name'  where id= '$teacher_id'";
      if($run_update_teachers = mysqli_query($conn,$update_teachers)){
          echo "<script>
              alert('Teacher Edited Successfully !!');
              window.open('admin_teacher_details.php','_self')
          </script>";
      }
    }



 ?>
</body>
</html>