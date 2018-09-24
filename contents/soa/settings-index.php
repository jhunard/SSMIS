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
  <title>Settings</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/navbar.css">
   <script src="js/search.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm justify-content-between" >
  <!-- Brand/logo -->
  <a class="navbar-brand" href="guidance-index.php">
    <img src="images/logo.png" alt="logo" style="width:70px;">
  </a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="text"  size="30" placeholder="Search SR-Code" onkeyup="showResult(this.value)">
    <div style="position:absolute;top:75%;width:19.25%;background-color:#8e8d8a;" id="livesearch">&nbsp;&nbsp;&nbsp;</div>
  </form>
  
</nav>
<!-- ENd NAV -->

<!-- SideNav slide-out button -->
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
 <div class="col-12" style="color:white; font-size:33px; margin-bottom:5%;">
 <a href="guidance-index.php"> 
 <img src="images/<?php echo $img; ?>" alt="logo" width="50px;" style="margin-right:5%; margin-top:-5%;border-radius:50%;">
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
      <div class="col-12"><h1>Settings</h1></div>
   </div>
</div>


<!-- Menu -->
<div class="container">
   <div class="form-row text-left">
      <div class="col-12"><a href="#modal" data-toggle="modal" data-target="#user-account"style="font-size:22px; color:#000 !important;text-decoration: none;">User Account</div>
   </div>
</div>  
        
<div class="container" style="margin-top:10px;">
   <div class="form-row text-left">
      <div class="col-12"><a href="#modal" data-toggle="modal" data-target="#services" style="font-size:22px; color:#000 !important;text-decoration: none;">Services</div><br>
   </div>
</div> 
<div class="container" style="margin-top:10px;">
   <div class="form-row text-left">
      <div class="col-12"><a href="#modal" data-toggle="modal" data-target="#register" style="font-size:22px; color:#000 !important;text-decoration: none;">Register</div><br>
   </div>
</div> 

<!-- Modal -->
<!-- User Account -->
<div class="modal fade modal "tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" id="user-account">
  <div class="modal-dialog">
    <div class="modal-content">
  <form  action="../connections/change_pass.php" method="POST">
      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#dc3545; color:white;">
        <h4 class="col-11 modal-title text-center">User Account</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <a style="font-size:22px;">Change Password</a><br>
        <a style="font-size:18px;">Old Password: <input type="password" name="oldpass" style=" border:0;outline:0;background:transparent; border-bottom:1px solid black;"></a><br>
        <a style="font-size:18px;">New Password: <input type="password" name="newpass" style=" border:0;outline:0;background:transparent; border-bottom:1px solid black;"></a><br>
        <a style="font-size:18px;">Retype Password: <input type="password" name="retypepass" style=" border:0;outline:0;background:transparent; border-bottom:1px solid black;"></a>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
       <button type="submit" class="btn btn-success">Update</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
  </form>
    </div>
  </div>
</div>


<!-- Services-->
<div class="modal fade modal "tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" id="services">
  <div class="modal-dialog" style="position: absolute;top:5%;right:0;bottom:0;left:0;">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#dc3545; color:white;">
        <h4 class="col-11 modal-title text-center">All Services</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <?php
      include '../connections/conn.php';

            $sql = "SELECT * FROM services";
            $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<a style='font-size:18px;'> ".$row["services"]."</a><br>";
                      }
                    } else {
                        echo "0 results";
                    }
$conn->close();
?><br><br>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-services" >Add</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
         
      </div>

    </div>
  </div>
</div>


<!-- Register -->
<div class="modal fade modal "tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" id="register">
  <div class="modal-dialog">
    <div class="modal-content">
  <form  action="../connections/register.php" method="POST" enctype="multipart/form-data">
      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#dc3545; color:white;">
        <h4 class="col-11 modal-title text-center">Create Account</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="offset-md-2 col-md-8">
      <input type="radio" value="guidance" id="radioOne" name="position" checked/>
      <label for="radioOne" class="radio">Guidance</label> &nbsp;&nbsp;
      <input type="radio" value="osd" id="radioTwo" name="position" />
      <label for="radioTwo" class="radio">OSD</label> &nbsp;&nbsp;
      <input type="radio" value="soa" id="radioThree" name="position" />
      <label for="radioThree" class="radio">SOA</label> &nbsp;&nbsp;
    </div>
  <hr>

  <input class="offset-md-2 col-md-8" type="text" name="name"  placeholder="Username" required/><br><br>

  <input class="offset-md-2 col-md-8" type="password" name="password"  placeholder="Password" required/><br><br>
  
  <input class="offset-md-2 col-md-8" type="password" name="re-type"  placeholder="Re-type Password" required/><br><br>

  <div class="offset-md-2 col-md-8">
    <input type="file" name="fileToUpload" id="fileToUpload">
  </div> 
  <br><br>
   <p class="offset-md-2 col-md-8">By clicking Register, you agree on our <a href="#">terms and condition</a>.</p>
   </div>

      <!-- Modal footer -->
      <div class="modal-footer">
       <button type="submit" name="submit" class="btn btn-success">Register</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
  </form>
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
        <form action="../connections/services-add.php" method="POST" >
      <!-- Modal body -->
      <div class="modal-body">
        <a style="font-size:22px;">Services: &nbsp; 
        <input type="text" name="service" style=" border:0;outline:0;background:transparent; border-bottom:1px solid black;"></a><br>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" >Add</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
        </form>
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

