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

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    
<style>
  /* Hide HTML5 Up and Down arrows. */
      input[type="number"]::-webkit-outer-spin-button, input[type="number"]::-webkit-inner-spin-button {
         -webkit-appearance: none;
            margin: 0;
}
 
input[type="number"] {
    -moz-appearance: textfield;
}


</style>

</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel ">
        <nav class="navbar  navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  
                    <li style="margin-top:50px"><a href="index.php"> <i class="menu-icon fa fa-home"></i>Home</a> </li>
                     <li> <a href="student-offense.php"> <i class="menu-icon fa fa-exclamation-circle"></i>Student's Offense </a>  </li>
                       
                  
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file-text"></i>Reports</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-file-text"></i><a href="">Monthly Report</a></li>
                            <li><i class="menu-icon fa fa-file-text"></i><a href="">Quarterly Report</a></li>
                              <li><i class="menu-icon fa fa-file-text"></i><a href="">Annual Report</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-gear"></i>Settings</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-user"></i><a href="">User Account</a></li>
                            <li><i class="menu-icon fa fa-gears"></i><a href="">Services</a></li>
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
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                                    

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
     
 

        
        <div class="content">
            <div class="animated fadeIn">
            <form action="#" method="post" class="form">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                  
                                </div>
                                <div class="card-body">
                                    <!-- Student info -->
                                    <div id="student-info">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <h3 class="text-center">Student Information Sheet</h3>
                                            </div>
                                            <hr>
                                
                                    <div class="form-group"><label for="full-name" class=" form-control-label">Full Name:</label>
                                        <div class="input-group">
                                           
                                           <div> <input type="text" id="Lname" name="username" placeholder="Last Name" class="form-control col col-sm-11" ></div>
                                          
                                           <div> <input type="text" id="Fname" name="username" placeholder="First Name" class="form-control col col-sm-11"></div>
                                            
                                            <div><input type="text" id="Mname" name="username" placeholder="Middle Name" class="form-control col col-sm-12"></div>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-6">
                                            <div class="form-group"><label for="full-name" class=" form-control-label">ID Number:</label><input type="text" name="srcode"  class="form-control "  placeholder="ID Number"  maxlength="20" required > </div>
                                        </div>
                                               

                                  
                                        <div class="col-6">
                                          <div class="form-group"><label for="yearlevel" class=" form-control-label">Year Level:</label>
                                                 <select name="select" id="select" class="form-control">
                                                    <option>Select Year</option>
                                                    <option value="1st Year">1st Year</option>
                                                    <option value="2nd Year">2nd Year</option>
                                                    <option value="3rd Year">3rd Year</option>
                                                    <option value="4th Year">4th Year</option>
                                                    <option value="5th Year">5th Year</option>
                                               </select>
                                             </div>
                                          </div>
                                        </div>    

                                    <div class="form-group"><label for="program" class=" form-control-label">Program:</label><input type="text" name="program" pattern="[A-Za-z]{1,120}"  class="form-control col-7 " placeholder="Program" required></div>
                                    <div class="form-group"> <label for="department" class=" form-control-label">Department:</label><input type="text" name="department" pattern="[A-Za-z]{1,120}"  class="form-control col-7 " placeholder="Department" required></div>

                                        </div>
                                    </div>

                                </div>
                            </div> <!-- .student info -->

                        </div><!--/.col-->

                 

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
                                            <div class="col-12 col-md-9"><input type="text" id="address" name="address"  class="form-control form-control-sm" placeholder="Enter your Address" required></div>
                                        </div>

                                          <div class="row form-group">
                                            <div class="col-12 col-md-3"><label for="phone-number" class=" form-control-label">Tel. Number:</label></div>
                                            <div class="col-12 col-md-3"> <input type="number"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" minlength="10" maxlength="10" name="phone-number" class="form-control  form-control-sm" placeholder="Tel Number" id="phone-number"></div>

                                            <div class="col-12 col-md-3"><label for="mobile-number" class=" form-control-label">Mobile Number:</label></div>
                                            <div class="col-12 col-md-3"> <input type="number"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" minlength="11" maxlength="11" name="mobile-number"class="form-control form-control-sm "  placeholder="Mobile Number" id="mobile-number" ></div>
                                         </div>

                                        <div class="row form-group">
                                             <div class="col-12 col-md-3"><label for="address" class=" form-control-label">Email Address:</label></div>
                                            <div class="col-12 col-md-9"><input type="email" id="email" name="address"  class="form-control form-control-sm" placeholder="Enter your Email Address" required></div>

                                          
                                         </div>
                                         <br>
                                        <div class="row form-group">  

                                           <div class="col-12 col-md-1"><label for="age" class=" form-control-label">Age:</label></div>
                                            <div class="col-12 col-md-2"> <input type="number"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" minlength="2" maxlength="3" name="phone-number" class="form-control form-control-sm  "    placeholder="Age" id="age" ></div> 

                                            <div class="col-12 col-md-1"><label for="sex" class=" form-control-label">Sex:</label></div>
                                             <select id="sex" name="gender" class="form-control form-control-sm col-3" required>
                                              <option value="None">None</option>
                                              <option value="Male">Male</option>
                                              <option value="Female">Female</option></select>

                                                <div class="col-12 col-md-2"><label for="civil-status" class=" form-control-label" >Civil Status:</label></div>
                                             <select id="civil-status" name="civil-status" class="form-control form-control-sm col-3" required>
                                              <option value="single">Single</option>
                                              <option value="married">Married</option>
                                              <option value="divorced">Divorced</option>
                                              <option value="seperated">Seperated</option>
                                              <option value="widowed">Widowed</option></select>

                                          
                                        </div>
                                         <div class="row form-group">
                                          
                                        </div>
                                           
                                          <div class="row form-group">

                                            <div class="col-12 col-md-4"><label for="spouse" class=" form-control-label">Spouse's Name (if married):</label></div>
                                            <div class="col-12 col-md-8"><input type="text" id="spouse" name="spouse"  class="form-control form-control-sm" placeholder="Name of Spouse" maxlength="50"></div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-12 col-md-4"><label for="religion" class=" form-control-label">Religion:</label></div>
                                            <div class="col-12 col-md-8"><input type="text" id="religion" name="religion"  class="form-control form-control-sm" placeholder="Religion" pattern="[A-Za-z]{1,15}"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
                                            <div class="col-12 col-md-2"><label for="father" class=" form-control-label">Name of Father:</label></div>
                                            <div class="col-12 col-md-4"><input type="text" id="father" name="father"  class="form-control form-control-sm" placeholder="Father's Name" pattern="[A-Za-z.]{1,20}"required></div>

                                            <div class="col-12 col-md-2"><label for="mother" class=" form-control-label">Name of Mother:</label></div>
                                            <div class="col-12 col-md-4"><input type="text" id="mother" name="mother"  class="form-control form-control-sm" placeholder="Mother's Name" pattern="[A-Za-z.]{1,20}" required></div>
                                        </div>

                                          <div class="row form-group">
                                             <div class="col-12 col-md-2"><label for="age" class=" form-control-label">Age:</label></div>
                                            <div class="col-12 col-md-2"> <input type="number"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" minlength="2" maxlength="3" name="phone-number" class="form-control form-control-sm  "    placeholder="Age" id="age" ></div> 

                                             <div class="col-12 col-md-2" style="margin-left:17%;"><label for="age" class=" form-control-label">Age:</label></div>
                                            <div class="col-12 col-md-2"> <input type="number"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" minlength="2" maxlength="3" name="phone-number" class="form-control form-control-sm  "    placeholder="Age" id="age" ></div> 

                                            
                                         </div>

                                        <div class="row form-group">
                                             
                                            <div class="col-12 col-md-2"><label for="mobile-number" class=" form-control-label">Mobile Number:</label></div>
                                            <div class="col-12 col-md-4"> <input type="number"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" minlength="11" maxlength="11" name="mobile-number"class="form-control form-control-sm "  placeholder="Mobile Number" id="mobile-number" ></div>


                                            <div class="col-12 col-md-2"><label for="mobile-number" class=" form-control-label">Mobile Number:</label></div>
                                            <div class="col-12 col-md-4"> <input type="number"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" minlength="11" maxlength="11" name="mobile-number"class="form-control form-control-sm "  placeholder="Mobile Number" id="mobile-number" ></div>
                                          
                                         </div>
                                         
                                        <div class="row form-group"> 
                                            <div class="col-12 col-md-2"><label for="education" class=" form-control-label">Educational Attainment: </label></div>
                                             <select id="education" name="education" class="form-control form-control-sm col-12 col-md-4" required>
                                              <option value="None">None</option>
                                              <option value="colgrad">College Graduate</option>
                                              <option value="vocational">Vocational</option>
                                              <option value="hsgrad">High School Graduate</option>
                                              <option value="gsgrad">Grade School Graduate</option>
                                              <option value="colu-grad">College Undergraduate</option>
                                              <option value="hsu-grad">High School Underraduate</option></select>

                                               <div class="col-12 col-md-2"><label for="education" class=" form-control-label">Educational Attainment: </label></div>
                                             <select id="education" name="education" class="form-control form-control-sm col-12 col-md-4" required>
                                              <option value="None">None</option>
                                              <option value="colgrad">College Graduate</option>
                                              <option value="vocational">Vocational</option>
                                              <option value="hsgrad">High School Graduate</option>
                                              <option value="gsgrad">Grade School Graduate</option>
                                              <option value="colu-grad">College Undergraduate</option>
                                              <option value="hsu-grad">High School Underraduate</option></select>

                                          
                                        </div>
                                           
                                          <div class="row form-group">

                                            <div class="col-12 col-md-2"><label for="occupation" class=" form-control-label">Occupation:</label></div>
                                            <div class="col-12 col-md-4"><input type="text" id="occupation" name="occupation"  class="form-control form-control-sm" placeholder="Occupation" pattern="[A-Za-z]{1,20}" required></div>

                                            <div class="col-12 col-md-2"><label for="occupation" class=" form-control-label">Occupation:</label></div>
                                            <div class="col-12 col-md-4"><input type="text" id="occupation" name="occupation"  class="form-control form-control-sm" placeholder="Occupation" pattern="[A-Za-z]{1,20}" required></div>
                                        </div><br><br>

                                         <div class="row form-group">

                                            <div class="col-12 col-md-2"><label for="guardian" class=" form-control-label">Guardian's Name:</label></div>
                                            <div class="col-12 col-md-4"><input type="text" id="guardian" name="guardian"  class="form-control form-control-sm" placeholder="Guardian's Name" pattern="[A-Za-z.]{1,20}" required></div>

                                            <div class="col-12 col-md-2"><label for="sex" class=" form-control-label">Relationship:</label></div>
                                             <select id="education" name="education" class="form-control form-control-sm col-4" required>
                                              <option value="None">None</option>
                                              <option value="mother">Mother</option>
                                              <option value="father">Father</option>
                                              <option value="gmother">Grandmother</option>
                                              <option value="gfather">Grandfather</option>
                                              <option value="sibling">Sibling</option>
                                              <option value="aunt/uncle">Aunt/Uncle</option>

                                              </select>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-12 col-md-2"><label for="Gaddress" class=" form-control-label">Guardian Address:</label></div>
                                            <div class="col-12 col-md-8"><input type="text" id="Gaddress" name="Gaddress"  class="form-control form-control-sm" placeholder="Enter your Guardian Address" required></div>
                                        </div>
                                         <div class="row form-group">
                                        <div class="col-12 col-md-2"><label for="Gmobile-number" class=" form-control-label"> Guardian Mobile Number:</label></div>
                                            <div class="col-12 col-md-3"> <input type="number"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" minlength="11" maxlength="11" name="mobile-number"class="form-control form-control-sm "  placeholder="Guardian Mobile Number" id="Gmobile-number" ></div>
                                            </div><br><br><br>

                                             <div class="card-title">
                                            <h3 class="text-center">Siblings </h3>
                                        </div>
                                        
                                                    <table class="table table-bordered" >
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
                                                          <td><input type="text" name="siblingname" style=" border:0;outline:0;background:transparent; min-width:100%" pattern="[A-Za-z.]{1,20}"></td>
                                                          <td><input type="text" name="siblingschool" style=" border:0;outline:0;background:transparent;min-width:100%"pattern="[A-Za-z.]{1,50}"></td>
                                                          <td><input type="text" name="siblingage" style=" border:0;outline:0;background:transparent;min-width:100% " oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" minlength="2" maxlength="3"></td>
                                                          <td><input type="text" name="siblingcontact" style=" border:0;outline:0;background:transparent;min-width:100% "oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" minlength="11" maxlength="11"></td>

                                                        </tr>
                                                        <div></div>
                                                        <tr>
                                                        <td><input type="text" name="siblingname1" style=" border:0;outline:0;background:transparent;min-width:100% "pattern="[A-Za-z.]{1,20}"></td>
                                                          <td><input type="text" name="siblingschool1" style=" border:0;outline:0;background:transparent;min-width:100% "pattern="[A-Za-z.]{1,50}"></td>
                                                          <td><input type="text" name="siblingage1" style=" border:0;outline:0;background:transparent;min-width:100% "oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" minlength="2" maxlength="3"></td>
                                                          <td><input type="text" name="siblingcontact1" style=" border:0;outline:0;background:transparent;min-width:100% "oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" minlength="11" maxlength="11"></td>
                                                        </tr>
                                                        <tr>
                                                        <td><input type="text" name="siblingname2" style=" border:0;outline:0;background:transparent;min-width:100% "pattern="[A-Za-z.]{1,20}"></td>
                                                          <td><input type="text" name="siblingschool2" style=" border:0;outline:0;background:transparent;min-width:100% "pattern="[A-Za-z.]{1,50}"></td>
                                                          <td><input type="text" name="siblingage2" style=" border:0;outline:0;background:transparent;min-width:100% "oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" minlength="2" maxlength="3"></td>
                                                          <td><input type="text" name="siblingcontact2" style=" border:0;outline:0;background:transparent;min-width:100% "oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" minlength="11" maxlength="11"></td>
                                                        </tr>

                                                        <tr>
                                                        <td><input type="text" name="siblingname3" style=" border:0;outline:0;background:transparent;min-width:100% "pattern="[A-Za-z.]{1,20}"></td>
                                                          <td><input type="text" name="siblingschool3" style=" border:0;outline:0;background:transparent;min-width:100% "pattern="[A-Za-z.]{1,50}"></td>
                                                          <td><input type="text" name="siblingage3" style=" border:0;outline:0;background:transparent;min-width:100% "oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" minlength="2" maxlength="3"></td>
                                                          <td><input type="text" name="siblingcontact3" style=" border:0;outline:0;background:transparent;min-width:100% "oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" minlength="11" maxlength="11"></td>
                                                        </tr>
                                          
                                                      </tbody>
                                                    </table><br><hr><br>



                                                        <table class="table table-bordered">
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
                                                              <td><input type="text"  name="elemschool" style=" border:0;outline:0;background:transparent; min-width:100%" pattern="[A-Za-z.]{1,20}" required></td>
                                                              <td><input type="text" name="elemyeargraduated" style=" border:0;outline:0;background:transparent; min-width:100%" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" minlength="4" maxlength="4" required></td>
                                                              <td><input type="text" name="elemhonor" style=" border:0;outline:0;background:transparent;min-width:100%"maxlength="50" required></td>
                                                            </tr>
                                                            <tr>
                                                              <td><b>High School</b></td>
                                                              <td><input type="text" name="hsschool" style=" border:0;outline:0;background:transparent;min-width:100%" pattern="[A-Za-z.]{1,20}"></td>
                                                              <td><input type="text" name="hsyeargraduated" style=" border:0;outline:0;background:transparent;min-width:100%" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" minlength="4" maxlength="4"></td>
                                                              <td><input type="text" name="hshonor" style=" border:0;outline:0;background:transparent;min-width:100%"maxlength="50"></td>
                                                            </tr>
                                                            <tr>
                                                              <td><b>College</b></td>
                                                              <td><input type="text" name="collegeschool" style=" border:0;outline:0;background:transparent;min-width:100%" pattern="[A-Za-z.]{1,20}"></td>
                                                              <td><input type="text" name="collegeyeargraduated" style=" border:0;outline:0;background:transparent;min-width:100%"oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" minlength="4" maxlength="4"></td>
                                                              <td><input type="text" name="collegehonor" style=" border:0;outline:0;background:transparent;min-width:100%"maxlength="50"  ></td>
                                                            </tr>

                                                            <tr>
                                                              <td><b>Others (please specify)</b></td>
                                                              <td><input type="text" name="otherschool" style=" border:0;outline:0;background:transparent;min-width:100%" pattern="[A-Za-z.]{1,20}"></td>
                                                              <td><input type="text" name="otheryeargraduated" style=" border:0;outline:0;background:transparent;min-width:100%"oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" minlength="4" maxlength="4"></td>
                                                              <td><input type="text" name="otherhonor" style=" border:0;outline:0;background:transparent;min-width:100%"maxlength="50"></td>
                                                            </tr>
                                                           
                                                          </tbody>
                                                        </table>
                                                      </div>                             

                                                     <button  type="submit" style="padding:15px;" class="btn btn-outline-success offset-md-5 col-md-2"><i class="fa fa-check-circle-o"></i>&nbsp; Create</button>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

       </form>         

        </div><!-- .animated -->
    </div><!-- .content -->

    <div class="clearfix"></div>



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
     <!-- input restriction -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script><!-- input restriction -->
   
  
  <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>

  <script>
function myCreateFunction() {
    var result = 1;
 
    var table = document.getElementById("myTable");
    var row = table.insertRow(0);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4= row.insertCell(3);
    cell1.innerHTML = "<input type='text'>";
    cell2.innerHTML = "<input type='text'>";
    cell3.innerHTML = "<input type='text'>";
    cell4.innerHTML = "<input type='text' name='"+ (result += result) + "'>";
}

function myDeleteFunction() {
    document.getElementById("myTable").deleteRow(0);
}

jQuery(document).ready( function($) {
 
    // Disable scroll when focused on a number input.
    $('form').on('focus', 'input[type=number]', function(e) {
        $(this).on('wheel', function(e) {
            e.preventDefault();
        });
    });
 
    // Restore scroll on number inputs.
    $('form').on('blur', 'input[type=number]', function(e) {
        $(this).off('wheel');
    });
 
    // Disable up and down keys.
    $('form').on('keydown', 'input[type=number]', function(e) {
        if ( e.which == 38 || e.which == 40 )
            e.preventDefault();
    });  
      
});

</script>


</body>
</html>
