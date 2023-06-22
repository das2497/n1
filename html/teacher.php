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
        <title>ALPHA | TEACHER</title>
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
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off me-1 ms-1"></i> Logout</a>
                                    <div class="dropdown-divider"></div>
                                    <div class="ps-4 p-10">
                                        <a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded text-white">View Profile</a>
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
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-monitor" aria-hidden="true"></i><span class="hide-menu"> Meeting Schedule</span></a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Students</span></a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-book-open"></i><span class="hide-menu">Univercities</span></a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-library"></i><span class="hide-menu">Assessors</span></a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-briefcase"></i><span class="hide-menu">Training Places</span></a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-paper-cut-vertical"></i><span class="hide-menu">Reports</span></a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false"><i class="mdi mdi-poll"></i><span class="hide-menu">Monitoring</span></a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu"> User </span></a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item" onclick="logout();">
                                        <a href="#" class="sidebar-link"><i class="mdi mdi-logout"></i><span class="hide-menu"> Log Out </span></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link"><i class="mdi mdi-cube"></i><span class="hide-menu"> About </span></a>
                                    </li>
                                </ul>
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
                            <h4 class="page-title">Monitoring</h4>
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
                    <!-- Sales Cards  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <!-- Monitoring -->

                        <div class="col-12 " id="monit" style="display: block;">

                            <h1 class="text-decoration-underline text-center border border-2 border-primary  p-2 rounded my-2 text-uppercase fw-bold">Monitoring</h1>

                            <div class="row">

                                <?php

                                if (isset($_SESSION["SA"])) {


                                ?>

                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 d-grid">
                                                <select class="form-select select2 shadow-none fw-bold" id="addinsselct">
                                                    <option value="0">Select inspector</option>
                                                    <?php
                                                    $rsinsadd = Database::search("SELECT * FROM admin");
                                                    //  WHERE ad_admin_typ_id='2';
                                                    $ninsadd = $rsinsadd->num_rows;
                                                    for ($i = 0; $i < $ninsadd; $i++) {
                                                        $dinsadd = $rsinsadd->fetch_assoc();

                                                        $rsin = Database::search("SELECT * FROM inspector 
                          INNER JOIN admin ON inspector.admin_ad_id=admin.ad_id WHERE admin_ad_id='" . $dinsadd["ad_id"] . "';");
                                                        $tbnin = $rsin->num_rows;
                                                        if ($tbnin == 0) {
                                                    ?>
                                                            <option value="<?= $dinsadd["ad_id"] ?>"><?= $dinsadd["name"] ?></option>
                                                    <?php

                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-12 col-lg-4 d-grid">
                                                <button class="btn btn-outline-primary fw-bold shadow mt-lg-0 mt-2" onclick="addinspectors();">Add To Inspectors</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <h4>Inspectors</h4>

                                        <?php

                                        $rstb1 = Database::search("SELECT * FROM inspector 
                  INNER JOIN admin ON inspector.admin_ad_id=admin.ad_id
                  INNER JOIN admin_type ON admin.ad_admin_typ_id=admin_type.admn_typ_id;");
                                        $tbn1 = $rstb1->num_rows;
                                        ?>

                                        <table class=" table table-responsive table-striped border border-5">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                for ($i = 0; $i < $tbn1; $i++) {
                                                    $tbd2 = $rstb1->fetch_assoc();

                                                ?>
                                                    <tr onclick="INSselctST('<?= $tbd2['ins_id']; ?>');" id="<?= $tbd2['ad_nic']; ?>" class="clickable">
                                                        <td><?= $tbd2["ins_id"]; ?></td>
                                                        <td><?= $tbd2["name"]; ?></td>
                                                    </tr>

                                                <?php

                                                }

                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-12 col-lg-12">

                                        <div id="insst">

                                        </div>

                                    </div>


                                    <?php
                                } elseif (isset($_SESSION["AD"])) {

                                    $insrs = Database::search("SELECT * FROM inspector WHERE admin_ad_id='" . $_SESSION["AD"]["ad_id"] . "';");
                                    $insn = $insrs->num_rows;

                                    if ($insn == 1) {

                                        $insd =  $insrs->fetch_assoc();

                                    ?>

                                        <div class="row">

                                            <div class="col-12 border p-2">

                                                <div class="row">

                                                    <!-- searchbar -->
                                                    <div class="col-4">
                                                        <input type="text" name="sb" class="form-control" onkeyup="searchmonitorInspect();" id="sb" placeholder="Search Available Training Students to Monitoring">
                                                    </div>
                                                    <!-- company -->
                                                    <div class="col-4">
                                                        <select name="sc" id="sc" onclick="searchmonitorInspect();" class="form-control">
                                                            <option value="0">select company</option>
                                                            <?php
                                                            $c = Database::search("SELECT * FROM worksite;");
                                                            $n = $c->num_rows;
                                                            for ($i = 0; $i < $n; $i++) {
                                                                $d = $c->fetch_assoc();
                                                            ?>
                                                                <option value="<?php echo $d["wrksit_id"]; ?>"><?php echo $d["wrksit_name"]; ?></option>
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <!-- monitoring_date -->
                                                    <div class="col-4">
                                                        <input class="form-control" type="date" id="monitoring_date">
                                                    </div>
                                                    <!-- Univercity -->
                                                    <div class="col-4 mt-2">
                                                        <select id="" class="form-control">
                                                            <option value="0">select university</option>
                                                        </select>
                                                    </div>
                                                    <!-- Field -->
                                                    <div class="col-4 mt-2">
                                                        <select id="" class="form-control">
                                                            <option value="0">select Field</option>
                                                        </select>
                                                    </div>
                                                    <!-- Monitered Phase -->
                                                    <div class="col-4 mt-2">
                                                        <select id="" class="form-control">
                                                            <option value="0">select Monitered Phase</option>
                                                        </select>
                                                    </div>

                                                </div>

                                            </div>

                                            <div id="tb" class="col-12">
                                                <h4 onclick="searchmonitorInspect('<?= $insd['ins_id']; ?>');" style="height: 400px; padding-top: 180px; border-style: dashed; border-color: #0000004b;" class="text-center mt-4   justify-content-center">
                                                    If the tables are not loaded, click here.
                                                </h4>
                                            </div>

                                        </div>

                                    <?php

                                    } else {

                                    ?>

                                        <h4>Youre not an inspector</h4>

                                <?php

                                    }
                                }


                                ?>



                            </div>


                        </div>

                        <!-- Monitoring -->
                    </div>
                    <!-- ============================================================== -->
                    <!-- Sales chart -->
                    <!-- ============================================================== -->
                    <div class="row">

                    </div>
                    <!-- ============================================================== -->
                    <!-- Sales chart -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Recent comment and chats -->
                    <!-- ============================================================== -->
                    <div class="row">

                    </div>
                    <!-- ============================================================== -->
                    <!-- Recent comment and chats -->
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
