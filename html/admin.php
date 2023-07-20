<?php
session_start();
require 'connection.php';

if (isset($_SESSION["AL_SA"]) || isset($_SESSION["AL_AD"])) {

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
                  <a class="dropdown-item" href="javascript:void(0)" onclick="logout();"><i class="fa fa-power-off me-1 ms-1"></i> Logout</a>
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
              <li class="sidebar-item" onclick="admin_Dashboard();">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu text-uppercase">Dashboard</span></a>
              </li>
              <li class="sidebar-item" onclick="admin_Students();">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu text-uppercase">Students</span></a>
              </li>
              <li class="sidebar-item" onclick="admin_Teachers();">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-book-open"></i><span class="hide-menu text-uppercase">Teachers</span></a>
              </li>
              <li class="sidebar-item" onclick="admin_Classes();">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-library"></i><span class="hide-menu text-uppercase">Classes</span></a>
              </li>
              <li class="sidebar-item" onclick="admin_Payments();">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-briefcase"></i><span class="hide-menu text-uppercase">Payments</span></a>
              </li>
              <li class="sidebar-item" onclick="admin_Attendance();">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-paper-cut-vertical"></i><span class="hide-menu text-uppercase">Attendence</span></a>
              </li>
              <li class="sidebar-item" onclick="admin_Complaints();">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-poll"></i><span class="hide-menu text-uppercase">Complaints</span></a>
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
          <div class="row" id="admin_Dashboard" style="display: block;">
            <h4>Dashboard</h4>
            <div class="col-12 ">
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
          <div class="row" id="admin_Students" style="display: none;">
            <h4>Students</h4>
            <div class="col-12">
              <div class="row">
                <div class="col-12 col-lg-2 offset-lg-10 d-grid">
                  <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#add_students">Add student</button>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="table-responsive">
                <h4>All Students</h4>
                <table class="table table-striped table-bordered">
                  <thead class="table-primary">
                    <tr>
                      <th>ID</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email Address</th>
                      <th>Contact</th>
                      <th>Password</th>
                      <th>Registered Date</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody class="table-warning">
                    <?php
                    $admin_students = Database::search("SELECT * FROM student;");
                    if ($admin_students->num_rows > 0) {
                      while ($row = $admin_students->fetch_assoc()) {
                    ?>
                        <tr>
                          <td><?= $row['std_id']; ?></td>
                          <td><input id="<?= $row['std_id'] . 'std_first_name'; ?>" type="text" value="<?= $row['std_first_name']; ?>" class="form-control"></td>
                          <td><input id="<?= $row['std_id'] . 'std_last_name'; ?>" type="text" value="<?= $row['std_last_name']; ?>" class="form-control"></td>
                          <td><input id="<?= $row['std_id'] . 'std_email'; ?>" type="text" value="<?= $row['std_email']; ?>" class="form-control"></td>
                          <td><input id="<?= $row['std_id'] . 'std_contact'; ?>" type="text" value="<?= $row['std_contact']; ?>" class="form-control"></td>
                          <td><input id="<?= $row['std_id'] . 'std_password'; ?>" type="text" value="<?= $row['std_password']; ?>" class="form-control"></td>
                          <td><?= $row['std_reg_date']; ?></td>
                          <td><button class="btn btn-outline-primary" onclick="admin_student_update('<?= $row['std_id']; ?>');">Update</button></td>
                          <td><button class="btn btn-outline-danger" onclick="admin_student_delete('<?= $row['std_id']; ?>');">Delete</button></td>
                        </tr>
                      <?php
                      }
                    } else {
                      ?>
                      <tr>
                        <td colspan="7" class="text-center ">No Students to show</td>
                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- Students -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Teachers -->
          <!-- ============================================================== -->
          <div class="row" id="admin_Teachers" style="display: none;">
            <h4>Teachers</h4>
          </div>
          <!-- ============================================================== -->
          <!-- Teachers -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- classes -->
          <!-- ============================================================== -->
          <div class="row" id="admin_Classes" style="display: none;">
            <h4>Classes</h4>
          </div>
          <!-- ============================================================== -->
          <!-- classes -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- payments -->
          <!-- ============================================================== -->
          <div class="row" id="admin_Payments" style="display: none;">
            <h4>Payments</h4>
          </div>
          <!-- ============================================================== -->
          <!-- payments -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- attendence -->
          <!-- ============================================================== -->
          <div class="row" id="admin_Attendance" style="display: none;">
            <h4>Attendence</h4>
          </div>
          <!-- ============================================================== -->
          <!-- attendence -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- complaints -->
          <!-- ============================================================== -->
          <div class="row" id="admin_Complaints" style="display: none;">
            <h4>Complaints</h4>
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
    <!-- add students  -->
    <!-- ============================================================== -->

    <div class="modal fade " id="add_students" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog ">
        <div class="modal-content ">
          <div class="modal-header">
            <h1 class="text-center fw-bold text-uppercase">Student Register</h1>
          </div>
          <small class="text-success fw-bold fs-4 text-center mt-2 d-block" id="admin_uni_reg_uni_main_sm"></small>
          <div class="modal-body">
            <div class="row ">
              <div class="col-12">
                <div class="row ">
                  <div class="col-12 ">
                    <div class="row">
                      <div class="col-12 g-2">
                        <label class="form-label" id="uia"><span class="text-danger">*</span>First Name</label>
                        <small id="admin_uni_reg_uni_addr_sm" class="small text-danger d-block"></small>
                        <input type="text" class="form-control" id="admin_add_std_fname">
                      </div>
                      <div class="col-12 g-2">
                        <label class="form-label" id="uie"><span class="text-danger">*</span>Last Name</label>
                        <small id="admin_uni_reg_uni_email_sm" class="small text-danger d-block"></small>
                        <input type="text" class="form-control" id="admin_add_std_lname">
                      </div>
                      <div class="col-12 g-2">
                        <label class="form-label"><span class="text-danger">*</span>Email Address</label>
                        <small id="admin_uni_reg_uni_teli_1_sm" class="small text-danger d-block"></small>
                        <input type="text" class="form-control" id="admin_add_std_email">
                      </div>
                      <div class="col-12 g-2">
                      <label class="form-label"><span class="text-danger">*</span>Contact No</label>                        
                        <small id="admin_uni_reg_uni_teli_2_sm" class="small text-danger d-block"></small>
                        <input type="text" class="form-control" id="admin_add_std_cont">
                      </div>
                      <div class="col-12 g-2">
                        <label class="form-label"><span class="text-danger">*</span>Password</label>
                        <small id="admin_uni_reg_uni_pass_sm" class="small text-danger d-block"></small>
                        <input type="text" class="form-control" id="admin_add_std_pass">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
          <small id="admin_add_std_main_sm" class="small text-danger d-block"></small>
            <div class="row w-100">
              <div class="col-6 d-grid">
                <button type="button" class="btn btn-outline-danger fw-bold" data-bs-dismiss="modal" onclick="admin_add_std_close();">Close</button>
              </div>
              <div class="col-6 d-grid">
                <button class="btn btn-outline-primary fw-bold text-uppercase" onclick="admin_add_std();">Register now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ============================================================== -->
    <!-- add students  -->
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
  </body>

  </html>

<?php
} else {
  header("Location: index.php");
}
