<?php
$sr_code=$_GET["sr-code"];
$id  = $_GET["id"];

if (empty($sr_code)&&empty($id)){
  echo "<script type='text/javascript'>
  alert ('Please select student first before viewing the information!'); 
  window.location.href='guidance-index.php';</script>";
} 

include '../connections/conn.php';
$sql = "SELECT * FROM student_record WHERE sr_code='$sr_code' && id='$id' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $db_id = $row["id"];
       $db_sr_code = $row["sr_code"];
       $mname = $row["mname"];
       $name = $row["lname"] . ", " .  $row["fname"] ." ". $mname[0] .".";
       $db_name = $name;
       $db_year_level = $row["year_level"];
       $db_program = $row["program"];
       $db_department = $row["department"];
    }
}        

?>
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

      $sql = "SELECT * FROM user_info WHERE username ='$userWHERE username ='$user'";
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
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Record (view)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/navbar.css">
   <script src="js/search.js"></script>
<style>
  span {
    display: inline-block;
    height: auto;
    margin: 6px;
    padding: 1%;
    background-color: #eee;
  }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-sm justify-content-between" >
  <!-- Brand/logo -->
  <a class="navbar-brand" href="index.php">
    <img src="images/logo.png" alt="logo" style="width:70px;">
  </a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="text"  size="30" placeholder="Search ID number" onkeyup="showResult(this.value)">
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
<!-- ENd NAV -->


<!-- table -->
<form action="../connections/student-record-view-update.php" method="post">
<div class="container">   
<div class="row" style="font-size:22px;">
  <div class="col-8"><input type="text" name="name" placeholder="<?php echo $db_name; ?>" value="<?php echo $db_name; ?>"></div>
  <div class="col-4"><input type="text" name="year_level" placeholder="<?php echo $db_year_level; ?>" value="<?php echo $db_year_level; ?>"></div>
</div>   
</div>

 <div class="container">   
<div class="row" style="font-size:22px;">
  <div class="col-8"><input type="text" name="sr_code" placeholder="<?php echo $db_sr_code;?>" value="<?php echo $db_sr_code;?>"></div>
  <div class="col-4"><input type="text" name="department" placeholder="<?php echo $db_department; ?>" value="<?php echo $db_department; ?>"></div>
</div>   
</div>

<div class="container">   
<div class="row " style="font-size:22px;">
  <div class="col-12"><input type="text" name="program" placeholder="<?php echo $db_program; ?>" value="<?php echo $db_program; ?>"></div>
  <input type="text" name="id"  value="<?php echo $db_id; ?>" hidden>
</div>   
</div>

    <div class="container" style="margin-left:15%; margin-top:2%;">
      <input type="submit" class="btn btn-success float-right" name="submit" value="Update">
    </div>
</form>
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