<?php
session_start();


?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
   <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>
<body>

<?php
$q = intval($_GET['q']);
$con= mysqli_connect("127.0.0.1:3325","root","","bgc");
$id=$_SESSION['id'];

    $sql = "SELECT * FROM resultmain where studentid='$id' and semester = '$q' ";
//$sql="SELECT * FROM addresult  WHERE id='$id' and semester = '$q'";
//$sql="SELECT * FROM addresult WHERE semester = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table class='table table-bordered '>
<thead class='table bg-success text-light' >
<tr>


  <th >Course Name</th>
                            <th>Course Code</th>
                         
                           <th>Attendance</th>
                           <th>Class Test</th>
                           <th>Sessional</th>
                           <th>Mid</th>
                           <th>Final</th>
                           <th>Total</th>
                           <th>Grade</th>
                           <th>Status</th>

</tr>
</thead>
";
while($row = mysqli_fetch_array($result)) {

    echo "<tr>";

  

    echo "<td>" . $row['course_name'] . "</td>";
    echo "<td>" . $row['course'] . "</td>";
    echo "<td>" . $row['attendance'] . "</td>";
    echo "<td>" . $row['classtest'] . "</td>"; 
    echo "<td>" . $row['sessional'] . "</td>";
    echo "<td>" . $row['mid'] . "</td>";
        
   echo "<td> ".$row['final']."</td>";
   echo "<td> ".$row['total']."</td>";

    echo "<td>" . $row['grade'] . "</td>";






   echo "<td> ".$row['status']."</td>";


    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>