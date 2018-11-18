<?php

 //January 1
 include '../connections/conn.php';
 
 $sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE type_of_violation = '$servicesvalue' && month = 'January' && annual = '$yearvalue'  ";
 $result3 = $conn->query($sql3);
     if ($result3->num_rows > 0) {
         while($row3 = $result3->fetch_assoc()) {
           $january = $row3["count"];
           }
         } else {
            $january= 0;
         }


         $sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE type_of_violation = '$servicesvalue' && month = 'January' && annual = '$lyearvalue'  ";
$result3 = $conn->query($sql3);
    if ($result3->num_rows > 0) {
        while($row3 = $result3->fetch_assoc()) {
          $ljanuary = $row3["count"];
          }
        } else {
           $ljanuary= 0;
        }        
// February
 $sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE type_of_violation = '$servicesvalue' && month = 'February' && annual = '$yearvalue'  ";
 $result3 = $conn->query($sql3);
     if ($result3->num_rows > 0) {
         while($row3 = $result3->fetch_assoc()) {
           $february = $row3["count"];
           }
         } else {
            $february= 0;
         }


         $sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE type_of_violation = '$servicesvalue' && month = 'February' && annual = '$lyearvalue'  ";
$result3 = $conn->query($sql3);
    if ($result3->num_rows > 0) {
        while($row3 = $result3->fetch_assoc()) {
          $lfebruary = $row3["count"];
          }
        } else {
           $lfebruary= 0;
        }        
// March
 $sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE type_of_violation = '$servicesvalue' && month = 'March' && annual = '$yearvalue'  ";
 $result3 = $conn->query($sql3);
     if ($result3->num_rows > 0) {
         while($row3 = $result3->fetch_assoc()) {
           $march = $row3["count"];
           }
         } else {
            $march= 0;
         }


         $sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE type_of_violation = '$servicesvalue' && month = 'March' && annual = '$lyearvalue'  ";
$result3 = $conn->query($sql3);
    if ($result3->num_rows > 0) {
        while($row3 = $result3->fetch_assoc()) {
          $lmarch = $row3["count"];
          }
        } else {
           $lmarch= 0;
        }        
// April
 $sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE type_of_violation = '$servicesvalue' && month = 'April' && annual = '$yearvalue'  ";
 $result3 = $conn->query($sql3);
     if ($result3->num_rows > 0) {
         while($row3 = $result3->fetch_assoc()) {
           $april = $row3["count"];
           }
         } else {
            $april= 0;
         }


         $sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE type_of_violation = '$servicesvalue' && month = 'April' && annual = '$lyearvalue'  ";
$result3 = $conn->query($sql3);
    if ($result3->num_rows > 0) {
        while($row3 = $result3->fetch_assoc()) {
          $lapril = $row3["count"];
          }
        } else {
           $lapril= 0;
        }        

// May
 $sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE type_of_violation = '$servicesvalue' && month = 'May' && annual = '$yearvalue'  ";
 $result3 = $conn->query($sql3);
     if ($result3->num_rows > 0) {
         while($row3 = $result3->fetch_assoc()) {
           $may = $row3["count"];
           }
         } else {
            $may= 0;
         }

         $sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE type_of_violation = '$servicesvalue' && month = 'May' && annual = '$lyearvalue'  ";
$result3 = $conn->query($sql3);
    if ($result3->num_rows > 0) {
        while($row3 = $result3->fetch_assoc()) {
          $lmay = $row3["count"];
          }
        } else {
           $lmay= 0;
        }        

// June
 $sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE type_of_violation = '$servicesvalue' && month = 'June' && annual = '$yearvalue'  ";
 $result3 = $conn->query($sql3);
     if ($result3->num_rows > 0) {
         while($row3 = $result3->fetch_assoc()) {
           $june = $row3["count"];
           }
         } else {
            $june= 0;
         }


         $sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE type_of_violation = '$servicesvalue' && month = 'June' && annual = '$lyearvalue'  ";
$result3 = $conn->query($sql3);
    if ($result3->num_rows > 0) {
        while($row3 = $result3->fetch_assoc()) {
          $ljune = $row3["count"];
          }
        } else {
           $ljune= 0;
        }        
