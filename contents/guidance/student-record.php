<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
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
       $id = $row["id"];
       $db_sr_code = $row["sr_code"];
       $mname = $row["mname"];
       $name = $row["lname"] . ", " .  $row["fname"] ." ". $mname[0] .".";
       $db_name = $name;
       $db_year_level = $row["year_level"];
       $db_program = $row["program"];
       $db_department = $row["department"];

       if(empty($row["SIS_date_filled"])){
        $db_SIS_date_filled = "- - - - -";
       }else{
        $db_SIS_date_filled = $row["SIS_date_filled"];
       }

       if(empty($row["SIS_date_updated"])){
        $db_SIS_date_updated = "- - - - -";
       }else{
        $db_SIS_date_updated = $row["SIS_date_updated"];
       }
       
       if(empty($row["RGM_date_filled"])){
        $db_RGM_date_filled = "- - - - -";
        $rgmstatus = 0;
       }else{
        $db_RGM_date_filled = $row["RGM_date_filled"];
        $rgmstatus = 1;
       }
       
       if(empty($row["RGM_reason"])){
        $db_RGM_reason = "- - - - -";
        $rgmstatus = 0;
       }else{
        $db_RGM_reason = $row["RGM_reason"];
        $rgmstatus = 1;
       }

       if(empty($row["RC_date_filled"])){
        $db_RC_date_filled = "- - - - -";
        $rcstatus = 0;
       }else{
        $db_RC_date_filled = $row["RC_date_filled"];
        $rcstatus = 1;
       }

       if(empty($row["RC_reason"])){
        $db_RC_reason = "- - - - -";
        $rcstatus = 0;
       }else{
        $db_RC_reason = $row["RC_reason"];
        $rcstatus = 1;
       }
      
    }
}else{
  $sql2 = "SELECT * FROM guidance_log WHERE sr_code='$sr_code' ";
  $result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
      $db_sr_code = $row2["sr_code"];
      $mname = $row["mname"];
       $name = $row["lname"] . ", " .  $row["fname"] ." ". $mname[0] .".";
      $db_name = $name;
      $db_year_level = $row2["year_level"];
      $db_program = $row2["program"];
      $db_department = $row2["department"];
      $db_SIS_date_filled = "- - - - -";
      $db_SIS_date_updated = "- - - - -";
      $db_RGM_date_filled = "- - - - -";
      $db_RGM_reason = "- - - - -";
      $db_RC_date_filled = "- - - - -";
      $db_RC_reason = "- - - - -";
    }
}
       
} 
?>
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
<style>
</style>

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
                        <li> <a href="services.php"> <i class="menu-icon fa fa-gears"></i>Services </a>  </li>
                    
                    
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
                                <strong class="card-title">Student Record</strong>
                            </div>
                            <div class="card-body" >
                            <div class="container">   
<div class="row" style="font-size:18px;">
  <div class="col-8"><?php echo $db_name;?></div>
  <div class="col-4"><?php echo $db_year_level;?></div>
</div>   
</div>

 <div class="container">   
<div class="row" style="font-size:18px;">
  <div class="col-8"><?php echo $db_sr_code;?></div>
  <div class="col-4"><?php echo $db_department;?></div>
</div>   
</div>

<div class="container">   
<div class="row " style="font-size:18px;">
  <div class="col-12"><?php echo $db_program;?></div>
</div>   
</div>

<!-- BORDERSS -->
<div class="container">   
<div class="row" style="font-size:18px; margin-top:3%;">
  <span class="rounded col-11">
     <div style="margin-left:3%;"><b> Student Information Sheet</b><br>
      Date Filled: <?php echo $db_SIS_date_filled;?><br>
      Date Updated: <?php echo $db_SIS_date_updated;?>
        <div class="col-1 float-right"><a href="student-information-sheet-form-view.php?sr-code=<?php echo $db_sr_code;?>&id=<?php echo $id;?>"style="font-size:18px;text-decoration: none;">View</a></div></div> </span>
</div>   
</div>

<?php
if($rgmstatus == 0 ){

}else{
echo "<div class='container'>   
<div class='row' style='font-size:18px; margin-top:3%;'>
  <span class='rounded col-11'>
     <div style='margin-left:3%;'><b>Request For Good Moral</b><br>
      Date Filled: " .$db_RGM_date_filled."<br>
      Reason: ".$db_RGM_reason."
</div>   
</div>
";
}


?>

<?php
if($rcstatus == 0 ){

}else{
echo "<div class='container'>   
<div class='row' style='font-size:18px; margin-top:3%;'>
  <span class='rounded col-11'>
     <div style='margin-left:3%;'><b>Referral Counseling</b><br>
      Date Filled: " .$db_RC_date_filled."<br>
      Reason: ". $db_RC_reason."
</div>   
</div>
";
}

?>
</div>

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
