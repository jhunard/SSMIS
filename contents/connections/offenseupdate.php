<?php
include 'conn.php';
$srcode = $_POST["srcode"];
$id = $_POST["offense"];
$dateended = date("Y-m-d");

$sql = "UPDATE student_offenses SET status='Finished', date_ended = '$dateended' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>
       alert ('Offense Upload Successfully!'); 
       window.location.href='../osd/update.php?code=".$srcode."';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>