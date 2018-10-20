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
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Services</title>
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
<!-- ENd sideNAV -->

<div class="container">
   <div class="form-row text-center">
      <div class="col-12"><h1>Services</h1></div>
   </div>
</div>


<!-- Menu -->
<div class="container">
   <div class="form-row text-left">
      <div class="col-12"><a href="#modal" data-toggle="modal" data-target="#sis"style="font-size:22px; color:#000 !important;text-decoration: none;" >Student Information Sheet</div>
   </div>
</div>  
        
<div class="container" style="margin-top:10px;">
   <div class="form-row text-left">
      <div class="col-12"><a href="#modal" data-toggle="modal" data-target="#counseling" style="font-size:22px; color:#000 !important;text-decoration: none;">Referral Counseling</div><br>
   </div>
</div> 

<div class="container"style="margin-top:10px;">
   <div class="form-row text-left">
     <div class="col-12"><a href="#modal" data-toggle="modal" data-target="#goodmoral" style="font-size:22px; color:#000 !important;text-decoration: none;">Request for Good Moral</div><br>
   </div>
</div>  

<div class="container"style="margin-top:10px;">
   <div class="form-row text-left" data-toggle="modal" data-target="#add-services">
      <div class="col-12"><a href="#" style="font-size:22px; color:#000 !important;text-decoration: none;">More Services</div>
   </div>
</div>  

<!-- Modal -->
<!-- Student Information Sheet Modal -->
<div class="modal fade modal "tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" id="sis">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#dc3545; color:white;">
        <h4 class="col-11 modal-title text-center">Student Information Sheet</h4>
        <button type="button" class="close" data-dismiss="modal" >&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <a href="student-information-sheet-form.php"><button  class="btn btn-success col-md-12">Student Information Sheet Form</button></a><br><br>
      <a href="student-information-updating-form.php"><button  class="btn btn-success col-md-12">Student Information Updating Form</button></a>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<!-- Referral Counseling-->
<div class="modal fade modal "tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" id="counseling">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#dc3545; color:white;">
        <h4 class="col-11 modal-title text-center">Referral Counseling</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action='../connections/rc-services-insert.php' method="post">
      <input class='rc' type="text" name="rcName" placeholder="Full Name"><br>
      <input class='rc' type="text" name="rcsrCode" placeholder="ID Number"><br>
      <input class='rc' type="text" name="rcyearlevel" placeholder="Year Level"><br>
      <input class='rc' type="text" name="rcprogram" placeholder="Program"><br>
      <input class='rc' type="text" name="rcdepartment" placeholder="Department">
<br><br><br>
   <a style="font-size:18px;">Date: <input type="date" style='border:none;text-align:center;' name='rcdate' style="font-size:14px;"></a><br>
    <a style="font-size:18px;">Reason: <input type="text"name='rcreason' style=" border:0;outline: 0;background: transparent; border-bottom: 1px solid black;"></a>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <input type='submit' class="btn btn-success" name='Add' value='Add'>
      </form>
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- Request for Good Moral-->
<div class="modal fade modal "tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" id="goodmoral">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#dc3545; color:white;">
        <h4 class="col-11 modal-title text-center">Request for Good Moral</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action='../connections/rgm-services-insert.php' method="post">
      <input class='rc' type="text" name="rgmName" placeholder="Full Name"><br>
      <input class='rc' type="text" name="rgmsrCode" placeholder="ID Number"><br>
      <input class='rc' type="text" name="rgmyearlevel" placeholder="Year Level"><br>
      <input class='rc' type="text" name="rgmprogram" placeholder="Program"><br>
      <input class='rc' type="text" name="rgmdepartment" placeholder="Department">
<br><br><br>
   <a style="font-size:18px;">Date: <input type="date" style='border:none;text-align:center;' name='rgmdate' style="font-size:14px;"></a><br>
    <a style="font-size:18px;">Reason: <input type="text"name='rgmreason' style=" border:0;outline: 0;background: transparent; border-bottom: 1px solid black;"></a>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <input type='submit' class="btn btn-success" name='Add' value='Add'>
      </form>
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- Add Services-->
<div class="modal fade modal "tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" id="add-services">
  <div class="modal-dialog modal-dialog-centered" role="dialog" style="position: absolute;top:-20%;right:0;bottom: 0;left:5%;">
    <div class="modal-content" >

      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#dc3545; color:white;">
        <h4 class="col-11 modal-title text-center">Add Services</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action='../connections/other-services-insert.php' method="post">
      <input class='rc' type="text" name="otherName" placeholder="Full Name"><br>
      <input class='rc' type="text" name="othersrCode" placeholder="ID Number"><br>
      <input class='rc' type="text" name="otheryearlevel" placeholder="Year Level"><br>
      <input class='rc' type="text" name="otherprogram" placeholder="Program"><br>
      <input class='rc' type="text" name="otherdepartment" placeholder="Department">
<br><br><br>
   <a style="font-size:18px;">Date: <input type="date" style='border:none;text-align:center;' name='otherdate' style="font-size:14px;"></a><br>
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
    <a style="font-size:18px;">Reason: <input type="text"name='otherreason' style=" border:0;outline: 0;background: transparent; border-bottom: 1px solid black;"></a>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <input type='submit' class="btn btn-success" name='Add' value='Add'>
      </form>
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

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

<script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script> 
  <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>

