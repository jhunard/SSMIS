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
$code=$_GET["code"];

include '../connections/conn.php';

$sql = "SELECT * FROM student_offenses WHERE sr_code='$code' ";
$result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $mname = $row["mname"];
          $lname = $row["lname"];
          $fname=$row["fname"];
          $yearlevel = $row["year_level"];
          $program = $row["program"];
          $department = $row["department"];
          $started = $row["date_started"];
          $ended = $row["date_ended"];
          $typeofviolation = $row["type_of_violation"];
          $violation = $row["violation"];
          $status = $row["status"];
          $name = $lname . ", " . $fname ." ". $mname[0] .".";
          $srcode = $row["sr_code"];
            
          }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
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

<div id="main">
  <button class="openbtn" onclick="openNav()"style="color:black;">☰</button>  
</div>
<!-- ENd sideNAV -->

<div class="container">
   <div class="form-row text-center">
   <div class="col-12"><h3>Student Offense Record</h3></div>
      <div class="col-3"><h6>Name : <?php echo $lname; ?>, <?php echo $fname; ?> <?php echo $mname[0]; ?>.</h6></div>
      <div class="offset-md-6 col-3"><h6>ID Number : <?php echo $srcode; ?></h6></div>
</div><br>


<!-- table -->

<div class="container">      
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No.</th>
        <th>Year Level</th>
         <th>Program</th>
         <th>Department</th>
         <th>Date Started</th>
         <th>Date Ended</th>
         <th>Type of Violation</th>
         <th>Violation</th>
         <th>Status</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $code=$_GET["code"];
    $status = $_GET["xml"];
    if(empty($status)){
      $status = "0";
      $button = " <input type='submit' class='btn btn-success float-right ' name='Add' value='Add' data-toggle='modal' data-target='#addoffense'>
      <input type='submit' class='btn btn-primary float-right' name='Add' value='Update' data-toggle='modal' data-target='#update' style='margin-right:1em;'>";
    }else{
      $status = "1";
      $button = "";
    }

    if (empty($code)){
      echo "<script type='text/javascript'>
      alert ('Please enter ID No. first before viewing the information!'); 
      window.location.href='index.php';</script>";
    } 
      include '../connections/conn.php';

            $sql = "SELECT * FROM student_offenses WHERE sr_code='$code' ";
            $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      $mname = $row["mname"];
                      $lname = $row["lname"];
                      $fname=$row["fname"];
                      $yearlevel = $row["year_level"];
                      $program = $row["program"];
                      $department = $row["department"];
                      $started = $row["date_started"];
                      $ended = $row["date_ended"];
                      $typeofviolation = $row["type_of_violation"];
                      $violation = $row["violation"];
                      $status = $row["status"];
                      $srcode = $row["sr_code"];
                        $x = 0;
                        $y += $x + 1;
                        echo "<tr>
                        <td>".$y."</td>
                        <td>".$yearlevel."</td>
                        <td>".$program."</td>
                        <td>".$department."</td>
                        <td>".$started."</td>
                        <td>".$ended."</td>
                        <td>".$typeofviolation."</td>
                        <td>".$violation."</td>
                        <td>".$status."</td>
                      </tr>";
                      }
                    } else {
                        echo "
                              <td style='text-align:center;'>-</td>
                              <td style='text-align:center;'>-</td>
                              <td style='text-align:center;'>-</td>
                              <td style='text-align:center;'>-</td>
                              <td style='text-align:center;'>-</td>
                              <td style='text-align:center;'>-</td>
                              <td style='text-align:center;'>-</td>
                              <td style='text-align:center;'>-</td>
                              ";
                        
                    }
$conn->close();
?>
    </tbody>
  </table>
</div>


      </div>

<div class="container" >
      <?php echo $button;?>
      </form>
      
      </div>



<!-- Modal -->
<!-- Student Information Sheet Modal -->
<div class="modal fade modal "tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" id="addoffense">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#dc3545; color:white;">
        <h4 class="col-11 modal-title text-center">Offense</h4>
        <button type="button" class="close" data-dismiss="modal" >&times;</button>
      </div>

      <!-- Modal body -->
      <form action="../connections/offenseupload.php" method="POST">
      <div class="modal-body">
      <div class="form-group">
      <input type="text" name="srcode" value="<?php echo $srcode; ?>" hidden>
      <input type="text" name="fname" value="<?php echo $fname; ?>" hidden>
      <input type="text" name="mname" value="<?php echo $mname; ?>" hidden>
      <input type="text" name="lname" value="<?php echo $lname; ?>" hidden>
      <input type="text" name="yearlevel" value="<?php echo $yearlevel; ?>" hidden>
      <input type="text" name="program" value="<?php echo $program; ?>" hidden>
      <input type="text" name="department" value="<?php echo $department; ?>" hidden>
      <input type="text" name="status" value="On Going" hidden>
      <input type="text" class="form-control" id="add" name="offense" placeholder="Add Offense" required>
            </div>
           <div class="form-group">
      <select name="offensetype" required>
        <option>Select Type of Offense</option>
        <option value="Minor">Minor</option>
        <option value="Major">Major</option>
       </select>
            </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <button type="submit" class="btn btn-success" >Add</button>
        </form>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- Update -->
<div class="modal fade modal "tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" id="update">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#dc3545; color:white;">
        <h4 class="col-11 modal-title text-center">Update Offenses</h4>
        <button type="button" class="close" data-dismiss="modal" >&times;</button>
      </div>

      <!-- Modal body -->
      <form action="../connections/offenseupdate.php" method="POST">
      <div class="modal-body">
      <div class="form-group">
      <p>Check if the case resolved!</p>
      <input type="text" name="srcode" value="<?php echo $srcode; ?>" hidden>
      <?php
 
      include '../connections/conn.php';

      $sql = "SELECT * FROM student_offenses WHERE status = 'On Going'";
      $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                echo "<input type='radio' name='offense' value='".$row["id"]."' required> ".$row["violation"]."<br>";
                }
              } else {
                  echo "0 results";
              }

?>
     
      
            </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <button type="submit" class="btn btn-success" >Update</button>
        </form>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
 <!-- add-->
 <div class="modal fade modal "tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" id="add">
  <div class="modal-dialog modal-dialog-centered" role="dialog" style="position: absolute;top:-20%;right:0;bottom: 0;left:5%;">
    <div class="modal-content" >

      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#dc3545; color:white;">
        <h4 class="col-11 modal-title text-center">Insert ID Number</h4>
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


<!-- Javascript -->
<script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script> 
  <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>

