<!DOCTYPE html>
<html lang="en">

<head>
    <?php

    // ตรวจสอบว่ามีคุกกี้ 'remember_user' ไหม
    if (isset($_COOKIE['remember_user'])) {
        // ถ้ามีคุกกี้ 'remember_user', แสดงข้อความต้อนรับ
        // echo "Welcome, " . htmlspecialchars($_COOKIE['remember_user']);
        // echo "Welcome, " . htmlspecialchars($_COOKIE['firstname']);
        // echo "Welcome, " . htmlspecialchars($_COOKIE['lastname']);
        // echo "Welcome, " . htmlspecialchars($_COOKIE['user_id']);
    } else {
        // ถ้าไม่มีคุกกี้ ให้กลับไปที่หน้า login
        header("Location: login.php");
        exit();
    }

    ?>
    <title>Admin Index-HU </title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project." />
    <meta name="keywords"
        content="free dashboard template, free admin, free bootstrap template, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes">
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
</head>

<body>

    <body>
        <!-- Pre-loader start -->
        <div class="theme-loader">
            <div class="loader-track">
                <div class="loader-bar"></div>
            </div>
        </div>
        <!-- Pre-loader end -->
        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">

                <nav class="navbar header-navbar pcoded-header">
                    <div class="navbar-wrapper">
                        <div class="navbar-logo">
                            <a class="mobile-menu" id="mobile-collapse" href="#!">
                                <i class="ti-menu"></i>
                            </a>
                            <div class="mobile-search">
                                <div class="header-search">
                                    <div class="main-search morphsearch-search">
                                        <div class="input-group">
                                            <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                            <input type="text" class="form-control" placeholder="Enter Keyword">
                                            <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="index.html">
                                <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
                            </a>
                            <a class="mobile-options">
                                <i class="ti-more"></i>
                            </a>
                        </div>

                        <div class="navbar-container container-fluid">
                            <ul class="nav-left">
                                <li>
                                    <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                                    </div>
                                </li>
                                <li class="header-search">
                                    <div class="main-search morphsearch-search">
                                        <div class="input-group">
                                            <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#!" onclick="javascript:toggleFullScreen()">
                                        <i class="ti-fullscreen"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav-right">
                                <li class="header-notification">
                                    <a href="#!">
                                        <i class="ti-bell"></i>
                                        <span class="badge bg-c-pink"></span>
                                    </a>
                                    <ul class="show-notification">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius"
                                                    src="assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">John Doe</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                        elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius"
                                                    src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                        elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius"
                                                    src="assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                        elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="user-profile header-notification">
                                    <a href="#!">
                                        <img src="assets2/img/avatar/avatar-1.png" class="img-radius"
                                            alt="User-Profile-Image">
                                        <span><?php echo $_COOKIE['remember_user']; ?></span>
                                        <i class="ti-angle-down"></i>
                                    </a>
                                    <ul class="show-notification profile-notification">
                                        <li>
                                            <form method="POST" action="chklogout.php">
                                                <button type="submit" name="logout"
                                                    class="dropdown-item has-icon text-danger">
                                                    <i class="ti-lock"></i>Logout
                                                </button>
                                            </form>

                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                        <nav class="pcoded-navbar">
                            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                            <div class="pcoded-inner-navbar main-menu">

                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">แดชบอร์ด</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="active">
                                        <a href="index.html">
                                            <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">แดชบอร์ด</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">จัดการผู้ใช้</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                            <span class="pcoded-mtext"
                                                data-i18n="nav.basic-components.main">จัดการผู้ใช้</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li>
                                                <a href="accordion.html">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.alert">รายชื่อผู้เข้าร่วมงาน</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="breadcrumb.html">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.breadcrumbs">ยืนยัน/ยกเลิกการลงทะเบียน</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">จัดการกิจกรรม</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                            <span class="pcoded-mtext"
                                                data-i18n="nav.basic-components.main">จัดการกิจกรรม</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li>
                                                <a href="accordion.html">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.alert">เพิ่มกิจกรรม</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="breadcrumb.html">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.breadcrumbs">ดูกิจกรรมทั้งหมด</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                    </li>
                                </ul>
                                </li>
                                </ul>
                        </nav>
                        <div class="pcoded-content">
                            <div class="pcoded-inner-content">
                                <div class="main-body">
                                    <div class="page-wrapper">

                                        <div class="page-body">
                                            <div class="row">

                                                <!-- order-card start -->
                                                <div class="col-md-6 col-xl-3">
                                                    <div class="card bg-c-blue order-card">
                                                        <div class="card-block">
                                                            <h6 class="m-b-20">Orders Received</h6>
                                                            <h2 class="text-right"><i
                                                                    class="ti-shopping-cart f-left"></i><span>486</span>
                                                            </h2>
                                                            <p class="m-b-0">Completed Orders<span
                                                                    class="f-right">351</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xl-3">
                                                    <div class="card bg-c-green order-card">
                                                        <div class="card-block">
                                                            <h6 class="m-b-20">Total Sales</h6>
                                                            <h2 class="text-right"><i
                                                                    class="ti-tag f-left"></i><span>1641</span></h2>
                                                            <p class="m-b-0">This Month<span class="f-right">213</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xl-3">
                                                    <div class="card bg-c-yellow order-card">
                                                        <div class="card-block">
                                                            <h6 class="m-b-20">Revenue</h6>
                                                            <h2 class="text-right"><i
                                                                    class="ti-reload f-left"></i><span>$42,562</span>
                                                            </h2>
                                                            <p class="m-b-0">This Month<span
                                                                    class="f-right">$5,032</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xl-3">
                                                    <div class="card bg-c-pink order-card">
                                                        <div class="card-block">
                                                            <h6 class="m-b-20">Total Profit</h6>
                                                            <h2 class="text-right"><i
                                                                    class="ti-wallet f-left"></i><span>$9,562</span>
                                                            </h2>
                                                            <p class="m-b-0">This Month<span class="f-right">$542</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- order-card end -->

                                            </div>
                                        </div>

                                        <div id="styleSelector">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Warning Section Ends -->
            <!-- Required Jquery -->
            <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
            <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
            <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
            <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
            <!-- jquery slimscroll js -->
            <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
            <!-- modernizr js -->
            <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
            <!-- am chart -->
            <script src="assets/pages/widget/amchart/amcharts.min.js"></script>
            <script src="assets/pages/widget/amchart/serial.min.js"></script>
            <!-- Chart js -->
            <script type="text/javascript" src="assets/js/chart.js/Chart.js"></script>
            <!-- Todo js -->
            <script type="text/javascript " src="assets/pages/todo/todo.js "></script>
            <!-- Custom js -->
            <script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.min.js"></script>
            <script type="text/javascript" src="assets/js/script.js"></script>
            <script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
            <script src="assets/js/pcoded.min.js"></script>
            <script src="assets/js/vartical-demo.js"></script>
            <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    </body>

</html>