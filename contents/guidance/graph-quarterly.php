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
$servicesvalue = $_GET["servicesvalue"];
$monthvalue = $_GET["monthvalue"];
$yearvalue = $_GET["yearvalue"];

//January 1
 include '../connections/conn.php';

         $sql3 = "SELECT COUNT(id) AS count FROM graph_data WHERE services = '$servicesvalue' && graph_month = 'January' && quarter = '$monthvalue' && graph_year = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $january = $row3["count"];
                   }
                 } else {
                    $january= 0;
                 }

         $sql3 = "SELECT COUNT(id) AS count FROM graph_data WHERE services = '$servicesvalue' && graph_month = 'February' && quarter = '$monthvalue' && graph_year = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $february = $row3["count"];
                   }
                 } else {
                    $february= 0;
                 }

         $sql3 = "SELECT COUNT(id) AS count FROM graph_data WHERE services = '$servicesvalue' && graph_month = 'March' && quarter = '$monthvalue' && graph_year = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $march = $row3["count"];
                   }
                 } else {
                    $march= 0;
                 }

         $sql3 = "SELECT COUNT(id) AS count FROM graph_data WHERE services = '$servicesvalue' && graph_month = 'April' && quarter = '$monthvalue' && graph_year = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $april = $row3["count"];
                   }
                 } else {
                    $april= 0;
                 }

         $sql3 = "SELECT COUNT(id) AS count FROM graph_data WHERE services = '$servicesvalue' && graph_month = 'May' && quarter = '$monthvalue' && graph_year = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $may = $row3["count"];
                   }
                 } else {
                    $may= 0;
                 }

         $sql3 = "SELECT COUNT(id) AS count FROM graph_data WHERE services = '$servicesvalue' && graph_month = 'June' && quarter = '$monthvalue' && graph_year = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $june = $row3["count"];
                   }
                 } else {
                    $june= 0;
                 }

         $sql3 = "SELECT COUNT(id) AS count FROM graph_data WHERE services = '$servicesvalue' && graph_month = 'July' && quarter = '$monthvalue' && graph_year = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $july = $row3["count"];
                   }
                 } else {
                    $july= 0;
                 }

         $sql3 = "SELECT COUNT(id) AS count FROM graph_data WHERE services = '$servicesvalue' && graph_month = 'August' && quarter = '$monthvalue' && graph_year = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $august = $row3["count"];
                   }
                 } else {
                    $august= 0;
                 }

         $sql3 = "SELECT COUNT(id) AS count FROM graph_data WHERE services = '$servicesvalue' && graph_month = 'September' && quarter = '$monthvalue' && graph_year = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $september = $row3["count"];
                   }
                 } else {
                    $september= 0;
                 }

         $sql3 = "SELECT COUNT(id) AS count FROM graph_data WHERE services = '$servicesvalue' && graph_month = 'October' && quarter = '$monthvalue' && graph_year = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $october = $row3["count"];
                   }
                 } else {
                    $october= 0;
                 }


                 $sql3 = "SELECT COUNT(id) AS count FROM graph_data WHERE services = '$servicesvalue' && graph_month = 'November'  && quarter = '$monthvalue'  && graph_year = '$yearvalue'  ";
                 $result3 = $conn->query($sql3);
                     if ($result3->num_rows > 0) {
                         while($row3 = $result3->fetch_assoc()) {
                           $november = $row3["count"];
                           }
                         } else {
                            $november= 0;
                         }


         $sql3 = "SELECT COUNT(id) AS count FROM graph_data WHERE services = '$servicesvalue' && graph_month = 'December' && quarter = '$monthvalue' && graph_year = '$yearvalue'  ";
         $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {
                 while($row3 = $result3->fetch_assoc()) {
                   $december = $row3["count"];
                   }
                 } else {
                    $december= 0;
                 }


