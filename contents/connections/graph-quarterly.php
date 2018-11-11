<?php
//January
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE quarter='$month' && services= '$servicesvalue' && graph_month = 'January' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);
   
             if ($result3->num_rows > 0) {
                
                if(empty($rowcount)){
                $january = 0;
                }else{
                $january = $rowcount;

                }           
                $rowcount=mysqli_num_rows($result3);   
                // Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {
                        
                   }
                 } else {
                    $january = 0;
                 }
 
?>

<?php
//February
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE quarter='$month' && services= '$servicesvalue' && graph_month = 'February' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);
   
             if ($result3->num_rows > 0) {
                
                if(empty($rowcount)){
                $february = 0;
                }else{
                $february = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);
                // Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {
                        
                   }
                 } else {
                    $february = 0;
                 }
 
?>

<?php
//March
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE quarter='$month' && services= '$servicesvalue' && graph_month = 'March' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);
   
             if ($result3->num_rows > 0) {
                
                if(empty($rowcount)){
                    $march = 0;
                }else{
                $march = $rowcount;
  
                }
                $rowcount=mysqli_num_rows($result3);   
                // Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {
                        
                   }
                 } else {
                    $march = 0;
                 }
 
?>

<?php
//April
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE quarter='$month' && services= '$servicesvalue' && graph_month = 'April' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);
   
             if ($result3->num_rows > 0) {
                
                if(empty($rowcount)){
                    $april = 0;
                }else{
                $april = $rowcount;
  
                }
                $rowcount=mysqli_num_rows($result3);   
                // Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {
                        
                   }
                 } else {
                    $april = 0;
                 }
 
?>

<?php
//May
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE quarter='$month' && services= '$servicesvalue' && graph_month = 'May' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);
   
             if ($result3->num_rows > 0) {
                
                if(empty($rowcount)){
                    $may = 0;
                }else{
                $may = $rowcount;
    
                }       
                $rowcount=mysqli_num_rows($result3);     
                // Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {
                        
                   }
                 } else {
                    $may = 0;
                 }
 
?>

<?php
//June
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE quarter='$month' && services= '$servicesvalue' && graph_month = 'June' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);
   
             if ($result3->num_rows > 0) {
                
                if(empty($rowcount)){
                $june = 0;
                }else{
                $june = $rowcount;
   
                }           
                $rowcount=mysqli_num_rows($result3);  
                // Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {
                        
                   }
                 } else {
                    $june = 0;
                 }
 
?>

<?php
//July
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE quarter='$month' && services= '$servicesvalue' && graph_month = 'July' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);
   
             if ($result3->num_rows > 0) {
                
                if(empty($rowcount)){
                $july = 0;
                }else{
                $july = $rowcount;
   
                }           
                $rowcount=mysqli_num_rows($result3);  
                // Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {
                        
                   }
                 } else {
                    $july = 0;
                 }
 
?>

<?php
//August
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE quarter='$month' && services= '$servicesvalue' && graph_month = 'August' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);
   
             if ($result3->num_rows > 0) {
                
                if(empty($rowcount)){
                $august = 0;
                }else{
                $august = $rowcount;
                }
               $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {
                        
                   }
                 } else {
                    $august = 0;
                 }
 
?>

<?php
//September
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE quarter='$month' && services= '$servicesvalue' && graph_month = 'September' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);
   
             if ($result3->num_rows > 0) {
                
                if(empty($rowcount)){
                $september  = 0;
                }else{
                $september = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {
                        
                   }
                 } else {
                    $september = 0;
                 }
 
?>

<?php
//October
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE quarter='$month' && services= '$servicesvalue' && graph_month = 'October' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);
   
             if ($result3->num_rows > 0) {
                
                if(empty($rowcount)){
                $october = 0;
                }else{
                $october = $rowcount;
                } 
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {
                        
                   }
                 } else {
                    $october = 0;
                 }
 
?>

<?php
//November
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE quarter='$month' && services= '$servicesvalue' && graph_month = 'November' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);
   
             if ($result3->num_rows > 0) {
                
                if(empty($rowcount)){
                $november = 0;
                }else{
                $november = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {
                        
                   }
                 } else {
                    $november= 0;
                 }
 
?>

<?php
//December
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE quarter='$month' && services= '$servicesvalue' && graph_month = 'December' && graph_year = '$yearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);
   
             if ($result3->num_rows > 0) {
                
                if(empty($rowcount)){
                $december = 0;
                }else{
                $december = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {
                        
                   }
                 } else {
                    $december = 0;
                 }
 
?>



//////////////////////////////////
<?php
//January
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE quarter='$month' && services= '$servicesvalue' && graph_month = 'January' && graph_year = '$lyearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);
   
             if ($result3->num_rows > 0) {
                
                if(empty($rowcount)){
                $ljanuary = 0;
                }else{
                $ljanuary = $rowcount;

                }           
                $rowcount=mysqli_num_rows($result3);   
                // Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {
                        
                   }
                 } else {
                    $ljanuary = 0;
                 }
 
?>

<?php
//February
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE quarter='$month' && services= '$servicesvalue' && graph_month = 'February' && graph_year = '$lyearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);
   
             if ($result3->num_rows > 0) {
                
                if(empty($rowcount)){
                $lfebruary = 0;
                }else{
                $lfebruary = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);
                // Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {
                        
                   }
                 } else {
                    $lfebruary = 0;
                 }
 
