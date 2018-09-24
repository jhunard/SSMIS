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
.form-row{margin-bottom: 1em;}

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
}
.table{
  margin-top: 1em;
  margin-bottom: 3em;
}
th,td{font-size: 18px;
    text-align: center; }
</style>


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

<div class="container">
   <div class="form-row text-center">
      <div class="col-12"><h1>Student Information Sheet</h1></div><br>
   </div>
</div>

<!-- table -->

<div class="container" style="margin-top: 1em;">
    <!-- UPDATE form -->
    <form action="../connections/student-information-sheet-form-insert.php" method="POST">
        <!-- UPDATE card -->
        <div class="card person-card">
            <div class="card-body" style="margin-left:2%;">
              
                <!-- First row (on medium screen) -->
                <div class="row "><h6 class="col-6"><b>Name:</b>&nbsp;<input type="text" name="name"  class="form-control col-7" placeholder="First Name  Middle Name Last Name" required></h6>
                                  <h6 class="col-6"><b>Year Level:</b>&nbsp;<input type="text" name="yearlevel"  class="form-control col-7" placeholder="Year Level" required></h6><br> </div>
                <div class="row "><h6 class="col-6"><b>Sr-Code:</b>&nbsp;<input type="text" name="srcode"  class="form-control col-7" placeholder="SR-Code" required></h6>
                                  <h6 class="col-6"><b>Department:</b>&nbsp;<input type="text" name="department"  class="form-control col-7" placeholder="Department" required></h6> </div>
               <div class="row "> <h6 class="col-6"><b>Program:</b>&nbsp;<input type="text" name="program"  class="form-control col-7" placeholder="Program" required></h6><br> </div>                 
            </div> 
        </div>
        

              <!-- Personal INFO -->
        <div class="row">
            <div class="col-md-12" style="padding=0.5em;">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Personal Information</h2>

                        <div class="form-group">
                        <div class="form-row">
                             <label for="address" class="col-form-label col-2"><b>Home Address:</b></label>
                             <input type="text" name="address" class="form-control col-10" id="address" placeholder="Enter your Address" required>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                              
                               <label for="phone-number" class="col-form-label col-2"><b>Phone Number:</b></label>
                                <input type="text" name="phone" class="form-control col-3" placeholder="Home Phone Number:" id="phone-number" >
                              
                              <label for="birthdate" class="col-form-label col-4"><b style="margin-left:60%;">Date of Birth:</b></label>
                                <input type="date" name="bday" class="form-control col-3" required>
                           
                            </div>
                        </div>

                         <div class="form-group">
                            <div class="form-row">
                              
                               <label for="mobile-number" class="col-form-label col-2"><b>Mobile Number:</b></label>
                                <input type="text" name="mobile" class="form-control col-3" placeholder="Mobile Number" id="mobile-number" required>
                              
                              <label for="age" class="col-form-label col-4"><b style="margin-left:80%;">Age:</b></label>
                                <input type="number" name="age" class="form-control col-3" id="age" placeholder="Age" required>
                           
                            </div>
                        </div>

                         <div class="form-group">
                            <div class="form-row">
                              
                               <label for="email" class="col-form-label col-2"><b>Email Address:</b></label>
                                <input type="email" name="email" class="form-control col-3" placeholder="example@email.com" id="email" required >
                              
                              <label for="sex" class="col-form-label col-4"><b style="margin-left:80%;">Sex:</b></label>
                                  <select id="sex" name="gender" class="form-control col-3" required>
                                      <option value="male">Male</option>
                                      <option value="female">Female</option></select>
                           
                            </div>
                        </div>

                         <div class="form-group">
                            <div class="form-row">
                              
                               <label for="civil-status" class="col-form-label col-2"><b>Civil Status:</b></label>
                                <input type="text" name="civilstatus" class="form-control col-3" placeholder="Civil Status" id="Civil Status" required>
                              
                              <label for="spouse" class="col-form-label col-4"><b style="margin-left:30%;">Spouse's Name (if married):</b></label>
                                <input type="text" name="spouse" class="form-control col-3" placeholder="Spouse Name (if married)" id="spouse">
                           
                            </div>
                        </div>


                        <div class="form-group">
                         <div class="form-row">
                             <label for="religion" class="col-form-label col-2"><b>Religion:</b></label>
                             <input type="text" name="religion" class="form-control col-3" id="religion" placeholder="Religion" required>
                          </div>
                        </div>

                    </div>
                </div>
              </div>
            </div>
            

              <!-- OTHER INFO -->
              
            <div class="col-md-12">
                <div class="card"> 
                    <div class="card-body">
                        <h2 class="card-title text-center">Other Information</h2>

                        <div class="form-group">
                              <div class="form-row">
                              
                               <label for="father" class="col-form-label col-3"><b>Name of Father:</b></label>
                                <input type="text" name="fathername" class="form-control col-3" placeholder="Father's Name" id="father" required>
                              
                              <label for="mother" class="col-form-label col-3"><b style="margin-left:40%;">Name of Mother:</b></label>
                                <input type="text" name="mothername" class="form-control col-3" placeholder="Mother's Name"  id="mother" required>
                           
                            </div>
                        </div>

                       <div class="form-group">
                            <div class="form-row">
                              
                                <label for="father-age" class="col-form-label col-3"><b>Age:</b></label>
                                <input type="number" name="fatherage" class="form-control col-1" id="father-age" placeholder="Age" required>
                              
                              <label for="mother-age" class="col-form-label col-5"><b style="margin-left:80%;">Age:</b></label>
                                <input type="number" name="motherage" class="form-control col-1" id="mother-age" placeholder="Age" required>
                           
                            </div>
                        </div>

                        <div class="form-group">
                              <div class="form-row">
                              
                               <label for="father-number" class="col-form-label col-3"><b>Mobile Number:</b></label>
                                <input type="text" name="fathermobile" class="form-control col-3" placeholder="Mobile Number" id="father-number" required>
                              
                              <label for="mother-number" class="col-form-label col-3"><b style="margin-left:40%;">Mobile Number:</b></label>
                                <input type="text" name="mothermobile" class="form-control col-3" placeholder="Mobile Number" id="mother-number" required>
                           
                            </div>
                        </div>

                         <div class="form-group">
                              <div class="form-row">
                              
                               <label for="father-education" class="col-form-label col-3"><b>Educational Attainment:</b></label>
                                <input  type="text" name="fathereducation" class="form-control col-3" placeholder="Educational Attainment" id="father-education" required>
                              
                              <label for="mother-education" class="col-form-label col-3"><b style="margin-left:20%;">Educational Attainment:</b></label>
                                <input type="text" name="mothereducation" class="form-control col-3" placeholder="Educational Attainment" id="mother-education" required>
                           
                            </div>
                        </div>

                         <div class="form-group">
                              <div class="form-row">
                              
                               <label for="father-occupation" class="col-form-label col-3"><b>Occupation:</b></label>
                                <input type="text" name="fatheroccupation" class="form-control col-3" placeholder="Occupation" id="father-occupation" required>
                              
                              <label for="mother-occupation" class="col-form-label col-3"><b style="margin-left:40%;">Occupation:</b></label>
                                <input type="text" name="motheroccupation" class="form-control col-3" placeholder="Occupation" id="mother-occupation" required>
                           
                            </div>
                        </div>
                      </div>
                   </div>
                </div>
            <div class="col-md-12">
                          <div class="card"> 
                              <div class="card-body">
                              

                                  <div class="form-group">
                                        <div class="form-row">
                                        
                                         <label for="guardian" class="col-form-label col-3"><b>Guardian's Name:</b></label>
                                          <input type="text" name="guardiansname" class="form-control col-3" placeholder="Guardian's Name" id="guardian" required>
                                        
                                        <label for="relation" class="col-form-label col-3"><b style="margin-left:40%;">Relationship:</b></label>
                                          <input type="text" name="guardiansrelationship" class="form-control col-3" placeholder="Relationship"  id="relation" required>
                                     
                                      </div>
                                  </div>

                                 <div class="form-group">
                                      <div class="form-row">
                                        
                                          <label for="guardian-home" class="col-form-label col-3"><b>Guardian's Home Address:</b></label>
                                          <input type="text" name="guardiansaddress" class="form-control col-9"placeholder="Guardian's Home Address" id="guardian-home" required>
                                     
                                      </div>
                                  </div>

                                  <div class="form-group">
                                        <div class="form-row">
                                        
                                         <label for="guardian-number" class="col-form-label col-3"><b> Guardian's Mobile Number:</b></label>
                                          <input type="text" name="guardiansmobilenumber" class="form-control col-3" placeholder="Guardian's Number" id="guardian-number" required>
                                        
                                       
                                     
                                      </div>
                                  </div>
        </div>    
      </div>  
          <!-- <div style="margin-top: 1em;"> <button type="button" class="btn btn-primary btn-lg btn-block">Update</button></div> -->
          <div class="container">
            <h2 class="text-center" style="margin-top:2em;">Siblings</h2>    
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>School/Company</th>
                  <th>Age</th>
                  <th>Contact Number</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="text" name="siblingname" style=" border:0;outline:0;background:transparent;"></td>
                  <td><input type="text" name="siblingschool" style=" border:0;outline:0;background:transparent;"></td>
                  <td><input type="text" name="siblingage" style=" border:0;outline:0;background:transparent;"></td>
                  <td><input type="text" name="siblingcontact" style=" border:0;outline:0;background:transparent;"></td>
                </tr>
                <tr>
                <td><input type="text" name="siblingname1" style=" border:0;outline:0;background:transparent;"></td>
                  <td><input type="text" name="siblingschool1" style=" border:0;outline:0;background:transparent;"></td>
                  <td><input type="text" name="siblingage1" style=" border:0;outline:0;background:transparent;"></td>
                  <td><input type="text" name="siblingcontact1" style=" border:0;outline:0;background:transparent;"></td>
                </tr>
                <tr>
                <td><input type="text" name="siblingname2" style=" border:0;outline:0;background:transparent;"></td>
                  <td><input type="text" name="siblingschool2" style=" border:0;outline:0;background:transparent;"></td>
                  <td><input type="text" name="siblingage2" style=" border:0;outline:0;background:transparent;"></td>
                  <td><input type="text" name="siblingcontact2" style=" border:0;outline:0;background:transparent;"></td>
                </tr>

                <tr>
                <td><input type="text" name="siblingname3" style=" border:0;outline:0;background:transparent;"></td>
                  <td><input type="text" name="siblingschool3" style=" border:0;outline:0;background:transparent;"></td>
                  <td><input type="text" name="siblingage3" style=" border:0;outline:0;background:transparent;"></td>
                  <td><input type="text" name="siblingcontact3" style=" border:0;outline:0;background:transparent;"></td>
                </tr>
                <tr>
                <td><input type="text" name="siblingname4" style=" border:0;outline:0;background:transparent;"></td>
                  <td><input type="text" name="siblingschool4" style=" border:0;outline:0;background:transparent;"></td>
                  <td><input type="text" name="siblingage4" style=" border:0;outline:0;background:transparent;"></td>
                  <td><input type="text" name="siblingcontact4" style=" border:0;outline:0;background:transparent;"></td>
                </tr>
                <tr>
                <td><input type="text" name="siblingname5" style=" border:0;outline:0;background:transparent;"></td>
                  <td><input type="text" name="siblingschool5" style=" border:0;outline:0;background:transparent;"></td>
                  <td><input type="text" name="siblingage5" style=" border:0;outline:0;background:transparent;"></td>
                  <td><input type="text" name="siblingcontact5" style=" border:0;outline:0;background:transparent;"></td>
                </tr>
                <tr>
                <td><input type="text" name="siblingname6" style=" border:0;outline:0;background:transparent;"></td>
                  <td><input type="text" name="siblingschool6" style=" border:0;outline:0;background:transparent;"></td>
                  <td><input type="text" name="siblingage6" style=" border:0;outline:0;background:transparent;"></td>
                  <td><input type="text" name="siblingcontact6" style=" border:0;outline:0;background:transparent;"></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="container">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th></th>
                          <th>Schools Attended</th>
                          <th>Year Graduated</th>
                          <th>Honors/Awards Received</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><b>Elementary</b></td>
                          <td><input type="text"  name="elemschool" style=" border:0;outline:0;background:transparent;"></td>
                          <td><input type="text" name="elemyeargraduated" style=" border:0;outline:0;background:transparent;"></td>
                          <td><input type="text" name="elemhonor" style=" border:0;outline:0;background:transparent;"></td>
                        </tr>
                        <tr>
                          <td><b>High School</b></td>
                          <td><input type="text" name="hsschool" style=" border:0;outline:0;background:transparent;"></td>
                          <td><input type="text" name="hsyeargraduated" style=" border:0;outline:0;background:transparent;"></td>
                          <td><input type="text" name="hshonor" style=" border:0;outline:0;background:transparent;"></td>
                        </tr>
                        <tr>
                          <td><b>College</b></td>
                          <td><input type="text" name="collegeschool" style=" border:0;outline:0;background:transparent;"></td>
                          <td><input type="text" name="collegeyeargraduated" style=" border:0;outline:0;background:transparent;"></td>
                          <td><input type="text" name="collegehonor" style=" border:0;outline:0;background:transparent;"></td>
                        </tr>

                        <tr>
                          <td><b>Others (please specify)</b></td>
                          <td><input type="text" name="otherschool" style=" border:0;outline:0;background:transparent;"></td>
                          <td><input type="text" name="otheryeargraduated" style=" border:0;outline:0;background:transparent;"></td>
                          <td><input type="text" name="otherhonor" style=" border:0;outline:0;background:transparent;"></td>
                        </tr>
                       
                      </tbody>
                    </table>
                  </div>                             
        <input style="padding:20px;" class="btn btn-success offset-md-4 col-md-4" type="submit" value="Create">
  </form>

      
<br><br><br><br>
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

