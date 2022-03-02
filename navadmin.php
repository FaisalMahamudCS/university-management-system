
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="STUDENT" content="">
    <style>
    li{
      list-style-type: none;
    }
    .card {
    background: #ffffff none repeat scroll 0 0;
    margin: 15px 0;
    padding: 20px;
    border: 0 solid #e7e7e7;
    border-radius: 5px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
}
.p-30 {
    padding: 30px !important;
}
.media {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
}
.color-danger, .text-danger {
    color: #fc6180;
}
.f-s-40 {
    font-size: 40px !important;
}
.media-text-right {
    text-align: right;
}
.media-body {
    vertical-align: middle;
}
.media-body {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
}
.bg-success{
    background-color: green;
}
    </style>

    <title>Admin Panel</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

 
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-success fixed-top">

      <a class="navbar-brand mr-1 btn btn-success" href="adminprocess.php"> Admin Panel</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        
      </form>

      <ul class="navbar-nav ml-auto ml-md-0">
      
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout.php">Logout</a>
            
          </div>
        </li>
      </ul>
      <li class="nav-item">
          <a class="nav-link btn btn-success" href="admin.php">
           
            <span style="text-shadow: 0px 1px 5px black;">Admin</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-success" href="add_notice.php">
           
            <span style="text-shadow: 0px 1px 5px black;">Add Notice </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link  btn btn-success" href="edit_notice.php">
            <i class="fa fa-dashboard  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Edit Notice</span></a>
        </li>
      <li class="nav-item">
          <a class="nav-link   btn btn-success" href="admin_teacher_details.php">
            <i class="fas fa-chalkboard-teacher"></i>
            <span style="text-shadow: 0px 1px 5px black;">Teacher details</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link   btn btn-success" href="admin_student_details.php">
            <i class="fa fa-graduation-cap  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Student details</span></a>
        </li>
           
        <li class="nav-item">
          <a class="nav-link  btn btn-success" href="logout.php">
            <i class="fa fa-save"></i>
            <span style="text-shadow: 0px 1px 5px black;">logout</span></a>
        </li>
      
       
        
        <li class="nav-item">
          <a class="nav-link  btn btn-success" href="phpexcel.php">
            <i class="fa fa-list-alt "></i>
            <span style="text-shadow: 0px 1px 5px black;">Result System</span></a>
        </li>
 <li class="nav-item">
          <a class="nav-link  btn btn-success" href="enroll.php">
            <i class="fa fa-user-plus"></i>
            <span style="text-shadow: 0px 1px 5px black;">Enroll student</span></a>
        </li>
 <li class="nav-item">
          <a class="nav-link  btn btn-success" href="savecourse.php">
            <i class="fa fa-save"></i>
            <span style="text-shadow: 0px 1px 5px black;">Save Course</span></a>
        </li>
 
        
    </nav>
