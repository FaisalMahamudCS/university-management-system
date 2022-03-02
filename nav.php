
<style>
li{
  list-style:none;
}
.parallax {
    background: url(bgc2.jpg);
        background-position-x: 0%;
        background-position-y: 0%;
        background-attachment: scroll;
        background-size: auto;
    height: 775px;
    width: 100%;
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
}
p{
    text-align: center;
}
</style>
    
<link rel="stylesheet" href="dist/css/bootstrap.css">
<script src="jquery-3.1.1.js"></script>
    <script src="dist/js/bootstrap.js"></script>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   

</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-success fixed-top">

<a class="navbar-brand mr-1 btn btn-success" href="index.php"> BGCTUB</a>

<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
  <i class="fas fa-bars"></i>
</button>

<!-- Navbar Search -->
<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
  
</form>


<ul class="navbar-nav ml-auto ml-md-0">

  <li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
      <div class="dropdown-divider"></div>
      <a class="dropdown-item  btn btn-success" href="logout.php">Logout</a>
      
    </div>
  </li>
</ul>

<li class="nav-item">
  <a class="nav-link btn btn-success" href="enrollist.php">
    <i class="fas fa-fw fa-user  "></i>
    <span style="text-shadow: 0px 1px 5px black;">Enrolled Subjects</span></a>
</li>
  
<li class="nav-item">
    <a class="nav-link btn btn-success" href="passwordcng.php">
      <i class="fas fa-fw fa-user  "></i>
      <span style="text-shadow: 0px 1px 5px black;">Change Password</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link btn btn-success" href="transaction.php">
      <i class="fas fa-fw fa-user  "></i>
      <span style="text-shadow: 0px 1px 5px black;">transaction</span></a>
  </li>
<li class="nav-item">
    <a class="nav-link btn btn-success" href="result.php">
      <i class="fas fa-fw fa-user  "></i>
      <span style="text-shadow: 0px 1px 5px black;">Result</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link  btn btn-success" href="../syllebus.php">
      <i class="fas fa-fw fa-user  "></i>
      <span style="text-shadow: 0px 1px 5px black;">Syllabus</span></a>
  </li>
 
  <li class="nav-item">
    <a class="nav-link  btn btn-success" href="course.php">
      <i class="fas fa-fw fa-user  "></i>
      <span style="text-shadow: 0px 1px 5px black;">Enroll</span></a>
  </li>
 
  <li class="nav-item">
    <a class="nav-link  btn btn-success" href="assignstud.php">
      <i class="fas fa-fw fa-user  "></i>
      <span style="text-shadow: 0px 1px 5px black;">Assignment</span></a>
  </li>
 
  <li class="nav-item">
    <a class="nav-link  btn btn-success" href="quiz_home.php">
      <i class="fas fa-fw fa-user  "></i>
      <span style="text-shadow: 0px 1px 5px black;">Quiz</span></a>
  </li>
 




  <li class="nav-item">
  <a class="nav-link btn btn-success" href="logout.php">
    <i class="fas fa-fw fa-user  "></i>
    <span style="text-shadow: 0px 1px 5px black;">Logout</span></a>
</li>





</nav>