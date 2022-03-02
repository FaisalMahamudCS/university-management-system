
<!--#5FCF80 is color-->
<!DOCTYPE html>


<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js1/bootstrap.min.js"></script>
<script src="js1/custom.js"></script>
<script src="js1/jquery.easing.min.js"></script>
<script src="js1/jquery.min.js"></script>
<style>
    .mouse
    {
        transform: rotate(90deg);
        background-color: black;
    }
    .price-table:hover
    {
       box-shadow: 5px 5px 5px lightgrey, -5px 0px 5px lightgrey;
    }
   .modal-header
    {
        background-color:#5FCF80;
        
    }
    .mybutton {
  border-radius: 0px 40px 40px 0px;
  background-color: rgb(12, 100, 39);
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 10px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.mybutton span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.mybutton span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.mybutton:hover span {
  padding-right: 25px;
}

.mybutton:hover span:after {
  opacity: 1;
  right: 0;
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
</style>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BGCTUB</title>
  <link rel="stylesheet" type="text/css" href="css1/style.css">
  <link rel="stylesheet" href="css1/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="css1/font-awesome.min.css">


  <link rel="stylesheet" type="text/css" href="css1/imagehover.min.css">


</head>

<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand"   style="font-size: 50px;font-weight: bold !;" href="home.php"><span> BGCTUB</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#contactus">Contact Us</a></li>

      <?php
      
      session_start();
      if(isset($_SESSION['is_login'])){
        echo '
        <li><a href="studentportal.php">Student Profile</a></li>
        ';
      }
      else{
        echo '  <li><a href="studentlogform.php">Student Login </a></li>';
      }
      ?>      
          
          <li><a href="Teacherlogin.php">Teacher Login</a></li>
          <li><a href="adminprocess.php">admin</a></li>
          
          
          <li><a href="#" data-target="#login" data-toggle="modal">Log in</a></li>
          <li class="btn-trial"><a href="#" data-target="#signin" data-toggle="modal">Sign in</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->
  <!--Modal box-->
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">

      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title" style="color:white;">Login</h4>
        </div>
        <div class="modal-body padtrbl">

          <div class="login-box-body">
            <p class="login-box-msg">Log in to start your session</p>
            <div class="form-group">
              <form  id="loginForm" action="loginltc.php" method="get" >
                <div class="form-group has-feedback">
                  <!----- username -------------->
                  <input class="form-control" placeholder="Username" id="loginid" type="text" autocomplete="off" name="fname"/>
                  <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-user form-control-feedback" style="background-color: rgb(230,230,230);"></span>
                </div>
                <div class="form-group has-feedback">
                  <!----- password -------------->
                  <input class="form-control" placeholder="Password" id="loginpsw" type="password" autocomplete="off" name="pwd"/>
                  <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-lock form-control-feedback" style="background-color: rgb(230,230,230);"></span>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="checkbox icheck">
                      <label>
                                <input type="checkbox" id="loginrem" > Remember Me
                              </label>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button type="submit" class="btn btn-green btn-block btn-flat"  >Log In</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div id="para" class="parallax"></div>
  
  <section class="main-section"> 
     
     <div class="wrapper clearfix"> 

         <div class="main-col pull-left"> 
              
            <section class="elements-box"> 

                 <div class="row"> 

                     <div class="col-md-4 col-sm-6 mb-20"> 
                         <h2 class="elements-title" style="font-size:16px; text-transform:uppercase;text-shadow: 1px 1px #ccc;">Message from Founder and Chairman</h2>  
                         <blockquote class="kopa-blockquote-2" style="text-align:justify; min-height:430px;"> 
                         <span style="float:left; padding:0px 10px 0px 0px; margin:0px"> 
                             <img class="visible animated" src="13.jpg" style="border:#C49C29 5px solid; width:100px; height:125px"> 
                         </span> 
                          Ensuring education and health care facilities&nbsp; every individual are two of the major objectives to achieve by an ideal welfare state, obviously because every individual can expect to enjoy these two facilities as his or her basic right. Being imbued with the noble spirit of patriotism and the liberation war, I, along with my wife Hasna Ahmad, establishd &ldquo;Begum Gul Chemonara Trust&rdquo;- a philanthropic venture in 1982, in a place covering one hundred areas of land beside Chittagong-Cox&rsquo;s bazar Highway, which is only 34 km away from Chittagong city and named it after my late and benevolent mother with the only objectives of extending education </a>  
                         <div class="widget kopa-video-widget clearfix" style="margin-top:10px; margin-bottom:0px"> 
                             <ul class="older-post clearfix"> 
                                  
                                 <li> 
                                     <h6 class="entry-title" style="background-color:#D9EDF7; font-weight:bold"><a href="/php_files/contents/contents.php?cmd=page&contid=2" style="color:#000000"> Engr. Afsar Uddin Ahmad , <br>Chairman, Board of Trustees</a></h6> 
                                 </li> 
                             </ul> 

                         </div> 
                         </blockquote> 

                     </div> 
                     <!-- col-md-6 --> 

                     <div class="col-md-4 col-sm-6 mb-20"> 
                         <h2 class="elements-title" style="font-size:16px; text-transform:uppercase;text-shadow: 1px 1px #ccc;">Message from  Vice Chancellor</h2> 
                         <blockquote class="kopa-blockquote-2" style="text-align:justify; min-height:430px;"> 
                         <span style="float:left; padding:0px 10px 0px 0px; margin:0px"> 
                             <img class="visible animated" src="8060.jpg" style="border:#C49C29 5px solid; width:100px; height:125px"> 
                         </span> 
                          Welcome to BGC Trust University Bangladesh, a dynamic place for higher education. The university is the only rural based private university in the country situated at its own campus at the outskirts of Chittagong port city popularly known as  BGC Biddyanagar, Chandanaish, Chittagong  with all modern campus facilities.  

The university is committed to achieving academic excellence in research and academic scholastic.  
&nbsp;  
The university was founded by a philanthropist Engr. Afsar Uddin Ahmad who has a commitment to the soil as a front line freedom fighter to provide education and to develop individuals, entrepreneurs to face the challenge of globalization.</a> 
                         <div class="widget kopa-video-widget clearfix" style="margin-top:10px; margin-bottom:0px"> 
                             <ul class="older-post clearfix"> 
                                  
                                 <li> 
                                     <h6 class="entry-title" style="background-color:#D9EDF7; font-weight:bold"><a href="bgc/13.jpg" style="color:#000000"> Professor Dr. Saroj Kanti Singh Hazari<br>Vice chancellor </a></h6> 
                                 </li> 
                             </ul> 

                         </div> 
                         </blockquote> 

                     </div> 
                     <div class="col-md-4 col-sm-6 mb-20"> 
                         <h2 class="elements-title" style="font-size:18px; text-transform:uppercase;text-shadow: 1px 1px #ccc;">Why Study at BGCTUB</h2> 
                         <blockquote class="kopa-blockquote-2" style="text-align:justify; min-height:430px; "> 
                          <div class="entry-thumb"> 
                                                                         <a href="#"><img src="" alt="" style="border:#C49C29 5px solid; margin-top:10px;  margin-bottom:10px" /></a> 
                                                                     </div> 
                             

The establishment of BGC Trust University Bangladesh is a decisive step towards transformation of mere human population into human resources in terms of knowledge, skill and diversification. BGC Trust University is committed to achieve excellence in research and academic scholastic. In order to maximize the resources available for learning, teaching and research, the University has developed a collaborative links with other educational institutions with global reputation.  

BGC Trust University is attested with the highest level of accreditation. It is approved by the Government, Ministry of Education and University Grants Commission (UGC) of Banglade..</a> 


                     </blockquote> 

                     </div> 
                     <!-- col-md-6 --> 
                      
                 </div> 

             </section>  
<div class="container">
<h3>Fee Structure:Undergraduate</h3>
<table class="table table-bordered ">
<tr>
<thead class='bg-primary'>
<th>

Programs</th>
<th>Cost Per Month</th>
<th>Total</th>
</thead>
</tr>

<tr>
<td>B.S.C(Hon's) in CSE</td>
<td>5313/-</td>
<td>2,90,000/-</td>
</tr>
<tr>
<td>LLB(Hon's)</td>
<td>5521/-</td>
<td>2,80,000/-</td>
</tr>
<tr>
<td>BA(Hon's) in English</td>
<td>3854/-</td>
<td>2,00,000</td>


</tr>
<tr>
<td>BBA</td>
<td>5313/-</td>
<td>2,70,000</td>


</tr>
<tr>
<td>BPharm</td>
<td></td>
<td></td>


</tr>
</table>
</div>


<div class="container mt-5">

<div class="card-deck">
<?php

$con = mysqli_connect('127.0.0.1:3325','root','','bgc');
$sql="SELECT * from skill limit 3";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)){
$course_id=$row['id'];
echo '


<a href="#" class="btn" style="text-align:left;padding:0px;margin:0px">
<div class="card">
<img src="../'.$row['picture'].'" class="card-img-top" height="300px" width="300px">
<div class="card-body">
<h5 class="text-center">'.$row['course_name'].'</h5>
<p class="card-text">'.$row['course_desc'].'</p>
</div>
<div class="card-footer">
<p class="card-text d-inline"><span class="font-weight-bolder">'.$row['Price'].'<span> </p>
<a class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>

</div>
</div>
</a>

</div>
</div>
';

}
?>

</div>
</div>

<?php

?>

<div class="container">

<div class="card-deck">
<?php

$con = mysqli_connect('127.0.0.1:3325','root','','bgc');
$sql="SELECT * from skill limit 3";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)){
$course_id=$row['id'];
echo '


<a href="#" class="btn" style="text-align:left;padding:0px;margin:0px">
<div class="card">
<img src="../'.$row['picture'].'" class="card-img-top" height="300px" width="300px">
<div class="card-body">
<h5 class="text-center">'.$row['course_name'].'</h5>
<p class="card-text">'.$row['course_desc'].'</p>
</div>
<div class="card-footer">
<p class="card-text d-inline"><span class="font-weight-bolder">'.$row['Price'].'<span> </p>
<a class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>

</div>
</div>
</a>


';

}
?>

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
