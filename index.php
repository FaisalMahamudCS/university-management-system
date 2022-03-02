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
    </style>

    <title>BGC TRUST  UNIVERSITY INFORMATION SYSTEM</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">



  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.php"> BGCTUB</a>

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
            <a class="dropdown-item" href="logout.php">Logout</a>
            
          </div>
        </li>
      </ul>
      <li class="nav-item">
          <a class="nav-link" href="admin.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Admin</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Teacherlogin.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Teacher Login</span></a>
        </li>
      <li class="nav-item">
          <a class="nav-link btn btn-primary button-group" href="department.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Admission</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-success" href="studentlogform.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Student Login</span></a>
        </li>
      <li class="nav-item">
          <a class="nav-link btn btn-success" href="department.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Department</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Register.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Register</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="section.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Report Problem</span></a>
        </li>
      <li class="nav-item">
          <a class="nav-link" href="section.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Live Chat</span></a>
        </li>
        
    </nav>
<div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav" style="background-image: linear-gradient(#009999, #014923);">
        <li class="nav-item">
          <a class="nav-link"href="index.php">
            <i class="fas fa-fw fa-home"></i>
            <span style="text-shadow: 0px 1px 5px black;">Home</span>
          </a>
        </li>
       <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw  fa-cloud"></i>
            <span>SERVICES</span>
         </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item " href="urns.php">URNS</a> 
            <a class="dropdown-item " href="caskets.php">CASKETS</a>
            <a class="dropdown-item " href="vehicles.php">VEHICLES</a>
          </div>-->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Syllebus.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Syllebus</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../skill.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Skill Set</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../teachers.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Teachers</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="section.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Notice Board</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="student.php">
            <i class="fas fa-fw fa-users  "></i>
            <span style="text-shadow: 0px 1px 5px black;">STUDENT Login</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="course.php">
            <i class="fas fa-fw fa-users    "></i>
            <span style="text-shadow: 0px 1px 5px black;">Teacher Login</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="section.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Video Tutorial </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="section.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Course</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="section.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Live Class</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="votereg.php">
            <i class="fas fa-fw fa-users  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Register for online vote</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="student.php">
            <i class="fas fa-fw fa-users  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Assignment</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="course.php">
            <i class="fas fa-fw fa-users    "></i>
            <span style="text-shadow: 0px 1px 5px black;">Enroll Course</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gamespace.html">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Game Space</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="section.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Online Examination</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="section.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Resourses</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="student.php">
            <i class="fas fa-fw fa-users  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Assignment</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="course.php">
            <i class="fas fa-fw fa-users    "></i>
            <span style="text-shadow: 0px 1px 5px black;">Enroll Course</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="section.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Learn Language</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="section.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Online Examination</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="section.php">
            <i class="fas fa-fw fa-user  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Resourses</span></a>
        </li>







        <li class="nav-item">
          <a class="nav-link" href="attendance.php">
            <i class="fas fa-fw fa-users  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Attendance</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="enrollment.php">
            <i class="fas fa-fw fa-users  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Enrollment</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="schedule.php">
            <i class="fas fa-fw fa-users  "></i>
            <span style="text-shadow: 0px 1px 5px black;">Schedule</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    
    


 
  <div class="card-deck">
    <div class="card bg-secondary text-light" style="width:250px">
   
      <div class="card-body text-center">
        <p class="card-text"><br>
        Dailly Updates
        </p>
      
      </div>
    </div>
    <div class="card bg-primary text-light" style="width:250px">
   
   <div class="card-body text-center">
     <p class="card-text">Live Class<br>
  Do your class online
     </p>
   
   </div>
 </div>
 <div class="card bg-success text-light" style="width:250px">
   
   <div class="card-body text-center">
     <p class="card-text text-light">Live Chat</h3>
     <br>
   Group Study 
     </p>
   
   </div>
 </div>
 <div class="card bg-secondary text-light" style="width:250px">
   
   <div class="card-body text-center">
   <i class="fas fa-fw fa-user  "></i>
     <p class="card-text">Student Login<br>
     Dailly Updates
     </p>
   
   </div>
 </div>
   
  </div>


  <div class="card-deck">
    <div class="card bg-secondary mt-4 text-light" style="width:250px">
   
      <div class="card-body text-center">
        <p class="card-text">Video Tutorial<br>
      Show online Tutorial Based on your course.
        </p>
      
      </div>
    </div>
    <div class="card bg-warning mt-4" style="width:250px">
   
   <div class="card-body text-center " style="">
     <p class="card-text">Assignment<br>
     Submit Assignment ,Classwork
     </p>
   
   </div>
 </div>
 <div class="card bg-primary mt-4 text-light" style="width:250px">
   
   <div class="card-body text-center">
     <p class="card-text">Change Your Certificate <br>
 names
     </p>
   
   </div>
 </div>
 <div class="card bg-success mt-4 text-light" style="width:250px">
   
   <div class="card-body text-center">
     <p class="card-text">Report Your Objection<br>
  
     </p>
   
   </div>
 </div>
   
  </div>


  <div class="card-deck">
    <div class="card bg-secondary mt-4 text-light" style="width:250px">
   
      <div class="card-body text-center">
        <p class="card-text">Enroll Course<br>
      Enroll your course.
        </p>
      
      </div>
    </div>
    <div class="card bg-warning mt-4" style="width:250px">
   
   <div class="card-body text-center " style="">
     <p class="card-text">Resourse<br>
    Access Your Resourses
     </p>
   
   </div>
 </div>
 <div class="card bg-light mt-4" style="width:250px">
   
   <div class="card-body text-center">
     <p class="card-text">Online Exam<br>
   Do your exam online
     </p>
   
   </div>
 </div>
 <div class="card bg-success mt-4 text-light" style="width:250px">
   
   <div class="card-body text-center">
     <p class="card-text">Teacher Login<br>
    Upload Tutorial Class materials
     </p>
   
   </div>
 </div>
   
  </div>


  <div class="card-deck">
    <div class="card bg-secondary mt-4 text-light" style="width:250px">
   
      <div class="card-body text-center">
        <p class="card-text">SSC,JSC improvement Form<br>
      
        </p>
      
      </div>
    </div>
    <div class="card bg-warning mt-4 " style="width:250px">
   
   <div class="card-body text-center " style="">
     <p class="card-text">Dailly Attendance<br>

     </p>
   
   </div>
 </div>
 <div class="card bg-light mt-4" style="width:250px">
   
   <div class="card-body text-center">
     <p class="card-text">Quora<br>
Ask Your Own Question From Teachers
     </p>
   
   </div>
 </div>
 <div class="card bg-success mt-4" style="width:250px">
   
   <div class="card-body text-center">
     <p class="card-text">Teacher Panel<br>
 
     </p>
   
   </div>
 </div>
   
  </div>




    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

  </body>

</html>
