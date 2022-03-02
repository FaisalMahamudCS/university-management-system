
<!DOCTYPE html>
<head>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<style>
  fieldset.scheduler-border {
    border: 2px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}

    legend.scheduler-border {
        font-size: 2.2em !important;
        font-weight: bold !important;
        text-align: left !important;
        width:auto;
        padding:0 10px;
        border-bottom:none;
    }
  </style>


</style>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","enrollstud.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

</head>
<body>

<form>

<!--<div class="container"  style="border:2px solid black;margin-top:100px;padding-top:56px">-->

<div class="container" style="padding:10px 10px;">
 
	<fieldset class="scheduler-border">
		<legend class="scheduler-border">Register Student</legend>
		


<div class="row">
<p style="height:10px;width:100px;margin-top:10px;margin-left:35px">Enter id</p>
<select name="users" class="  form-control"  style="margin-left:390px;position:absolute;margin-top:0px;width:560px" onchange="showUser(this.value)">
<option value="">Enter Name</option>
</div>


<?php
include "connection.php";

$sql = "SELECT * FROM profile";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {


?>


<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
$id=$row['id'];
$_SESSION['id']=$id;
echo $

<?php }?>

  </select><br><br><br>
</form>
</div>

<br>

<div id="txtHint"></div>
</form>
	</fieldset>
</body>
</html>