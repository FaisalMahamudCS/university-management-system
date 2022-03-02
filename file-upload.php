<?php
include "connection.php";
echo $uploadfile=$_FILES['uploadfile']['tmp_name'];
require 'PHPExcel_1.8.0_doc/Classes/PHPExcel.php';
require_once 'PHPExcel_1.8.0_doc/Classes/PHPExcel/IOFactory.php';
$objExcel=PHPExcel_IOFactory::load($uploadfile);
foreach($objExcel->getWorksheetIterator() as $worksheet)
{
$highestrow=$worksheet->getHighestRow();
for($row=0;$row<=$highestrow;$row++){
    echo $studentid=$worksheet->getCellByColumnAndRow(0,$row)->getValue();
    echo $name=$worksheet->getCellByColumnAndRow(1,$row)->getValue();
    echo $credit=$worksheet->getCellByColumnAndRow(2,$row)->getValue();
    echo $course_name=$worksheet->getCellByColumnAndRow(3,$row)->getValue();
    echo $course=$worksheet->getCellByColumnAndRow(4,$row)->getValue();
    echo $attendance=$worksheet->getCellByColumnAndRow(5,$row)->getValue();
    echo $classtest=$worksheet->getCellByColumnAndRow(6,$row)->getValue();
    echo $sessional=$worksheet->getCellByColumnAndRow(7,$row)->getValue();
    echo $midterm=$worksheet->getCellByColumnAndRow(8,$row)->getValue();
    echo $final=$worksheet->getCellByColumnAndRow(9,$row)->getValue();
    echo $total=$worksheet->getCellByColumnAndRow(10,$row)->getValue();
    echo $grade=$worksheet->getCellByColumnAndRow(11,$row)->getValue();

   // echo $name=$worksheet->getCellByColumnAndRow(1,$row)->getValue();
    echo $status=$worksheet->getCellByColumnAndRow(12,$row)->getValue();
    echo '<br>';

        


        $insert="insert into resultmain(studentid,name,credit,course_name,course,attendance,classtest,sessional,mid,final,total,grade,status) values('$studentid','$name','$credit','$course_name','$course','$attendance','$classtest','$sessional','$midterm','$final','$total','$grade','$status')";
        $inser=mysqli_query($conn,$insert);
        if($inser){
            echo "uploaded";
        }
        else{
            echo "failed";
        }
        
    }
}
?>