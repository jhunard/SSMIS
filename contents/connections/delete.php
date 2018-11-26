<?php
 include '../connections/conn.php';
 $querry = $_POST['disable'];

             $sql = "DELETE FROM services WHERE services='$querry'";

            if ($conn->query($sql) === TRUE) {
                echo "<script type='text/javascript'>
                alert ('Services Status Updated!'); 
                window.location.href='../admin/add-services-record.php';</script>";
                } else {
                    echo "<script type='text/javascript'>
                    alert ('Services Status Update Failed!'); 
                    window.location.href='../admin/add-services-record.php';</script>";
                        }

          
$conn->close();
?>