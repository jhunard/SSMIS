<?php

//January 1
include '../connections/conn.php';

$sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE  type_of_violation = '$servicesvalue' && month = 'January' && quarter = '$monthvalue' && year = '$yearvalue'  ";
$result3 = $conn->query($sql3);
    if ($result3->num_rows > 0) {
        while($row3 = $result3->fetch_assoc()) {
          $january = $row3["count"];
          }
        } else {
           $january= 0;
        }

$sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE  type_of_violation = '$servicesvalue' && month = 'February' && quarter = '$monthvalue' && year = '$yearvalue'  ";
$result3 = $conn->query($sql3);
    if ($result3->num_rows > 0) {
        while($row3 = $result3->fetch_assoc()) {
          $february = $row3["count"];
          }
        } else {
           $february= 0;
        }

$sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE  type_of_violation = '$servicesvalue' && month = 'March' && quarter = '$monthvalue' && year = '$yearvalue'  ";
$result3 = $conn->query($sql3);
    if ($result3->num_rows > 0) {
        while($row3 = $result3->fetch_assoc()) {
          $march = $row3["count"];
          }
        } else {
           $march= 0;
        }

$sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE  type_of_violation = '$servicesvalue' && month = 'April' && quarter = '$monthvalue' && year = '$yearvalue'  ";
$result3 = $conn->query($sql3);
    if ($result3->num_rows > 0) {
        while($row3 = $result3->fetch_assoc()) {
          $april = $row3["count"];
          }
        } else {
           $april= 0;
        }

$sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE  type_of_violation = '$servicesvalue' && month = 'May' && quarter = '$monthvalue' && year = '$yearvalue'  ";
$result3 = $conn->query($sql3);
    if ($result3->num_rows > 0) {
        while($row3 = $result3->fetch_assoc()) {
          $may = $row3["count"];
          }
        } else {
           $may= 0;
        }

$sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE  type_of_violation = '$servicesvalue' && month = 'June' && quarter = '$monthvalue' && year = '$yearvalue'  ";
$result3 = $conn->query($sql3);
    if ($result3->num_rows > 0) {
        while($row3 = $result3->fetch_assoc()) {
          $june = $row3["count"];
          }
        } else {
           $june= 0;
        }

$sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE  type_of_violation = '$servicesvalue' && month = 'July' && quarter = '$monthvalue' && year = '$yearvalue'  ";
$result3 = $conn->query($sql3);
    if ($result3->num_rows > 0) {
        while($row3 = $result3->fetch_assoc()) {
          $july = $row3["count"];
          }
        } else {
           $july= 0;
        }

$sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE  type_of_violation = '$servicesvalue' && month = 'August' && quarter = '$monthvalue' && year = '$yearvalue'  ";
$result3 = $conn->query($sql3);
    if ($result3->num_rows > 0) {
        while($row3 = $result3->fetch_assoc()) {
          $august = $row3["count"];
          }
        } else {
           $august= 0;
        }

$sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE  type_of_violation = '$servicesvalue' && month = 'September' && quarter = '$monthvalue' && year = '$yearvalue'  ";
$result3 = $conn->query($sql3);
    if ($result3->num_rows > 0) {
        while($row3 = $result3->fetch_assoc()) {
          $september = $row3["count"];
          }
        } else {
           $september= 0;
        }

$sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE  type_of_violation = '$servicesvalue' && month = 'October' && quarter = '$monthvalue' && year = '$yearvalue'  ";
$result3 = $conn->query($sql3);
    if ($result3->num_rows > 0) {
        while($row3 = $result3->fetch_assoc()) {
          $october = $row3["count"];
          }
        } else {
           $october= 0;
        }


        $sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE  type_of_violation = '$servicesvalue' && month = 'November'  && quarter = '$monthvalue'  && year = '$yearvalue'  ";
        $result3 = $conn->query($sql3);
            if ($result3->num_rows > 0) {
                while($row3 = $result3->fetch_assoc()) {
                  $november = $row3["count"];
                  }
                } else {
                   $november= 0;
                }


$sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE  type_of_violation = '$servicesvalue' && month = 'December' && quarter = '$monthvalue' && year = '$yearvalue'  ";
$result3 = $conn->query($sql3);
    if ($result3->num_rows > 0) {
        while($row3 = $result3->fetch_assoc()) {
          $december = $row3["count"];
          }
        } else {
           $december= 0;
        }


?>