// july
 $sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE type_of_violation = '$servicesvalue' && month = 'July' && annual = '$yearvalue'  ";
 $result3 = $conn->query($sql3);
     if ($result3->num_rows > 0) {
         while($row3 = $result3->fetch_assoc()) {
           $july = $row3["count"];
           }
         } else {
            $july= 0;
         }


         $sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE type_of_violation = '$servicesvalue' && month = 'July' && annual = '$lyearvalue'  ";
$result3 = $conn->query($sql3);
    if ($result3->num_rows > 0) {
        while($row3 = $result3->fetch_assoc()) {
          $ljuly = $row3["count"];
          }
        } else {
           $ljuly= 0;
        }        
// August
 $sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE type_of_violation = '$servicesvalue' && month = 'August' && annual = '$yearvalue'  ";
 $result3 = $conn->query($sql3);
     if ($result3->num_rows > 0) {
         while($row3 = $result3->fetch_assoc()) {
           $august = $row3["count"];
           }
         } else {
            $august= 0;
         }


         $sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE type_of_violation = '$servicesvalue' && month = 'August' && annual = '$lyearvalue'  ";
$result3 = $conn->query($sql3);
    if ($result3->num_rows > 0) {
        while($row3 = $result3->fetch_assoc()) {
          $laugust = $row3["count"];
          }
        } else {
           $laugust= 0;
        }        
// September
 $sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE type_of_violation = '$servicesvalue' && month = 'September' && annual = '$yearvalue' ";
 $result3 = $conn->query($sql3);
     if ($result3->num_rows > 0) {
         while($row3 = $result3->fetch_assoc()) {
           $september = $row3["count"];
           }
         } else {
            $september= 0;
         }


         $sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE type_of_violation = '$servicesvalue' && month = 'September' && annual = '$lyearvalue'  ";
$result3 = $conn->query($sql3);
    if ($result3->num_rows > 0) {
        while($row3 = $result3->fetch_assoc()) {
          $lseptember = $row3["count"];
          }
        } else {
           $lseptember= 0;
        }        

// October
 $sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE type_of_violation = '$servicesvalue' && month = 'October' && annual = '$yearvalue'  ";
 $result3 = $conn->query($sql3);
     if ($result3->num_rows > 0) {
         while($row3 = $result3->fetch_assoc()) {
           $october = $row3["count"];
           }
         } else {
            $october= 0;
         }


         $sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE type_of_violation = '$servicesvalue' && month = 'October' && annual = '$lyearvalue'  ";
$result3 = $conn->query($sql3);
    if ($result3->num_rows > 0) {
        while($row3 = $result3->fetch_assoc()) {
          $loctober = $row3["count"];
          }
        } else {
           $loctober= 0;
        }        

// November
         $sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE type_of_violation = '$servicesvalue' && month = 'November'  && annual = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $november = $row3["count"];
                   }
                 } else {
                    $november= 0;
                 }


         $sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE type_of_violation = '$servicesvalue' && month = 'November' && annual = '$lyearvalue'  ";
$result3 = $conn->query($sql3);
    if ($result3->num_rows > 0) {
        while($row3 = $result3->fetch_assoc()) {
          $lnovember = $row3["count"];
          }
        } else {
           $lnovember= 0;
        }        

// December
 $sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE type_of_violation = '$servicesvalue' && month = 'December' && annual = '$yearvalue'  ";
 $result3 = $conn->query($sql3);
     if ($result3->num_rows > 0) {
         while($row3 = $result3->fetch_assoc()) {
           $december = $row3["count"];
           }
         } else {
            $december= 0;
         }


         $sql3 = "SELECT COUNT(id) AS count FROM student_offenses WHERE type_of_violation = '$servicesvalue' && month = 'December' && annual = '$lyearvalue'  ";
$result3 = $conn->query($sql3);
    if ($result3->num_rows > 0) {
        while($row3 = $result3->fetch_assoc()) {
          $ldecember = $row3["count"];
          }
        } else {
           $ldecember= 0;
        }    
 
?>



