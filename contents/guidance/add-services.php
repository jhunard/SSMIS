<?php
session_start();
 $user = $_SESSION["user"];
 if (empty($user)){
   session_destroy();
   session_unset();
   echo "<script type='text/javascript'>
       alert ('Please Login First Before You Access our Dashboard! -Administration'); 
       window.location.href='../../index.php';</script>";
     }else{
      include '../connections/conn.php';

      $sql = "SELECT * FROM user_info WHERE username ='$user'";
      $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  $img = $row["img"];
                }
              } else {
                  echo "0 results";
              }
       
   }

?>

<?php
    $idNumber = $_POST["idNumber"];

      include '../connections/conn.php';

      $sql2 = "SELECT * FROM student_record WHERE sr_code ='$idNumber'";
      $result2 = $conn->query($sql2);

          if ($result2->num_rows > 0) {
              // output data of each row
              while($row2 = $result2->fetch_assoc()) {
                  $db_srcode = $row2["sr_code"];
                    if($idNumber == $db_srcode ){
                        $fname = $row2["fname"];
                        $mname = $row2["mname"];
                        $lname = $row2["lname"];
                        $yearlevel = $row2["year_level"];
                        $program = $row2["program"];
                        $department = $row2["department"];
                    }
                }
              } else {
                echo "<script type='text/javascript'>
                alert ('Your ". $idNumber ." has no matches in database kindly create the student information first to proceed!'); 
                window.location.href='../guidance/student-information-sheet-form.php';</script>";
              }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Guidance</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/navbar.css">
   <script src="js/search.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm justify-content-between" >
  <!-- Brand/logo -->
  <a class="navbar-brand" href="index.php">
    <img src="images/logo.png" alt="logo" style="width:70px;">
  </a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="text"  size="30" placeholder="Search ID Number" onkeyup="showResult(this.value)">
    <div style="position:absolute;top:75%;width:19.25%;background-color:#8e8d8a;" id="livesearch">&nbsp;&nbsp;&nbsp;</div>
  </form>
 
  
</nav>
<!-- ENd NAV -->

<!-- SideNav slide-out button -->
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
 <div class="col-12" style="color:white; font-size:33px; margin-bottom:5%;">
 <a href="index.php"> 
 <img src="images/<?php echo $img; ?>" alt="logo" width="50px" height="50px" style="margin-right:5%; margin-top:-5%;border-radius:50%;">
 <?php echo $user;?></a></div> 

  <a href="student-information.php">Student Information Sheet</a>
  <a href="offenses-index.php">Student's Offense</a>
  <a href="reports-index.php">Report</a>
  <a href="settings-index.php">Settings</a>
  <a href="../connections/logout.php">Log Out</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()"style="color:black;">☰</button>  
</div>
<!-- ENd sideNAV -->

<div class="container">
   <div class="form-row text-center">
      <div class="col-12"><h1>Add Other Services</h1></div>
   </div>
</div>


<!-- table -->

<div class="container">      
 <div class="col-md-6">
<form action='../connections/other-services-insert.php' method="post">
<div class= "row">
<style>
    .border-remove{
        border:none;
    }
</style>
      Name : <input class='border-remove col-md-3' type="text" name="otherfName" value="<?php echo $fname;?>" readonly>
      <input class='border-remove  col-md-3' type="text" name="othermName" value="<?php echo $mname;?>" readonly>
      <input class='border-remove  col-md-4' type="text" name="otherlName" value="<?php echo $lname;?>" readonly>
      ID No : <input class='border-remove col-md-10' type="text" name="othersrCode" value="<?php echo $db_srcode;?>" readonly>
      Year Level : <input class='border-remove col-md-10' type="text" name="otheryearlevel" value="<?php echo $yearlevel;?>" readonly>
      Program : <input class='border-remove  col-md-10' type="text" name="otherprogram" value="<?php echo $program;?>" readonly>
      Department : <input class='border-remove  col-md-8' type="text" name="otherdepartment" value="<?php echo $department;?>" readonly>
</div>
    <br><br><br>    
   <a style="font-size:18px;">Date: <input type="date" style='border:none;text-align:center;' name='otherdate' style="font-size:14px;" required></a><br>
   Service Type : <select class="col-md-8" name="services" style="width:80%;">  
      <?php
      include '../connections/conn.php';

            $sql = "SELECT * FROM services";
            $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        if (empty($row['status'])){
                          $status = '';
                        }else{
                          $status = 'disabled';
                        }
                        echo " <option value='".$row["services"]."'".$status.">".$row["services"]."</option>";
                      }
                    } else {
                        echo "0 results";
                    }
$conn->close();
?>
  </select><br>
    <a style="font-size:18px;">Reason: <input type="text"name='otherreason' style=" border:0;outline: 0;background: transparent; border-bottom: 1px solid black;" required></a>

      <!-- Modal footer -->
      <div class="modal-footer">
      <input type='submit' class="btn btn-success" name='Add' value='Add'>
      </form>
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

      </div>
      </div>


      

<script>
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>


<!-- Javascript -->
<script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script> 
  <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>