?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Guidance| Reports</title>
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
        <!-- Header-->  <style>.navbar-brand { max-height: 50px; width: 100%;}.navbar-brand img{ max-height: 45px; max-width:150px;} </style>
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
        <!-- /#header -->
     
     
        <!-- /#header -->     
        <!-- Content -->
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                  <!--  BarChart-->

                   <div class="col-lg-12"  id="section1">
                        <div class="card">
                            <div class="card-body">
                              <div class="row ">
                                
                                <h3 class="col-9 "><?php echo $servicesvalue;?> result on Year <?php echo $yearvalue;?> (Bar Graph)</h3>
                                <div class="float-right">
                                    <a href="#section1" class="col-1">Bar Graph</a>
                                   <a href="#section2"  class="col-1">Line Graph</a>
                                   <a href="#section3"  class="col-1">Pie Graph</a>
                               </div>
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
      labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
      datasets: [{
        label: 'Counts of Student',
        data: [<?php echo $january;?>,<?php echo $february;?>,<?php echo $march;?>,<?php echo $april;?>,<?php echo $may;?>,<?php echo $june;?>,<?php echo $july;?>,<?php echo $august;?>,<?php echo $september;?>,<?php echo $october;?>,<?php echo $november;?>,<?php echo $december;?>,],
        backgroundColor: ["#336B87","#763626","#A43820","#598234","#66A5AD","#FB6542","#FFBBOO","#375E97","#34675C","#F4CC70","#BCBABE","#2D4262"
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
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
<!-- Jhunard Line Chart -->
<script>
  //line
  var ctxL = document.getElementById("lineGraph").getContext('2d');
  var myLineChart = new Chart(ctxL, {
    type: 'line',
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
      datasets: [{
          label: "Present Year",
          data: [<?php echo $january;?>,<?php echo $february;?>,<?php echo $march;?>,<?php echo $april;?>,<?php echo $may;?>,<?php echo $june;?>,<?php echo $july;?>,<?php echo $august;?>,<?php echo $september;?>,<?php echo $october;?>,<?php echo $november;?>,<?php echo $december;?>,],
          backgroundColor: [
            'rgba(105, 0, 132, .2)',
          ],
          borderColor: [
            'rgba(200, 99, 132, .7)',
          ],
          borderWidth: 2
        },
        {
          label: "Last Year",
          data: [<?php echo $ljanuary;?>,<?php echo $lfebruary;?>,<?php echo $lmarch;?>,<?php echo $lapril;?>,<?php echo $lmay;?>,<?php echo $ljune;?>,<?php echo $ljuly;?>,<?php echo $laugust;?>,<?php echo $lseptember;?>,<?php echo $loctober;?>,<?php echo $lnovember;?>,<?php echo $ldecember;?>,],
          backgroundColor: [
            'rgba(0, 137, 132, .2)',
          ],
          borderColor: [
            'rgba(0, 10, 130, .7)',
          ],
          borderWidth: 2
        }
      ]
    },
    options: {
      responsive: true
    }
  });

</script>

<!-- Jhunard Pie Graph -->

<script>
  //pie
  var ctxP = document.getElementById("pieGraph").getContext('2d');
  var myPieChart = new Chart(ctxP, {
    type: 'pie',
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
      datasets: [{
        data: [<?php echo $january;?>,<?php echo $february;?>,<?php echo $march;?>,<?php echo $april;?>,<?php echo $may;?>,<?php echo $june;?>,<?php echo $july;?>,<?php echo $august;?>,<?php echo $september;?>,<?php echo $october;?>,<?php echo $november;?>,<?php echo $december;?>,],
        backgroundColor: ["#336B87","#763626","#A43820","#598234","#66A5AD","#FB6542","#FFBBOO","#375E97","#34675C","#F4CC70","#BCBABE","#2D4262"],
        hoverBackgroundColor: ["#336B87","#763626","#A43820","#598234","#66A5AD","#FB6542","#FFBBOO","#375E97","#34675C","#F4CC70","#BCBABE","#2D4262"]
      }]
    },
    options: {
      responsive: true
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
