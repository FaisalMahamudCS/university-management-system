<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php 
    include "navadmin.php";
    ?>
    <div class="card">
<form action="studentportal.php" style="margin-top:100px" method="post">
    <div class="container">
    <div class="form-group">
        <h4 style="" class="text-center p-4">Save Course</h4>
            <div class="row">
<label for="" class='col-sm-4'>Code</label>
<input type="text" class='form-control col-sm-6'  placeholder='Enter course code' name='code'></div><br><br>
<div class="row">
<label for=""  class='col-sm-4'>Name</label>
<input type="text" class='col-sm-6 form-control' placeholder='Enter Name' name='name'>
</div><br><br>
<div class="row">
<label for="" class='col-sm-4'>Credit</label>
<input type="text" class='form-control col-sm-6'  placeholder='Enter credit' name='credit'></div><br><br>
<div class="row">
<label for=""  class='col-sm-4'>Description</label>
<input type="password" class='col-sm-6 form-control' placeholder='Enter Description' name='description'>
</div><br><br>

<input type="submit"  class='btn btn-success'  style="margin-left:500px;margin-top:80px" name='submit'>

</div>

    </form>  

    </div>
</body>
</html>