<?php
include 'conn.php';

$srcode = $_POST["srcode"];
$fname = $_POST["fname"];
$mname = $_POST["mname"];
$lname = $_POST["lname"];
$yearlevel = $_POST["yearlevel"];
$program = $_POST["program"];
$department = $_POST["department"];
$status = $_POST["status"];
$offense = $_POST["offense"];
$offensetype = $_POST["offensetype"];
$datestarted = date("m-d-Y");

$lastyear= date("y") + 1;
$school_year= date("y")."-".$lastyear;

$now_month = date("F");
$month_list = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
if($now_month == $month_list[0]){
    $quarter="second";
}
if($now_month == $month_list[1]){
    $quarter="second";
}
if($now_month == $month_list[2]){
    $quarter="second";
}
if($now_month == $month_list[3]){
    $quarter="second";
}
if($now_month == $month_list[4]){
    $quarter="second";
}
if($now_month == $month_list[5]){
    $quarter="summer";
}
if($now_month == $month_list[6]){
    $quarter="summer";
}
if($now_month == $month_list[7]){
    $quarter="first";
}
if($now_month == $month_list[8]){
    $quarter="first";
}
if($now_month == $month_list[9]){
    $quarter="first";
}
if($now_month == $month_list[10]){
    $quarter="first";
}
if($now_month == $month_list[11]){
    $quarter="first";
}

$sql = "INSERT INTO student_offenses (sr_code,fname,mname,lname,year_level,program,department,date_started,type_of_violation,violation,status,annual,quarter)
VALUES ('$srcode', '$fname', '$mname','$lname','$yearlevel','$program','$department','$datestarted','$offensetype','$offense','$status','$school_year','$quarter')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>
       alert ('Offense Upload Successfully!'); 
       window.location.href='../osd/verify.php?code=".$srcode."';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>