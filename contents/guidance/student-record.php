<?php
$sr_code=$_GET["sr-code"];

if (empty($sr_code)){
  echo "<script type='text/javascript'>
  alert ('Please select student first before viewing the information!'); 
  window.location.href='guidance-index.php';</script>";
} 

include '../connections/conn.php';
$sql = "SELECT * FROM student_record WHERE sr_code='$sr_code'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $id = $row["id"];
       $db_sr_code = $row["sr_code"];
       $db_name = $row["name"];
       $db_year_level = $row["year_level"];
       $db_program = $row["program"];
       $db_department = $row["department"];

       if(empty($row["SIS_date_filled"])){
        $db_SIS_date_filled = "NO DATA FOUND";
       }else{
        $db_SIS_date_filled = $row["SIS_date_filled"];
       }

       if(empty($row["SIS_date_updated"])){
        $db_SIS_date_updated = "NO DATA FOUND";
       }else{
        $db_SIS_date_updated = $row["SIS_date_updated"];
       }
       
       if(empty($row["RGM_date_filled"])){
        $db_RGM_date_filled = "NO DATA FOUND";
       }else{
        $db_RGM_date_filled = $row["RGM_date_filled"];
       }
       
       if(empty($row["RGM_reason"])){
        $db_RGM_reason = "NO DATA FOUND";
       }else{
        $db_RGM_reason = $row["RGM_reason"];
       }

       if(empty($row["RC_date_filled"])){
        $db_RC_date_filled = "NO DATA FOUND";
       }else{
        $db_RC_date_filled = $row["RC_date_filled"];
       }

       if(empty($row["RC_reason"])){
        $db_RC_reason = "NO DATA FOUND";
       }else{
        $db_RC_reason = $row["RC_reason"];
       }
      
    }
}else{
  $sql2 = "SELECT * FROM guidance_log WHERE sr_code='$sr_code' ";
  $result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
      $db_sr_code = $row2["sr_code"];
      $db_name = $row2["name"];
      $db_year_level = $row2["year_level"];
      $db_program = $row2["program"];
      $db_department = $row2["department"];
      $db_SIS_date_filled = "NO DATA FOUND";
      $db_SIS_date_updated = "NO DATA FOUND";
      $db_RGM_date_filled = "NO DATA FOUND";
      $db_RGM_reason = "NO DATA FOUND";
      $db_RC_date_filled = "NO DATA FOUND";
      $db_RC_reason = "NO DATA FOUND";
    }
}
       
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Record</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/navbar.css">
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
  <a class="navbar-brand" href="#">
    <img src="images/logo.png" alt="logo" style="width:50px;">
  </a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  
</nav>
<!-- ENd NAV -->

<!-- SideNav slide-out button -->
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
 <div class="col-12" style="color:white; font-size:33px; margin-bottom:5%;"><a href="guidance-index.php"> <img src="images/userlogin.png" alt="logo" width="50px;" style="margin-right:5%; margin-top:-5%;">Guidance</a></div> 

  <a href="student-information.php">Student Information Sheet</a>
  <a href="offenses-index.php">Student's Offense</a>
  <a href="reports-index.php">Report</a>
  <a href="settings-index.php">Settings</a>
  <a href="../index.php">Log Out</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()"style="color:black;">☰</button>  
</div>
<!-- ENd NAV -->


<!-- Content -->

<div class="container">   
<div class="row" style="font-size:18px;">
  <div class="col-8"><?php echo $db_name;?></div>
  <div class="col-4"><?php echo $db_year_level;?></div>
</div>   
</div>

 <div class="container">   
<div class="row" style="font-size:18px;">
  <div class="col-8"><?php echo $db_sr_code;?></div>
  <div class="col-4"><?php echo $db_department;?></div>
</div>   
</div>

<div class="container">   
<div class="row " style="font-size:18px;">
  <div class="col-12"><?php echo $db_program;?></div>
</div>   
</div>

<!-- BORDERSS -->
<div class="container">   
<div class="row" style="font-size:18px; margin-top:3%;">
  <span class="rounded col-11">
     <div style="margin-left:3%;"><b> Student Information Sheet</b><br>
      Date Filled: <?php echo $db_SIS_date_filled;?><br>
      Date Updated: <?php echo $db_SIS_date_updated;?>
        <div class="col-1 float-right"><a href="student-information-sheet-form-view.php?sr-code=<?php echo $db_sr_code;?>&id=<?php echo $id;?>"style="font-size:18px;text-decoration: none;">View</a></div></div> </span>
</div>   
</div>

<div class="container">   
<div class="row" style="font-size:18px; margin-top:3%;">
  <span class="rounded col-11">
     <div style="margin-left:3%;"><b>Request For Good Moral</b><br>
      Date Filled: <?php echo $db_RGM_date_filled;?><br>
      Reason: <?php echo $db_RGM_reason;?>
</div>   
</div>

<div class="container">   
<div class="row" style="font-size:18px; margin-top:3%;">
  <span class="rounded col-11">
     <div style="margin-left:3%;"><b>Referral Counseling</b><br>
      Date Filled: <?php echo $db_RC_date_filled;?><br>
      Reason: <?php echo $db_RC_reason;?>
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

