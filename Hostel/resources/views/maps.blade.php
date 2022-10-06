
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
</head>

<body class="">
  <div class="wrapper ">
    <div class="wrapper" style="background:#0c2646;"> 
      <!-- <div class="wrapper" style="background:linear-gradient(90deg,#0c2646 0,#204065 60%,#2a5788);">  -->
      <img src="../assets/img/logo.png" alt="Person" width="90px" height="10%" style="margin-left: 170px; margin-top: 10px;">
    <div class="sidebar" data-color="orange" style="width:12%;">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
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
          <li>
            <a href="/dashboard">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
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
          <li class="active">
            <a href="/maps">
              <i class="now-ui-icons location_map-big"></i>
              <p>Maps</p>
            </a>
          </li>
          
          <li>
            <a href="/user">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
        
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
              </li>
              <li class="nav-item dropdown">
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
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
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
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <b>Find Your Hostel</b>
              </div>
              <div class="card-body ">
                <div class="mapouter"><div class="gmap_canvas"><iframe width="1000" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=uva%20wellassa%20university&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net">fmovies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:1000px;}</style><a href="https://www.embedgooglemap.net">embedded maps google</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1000px;}</style>
                </div>
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
          <!-- <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div> -->
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
      demo.initGoogleMaps();
    });

  </script>
  <script>
    
    function openNav() {
                  document.getElementById("mySidenav").style.width = "250px";
                }

                function closeNav() {
                  document.getElementById("mySidenav").style.width = "0";
                }
  </script>
</body>

</html>