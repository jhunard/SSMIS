<?php
include 'conn.php';

$db_name = $_POST["name"];
$sr_code= $_POST["sr_code"];
$year_level=$_POST["year_level"];
$department=$_POST["department"];
$program=$_POST["program"];
$id=$_POST["id"];


$sql = "UPDATE student_record SET name ='$db_name' ,year_level ='$year_level',department='$department',program='$program'  WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>
    alert ('Update Successfully!'); 
    window.location.href='../guidance/student-record-view.php?sr-code=".$sr_code."&id=".$id."';</script>";
} else {
    echo "<script type='text/javascript'>
    alert ('Update Failed!'); 
    window.location.href='../guidance/student-information.php';</script>";
}

$sql2 = "UPDATE guidance_log SET name ='$db_name' ,year_level ='$year_level',department='$department',program='$program'  WHERE sr_code='$sr_code'";

if ($conn->query($sql2) === TRUE) {
    
} else {
   
}

?>