<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" type = "text/css" href = "bootstrap.css" />
    <style>
    
    body{
		font-family: Verdana, Geneva, Tahoma, sans-serif;
		}
    
  fieldset.scheduler-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}

    legend.scheduler-border {
        font-size: 1.2em !important;
        font-weight: bold !important;
        text-align: left !important;
        width:auto;
        padding:0 10px;
        border-bottom:none;
    }
  </style>
    </style>
    <title>Document</title>
</head>
<body>


<div class="container">
<fieldset class="scheduler-border">
		<legend class="scheduler-border">Enroll In A Course</legend>
<form action="" method="post">


<div class="form-group pt-4">
<div class="row">
<label for="" class="col-lg-4">Enter Roll No</label>
<input type="text" id="rollNo"  onkeyup="getDetail(this.value)" class="form-control col-lg-6">
</div>
<br><br>
</div>
<div class="form-group">
<div class="row">
<label for="" class="col-lg-4">Enter Name </label>
<input type="text" id="studentName" class="form-control col-lg-6">
</div>


</div><br><br>
<div class="form-group">
<div class="row">
<label for="" class="col-lg-4">Enter Department Name</label>
<input type="text" id="department" class="form-control col-lg-6">
</div>
</div>
<br><br>


<div class="form-group">
<div class="row">
<label for="" class="col-lg-4">Enter Email</label>
<input type="text" id="email" class="form-control col-lg-6">
</div>

</div><br><br>



<div class='row'>
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


    


    <div class="row">
<label for="" class="col-sm-4">Select  Grade Letter</label>
<select name='' class='form-control col-sm-6' id='grade' style=''>
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




<span id="successMsg"></span>



<div class = "form-group">

							<button type = "button" id="addnew" onclick="a()" class = "btn btn-primary" style="margin-left:40px;margin-top:70px"><span class = "glyphicon glyphicon-plus"></span> Add</button>
                            
						</div>


</form>


</div>


</fieldset>
<script src = "jquery-3.1.1.js"></script>	
<script src = "bootstrap.js"></script>
<script>

function getDetail(str){
if(str.length==0){
   
    document.getElementById("studentName").value="";
    document.getElementById("department").value="";
    document.getElementById("email").value="";
   
    return
}
else{
    var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);

    document.getElementById("studentName").value = myObj[0];
    document.getElementById("department").value=myObj[1];
    document.getElementById("email").value=myObj[2];

  }
};




    xmlhttp.open("GET","search1.php?rollNo="+str,true);
    xmlhttp.send();
}
}






</script>
<script>

function a(){
    var grade=("#grade").val();
    var course=("#course").val();
    var course_name=("#course").text();
    var rollNo=$("#rollNo").val();
    var studentName=$("#studentName").val();
    var department=$("#department").val();
    var email=$("#email").val();
 
   
 $.ajax({
url:'addresult.php',
method:'POST',
data:{


    rollNo:rollNo,
    studentName:studentName,
    department:department,
    email:email,
    course:course,
    grade:grade,
    course_name:course_name,


    },
success:function(data){
 
    console.log(data);
    if(data =="OK"){
        $("#successMsg").html("<span clas='alert alert-success'>Registration successfull</span>");
    }
    else{
        $("#successMsg").html("<span class='alert alert-danger'>Registration unsuccessfull</span>");  
    }
}


 });
}

</script>
</fieldset>
</body>
</html>