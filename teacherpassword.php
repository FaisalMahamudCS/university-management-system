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

    <h2>Changer password</h2>
    <form action="teacherpassaction.php" method="post">
    <div class="container">
    <div class="form-group">
            <div class="row">
<label for="" class='col-sm-4'>Email</label>
<input type="text" class='form-control col-sm-6'  placeholder='Enter your email' name='email' value="<?php if(isset($_POST['email']))
echo $_POST['email'];?>" ></div><br><br>
<div class="row">
<label for=""  class='col-sm-4'>Password</label>
<input type="password" class='col-sm-6 form-control' placeholder='Enter your password' name='password' value="<?php if(isset($_POST['email']))
echo $_POST['password'];?>" >
</div><br><br>
<div class="row">
<label for=""  class='col-sm-4'>New Password</label>
<input type="password" class='col-sm-6 form-control' placeholder='Enter your New password' name='password1' value="<?php if(isset($_POST['password1']))
echo $_POST['password1'];?>" >
</div><br><br>
<div class="row">
<label for=""  class='col-sm-4'>Confirm Password</label>
<input type="password" class='col-sm-6 form-control' placeholder='Confirm your password' name='password2' value="<?php if(isset($_POST['email']))
echo $_POST['password2'];?>" >
</div><br><br>



<input type="submit"  class='btn btn-success'  style="margin-left:500px;margin-top:80px" name='submit'>

</div>

    </form>
    </div> 
</body>
</html>
