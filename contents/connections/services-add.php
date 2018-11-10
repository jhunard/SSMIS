<?php
      include '../connections/conn.php';

       $services = $_POST["service"];   
       $status = 1;    
$sql = "INSERT INTO services (services,status)
VALUES ('$services',"$status")";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>
                          alert ('Services Added to the List!'); 
                          window.location.href='../guidance/add-services-record.php';</script>";
} else {
    echo "<script type='text/javascript'>
                          alert ('Error in Adding Services'); 
                          window.location.href='../guidance/add-services-record.php';</script>";
}

$conn->close();
?>