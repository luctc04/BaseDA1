<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Web</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="/template/assets/files/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/template/assets/files/bower_components/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/template/assets/files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="/template/assets/files/assets/icon/feather/css/feather.css">
    <link rel="stylesheet" type="text/css" href="/template/assets/files/assets/css/font-awesome-n.min.css">
    <link rel="stylesheet" href="/template/assets/files/bower_components/chartist/css/chartist.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="/template/assets/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="/template/assets/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">

    <link rel="stylesheet" type="text/css" href="/template/assets/files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/template/assets/files/assets/css/widget.css">
    <style>
        .sangphai{
            margin-left: 200px;
        }
    </style>
</head>

<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a href="index.html">
                            <img class="img-fluid" style="width:100px;" src="/img/2-removebg-preview.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu icon-toggle-right"></i>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close">
                                            <i class="feather icon-x input-group-text"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn">
                                            <i class="feather icon-search input-group-text"></i>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="full-screen feather icon-maximize"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="/img/admin1.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span>Admin</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                     
                                        <li>
                                            <a href="index.php?act=dangxuat">
                                                <i class="feather icon-log-out"></i>  Đăng xuất
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <div class="pcoded-main-container">
                        <div class="pcoded-wrapper">

                            <nav class="pcoded-navbar">
                                <div class="nav-list">
                                    <div class="pcoded-inner-navbar main-menu">
                                        <div class="pcoded-navigation-label">App</div>
                                        <ul class="pcoded-item pcoded-left-item">
                                            <li class>
                                                <a href="index.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-home"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Dashboard</span>
                                                </a>
                                            </li>

                                            <li class>
                                                <a href="index.php?act=listdm" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-menu"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Quản Lý Danh Mục</span>
                                                </a>
                                            </li>

                                            <li class>
                                                <a href="index.php?act=listsp" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-layers"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Quản Lý Sản Phẩm</span>
                                                </a>
                                            </li>

                                            

                                            <li class>
                                                <a href="index.php?act=dskh" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-box"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Quản Lý Tài Khoản</span>
                                                </a>
                                            </li>

                                            <li class>
                                                <a href="index.php?act=list_donhang" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-menu"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Quản Lý Đơn Hàng</span>
                                                </a>
                                            </li>

                                            <li class>
                                                <a href="index.php?act=dsdh" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-menu"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Quản Lý Bình Luận </span>
                                                </a>
                                            </li>

                                            <li class>
                                                <a href="index.php?act=thongke" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-menu"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Thống Kê</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>