?>

<?php
//March
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE quarter='$month' && services= '$servicesvalue' && graph_month = 'March' && graph_year = '$lyearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);
   
             if ($result3->num_rows > 0) {
                
                if(empty($rowcount)){
                    $lmarch = 0;
                }else{
                $lmarch = $rowcount;
  
                }
                $rowcount=mysqli_num_rows($result3);   
                // Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {
                        
                   }
                 } else {
                    $lmarch = 0;
                 }
 
?>

<?php
//April
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE quarter='$month' && services= '$servicesvalue' && graph_month = 'April' && graph_year = '$lyearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);
   
             if ($result3->num_rows > 0) {
                
                if(empty($rowcount)){
                    $lapril = 0;
                }else{
                $lapril = $rowcount;
  
                }
                $rowcount=mysqli_num_rows($result3);   
                // Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {
                        
                   }
                 } else {
                    $lapril = 0;
                 }
 
?>

<?php
//May
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE quarter='$month' && services= '$servicesvalue' && graph_month = 'May' && graph_year = '$lyearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);
   
             if ($result3->num_rows > 0) {
                
                if(empty($rowcount)){
                    $lmay = 0;
                }else{
                $lmay = $rowcount;
    
                }       
                $rowcount=mysqli_num_rows($result3);     
                // Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {
                        
                   }
                 } else {
                    $lmay = 0;
                 }
 
?>

<?php
//June
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE quarter='$month' && services= '$servicesvalue' && graph_month = 'June' && graph_year = '$lyearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);
   
             if ($result3->num_rows > 0) {
                
                if(empty($rowcount)){
                $ljune = 0;
                }else{
                $ljune = $rowcount;
   
                }           
                $rowcount=mysqli_num_rows($result3);  
                // Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {
                        
                   }
                 } else {
                    $ljune = 0;
                 }
 
?>

<?php
//July
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE quarter='$month' && services= '$servicesvalue' && graph_month = 'July' && graph_year = '$lyearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);
   
             if ($result3->num_rows > 0) {
                
                if(empty($rowcount)){
                $ljuly = 0;
                }else{
                $ljuly = $rowcount;
   
                }           
                $rowcount=mysqli_num_rows($result3);  
                // Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {
                        
                   }
                 } else {
                    $ljuly = 0;
                 }
 
?>

<?php
//August
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE quarter='$month' && services= '$servicesvalue' && graph_month = 'August' && graph_year = '$lyearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);
   
             if ($result3->num_rows > 0) {
                
                if(empty($rowcount)){
                $laugust = 0;
                }else{
                $laugust = $rowcount;
                }
               $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {
                        
                   }
                 } else {
                    $laugust = 0;
                 }
 
?>

<?php
//September
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE quarter='$month' && services= '$servicesvalue' && graph_month = 'September' && graph_year = '$lyearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);
   
             if ($result3->num_rows > 0) {
                
                if(empty($rowcount)){
                $lseptember  = 0;
                }else{
                $lseptember = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {
                        
                   }
                 } else {
                    $lseptember = 0;
                 }
 
?>

<?php
//October
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE quarter='$month' && services= '$servicesvalue' && graph_month = 'October' && graph_year = '$lyearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);
   
             if ($result3->num_rows > 0) {
                
                if(empty($rowcount)){
                $loctober = 0;
                }else{
                $loctober = $rowcount;
                } 
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {
                        
                   }
                 } else {
                    $loctober = 0;
                 }
 
?>

<?php
//November
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE quarter='$month' && services= '$servicesvalue' && graph_month = 'November' && graph_year = '$lyearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);
   
             if ($result3->num_rows > 0) {
                
                if(empty($rowcount)){
                $lnovember = 0;
                }else{
                $lnovember = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {
                        
                   }
                 } else {
                    $lnovember= 0;
                 }
 
?>

<?php
//December
 include '../connections/conn.php';

         $sql3 = "SELECT * FROM graph_data WHERE quarter='$month' && services= '$servicesvalue' && graph_month = 'December' && graph_year = '$lyearvalue' ORDER BY id DESC ";
         $result3 = $conn->query($sql3);
   
             if ($result3->num_rows > 0) {
                
                if(empty($rowcount)){
                $ldecember = 0;
                }else{
                $ldecember = $rowcount;
                }
                $rowcount=mysqli_num_rows($result3);// Free result set
                mysqli_free_result($result3);
                while($row3 = $result3->fetch_assoc()) {
                        
                   }
                 } else {
                    $ldecember = 0;
                 }
 
?>



