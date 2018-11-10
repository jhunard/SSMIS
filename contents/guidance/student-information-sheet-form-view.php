<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
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
       $db_id = $row["id"];
       $db_sr_code = $row["sr_code"];
       $fname=$row["fname"];
        $mname=$row["mname"];
        $lname=$row["lname"];
        if (empty($mname)){
            $mname = "";
        }else{
            $mname = $mname[0].".";
        }
        $name = $lname.", ". $fname ." ". $mname;
       $db_name = $name;
       $db_year_level = $row["year_level"];
       $db_program = $row["program"];
       $db_department = $row["department"];
       $db_address = $row["address"];
       $db_phone = $row["phone"];
       $db_mobile = $row["mobile"];
       $db_email = $row["email"];
       $db_status = $row["civilstatus"];
       $db_religion = $row["religion"];
       $db_bday = $row["bday"];
       $db_age = $row["age"];
       $db_gender = $row["gender"];
       $db_spouse = $row["spouse"];
       $db_fname = $row["fathername"];
       $db_mname = $row["mothername"];
       $db_fage = $row["fatherage"];
       $db_mage = $row["motherage"];
       $db_fmobile = $row["fathermobile"];
       $db_mmobile = $row["mothermobile"];
       $db_feduc = $row["fathereducation"];
       $db_meduc = $row["mothereducation"];
       $db_foccupation = $row["fatheroccupation"];
       $db_moccupation = $row["motheroccupation"];
       $db_gname = $row["guardiansname"];
       $db_gaddress = $row["guardainsaddress"];
       $db_gmobile = $row["guardiansmobilenumber"];
       $db_grelationship = $row["guardainsrelationship"];
       $db_siblingage = $row["siblingage"];
       $db_siblingcontact = $row["siblingcontact"];
       $db_siblingname = $row["siblingname"];
       $db_siblingschool = $row["siblingschool"];
       $db_siblingage1 = $row["siblingage1"];
       $db_siblingcontact1 = $row["siblingcontact1"];
       $db_siblingname1 = $row["siblingname1"];
       $db_siblingschool1 = $row["siblingschool1"];
       $db_siblingage2 = $row["siblingage2"];
       $db_siblingcontact2 = $row["siblingcontact2"];
       $db_siblingname2 = $row["siblingname2"];
       $db_siblingschool2 = $row["siblingschool2"];
       $db_siblingage3 = $row["siblingage3"];
       $db_siblingcontact3 = $row["siblingcontact3"];
       $db_siblingname3 = $row["siblingname3"];
       $db_siblingschool3 = $row["siblingschool3"];
       $db_siblingage4 = $row["siblingage4"];
       $db_siblingcontact4 = $row["siblingcontact4"];
       $db_siblingname4 = $row["siblingname4"];
       $db_siblingschool4 = $row["siblingschool4"];
       $db_siblingage5 = $row["siblingage5"];
       $db_siblingcontact5 = $row["siblingcontact5"];
       $db_siblingname5 = $row["siblingname5"];
       $db_siblingschool5 = $row["siblingschool5"];
       $db_siblingage6 = $row["siblingage6"];
       $db_siblingcontact6 = $row["siblingcontact6"];
       $db_siblingname6 = $row["siblingname6"];
       $db_siblingschool6 = $row["siblingschool6"];
       $db_elemgraduated = $row["elemyeargraduated"];
       $db_elemhonor = $row["elemhonor"];
       $db_elemschool = $row["elemschool"];
       $db_hshonor = $row["hshonor"];
       $db_hsschool = $row["hsschool"];
      $db_hsyeargraduated = $row["hsyeargraduated"];
      $db_collegegraduated = $row["collegeyeargraduated"];
      $db_collegehonor = $row["collegehonor"];
      $db_collegeschool = $row["collegeschool"];
      $db_otherhonor = $row["otherhonor"];
      $db_otherschool = $row["otherschool"];
      $db_otheryeargraduated = $row["otheryeargraduated"];
    }
}        
?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Guidance</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="css/cs-skin-elastic.css">
    <link rel="stylesheet" href="css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    


