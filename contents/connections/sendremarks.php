<?php
 include '../connections/conn.php';
 $querry = $_POST['disable'];

             $sql = "UPDATE student_offenses SET remarks ='1' WHERE id='$querry'";

            if ($conn->query($sql) === TRUE) {
                echo "<script type='text/javascript'>
                alert ('Services Status Updated!'); 
                window.location.href='../soa/index.php';</script>";
                } else {
                    echo "<script type='text/javascript'>
                    alert ('Services Status Update Failed!'); 
                    window.location.href='../soa/index.php';</script>";
                        }

          
$conn->close();
?>