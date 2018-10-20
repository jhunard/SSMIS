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
  <a class="navbar-brand" href="index.php">
    <img src="images/logo.png" alt="logo" style="width:70px;">
  </a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="text"  size="30" placeholder="Search SR-Code" onkeyup="showResult(this.value)">
    <div style="position:absolute;top:75%;background-color:#8e8d8a;" id="livesearch">&nbsp;&nbsp;&nbsp;</div>
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

  <a href="index.php">Student's Offense</a>
  <a href="#modal" data-toggle="modal" data-target="#add" >Add Offense</a>
  <a href="reports.php">Reports</a>
  <a href="settings-index.php">Settings</a>
  <a href="../connections/logout.php">Log Out</a>

   </div>
</div> 

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


 <!-- add-->
 <div class="modal fade modal "tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" id="add">
  <div class="modal-dialog modal-dialog-centered" role="dialog" style="position: absolute;top:-20%;right:0;bottom: 0;left:5%;">
    <div class="modal-content" >

      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#dc3545; color:white;">
        <h4 class="col-11 modal-title text-center">Insert SR-Code</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action='verify.php' method="GET">
      <input class='rc col-12 text-center' type="text" name="code" placeholder="Insert ID Number" style="margin-bottom:1em;"><br>

      <!-- Modal footer -->
      <div class="modal-footer">
      <input type='submit' class="btn btn-success">
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

