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
 
      include '../connections/conn.php';

              $sql2 = "SELECT * FROM system_settings ORDER BY id ASC";
              $result2 = $conn->query($sql2);
        
                  if ($result2->num_rows > 0) {
                      // output data of each row
                      while($row2 = $result2->fetch_assoc()) {
                          $system_img = $row2["picture"];
                        }
                      } else {
                          echo "0 results";
                      }
      
?>

<?php
$sr_code=$_GET["sr-code"];


if (empty($sr_code)){
  echo "<script type='text/javascript'>
  alert ('Please select student first before viewing the information!'); 
  window.location.href='index.php';</script>";
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
      $db_image = $row["image"];
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
    <link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <style>
    input{
        background-color:red;
    }
    </style>


</head>

<body>
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
                            <li><i class="menu-icon fa fa-plus-circle"></i><a href="services.php">Add Services</a></li>
                            <li><i class="menu-icon fa fa-user"></i><a href="user-account.php">User Account</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="register.php">Register</a></li>
                        </ul>
                    </li>
                     <li> <a href=" ../connections/logout.php"> <i class="menu-icon fa fa-sign-out"></i>Log Out</a>  </li>

                    
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
                    <a class="navbar-brand" href=""><img src=  "../../images/<?php echo $system_img;?>" alt="Logo" width="150px"></a>
                    
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                                    

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/<?php echo $img; ?>" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                           

                            <a class="nav-link" href="../connections/logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
 

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                  <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header"></div>
                                <div class="card-body">
                                    <!-- Student info -->
                                    <div id="student-info">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <h3 class="text-center">Student Information Sheet</h3>
                                                <div class="form-group"><label for="full-name" class=" form-control-label">Full Name:</label>
                                       <div class="col-7">
                                        <input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="name"  class="form-control " value="<?php echo $db_name; ?>" readonly>                                  
                                       </div>
                                       <img class="offset-md-7 col-md-4" src="images/<?php echo $db_image; ?>" style="position:absolute;">
                                    </div>
                                            <hr>
                                   

                                    <div class="row">
                                      <div class="col-7">
                                         <div class="form-group "><label for="sr_code" class=" form-control-label">ID Number:</label><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="sr_code"  class="form-control "  value="<?php echo $db_sr_code; ?>" readonly></div>
                                       </div>

                                        <div class="col-7">
                                          <div class="form-group"><label for="year_level" class=" form-control-label">Year Level:</label><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="year_level"  class="form-control" value="<?php echo $db_year_level; ?>" readonly></div>
                                         </div>
                                    </div>    
                                    
                                    <div class="form-group"><label for="program" class=" form-control-label">Program:</label><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="program"  class="form-control col-7" value="<?php echo $db_program; ?>" readonly></div>
                                    <div class="form-group"><label for="department" class=" form-control-label">Department:</label><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="department"  class="form-control col-7" value="<?php echo $db_department; ?>" readonly></div>
                                       </div>


                                   

                                        </div>
                                    </div><!-- .Student info -->

                                </div><!-- .card body -->
                            </div> <!-- .card -->

                        </div><!--/.col-->


            <!-- Personal Information -->
            <div class="col-lg-6">
                     <div class="card">
                            <div class="card-header"></div>

                         <div class="card-body card-block">
                             <div id="student-info">
                                 <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Personal Information </h3>
                                        </div>
                                        <hr><br>


                                   
                                        <div class="row form-group">
                                            <div class="col-12 col-md-3"><label for="address" class=" form-control-label">Home Address:</label></div>
                                            <div class="col-12 col-md-9"><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="address" class="form-control form-control-sm" id="address" value="<?php echo $db_address; ?>" readonly></div>
                                         </div>   

                                          <div class="row form-group">
                                            <div class="col-12 col-md-3"><label for="phone" class=" form-control-label">Tel. Number:</label></div>
                                            <div class="col-12 col-md-3">  <input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="phone" class="form-control form-control-sm"  id="phone" value="<?php echo $db_phone; ?>" readonly ></div>
                               

                                            <div class="col-12 col-md-3"><label for="mobile" class=" form-control-label">Mobile Number:</label></div>
                                            <div class="col-12 col-md-3"><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="mobile" class="form-control form-control-sm"  id="mobile" value="<?php echo $db_mobile; ?>" readonly ></div>
                        
                                         </div>

                                        <div class="row form-group">
                                             <div class="col-12 col-md-3"><label for="email" class=" form-control-label">Email Address:</label></div>
                                            <div class="col-12 col-md-9">  <input type="email"  style="background-color:transparent;border:none;" name="email" class="form-control form-control-sm"  id="email" value="<?php echo $db_email; ?>" readonly ></div>

                                         </div>
                                         <br>

                                        <div class="row form-group">  
                                             <div class="col-12 col-md-3"><label for="bday" class=" form-control-label">Birthday:</label></div> 

                                              <div class="col-12 col-md-3">  <input type="date"  style="background-color:transparent;border:none;" name="bday" class="form-control form-control-sm" id="bday" value="<?php echo $db_bday; ?>" readonly ></div>  

                                           <div class="col-12 col-md-2"><label for="age" class=" form-control-label">Age:</label></div>
                                            <div class="col-12 col-md-2">  <input type="number"  style="background-color:transparent;border:none;"  style="background-color:transparent;border:none;" name="age" class="form-control form-control-sm" id="age" value="<?php echo $db_age; ?>" readonly ></div>  
                                        </div>
                                         <div class="row form-group">
                                           <div class="col-12 col-md-3"><label for="gender" class=" form-control-label">Sex:</label></div>
                                              <input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="gender" class="form-control form-control-sm col-3"   value="<?php echo $db_gender; ?>" readonly >

                                                <div class="col-12 col-md-2"><label for="civil-status" class=" form-control-label" >Civil Status:</label></div>
                                            <input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="civil_status" class="form-control form-control-sm col-3"  id="civil_status" value="<?php echo $db_status; ?>" readonly >
                                        </div>
                                           
                                          <div class="row form-group">

                                            <div class="col-12 col-md-4"><label for="spouse" class=" form-control-label">Spouse's Name (if married):</label></div>
                                            <div class="col-12 col-md-8"><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" id="spouse" name="spouse"  class="form-control form-control-sm" value="<?php echo $db_spouse; ?>" readonly></div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-12 col-md-4"><label for="religion" class=" form-control-label">Religion:</label></div>
                                            <div class="col-12 col-md-8"><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" id="religion" name="religion"  class="form-control form-control-sm" value="<?php echo $db_religion; ?>" readonly ></div>
                                        </div>

                                    </div><!-- Card Body -->
                                </div> <!-- Personal info -->
                            </div>
                        </div>
                    </div>                               

               
                                
               


              <!-- OTHER INFO -->
              
            <div class="col-lg-12">
                     <div class="card">
                            <div class="card-header"></div>

                         <div class="card-body card-block">
                             <div id="student-info">
                                 <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Other Information </h3>
                                        </div>
                                        <hr><br>


                                   
                             <div class="row form-group">
                              
                                <div class="col-12 col-md-2"><label for="fathername" class=" form-control-label">Name of Father:</label></div>
                                 <div class="col-12 col-md-4"><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="fathername" class="form-control form-control-sm"  id="fathername" value="<?php echo $db_fname; ?>" readonly ></div>
                              
                                 <div class="col-12 col-md-2"><label for="mothername" class=" form-control-label">Name of Mother:</label></div>
                                  <div class="col-12 col-md-4"><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="mothername" class="form-control form-control-sm"   id="mothername" value="<?php echo $db_mname; ?>" readonly ></div>
                           
                            </div>
                        
                       <div class="row form-group">
                                  <div class="col-12 col-md-2"><label for="fatherage" class=" form-control-label">Age:</label></div>
                                   <div class="col-12 col-md-2"> <input type="number"  style="background-color:transparent;border:none;" name="fatherage" class="form-control form-control-sm" id="fatheraage" value="<?php echo $db_fage; ?>" readonly ></div>
                              
                                  <div class="col-12 col-md-2" style="margin-left:17%;"><label for="age" class=" form-control-label">Age:</label></div>
                                   <div class="col-12 col-md-2">  <input type="number"  style="background-color:transparent;border:none;" name="motherage" class="form-control form-control-sm" id="mother-age" value="<?php echo $db_mage; ?>" readonly ></div>
 
                       </div>

                        <div class="row form-group">
                              
                              
                                <div class="col-12 col-md-2"><label for="fathermobile" class=" form-control-label">Mobile Number:</label></div>
                                 <div class="col-12 col-md-4"><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="fathermobile" class="form-control form-control-sm"  id="fathermobile" value="<?php echo $db_fmobile; ?>" readonly></div>
                              
                                <div class="col-12 col-md-2"><label for="mothermobile" class=" form-control-label">Mobile Number:</label></div>
                                <div class="col-12 col-md-4" ><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="mothermobile" class="form-control form-control-sm"  id="mothermobile" value="<?php echo $db_mmobile; ?>" readonly></div>
                        
                        </div>

                         <div class="row form-group">
                             
                              
                                <div class="col-12 col-md-2"><label for="fathereducation" class=" form-control-label">Educational Attainment: </label></div>
                                <div class="col-12 col-md-4"> <input  type="text" style="background-color:transparent;border:none;" name="fathereducation" class="form-control form-control-sm"  id="father-education" value="<?php echo $db_feduc; ?>" readonly></div>
                              
                             <div class="col-12 col-md-2"><label for="mothereducation" class=" form-control-label">Educational Attainment: </label></div>
                                <div class="col-12 col-md-4"><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="mothereducation" class="form-control form-control-sm"  id="mother-education" value="<?php echo $db_meduc; ?>" readonly> </div>

                        </div>

                         <div class="row form-group">
                          
                               <div class="col-12 col-md-2"><label for="fatheroccupation" class=" form-control-label">Occupation:</label></div>
                                  <div class="col-12 col-md-4"><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="fatheroccupation" class="form-control form-control-sm"  id="father-occupation" value="<?php echo $db_foccupation; ?>" readonly></div>
                              
                              <div class="col-12 col-md-2"><label for="motheroccupation" class=" form-control-label">Occupation:</label></div>
                                <div class="col-12 col-md-4"><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="motheroccupation" class="form-control form-control-sm"  id="mother-occupation" value="<?php echo $db_moccupation; ?>" readonly>  </div> 
                      </div>

                        <div class="row form-group">
                              <div class="col-12 col-md-2"><label for="guardiansname" class=" form-control-label">Guardian's Name:</label></div>
                               <div class="col-12 col-md-4"><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="guardiansname" class="form-control form-control-sm"  id="guardian" value="<?php echo $db_gname; ?>" readonly></div>
                                        
                              <div class="col-12 col-md-2"><label for="guardiansrelationship" class=" form-control-label">Relationship:</label></div>
                              <div class="col-12 col-md-4"><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="guardiansrelationship" class="form-control form-control-sm"   id="relation" value="<?php echo $db_grelationship; ?>" readonly></div>
                         </div>

                          <div class="row form-group">
                                <div class="col-12 col-md-2"><label for="guardiansaddress" class=" form-control-label">Guardian Address:</label></div>
                               <div class="col-12 col-md-8"><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="guardiansaddress" class="form-control col-9" id="guardian-home" value="<?php echo $db_gaddress; ?>" readonly></div>

                          </div>
                           <div class="row form-group">
                               <div class="col-12 col-md-2"><label for="guardiansmobilenumber" class=" form-control-label"> Guardian Mobile Number:</label></div>
                                 <div class="col-12 col-md-3">  <input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="guardiansmobilenumber" class="form-control form-control-sm"  id="guardian-number" value="<?php echo $db_gmobile; ?>" readonly></div><br><br><br>
                          </div>
                           <div class="card-title"><h3 class="text-center">Siblings </h3></div>
           




          <div class="col-md-12">
             <div class="card"> 
                <div class="card-body">
                              
               <table class="table table-striped table-bordered" >
                  <thead>
                     <tr>
                        <th style="min-width:33.33%">Name</th>
                         <th style="min-width:33.33%">School/Company</th>
                        <th style="min-width:33.33%">Age</th>
                       <th style="min-width:33.33%">Contact Number</th>
                    </tr>
                  </thead>
                  <tbody id="myTable">                       
                                        
                                 
       
                <tr>
                  <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingname" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingname; ?>" readonly></td>
                  <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingschool" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingschool; ?>" readonly></td>
                  <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingage" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingage; ?>" readonly></td>
                  <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingcontact" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingcontact; ?>" readonly></td>
                </tr>
                <tr>
                <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingname" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingname1; ?>" readonly></td>
                  <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingschool" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingschool1; ?>" readonly></td>
                  <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingage" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingage1; ?>" readonly></td>
                  <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingcontact" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingcontact1; ?>" readonly></td>
                </tr>
                <tr>
                <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingname" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingname2; ?>" readonly></td>
                  <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingschool" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingschool2; ?>" readonly></td>
                  <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingage" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingage2; ?>" readonly></td>
                  <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingcontact" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingcontact2; ?>" readonly></td>
                </tr>

                <tr>
                <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingname" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingname3; ?>" readonly></td>
                  <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingschool" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingschool3; ?>" readonly></td>
                  <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingage" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingage3; ?>" readonly></td>
                  <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingcontact" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingcontact3; ?>" readonly></td>
                </tr>
                <tr>
                <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingname" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingname4; ?>" readonly></td>
                  <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingschool" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingschool4; ?>" readonly></td>
                  <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingage" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingage4; ?>" readonly></td>
                  <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingcontact" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingcontact4; ?>" readonly></td>
                </tr>
                <tr>
                <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingname" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingname5; ?>" readonly></td>
                  <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingschool" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingschool5; ?>" readonly></td>
                  <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingage" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingage5; ?>" readonly></td>
                  <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingcontact" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingcontact5; ?>" readonly></td>
                </tr>
                <tr>
                <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingname" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingname6; ?>" readonly></td>
                  <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingschool" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingschool6; ?>" readonly></td>
                  <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingage" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingage6; ?>" readonly></td>
                  <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="siblingcontact" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_siblingcontact6; ?>" readonly></td>
                </tr>
              </tbody>
               </table><br><hr><br>

                    <table class="table table-striped table-bordered">
                                                          <thead>
                                                            <tr>
                                                              <th style="min-width:33.33%"></th>
                                                              <th style="min-width:33.33%">Schools Attended</th>
                                                              <th style="min-width:33.33%">Year Graduated</th>
                                                              <th style="min-width:33.33%">Honors/Awards Received</th>
                                                              
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                          <td><b>Elementary</b></td>
                          <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;"  name="elemschool" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_elemschool; ?>" readonly></td>
                          <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="elemyeargraduated" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_elemgraduated; ?>" readonly></td>
                          <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="elemhonor" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_elemhonor; ?>" readonly></td>
                        </tr>
                        <tr>
                          <td><b>High School</b></td>
                          <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="hsschool" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_hsschool; ?>" readonly></td>
                          <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="hsyeargraduated" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_hsyeargraduated; ?>" readonly></td>
                          <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="hshonor" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_hshonor; ?>" readonly></td>
                        </tr>
                        <tr>
                          <td><b>College</b></td>
                          <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="collegeschool" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_collegeschool; ?>" readonly></td>
                          <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="collegeyeargraduated" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_collegegraduated; ?>" readonly></td>
                          <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="collegehonor" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_collegehonor; ?>" readonly></td>
                        </tr>

                        <tr>
                          <td><b>Others (please specify)</b></td>
                          <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="otherschool" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_otherschool; ?>" readonly></td>
                          <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="otheryeargraduated" style=" border:0;outline:0;background:transparent;" value="<?php echo $db_otheryeargraduated; ?>" readonly></td>
                          <td><input type="text"  style="background-color:transparent;border:none;" style="background-color:transparent;border:none;" name="otherhonor" style=" border:0;outline:0;background:transparent;min-width:100%" value="<?php echo $db_otherhonor; ?>" readonly></td>
                        </tr>
                       
                      </tbody>
                    </table>
                  </div>                             
                  
 
                                    </div>
                                </div>
                            </div>
                        </div>

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


</body>
</html>
