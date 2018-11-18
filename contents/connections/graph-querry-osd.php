<?php

 //January 1
 include '../connections/conn.php';
 
 $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '1' && year = '$yearvalue'  ";
 $result3 = $conn->query($sql3);
     if ($result3->num_rows > 0) {
         while($row3 = $result3->fetch_assoc()) {
           $one = $row3["count"];
           }
         } else {
            $one= 0;
         }

         $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '2' && year = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $two = $row3["count"];
                   }
                 } else {
                    $two= 0;
                 }

 $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '3' && year = '$yearvalue'  ";
 $result3 = $conn->query($sql3);
     if ($result3->num_rows > 0) {
         while($row3 = $result3->fetch_assoc()) {
           $three = $row3["count"];
           }
         } else {
            $three= 0;
         }

         $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '4' && year = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $four = $row3["count"];
                   }
                 } else {
                    $four= 0;
                 }


 $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '5' && year = '$yearvalue'  ";
 $result3 = $conn->query($sql3);
     if ($result3->num_rows > 0) {
         while($row3 = $result3->fetch_assoc()) {
           $five = $row3["count"];
           }
         } else {
            $five= 0;
         }

         $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '6' && year = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $six = $row3["count"];
                   }
                 } else {
                    $six= 0;
                 }


 $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '7' && year = '$yearvalue'  ";
 $result3 = $conn->query($sql3);
     if ($result3->num_rows > 0) {
         while($row3 = $result3->fetch_assoc()) {
           $seven = $row3["count"];
           }
         } else {
            $seven= 0;
         }

         $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '8' && year = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $eight = $row3["count"];
                   }
                 } else {
                    $eight= 0;
                 }


 $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '9' && year = '$yearvalue'  ";
 $result3 = $conn->query($sql3);
     if ($result3->num_rows > 0) {
         while($row3 = $result3->fetch_assoc()) {
           $nine = $row3["count"];
           }
         } else {
            $nine= 0;
         }

         $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '10' && year = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $ten = $row3["count"];
                   }
                 } else {
                    $ten= 0;
                 }


 $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '11' && year = '$yearvalue'  ";
 $result3 = $conn->query($sql3);
     if ($result3->num_rows > 0) {
         while($row3 = $result3->fetch_assoc()) {
           $eleven = $row3["count"];
           }
         } else {
            $eleven= 0;
         }

         $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '12' && year = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $twelve = $row3["count"];
                   }
                 } else {
                    $twelve= 0;
                 }


 $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '13' && year = '$yearvalue'  ";
 $result3 = $conn->query($sql3);
     if ($result3->num_rows > 0) {
         while($row3 = $result3->fetch_assoc()) {
           $thirteen = $row3["count"];
           }
         } else {
            $thirteen= 0;
         }

         $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '14' && year = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $fourteen = $row3["count"];
                   }
                 } else {
                    $fourteen= 0;
                 }


 $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '15' && year = '$yearvalue'  ";
 $result3 = $conn->query($sql3);
     if ($result3->num_rows > 0) {
         while($row3 = $result3->fetch_assoc()) {
           $fifteen = $row3["count"];
           }
         } else {
            $fifteen= 0;
         }

         $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '16' && year = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $sixteen = $row3["count"];
                   }
                 } else {
                    $sixteen= 0;
                 }


 $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '17' && year = '$yearvalue'  ";
 $result3 = $conn->query($sql3);
     if ($result3->num_rows > 0) {
         while($row3 = $result3->fetch_assoc()) {
           $seventeen = $row3["count"];
           }
         } else {
            $seventeen= 0;
         }

         $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '18' && year = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $eighteen = $row3["count"];
                   }
                 } else {
                    $eighteen= 0;
                 }


 $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '19' && year = '$yearvalue'  ";
 $result3 = $conn->query($sql3);
     if ($result3->num_rows > 0) {
         while($row3 = $result3->fetch_assoc()) {
           $nineteen = $row3["count"];
           }
         } else {
            $nineteen= 0;
         }

         $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '20' && year = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $twenty = $row3["count"];
                   }
                 } else {
                    $twenty= 0;
                 }


 $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '21' && year = '$yearvalue'  ";
 $result3 = $conn->query($sql3);
     if ($result3->num_rows > 0) {
         while($row3 = $result3->fetch_assoc()) {
           $twentyone = $row3["count"];
           }
         } else {
            $twentyone= 0;
         }

         $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '22' && year = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $twentytwo = $row3["count"];
                   }
                 } else {
                    $twentytwo= 0;
                 }


 $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '23' && year = '$yearvalue'  ";
 $result3 = $conn->query($sql3);
     if ($result3->num_rows > 0) {
         while($row3 = $result3->fetch_assoc()) {
           $twentythree = $row3["count"];
           }
         } else {
            $twentythree= 0;
         }

         $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '24' && year = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $twentyfour = $row3["count"];
                   }
                 } else {
                    $twentyfour= 0;
                 }


 $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '25' && year = '$yearvalue'  ";
 $result3 = $conn->query($sql3);
     if ($result3->num_rows > 0) {
         while($row3 = $result3->fetch_assoc()) {
           $twentyfive = $row3["count"];
           }
         } else {
            $twentyfive= 0;
         }

         $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '26' && year = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $twentysix = $row3["count"];
                   }
                 } else {
                    $twentysix= 0;
                 }


 $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '27' && year = '$yearvalue'  ";
 $result3 = $conn->query($sql3);
     if ($result3->num_rows > 0) {
         while($row3 = $result3->fetch_assoc()) {
           $twentyseven = $row3["count"];
           }
         } else {
            $twentyseven= 0;
         }

         $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '28' && year = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $twentyeight = $row3["count"];
                   }
                 } else {
                    $twentyeight= 0;
                 }
  $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '29' && year = '$yearvalue'  ";
 $result3 = $conn->query($sql3);
     if ($result3->num_rows > 0) {
         while($row3 = $result3->fetch_assoc()) {
           $twentynine = $row3["count"];
           }
         } else {
            $twentynine= 0;
         }

         $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '30' && year = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $thirty = $row3["count"];
                   }
                 } else {
                    $thirty= 0;
                 } 

          $sql3 = "SELECT COUNT(id) AS count FROM  student_offenses WHERE  type_of_violation = '$servicesvalue' && month = '$monthvalue' && day = '31' && year = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $thirtyone = $row3["count"];
                   }
                 } else {
                    $thirtyone= 0;
                 }                         
                                        


?>



