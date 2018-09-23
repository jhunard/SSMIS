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

        $sql = "SELECT * FROM user_info";
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
  <title>Student Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/navbar.css">
   <script src="js/search.js"></script>
</head>
<style>.card {
    margin-top: 1em;
}

h6{
  font-size:16px;
}
.person-card {
    margin-top: 2em;
}
.person-card .card-title{
    text-align: center;
}
.person-card .person-img{
    width: 10em;
    position: absolute;
    top: -5em;
    left: 50%;
    margin-left: -5em;
    border-radius: 100%;
    overflow: hidden;
    background-color: white;
}</style>


<body>
<nav class="navbar navbar-expand-sm justify-content-between" >
  <!-- Brand/logo -->
  <a class="navbar-brand" href="guidance-index.php">
    <img src="images/logo.png" alt="logo" style="width:50px;">
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

<div class="container">
   <div class="form-row text-center">
      <div class="col-12"><h1>Student Information Updating Form</h1></div><br>
   </div>
</div>

<!-- table -->

<div class="container" style="margin-top: 1em;">
    <!-- UPDATE form -->
    <form action="../connections/student-information-sheet-form-update.php" method="POST">
        <!-- UPDATE card -->
        <div class="card person-card">
            <div class="card-body" style="margin-left:2%;">
              
                <!-- First row (on medium screen) -->
                <div class="row "><h6><b>Name:</b>&nbsp;<input type="text" class="form-control col-md-12" name="name" placeholder="First Name  Middle Name Last Name"></h6><br> </div>
                <div class="row "><h6><b>Sr-Code:</b>&nbsp;<input type="text" class="form-control col-md-12" name="srcode" placeholder="Sr-Code"></h6><br></div>
            </div> 
        </div>
        
        <div class="row">
            <div class="col-md-6" style="padding=0.5em;">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Personal Information</h2>

                        <div class="form-group">
                            <label for="program" class="col-form-label"><b>Program:</b></label>
                            <input type="text" class="form-control" name="program" id="program" placeholder="BS Information Technology" required>
                        </div>

                        <div class="form-group">
                            <label for="input_year-level" class="col-form-label"><b>Year Level:</b></label>
                            <select id="input_year-level" name="yearlevel" class="form-control">
                            <option value="1st Year">1st Year</option>
                            <option value="2nd Year">2nd Year</option>
                            <option value="3rd Year">3rd Year</option>
                            <option value="4th Year">4th Year</option>
                            <option value="5th Year">5th Year</option>
                        </select>
                        </div>

                         <div class="form-group">
                            <label for="input_dept" class="col-form-label"><b>Department:</b></label>
                            <select id="input_dept" name="department" class="form-control">
                            <option value="CICS">CICS</option>
                            <option value="CIT">CIT</option>
                            <option value="CEAFA">CEAFA</option>
                            <option value="CAS">CAS</option>
                            <option value="CTE">CTE</option>
                            <option value="CABEIHM">CABEIHM</option>
                        </select>
                        </div>

                        <div class="form-group">
                             <label for="email" class="col-form-label"><b>Email Address:</b></label>
                             <input type="email" name="email"  class="form-control" id="email" placeholder="example@email.com" required>
                        </div>

                    </div>
                </div>
              </div>
    
            


              
            <div class="col-md-6">
                <div class="card"> 
                    <div class="card-body">
                        <h2 class="card-title">Other Information</h2>

                        <div class="form-group">
                             <label for="address" class="col-form-label"><b>Present Address:</b></label>
                             <input type="text" name="address" class="form-control" id="address" placeholder="Enter your Present Address" required>
                        </div>

                       <div class="form-group">
                             <label for="contact" class="col-form-label"><b>Contact Number:</b></label>
                             <input type="text"  name="phone" class="form-control" id="contact" placeholder="+xxx - xxxx - xxx" required>
                        </div>

                        <div class="form-group">
                             <label for="civil-status" class="col-form-label"><b>Civil Status:</b></label> 
                             <input type="text"  name="status" class="form-control" id="civil-status" placeholder="Single" required>
                        </div>

                         <div class="form-group">
                             <label for="name-spouse" class="col-form-label"><b>If Married, Name of Spouse:</b></label>
                             <input type="text"  name="spouse" class="form-control" id="name-spouse" placeholder="Name of Spouse">
                        </div>

                      </div>
                   </div>
                </div>
           
        </div>
        <div style="margin-top: 1em;">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Update</button><br><br>
        </div>
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

