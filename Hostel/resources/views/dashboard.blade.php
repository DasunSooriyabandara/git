
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Uva Wellassa University Hostel Management System
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />

  <style>
    .wrapper .sidebar .logo .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #ff6633;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.wrapper .sidebar .logo .sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.wrapper.sidebar.logo.sidenav a:hover {
  color: #f1f1f1;
}

.wrapper .sidebar .logo .sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
  color: #f1f1f1;
}

@media screen and (max-height: 450px) {
  .wrapper .sidebar .logo .sidenav {padding-top: 15px;}
  .wrapper .sidebar .logo .sidenav a {font-size: 18px;}
}

  </style>
</head>

<body class="">
  <div class="wrapper" style="background:#0c2646;"> 
    <!-- <div class="wrapper" style="background:linear-gradient(90deg,#0c2646 0,#204065 60%,#2a5788);">  -->
    <img src="../assets/img/logo.png" alt="Person" width="90px" height="10%" style="margin-left: 170px; margin-top: 10px;">
    <!-- <img src="../assets/img/logo_big.png" alt="Person" width="6%" height="10%" style="margin-left:px; margin-top: 10px;"> -->
    <!-- <img src="../assets/img/lad.jpg" alt="Person" width="6%" height="" style="margin-right: 1010px; margin-top: 10px;"> -->
    <div class="sidebar" data-color="orange" style="width:12%;">

      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <!-- <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          CT
        </a> -->
        <span style="font-size:30px;cursor:pointer;color: #f1f1f1;margin-left: 7px;" onclick="openNav()">&#9776; </span>
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <!-- <a href="#">About</a>
          <a href="#">Services</a>
          <a href="#">Clients</a>
          <a href="#">Contact</a> -->
        </div>
        
        <a href="" class="simple-text logo-normal">
          <!-- Creative Tim -->
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
      <ul class="nav">
          <li class="active ">
            <a href="/dashboard">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li >
            <a href="/notification">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Your Hostel</p>
            </a>
          </li>
          <li>
            <a href="/tables">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Hostel Details</p>
            </a>
          </li>
          <!-- <li>
            <a href="./icons.html">
              <i class="now-ui-icons education_atom"></i>
              <p>Icons</p>
            </a>
          </li> -->
          <li>
            <a href="/maps">
              <i class="now-ui-icons location_map-big"></i>
              <p>Maps</p>
            </a>
          </li>
          
          <!-- <li>
            <a href="/user">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li> -->
        
          <!-- <li>
            <a href="./typography.html">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Typography</p>
            </a>
          </li> -->
          <li class="active-pro">
            <a href="/logout">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Log Out</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo" style="font-size: 250%;"><b>Hostel Management Systems</b></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="@gmail.com">
                <div class="input-group-append">
                  <div class="">
                    <!-- <div class="chip">
                      <img style="float:left;
                      margin: 5px 10px 0 ;
                      height: 40px;
                      width: 40px;
                      border-radius: 50%;" src="../assets/img/mike.jpg" alt="Person" width="50" height="50">
                    </div> -->
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <!-- <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li> -->
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="#pablo" >
                  <i class="now-ui-icons users_single-02" style="width: 50%; height: 10%;"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-lg">
        
        <img src="../assets/img/uwu.jpg" alt="Person" width="100%" height="130%">
      </div>
      <div class="content" >
         <!-- <div class="wrapper" style="background:linear-gradient(90deg,#0c2646 0,#204065 60%,#2a5788);">  -->
        <!-- <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Global Sales</h5>
                <h4 class="card-title">Shipped Products</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons loader_gear"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item text-danger" href="#">Remove Data</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="lineChartExample"></canvas>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div> -->
          <!-- <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">2018 Sales</h5>
                <h4 class="card-title">All products</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons loader_gear"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item text-danger" href="#">Remove Data</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Email Statistics</h5>
                <h4 class="card-title">24 Hours Performance</h4>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="barChartSimpleGradientsNumbers"></canvas>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <div class="row">
          <!-- <div class="col-md-6">
            <div class="card  card-tasks">
              <div class="card-header ">
                <h5 class="card-category">Backend development</h5>
                <h4 class="card-title">Tasks</h4>
              </div>
              <div class="card-body ">
                <div class="table-full-width table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" checked>
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </td>
                        <td class="text-left">Sign contract for "What are conference organizers afraid of?"</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox">
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </td>
                        <td class="text-left">Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" checked>
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </td>
                        <td class="text-left">Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                </div>
              </div>
            </div> -->
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category"></h5>
                <h4 class="card-title"> <b>Your Hostel Details</b></h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary" style="text-align: center;">
                      <th>
                        Name
                      </th>
                      <th>
                        Registration No
                      </th>
                      <th>
                        Hostel Name
                      </th>
                      <th>
                        Room 
                      </th>
                      <th class="text-right">
                        Bed
                      </th>
                    </thead>
                    <tbody style="text-align: center;">
                      <tr>
                        <td>
                          nimal
                        </td>
                        <td>
                        UWU/CST/18/048
                        </td>
                        <td>
                          Coral Beauty
                        </td>
                        <td>
                          20
                        </td>
                        <td class="text-right">
                          2
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="">
                  <b>Stay in touch</b>
                </a>
              </li>
              <li>
                <a href="http://www.uwu.ac.lk">
                  www.uwu.ac.lk
                </a>
              </li>
              <li>
                <a href="helphesk@uwu.ac.lk">
                  helphesk@uwu.ac.lk
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });

    
                function openNav() {
                  document.getElementById("mySidenav").style.width = "250px";
                }

                function closeNav() {
                  document.getElementById("mySidenav").style.width = "0";
                }

  </script>
</body>

</html>