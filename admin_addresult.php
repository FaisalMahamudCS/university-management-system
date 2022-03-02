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
<div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
             
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><img src="images/logo-img.png" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        
                        <!-- End Messages -->
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        
                        <!-- Messages -->
                        
                        <!-- Profile -->
                      
                    </ul>
                </div>
            </nav>
        </div>
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Add New  Result</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active"><a href="admin_student_details.php">Student Details</a></li>
                        <li class="breadcrumb-item active"><a href="add_stud.php">Add New Student</a></li>
                    </ol>
                </div>
            </div>
<div class="container-fluid">
                


                <div class="row">
                    
                     <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                
                                
                                <form method="post" action="" enctype="multipart/form-data">




                                <div class="form-group pt-4">
<div class="row">
<label for="" class="col-lg-4">Enter Roll No</label>
<input type="text" id="rollNo" name="id" class="form-control col-lg-6">
</div>
<br><br>
</div>
<div class="form-group">
<div class="row">
<label for="" class="col-lg-4">Enter Name </label>
<input type="text" id="studentName" name="name" class="form-control col-lg-6">
</div>


</div><br><br>
<div class="form-group">
<div class="row">
<label for="" class="col-lg-4">Enter Department Name</label>
<input type="text" id="department" name="department" class="form-control col-lg-6">
</div>
</div>
<br><br>

<div class="form-group">
<div class="row">
<label for="" class="col-lg-4">Enter Semester</label>
<input type="text" id="semester" name="semester" class="form-control col-lg-6">
</div>
</div>
<br><br>

<div class="form-group">
<div class="row">
<label for="" class="col-lg-4">Enter Email</label>
<input type="text" id="email" name="email" class="form-control col-lg-6">
</div>
</div>
<br><br>

<!--<div class='row'>
    <label for='' id='' class='col-sm-4'>Course</label>
    <select name='' class='form-control col-sm-6' id='course' style=''>
<?php

$con =  mysqli_connect('127.0.0.1:3325','root','','bgc');
$sql="SELECT * FROM savecourse";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {
  

?>

    <option value='<?php echo $row['code']; ?>'><?php echo $row['name']; ?></option>
    <?php
}
?>
    </select>
    </div><br><br>


-->


    <div class="row">
<label for="" class="col-sm-4">Select  Grade Letter</label>
<select name='grade' class='form-control col-sm-6' id='grade' style=''>
<option value="4.00">A+</option>
<option value="3.75">A</option>
<option value="3.50">A-</option>
<option value="3.25">B+</option>
<option value="3.00">B</option>
<option value="2.75">B-</option>
<option value="2.50">C+</option>
<option value="2.25">C</option>
<option value="2.00">C-</option>
<option value="1.75">D+</option>
<option value="1.50">D</option>
<option value="1.25">D-</option>
<option value="0.00">F</option>
</select>
</div>

<br><br>


<div class="row">
<label for='' id='' class='col-sm-4'>Course</label>
    <select name='course' class='form-control col-sm-6' id="course" style=''>
    <option value="1">dbmm</option>
    
    <option value="CSE55">AI</option>
    
    <option value="CSE3302">c++</option>
    
    <option value="CSE3102">python 3</option>
    
    <option value="CSE2204">java</option>
    
    <option value="CSE1101">C</option>
    
    <option value="CSE2203">DBMS</option>
    
    <option value="cse2204">c++</option>
</select>
</div>








                                    <br>
                                    
    <div class="row">
<label for="" class="col-sm-4">Select Department</label>

 
    <select name='' class='form-control col-sm-6 ' id='language' name="department" style='' >
<?php

$con =  mysqli_connect('127.0.0.1:3325','root','','bgc');
$sql="SELECT * FROM department";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {
  

?>

    <option value='<?php echo $row['name']; ?>'><?php echo $row['name']; ?></option>
    <?php
}
?>
    </select>
    




                                  
                                    <input class="btn btn-block btn-success" type="submit" name="add" value="Add">

                                </form>
                            </div>
                    
                </div>
</div>

                
                

<?php 
$conn = mysqli_connect('127.0.0.1:3325','root','','bgc');

      if(isset($_POST['add']))
      {
          $id=$_POST['id'];
        $name=$_POST['name'];
    

        //$telephone=$_POST['telephone'];
        $semester=$_POST['semester'];
        $department=$_POST['department'];
        $email=$_POST['email'];
        $grade=$_POST['grade'];
        //$password=$_POST['password'];
$course=$_POST['course'];
         
         
       $insert_teacher = "insert into profile(id,name,department,email,,department,password) values('$id','$name','$telephone','$teacher_image','$semester','$department','$password')";
        if($run_insert_teacher = mysqli_query($conn,$insert_teacher)){
            echo "<script>
                alert('Student Inserted Successfully !!');
                window.open('adminprocess.php','_self')
            </script>";
        }

        
        else{
           echo "<script>alert('Student is already in database !!');</script>";
        }
      }

 ?>
</body>
</html>