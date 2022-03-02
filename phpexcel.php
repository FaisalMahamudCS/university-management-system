<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
<style>
li{
    list-style:none;
}
</style>
</head>
<body>
<?php
include "navteacher.php";
?>

    <div class="container " style="margin-top:100px">
        <div class="row">
            <div class="col-md-12">
                <h4>Excel file upload</h4>
                <form action="file-upload.php" method="post" enctype="multipart/form-data">

                <div class="form-group row">
                    <label for="" class="col-md-3">Select File</label>
                    <div class="col-md-8">
                        <input type="file" name="uploadfile" class="form-control" id="">

                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-md-3"></label>
                    <div class="col-md-8">
                        <input type="submit" name="submit" class="btn btn-primary">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>