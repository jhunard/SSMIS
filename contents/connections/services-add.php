<?php
      include '../connections/conn.php';

       $services = $_POST["service"];       
$sql = "INSERT INTO services (services)
VALUES ('$services')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>
                          alert ('Services Added to the List!'); 
                          window.location.href='../guidance/settings-index.php';</script>";
} else {
    echo "<script type='text/javascript'>
                          alert ('Error in Adding Services'); 
                          window.location.href='../guidance/settings-index.php';</script>";
}

$conn->close();
?>