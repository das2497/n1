<?php
// session_start();

require 'connection.php';

if (true) {

?>
  <!DOCTYPE html>
  <html dir="ltr" lang="en">

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template" />
    <meta name="description" content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
    <meta name="robots" content="noindex,nofollow" />
    <title>ALPHA | ADMIN</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png" />
    <!-- Custom CSS -->
    <link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="style.css">

  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="index.php">
              <!-- Logo icon -->
              <b class="logo-icon ps-2">
                <!-- Dark Logo icon -->
                <img src="../assets/images/logo-icon.png" alt="homepage" class="light-logo" width="25" />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text ms-2">
                <!-- dark Logo text -->
                <img src="../assets/images/logo-text.png" alt="homepage" class="light-logo" />
              </span>

              <!--End Logo icon -->
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-start me-auto">
              <li class="nav-item d-none d-lg-block">
                <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
              </li>
              <!-- ============================================================== -->

              <!-- ============================================================== -->

            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-end">
              <!-- ============================================================== -->
              <!-- Messages -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-bell font-24">
                    <span class="position-absolute top-50 start-90 translate-middle badge rounded-circle bg-danger" style="font-size: 10px;">
                      99+
                      <span class="visually-hidden">unread messages</span>
                    </span>
                  </i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end mailbox animated bounceInDown" aria-labelledby="2">
                  <ul class="list-style-none">
                    <li>
                      <div class="">
                        <!-- Message -->
                        <a href="javascript:void(0)" class="link border-top">
                          <div class="d-flex no-block align-items-center p-10">
                            <span class="btn btn-success btn-circle d-flex align-items-center justify-content-center"><i class="mdi mdi-calendar text-white fs-4"></i></span>
                            <div class="ms-2">
                              <h5 class="mb-0">Event today</h5>
                              <span class="mail-desc">Just a reminder that event</span>
                            </div>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="javascript:void(0)" class="link border-top">
                          <div class="d-flex no-block align-items-center p-10">
                            <span class="
                                btn btn-info btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "><i class="mdi mdi-settings fs-4"></i></span>
                            <div class="ms-2">
                              <h5 class="mb-0">Settings</h5>
                              <span class="mail-desc">You can customize this template</span>
                            </div>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="javascript:void(0)" class="link border-top">
                          <div class="d-flex no-block align-items-center p-10">
                            <span class="
                                btn btn-primary btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "><i class="mdi mdi-account fs-4"></i></span>
                            <div class="ms-2">
                              <h5 class="mb-0">Pavan kumar</h5>
                              <span class="mail-desc">Just see the my admin!</span>
                            </div>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="javascript:void(0)" class="link border-top">
                          <div class="d-flex no-block align-items-center p-10">
                            <span class="
                                btn btn-danger btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "><i class="mdi mdi-link fs-4"></i></span>
                            <div class="ms-2">
                              <h5 class="mb-0">Luanch Admin</h5>
                              <span class="mail-desc">Just see the my new admin!</span>
                            </div>
                          </div>
                        </a>
                      </div>
                    </li>
                  </ul>
                </ul>
              </li>
              <!-- ============================================================== -->
              <!-- End Messages -->
              <!-- ============================================================== -->

              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31" />
                </a>
                <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-account me-1 ms-1"></i> My Profile</a>
                  <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-wallet me-1 ms-1"></i> My Balance</a>
                  <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-email me-1 ms-1"></i> Inbox</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-settings me-1 ms-1"></i> Account
                    Setting</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)" onclick="t();"><i class="fa fa-power-off me-1 ms-1"></i> Logout</a>
                  <div class="dropdown-divider"></div>
                  <div class="ps-4 p-10">
                    <a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded text-white"> Profile</a>
                  </div>
                </ul>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu text-uppercase">Dashboard</span></a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu text-uppercase">Students</span></a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-book-open"></i><span class="hide-menu text-uppercase">Teachers</span></a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-library"></i><span class="hide-menu text-uppercase">Classes</span></a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-briefcase"></i><span class="hide-menu text-uppercase">Payments</span></a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-paper-cut-vertical"></i><span class="hide-menu text-uppercase">Attendence</span></a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false"><i class="mdi mdi-poll"></i><span class="hide-menu text-uppercase">Complaints</span></a>
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <!-- <h4 class="page-title">Monitoring</h4> -->
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Library
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- dashboard  -->
          <!-- ============================================================== -->
          <div class="row" id="dashb" style="display: block;">
            <h4>Dashboard</h4>
            <div class="col-12 " >
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-cyan text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-account-multiple"></i>
                          </h1>
                          <h6 class="text-white text-uppercase">Students Count</h6>
                          <h4 class="text-white text-uppercase">2000</h4>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-success text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-chart-areaspline"></i>
                          </h1>
                          <h6 class="text-white text-uppercase">Teachers</h6>
                          <h4 class="text-white text-uppercase">60</h4>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-purple text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-chart-areaspline"></i>
                          </h1>
                          <h6 class="text-white text-uppercase">Teachers</h6>
                          <h4 class="text-white text-uppercase">60</h4>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-info text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-chart-areaspline"></i>
                          </h1>
                          <h6 class="text-white text-uppercase">Teachers</h6>
                          <h4 class="text-white text-uppercase">60</h4>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-warning text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-chart-areaspline"></i>
                          </h1>
                          <h6 class="text-white text-uppercase">Teachers</h6>
                          <h4 class="text-white text-uppercase">60</h4>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-orange text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-chart-areaspline"></i>
                          </h1>
                          <h6 class="text-white text-uppercase">Teachers</h6>
                          <h4 class="text-white text-uppercase">60</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- ============================================================== -->
          <!-- dashboard  -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Students -->
          <!-- ============================================================== -->
          <div class="row" id="students" style="display: none;">

          </div>
          <!-- ============================================================== -->
          <!-- Students -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Teachers -->
          <!-- ============================================================== -->
          <div class="row" id="teachers" style="display: none;">

          </div>
          <!-- ============================================================== -->
          <!-- Teachers -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- classes -->
          <!-- ============================================================== -->
          <div class="row" id="classes" style="display: none;">

          </div>
          <!-- ============================================================== -->
          <!-- classes -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- payments -->
          <!-- ============================================================== -->
          <div class="row" id="payments" style="display: none;">

          </div>
          <!-- ============================================================== -->
          <!-- payments -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- attendence -->
          <!-- ============================================================== -->
          <div class="row" id="attendence" style="display: none;">

          </div>
          <!-- ============================================================== -->
          <!-- attendence -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- complaints -->
          <!-- ============================================================== -->
          <div class="row" id="complaints" style="display: none;">

          </div>
          <!-- ============================================================== -->
          <!-- complaints -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- Charts js Files -->
    <script src="../assets/libs/flot/excanvas.js"></script>
    <script src="../assets/libs/flot/jquery.flot.js"></script>
    <script src="../assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="../assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../dist/js/pages/chart/chart-page-init.js"></script>
    <script src="script.js"></script>


  </html>

<?php
} else {
  //  header("Location: index.php");
}
