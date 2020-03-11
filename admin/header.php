<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>E-ALUMNI - Pemrograman Web BLK</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="css/pages/dashboard1.css" rel="stylesheet">
    <!-- page css -->
    <link href="css/pages/icon-page.css" rel="stylesheet">
     <!-- page css -->
     <link href="css/pages/google-vector-map.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
    .ps {
        -ms-touch-action: auto;
        touch-action: auto;
        overflow: hidden !important;
        -ms-overflow-style: none;
        background-color: #13406a;
    }

    .sidebar-nav {
    background: #13406a;
    padding: 30px 0 0 0px;
}

.sidebar-nav ul li a {
    color: #ffffff;
    padding: 10px 35px 10px 15px;
    display: block;
    font-size: 15px;
    font-weight: 400;
}
.sidebar-nav ul li a.active, .sidebar-nav ul li a:hover {
    color: #ffffff;
}
.sidebar-nav > ul > li > a i {
    color: #ffffff;
}
.sidebar-nav ul li a.active i, .sidebar-nav ul li a:hover i {
    color: #b2b2b2;
}

</style>
</head>


<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label"></p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                           
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo" width="150px"/>
                         <!-- Light Logo text -->
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-xs-down search-box"> <a class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="fa fa-times"></i></a></form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="" /> <span class="hidden-md-down">Mark Sanders &nbsp;</span> </a>
                        </li>
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
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                    <?php if($_SESSION['level']=="admin"){?>
                        <li> <a class="waves-effect waves-dark" href="index.php" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="biodata.php" aria-expanded="false"><i class="fa fa-user-circle-o"></i><span class="hide-menu">Biodata</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="pekerjaan.php" aria-expanded="false"><i class="fa fa-user-circle-o"></i><span class="hide-menu">Pekerjaan</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="project.php" aria-expanded="false"><i class="fa fa-user-circle-o"></i><span class="hide-menu">Ide Project</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="tabel_biodata.php" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Table Biodata</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="tabel_pekerjaan.php" aria-expanded="false"><i class="fa fa-smile-o"></i><span class="hide-menu">Tabel Pekerjaan</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="map-google.php" aria-expanded="false"><i class="fa fa-globe"></i><span class="hide-menu">Map</span></a>
                        </li>
                        
                    <?php } else if($_SESSION['level']=="user"){?>
                        
                        <li> <a class="waves-effect waves-dark" href="index.php" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="biodata.php" aria-expanded="false"><i class="fa fa-user-circle-o"></i><span class="hide-menu">Biodata</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="pekerjaan.php" aria-expanded="false"><i class="fa fa-user-circle-o"></i><span class="hide-menu">Pekerjaan</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="project.php" aria-expanded="false"><i class="fa fa-user-circle-o"></i><span class="hide-menu">Ide Project</span></a>
                        </li>

                    <?php }?>
                    </ul>
                    <div class="text-center m-t-30">
                        <a href="../logout.php" class="btn waves-effect waves-light btn-info hidden-md-down"> Log Out</a>
                    </div>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>