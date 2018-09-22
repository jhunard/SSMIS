<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/navbar.css">
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
 <div class="col-12" style="color:white; font-size:33px; margin-bottom:5%;"><a href="guidance-index.php"> <img src="images/userlogin.png" alt="logo" width="50px;" style="margin-right:5%; margin-top:-5%;">Guidance</img></a></div> 

  <a href="student-information.php">Student Information Sheet</a>
  <a href="offenses-index.php">Student's Offense</a>
  <a href="reports-index.php">Report</a>
  <a href="settings-index.php">Settings</a>
  <a href="../index.php">Log Out</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()"style="color:black;">☰</button>  
</div>

<div class="container">
   <div class="form-row text-center">
      <div class="col-12"><h1>Student Information</h1></div>
   </div>
</div>

<!-- table -->

<div class="container">      
  <table class="table table-bordered col-11" style="text-align:center;">
    <thead>
      <tr>
        <th>SR-Code</th>
        <th>Name</th>
        <th>Year Level</th>
         <th>Program</th>
         <th>Department</th>
         <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
      include '../connections/conn.php';

            $sql = "SELECT * FROM guidance_log";
            $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                        <td><a href='student-information-sheet-form-view-updated.php?sr-code=".$row["sr_code"]."'>".$row["sr_code"]."</a></td>
                        <td><a href='student-information-sheet-form-view-updated.php?sr-code=".$row["sr_code"]."'>".$row["name"]."</a></td>
                        <td><a href='student-information-sheet-form-view-updated.php?sr-code=".$row["sr_code"]."'>".$row["year_level"]."</a></td>
                        <td><a href='student-information-sheet-form-view-updated.php?sr-code=".$row["sr_code"]."'>".$row["program"]."</a></td>
                        <td><a href='student-information-sheet-form-view-updated.php?sr-code=".$row["sr_code"]."'>".$row["department"]."</a></td>
                        <td><div class='container' >
                        <div class='col-1'><a href='student-information-sheet-form-view-updated.php?sr-code=".$row["sr_code"]."'><button type='button' class='btn btn-primary'>View Student Information</button></a></div>
                            
                         </div></td>
                      </tr>";
                      }
                    } else {
                        echo "0 results";
                    }
$conn->close();
?>
    </tbody>
  </table>
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

