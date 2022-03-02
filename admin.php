<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body >
    <form action="adminprocess.php" method="post">
    <div class="container card  " style="margin-top:150px">
    <div class="form-group">
            <div class="row" style="margin-top:100px">
<label for="" class='col-sm-4'>ID</label>
<input type="text" class='form-control col-sm-6'  placeholder='Enter your id' name='id'></div><br><br>
<div class="row">
<label for=""  class='col-sm-4'>Password</label>
<input type="password" class='col-sm-6 form-control' placeholder='Enter your password' name='password'>
</div>
<input type="submit"  class='btn btn-success'  style="margin-left:500px;margin-top:80px" name='submit'>

</div>

    </form>
    </div> 
</body>
</html>