</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel ">
        <nav class="navbar  navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                 <ul class="nav navbar-nav">
                  
                    <li style="margin-top:50px"><a href="index.php"> <i class="menu-icon fa fa-home"></i>Home</a> </li>
                     <li> <a href="student-offense.php"> <i class="menu-icon fa fa-exclamation-circle"></i>Student's Offense </a>  </li>
                        <li> <a href="services-add.php"> <i class="menu-icon fa fa-gears"></i>Services </a>  </li>
                    
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file-text"></i>Reports</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-file-text"></i><a href="monthly-report.php">Monthly Report</a></li>
                              <li><i class="menu-icon fa fa-file-text"></i><a href="quarterly-report.php">Quarterly Report</a></li>
                              <li><i class="menu-icon fa fa-file-text"></i><a href="annual-report.php">Annual Report</a></li>
                        </ul>
                    </li>
                 
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-gear"></i>Settings</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-user"></i><a href="">User Account</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="">Register</a></li>
                        </ul>
                    </li>
                     <li> <a href=""> <i class="menu-icon fa fa-sign-out"></i>Log Out</a>  </li>

                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href=""><img src=  "images/logos.png" alt="Logo" width="150px"></a>
                    
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            

                     

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/<?php echo $img; ?>" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
     
 

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col col-md-10 offset-md-2">
                        <div class="card">
                            <div class="card-header text-center">
                                <strong class="card-title">Student Information Sheet</strong>
                            </div>
                            <div class="card-body" >
                            <div class="container" style="margin-top: 1em;">
    <!-- UPDATE form -->
    <form >
        <!-- UPDATE card -->
        <div class="card person-card">
            <div class="card-body" style="margin-left:2%;">
              
                <!-- First row (on medium screen) -->
                <div class="row "><h6 class="col-6"><b>Name:</b>&nbsp;<input type="text" name="name"  class="form-control col-7" value="<?php echo $db_name; ?>" readonly></h6>
                                  <h6 class="col-6"><b>Year Level:</b>&nbsp;<input type="text" name="yearlevel"  class="form-control col-7" value="<?php echo $db_year_level; ?>" readonly></h6><br> </div>
                <div class="row "><h6 class="col-6"><b>ID Number:</b>&nbsp;<input type="text" name="srcode"  class="form-control col-7" value="<?php echo $db_sr_code; ?>" readonly></h6>
                                  <h6 class="col-6"><b>Department:</b>&nbsp;<input type="text" name="department"  class="form-control col-7" value="<?php echo $db_department; ?>" readonly></h6> </div>
               <div class="row "> <h6 class="col-6"><b>Program:</b>&nbsp;<input type="text" name="program"  class="form-control col-7" value="<?php echo $db_program; ?>" readonly></h6><br> </div>                 
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
                             <input type="text" name="address" class="form-control col-10" id="address" value="<?php echo $db_address; ?>" readonly>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                              
                               <label for="phone-number" class="col-form-label col-2"><b>Phone Number:</b></label>
                                <input type="text" name="phone" class="form-control col-3"  id="phone-number" value="<?php echo $db_phone; ?>" readonly >
                              
                              <label for="birthdate" class="col-form-label col-4"><b style="margin-left:60%;">Date of Birth:</b></label>
                                <input type="date" name="bday" class="form-control col-3" value="<?php echo $db_bday; ?>" readonly >
                           
                            </div>
                        </div>

                         <div class="form-group">
                            <div class="form-row">
                              
                               <label for="mobile-number" class="col-form-label col-2"><b>Mobile Number:</b></label>
                                <input type="text" name="mobile" class="form-control col-3"  id="mobile-number" value="<?php echo $db_mobile; ?>" readonly >
                              
                              <label for="age" class="col-form-label col-4"><b style="margin-left:80%;">Age:</b></label>
                                <input type="number" name="age" class="form-control col-3" id="age" value="<?php echo $db_age; ?>" readonly >
                           
                            </div>
                        </div>

                         <div class="form-group">
                            <div class="form-row">
                              
                               <label for="email" class="col-form-label col-2"><b>Email Address:</b></label>
                                <input type="email" name="email" class="form-control col-3"  id="email" value="<?php echo $db_email; ?>" readonly >
                              
                              <label for="sex" class="col-form-label col-4"><b style="margin-left:80%;">Sex:</b></label>
                              <input type="text" name="gender" class="form-control col-3"   value="<?php echo $db_gender; ?>" readonly >
                           
                            </div>
                        </div>

                         <div class="form-group">
                            <div class="form-row">
                              
                               <label for="civil-status" class="col-form-label col-2"><b>Civil Status:</b></label>
                                <input type="text" name="civilstatus" class="form-control col-3"  id="Civil Status" value="<?php echo $db_status; ?>" readonly >
                              
                              <label for="spouse" class="col-form-label col-4"><b style="margin-left:30%;">Spouse's Name (if married):</b></label>
                                <input type="text" name="spouse" class="form-control col-3"  id="spouse" value="<?php echo $db_spouse; ?>" readonly >
                           
                            </div>
                        </div>


                        <div class="form-group">
                         <div class="form-row">
                             <label for="religion" class="col-form-label col-2"><b>Religion:</b></label>
                             <input type="text" name="religion" class="form-control col-3" id="religion" value="<?php echo $db_religion; ?>" readonly >
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
                                <input type="text" name="fathername" class="form-control col-3"  id="father" value="<?php echo $db_fname; ?>" readonly >
                              
                              <label for="mother" class="col-form-label col-3"><b style="margin-left:40%;">Name of Mother:</b></label>
                                <input type="text" name="mothername" class="form-control col-3"   id="mother" value="<?php echo $db_mname; ?>" readonly >
                           
                            </div>
                        </div>

                       <div class="form-group">
                            <div class="form-row">
                              
                                <label for="father-age" class="col-form-label col-3"><b>Age:</b></label>
                                <input type="number" name="fatherage" class="form-control col-1" id="father-age" value="<?php echo $db_fage; ?>" readonly >
                              
                              <label for="mother-age" class="col-form-label col-5"><b style="margin-left:80%;">Age:</b></label>
                                <input type="number" name="motherage" class="form-control col-1" id="mother-age" value="<?php echo $db_mage; ?>" readonly >
                           
                            </div>
                        </div>

                        <div class="form-group">
                              <div class="form-row">
                              
                               <label for="father-number" class="col-form-label col-3"><b>Mobile Number:</b></label>
                                <input type="text" name="fathermobile" class="form-control col-3"  id="father-number" value="<?php echo $db_fmobile; ?>" readonly>
                              
                              <label for="mother-number" class="col-form-label col-3"><b style="margin-left:40%;">Mobile Number:</b></label>
                                <input type="text" name="mothermobile" class="form-control col-3"  id="mother-number" value="<?php echo $db_mmobile; ?>" readonly>
                           
                            </div>
                        </div>

                         <div class="form-group">
                              <div class="form-row">
                              
                               <label for="father-education" class="col-form-label col-3"><b>Educational Attainment:</b></label>
                                <input  type="text" name="fathereducation" class="form-control col-3"  id="father-education" value="<?php echo $db_feduc; ?>" readonly>
                              
                              <label for="mother-education" class="col-form-label col-3"><b style="margin-left:20%;">Educational Attainment:</b></label>
                                <input type="text" name="mothereducation" class="form-control col-3"  id="mother-education" value="<?php echo $db_meduc; ?>" readonly>
                           
                            </div>
                        </div>

                         <div class="form-group">
                              <div class="form-row">
                              
                               <label for="father-occupation" class="col-form-label col-3"><b>Occupation:</b></label>
                                <input type="text" name="fatheroccupation" class="form-control col-3"  id="father-occupation" value="<?php echo $db_foccupation; ?>" readonly>
                              
                              <label for="mother-occupation" class="col-form-label col-3"><b style="margin-left:40%;">Occupation:</b></label>
                                <input type="text" name="motheroccupation" class="form-control col-3"  id="mother-occupation" value="<?php echo $db_moccupation; ?>" readonly>
                           
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
                                          <input type="text" name="guardiansname" class="form-control col-3"  id="guardian" value="<?php echo $db_gname; ?>" readonly>
                                        
                                        <label for="relation" class="col-form-label col-3"><b style="margin-left:40%;">Relationship:</b></label>
                                          <input type="text" name="guardiansrelationship" class="form-control col-3"   id="relation" value="<?php echo $db_grelationship; ?>" readonly>
                                     
                                      </div>
                                  </div>

                                 <div class="form-group">
                                      <div class="form-row">
                                        
                                          <label for="guardian-home" class="col-form-label col-3"><b>Guardian's Home Address:</b></label>
                                          <input type="text" name="guardiansaddress" class="form-control col-9" id="guardian-home" value="<?php echo $db_gaddress; ?>" readonly>
                                     
                                      </div>
                                  </div>

                                  <div class="form-group">
                                        <div class="form-row">
                                        
                                         <label for="guardian-number" class="col-form-label col-3"><b> Guardian's Mobile Number:</b></label>
                                          <input type="text" name="guardiansmobilenumber" class="form-control col-3"  id="guardian-number" value="<?php echo $db_gmobile; ?>" readonly>
                                        
                                       
                                     
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
                  <td><input type="text" name="siblingname" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingname; ?>" readonly></td>
                  <td><input type="text" name="siblingschool" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingschool; ?>" readonly></td>
                  <td><input type="text" name="siblingage" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingage; ?>" readonly></td>
                  <td><input type="text" name="siblingcontact" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingcontact; ?>" readonly></td>
                </tr>
                <tr>
                <td><input type="text" name="siblingname" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingname1; ?>" readonly></td>
                  <td><input type="text" name="siblingschool" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingschool1; ?>" readonly></td>
                  <td><input type="text" name="siblingage" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingage1; ?>" readonly></td>
                  <td><input type="text" name="siblingcontact" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingcontact1; ?>" readonly></td>
                </tr>
                <tr>
                <td><input type="text" name="siblingname" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingname2; ?>" readonly></td>
                  <td><input type="text" name="siblingschool" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingschool2; ?>" readonly></td>
                  <td><input type="text" name="siblingage" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingage2; ?>" readonly></td>
                  <td><input type="text" name="siblingcontact" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingcontact2; ?>" readonly></td>
                </tr>

                <tr>
                <td><input type="text" name="siblingname" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingname3; ?>" readonly></td>
                  <td><input type="text" name="siblingschool" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingschool3; ?>" readonly></td>
                  <td><input type="text" name="siblingage" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingage3; ?>" readonly></td>
                  <td><input type="text" name="siblingcontact" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingcontact3; ?>" readonly></td>
                </tr>
                <tr>
                <td><input type="text" name="siblingname" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingname4; ?>" readonly></td>
                  <td><input type="text" name="siblingschool" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingschool4; ?>" readonly></td>
                  <td><input type="text" name="siblingage" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingage4; ?>" readonly></td>
                  <td><input type="text" name="siblingcontact" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingcontact4; ?>" readonly></td>
                </tr>
                <tr>
                <td><input type="text" name="siblingname" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingname5; ?>" readonly></td>
                  <td><input type="text" name="siblingschool" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingschool5; ?>" readonly></td>
                  <td><input type="text" name="siblingage" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingage5; ?>" readonly></td>
                  <td><input type="text" name="siblingcontact" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingcontact5; ?>" readonly></td>
                </tr>
                <tr>
                <td><input type="text" name="siblingname" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingname6; ?>" readonly></td>
                  <td><input type="text" name="siblingschool" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingschool6; ?>" readonly></td>
                  <td><input type="text" name="siblingage" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingage6; ?>" readonly></td>
                  <td><input type="text" name="siblingcontact" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_siblingcontact6; ?>" readonly></td>
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
                          <td><input type="text"  name="elemschool" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_elemschool; ?>" readonly></td>
                          <td><input type="text" name="elemyeargraduated" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_elemgraduated; ?>" readonly></td>
                          <td><input type="text" name="elemhonor" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_elemhonor; ?>" readonly></td>
                        </tr>
                        <tr>
                          <td><b>High School</b></td>
                          <td><input type="text" name="hsschool" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_hsschool; ?>" readonly></td>
                          <td><input type="text" name="hsyeargraduated" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_hsyeargraduated; ?>" readonly></td>
                          <td><input type="text" name="hshonor" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_hshonor; ?>" readonly></td>
                        </tr>
                        <tr>
                          <td><b>College</b></td>
                          <td><input type="text" name="collegeschool" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_collegeschool; ?>" readonly></td>
                          <td><input type="text" name="collegeyeargraduated" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_collegegraduated; ?>" readonly></td>
                          <td><input type="text" name="collegehonor" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_collegehonor; ?>" readonly></td>
                        </tr>

                        <tr>
                          <td><b>Others (please specify)</b></td>
                          <td><input type="text" name="otherschool" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_otherschool; ?>" readonly></td>
                          <td><input type="text" name="otheryeargraduated" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_otheryeargraduated; ?>" readonly></td>
                          <td><input type="text" name="otherhonor" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_otherhonor; ?>" readonly></td>
                        </tr>
                       
                      </tbody>
                    </table>
                  </div>                             
                  
  </form>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>

     
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
               
 	<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Table Script -->
	 <script src="js/lib/data-table/datatables.min.js"></script>
    <script src="js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="js/lib/data-table/jszip.min.js"></script>
    <script src="js/lib/data-table/vfs_fonts.js"></script>
    <script src="js/lib/data-table/buttons.html5.min.js"></script>
    <script src="js/lib/data-table/buttons.print.min.js"></script>
    <script src="js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="js/init/datatables-init.js"></script>
  
  <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>
</body>
</html>
