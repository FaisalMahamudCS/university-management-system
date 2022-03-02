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
<?php
include 'navmain.php';
?>

<p>download</p><a id="downloadlink" href="sql.pdf" target="_blank" type="application/octet-stream" download="sql.pdf">Click</a>
    <?php
include "connection.php";


$sql="SELECT * FROM department";
$result = mysqli_query($conn,$sql);

echo "<table class='table table-striped table-bordered'>
<tr>

<th>No.</th>
<th>Name</th>
<th>Admission</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['code'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";

echo "<td><p></p><a id='downloadlink'class='btn btn-success' href='sql.pdf' target='_blank' type='application/octet-stream' download='sql.pdf'>download Application</a></td>";
  
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>