<?php
//January 1
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '1' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $one = 0;
                }else{
                $one = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $one= 0;
                 }
 
?>

<?php
//January 2
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '2' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $two = 0;
                }else{
                $two = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $two= 0;
                 }
 
?>

<?php
//January 3
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '3' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $three = 0;
                }else{
                $three = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $three= 0;
                 }
 
?>

<?php
//January 4
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '4' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $four = 0;
                }else{
                $four = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $four= 0;
                 }
 
?>

<?php
//January 5
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '5' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $five = 0;
                }else{
                $five = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $five= 0;
                 }
 
?>

<?php
//January 6
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '6' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $six = 0;
                }else{
                $six = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $six= 0;
                 }
 
?>

<?php
//January 7
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '7' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $seven = 0;
                }else{
                $seven = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $seven= 0;
                 }
 
?>
<?php
//January 8
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '8' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $eight = 0;
                }else{
                $eight = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $eight= 0;
                 }
 
?>

<?php
//January 9
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '9' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $nine = 0;
                }else{
                $nine = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $nine= 0;
                 }
 
?>
<?php
//January 10
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '10' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $ten = 0;
                }else{
                $ten = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $ten= 0;
                 }
 
?>

<?php
//January 11
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '11' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $eleven = 0;
                }else{
                $eleven = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $eleven= 0;
                 }
 
?>
<?php

//January 12
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '12' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $twelve = 0;
                }else{
                $twelve = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $twelve= 0;
                 }
 
?>

<?php
//January 13
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '13' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $thirteen = 0;
                }else{
                $thirteen = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $thirteen= 0;
                 }
 
?>

<?php
//January 14
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '14' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $fourteen = 0;
                }else{
                $fourteen = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $fourteen= 0;
                 }
 
?>

<?php
//January 15
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '15' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $fifteen = 0;
                }else{
                $fifteen = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $fifteen= 0;
                 }
 
?>

<?php
//January 16
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '16' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $sixteen = 0;
                }else{
                $sixteen = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $sixteen= 0;
                 }
 
?>

<?php
//January 17
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '17' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $seventeen = 0;
                }else{
                $seventeen = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $seventeen= 0;
                 }
 
?>

<?php
//January 18
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '18' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $eighteen = 0;
                }else{
                $eighteen = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $eighteen= 0;
                 }
 
?>

<?php
//January 19
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '19' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $nineteen = 0;
                }else{
                $nineteen = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $nineteen= 0;
                 }
 
?>

<?php
//January 20
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '20' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $twenty = 0;
                }else{
                $twenty = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $twenty= 0;
                 }
 
?>

<?php
//January 21
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '21' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $twentyone = 0;
                }else{
                $twentyone = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $twentyone= 0;
                 }
 
?>

<?php
//January 22
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '22' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $twentytwo = 0;
                }else{
                $twentytwo = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $twentytwo= 0;
                 }
 
?>

<?php
//January 23
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '23' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $twentythree = 0;
                }else{
                $twentythree = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $twentythree= 0;
                 }
 
?>

<?php
//January 24
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '24' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $twentyfour = 0;
                }else{
                $twentyfour = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $twentyfour= 0;
                 }
 
?>
<?php
//January 25
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '25' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $twentyfive = 0;
                }else{
                $twentyfive = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $twentyfive= 0;
                 }
 
?>

<?php
//January 26
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '26' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $twentysix = 0;
                }else{
                $twentysix = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $twentysix= 0;
                 }
 
?>

<?php
//January 27
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '27' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $twentyseven = 0;
                }else{
                $twentyseven = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $twentyseven= 0;
                 }
 
?>

<?php
//January 28
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '28' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $twentyeight = 0;
                }else{
                $twentyeight = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $twentyeight= 0;
                 }
 
?>

<?php
//January 29
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '29' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $twentynine = 0;
                }else{
                $twentynine = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $twentynine= 0;
                 }
 
?>

<?php
//January 30
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '30' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $thirty = 0;
                }else{
                $thirty = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $thirty= 0;
                 }
 
?>

<?php
//January 31
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE    graph_month = '$monthvalue' && graph_day = '31' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);

             if ($result3->num_rows > 0) {

                if(empty($rowcount)){
                $thirtyone = 0;
                }else{
                $thirtyone = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {

                   }
                 } else {
                    $thirtyone= 0;
                 }
 
?>

<!-- February -->



