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
 $servicesvalue= $_GET["servicesvalue"];
 $monthvalue= $_GET["monthvalue"];
 $yearvalue= $_GET["yearvalue"];
 $lyearvalue = $yearvalue - 1;
 $status = $_GET["status"];

 switch ($status) {
    case "1":
    include '../connections/graph-querry-osd.php';
        break;
    case "2":
    include '../connections/graph-querry-osd-quarter.php';
        break;
    case "3":
    include '../connections/graph-querry-osd-annual.php';
        break;
    default:
      
}

 ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OSD | Graph</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="css/cs-skin-elastic.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">
</head>

<body>
     <aside id="left-panel" class="left-panel ">
        <nav class="navbar  navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  
                    <li style="margin-top:50px"><a href="index.php"> <i class="menu-icon fa fa-home"></i>Home</a> </li>
                    
                    
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
                            <li><i class="menu-icon fa fa-user"></i><a href="user-account.php">User Account</a></li>
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
        <!-- Header--><style>.navbar-brand { max-height: 50px; width: 100%;}.navbar-brand img{ max-height: 45px; max-width:150px;} </style>
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                <a class="navbar-brand" href=""><img src=  "../../images/<?php echo $system_img;?>" alt="Logo"></a>
                <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                                    

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <img class="user-avatar rounded-circle" src="../guidance/images/<?php echo $img; ?>" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                           

                            <a class="nav-link" href="../connections/logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
     
     
        <!-- /#header -->     
        <!-- Content -->
        <style>


section {
    min-height: 100%;
}
</style>
        
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                  <!--  BarChart-->


                  
                    <div class="col-lg-12"  id="section1">
                        <div class="card">
                            <div class="card-body">
                              <div class="row ">
                                
                                <h3 class="col-9 "><?php echo $servicesvalue;?> Offenses result on <?php echo $monthvalue;?> <?php echo $yearvalue;?></h3>
                                <canvas id="barGraph"></canvas>
                            </div>
                        </div>
                    </div><!-- /# column -->
                   </div> 
                </div>

            </div><!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>

    </div>
    <!-- /#right-panel -->




    <!-- Scripts -->
     <!--  Chart js -->
     <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script> 
  <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/mdb.min.js"></script>
     <script src="js/mdb.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   
  
<!-- Jhuanard BarChart -->
<script>
  //bar
  var ctxB = document.getElementById("barGraph").getContext('2d');
  var myBarChart = new Chart(ctxB, {
    type: 'bar',
    data: {
      labels: [ "<?php echo $monthvalue;?> 1, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 2, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 3, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 4, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 5, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 6, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 7, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 8, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 9, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 10, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 11, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 12, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 13, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 14, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 15, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 16, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 17, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 18, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 19, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 20, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 21, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 22, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 23, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 24, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 25, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 26, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 27, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 28, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 29, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 30, <?php echo $yearvalue;?>","<?php echo $monthvalue;?> 31, <?php echo $yearvalue;?>",],
      datasets: [{
        label: 'Counts of Student',
        data: ["<?php echo $one;?>","<?php echo $two;?>","<?php echo $three;?>","<?php echo $four;?>","<?php echo $five;?>","<?php echo $six;?>","<?php echo $seven;?>","<?php echo $eight;?>","<?php echo $nine;?>","<?php echo $ten;?>","<?php echo $eleven;?>","<?php echo $twelve;?>","<?php echo $thirteen;?>","<?php echo $fourteen;?>","<?php echo $fifteen;?>","<?php echo $sixteen;?>","<?php echo $seventeen;?>","<?php echo $eighteen;?>","<?php echo $nineteen;?>","<?php echo $twenty;?>","<?php echo $twentyone;?>","<?php echo $twentytwo;?>","<?php echo $twentythree;?>","<?php echo $twentyfour;?>","<?php echo $twentyfive;?>","<?php echo $twentysix;?>","<?php echo $twentyseven;?>","<?php echo $twentyeight;?>","<?php echo $twentynine;?>","<?php echo $thirty;?>","<?php echo $thirtyone;?>",],
        backgroundColor: ["#336B87","#763626","#A43820","#598234","#66A5AD","#FB6542","#FFBBOO","#375E97","#34675C","#F4CC70","#BCBABE","#2D4262","#336B87","#763626","#A43820","#598234","#66A5AD","#FB6542","#FFBBOO","#375E97","#34675C","#F4CC70","#BCBABE","#2D4262","#336B87","#763626","#A43820","#598234","#66A5AD","#FB6542","#FFBBOO","#375E97","#34675C","#F4CC70","#BCBABE","#2D4262","#336B87","#763626","#A43820","#598234","#66A5AD","#FB6542","#FFBBOO","#375E97","#34675C","#F4CC70","#BCBABE","#2D4262","#336B87","#763626","#A43820","#598234","#66A5AD","#FB6542","#FFBBOO","#375E97","#34675C","#F4CC70","#BCBABE","#2D4262","#336B87"
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(255,99,132,1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });

</script>


<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>


</body>
</html>
