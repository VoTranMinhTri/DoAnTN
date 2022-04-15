<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title>T&T Mobile | Admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/admin/images/icon-logo.png') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/admin/libs/flot/css/float-chart.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/libs/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/extra-libs/multicheck/multicheck.css') }}">
    <link href="{{ asset('assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/dist/css/style.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/admin/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">

                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon ps-2">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ asset('assets/admin/images/icon-logo.png') }}" alt="homepage"
                                class="light-logo" style="width: 30px" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="{{ asset('assets/admin/images/text.png') }}" alt="homepage"
                                class="light-logo" />
                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item d-none d-lg-block"><a
                                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-bell font-24"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="font-24 mdi mdi-comment-processing"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end mailbox animated bounceInDown"
                                aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-success btn-circle"><i
                                                            class="ti-calendar"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Event today</h5>
                                                        <span class="mail-desc">Just a reminder that event</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-info btn-circle"><i
                                                            class="ti-settings"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Settings</h5>
                                                        <span class="mail-desc">You can customize this
                                                            template</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-primary btn-circle"><i
                                                            class="ti-user"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Pavan kumar</h5>
                                                        <span class="mail-desc">Just see the my admin!</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-danger btn-circle"><i
                                                            class="fa fa-link"></i></span>
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
                        </li> --}}
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('assets/admin/images/users/1.jpg') }}" alt="user"
                                    class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated"
                                aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user me-1 ms-1"></i>
                                    Thông tin của tôi</a>
                                {{-- <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet me-1 ms-1"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email me-1 ms-1"></i>
                                    Inbox</a> --}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="ti-settings me-1 ms-1"></i> Cài đặt tài khoản</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/signin"><i class="fa fa-power-off me-1 ms-1"></i> Đăng
                                    xuất</a>
                                <div class="dropdown-divider"></div>
                                <div class="ps-4 p-10"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-success btn-rounded text-white">Xem hồ sơ</a></div>
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
                    <ul id="sidebarnav" class="pt-3">
                        <div class="title-header">
                            <div class="menu-title">
                                <span style="color:white;" class="hide-menu">QUẢN LÝ</span>
                            </div>
                        </div>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin"
                                aria-expanded="false"><i class="me-2 mdi mdi-view-dashboard"></i><span class="hide-menu">Bảng
                                    điều khiển</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                                aria-expanded="false"><i class="me-2 mdi mdi-cart-outline"></i><span class="hide-menu">Đơn
                                    hàng</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="#"
                                aria-expanded="false"><i class="me-2 mdi mdi-account-multiple-outline"></i><span
                                    class="hide-menu">Khách hàng</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="/customer" class="sidebar-link"><i
                                            class="me-2 mdi mdi-record"></i><span class="hide-menu">Quản lý
                                            khách hàng
                                        </span></a></li>
                                <li class="sidebar-item"><a href="/membershiplevel" class="sidebar-link"><i
                                            class="me-2 mdi mdi-record"></i><span class="hide-menu">Quản lý
                                            bậc thành viên
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="#"
                                aria-expanded="false"><i class="me-2 mdi mdi-cellphone-iphone"></i><span
                                    class="hide-menu">Sản phẩm</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="/product" class="sidebar-link"><i
                                            class="me-2 mdi mdi-record"></i><span class="hide-menu">Quản lý
                                            sản
                                            phẩm
                                        </span></a></li>
                                <li class="sidebar-item"><a href="/brand" class="sidebar-link"><i
                                            class="me-2 mdi mdi-record"></i><span class="hide-menu">Quản lý
                                            thương
                                            hiệu
                                        </span></a></li>
                                <li class="sidebar-item"><a href="/promotion" class="sidebar-link"><i
                                            class="me-2 mdi mdi-record"></i><span class="hide-menu">Quản lý
                                            khuyến mãi
                                        </span></a></li>
                                <li class="sidebar-item"><a href="/voucher" class="sidebar-link"><i
                                            class="me-2 mdi mdi-record"></i><span class="hide-menu">Quản lý
                                            phiếu giảm giá
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="#"
                                aria-expanded="false"><i class="me-2 mdi mdi-border-inside"></i><span
                                    class="hide-menu">Linh kiện, khác</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="/color" class="sidebar-link"><i
                                            class="me-2 mdi mdi-record"></i><span class="hide-menu">Quản lý
                                            màu sắc
                                        </span></a></li>
                                <li class="sidebar-item"><a href="/screen" class="sidebar-link"><i
                                            class="me-2 mdi mdi-record"></i><span class="hide-menu">Quản lý
                                            màn hình
                                        </span></a></li>
                                <li class="sidebar-item"><a href="/backcamera" class="sidebar-link"><i
                                            class="me-2 mdi mdi-record"></i><span class="hide-menu">Quản lý
                                            camera sau
                                        </span></a></li>
                                <li class="sidebar-item"><a href="/frontcamera" class="sidebar-link"><i
                                            class="me-2 mdi mdi-record"></i><span class="hide-menu">Quản lý
                                            camera trước
                                        </span></a></li>
                                <li class="sidebar-item"><a href="/os" class="sidebar-link"><i
                                            class="me-2 mdi mdi-record"></i><span class="hide-menu">Quản lý
                                            hệ điều hành - cpu
                                        </span></a></li>
                                <li class="sidebar-item"><a href="/memory" class="sidebar-link"><i
                                            class="me-2 mdi mdi-record"></i><span class="hide-menu">Quản lý
                                            bộ nhớ lưu trữ
                                        </span></a></li>
                                <li class="sidebar-item"><a href="/connect" class="sidebar-link"><i
                                            class="me-2 mdi mdi-record"></i><span class="hide-menu">Quản lý
                                            kết nối
                                        </span></a></li>
                                <li class="sidebar-item"><a href="/pin" class="sidebar-link"><i
                                            class="me-2 mdi mdi-record"></i><span class="hide-menu">Quản lý
                                            pin sạc
                                        </span></a></li>
                                <li class="sidebar-item"><a href="/utilities" class="sidebar-link"><i
                                            class="me-2 mdi mdi-record"></i><span class="hide-menu">Quản lý
                                            tiện ích
                                        </span></a></li>
                                <li class="sidebar-item"><a href="/generalinformation" class="sidebar-link"><i
                                            class="me-2 mdi mdi-record"></i><span class="hide-menu">Quản lý
                                            thông tin chung
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="#"
                                aria-expanded="false"><i class="me-2 mdi mdi-clipboard-account"></i><span
                                    class="hide-menu">Nhân viên</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="/staff" class="sidebar-link"><i
                                            class="me-2 mdi mdi-record"></i><span class="hide-menu">Quản lý
                                            nhân viên
                                        </span></a></li>
                                <li class="sidebar-item"><a href="/position" class="sidebar-link"><i
                                            class="me-2 mdi mdi-record"></i><span class="hide-menu">Quản lý
                                            chức vụ
                                        </span></a></li>
                                <li class="sidebar-item"><a href="/department" class="sidebar-link"><i
                                            class="me-2 mdi mdi-record"></i><span class="hide-menu">Quản lý
                                            phòng ban
                                        </span></a></li>
                                <li class="sidebar-item"><a href="/coefficientssalary" class="sidebar-link"><i
                                            class="me-2 mdi mdi-record"></i><span class="hide-menu">Quản lý
                                            hệ số lương
                                        </span></a></li>
                                <li class="sidebar-item"><a href="/bonus" class="sidebar-link"><i
                                            class="me-2 mdi mdi-record"></i><span class="hide-menu">Quản lý
                                            thưởng
                                        </span></a></li>
                                <li class="sidebar-item"><a href="/allowance" class="sidebar-link"><i
                                            class="me-2 mdi mdi-record"></i><span class="hide-menu">Quản lý
                                            phụ cấp
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="#"
                                aria-expanded="false"><i class="me-2 mdi mdi-home-variant"></i><span
                                    class="hide-menu">Kho,
                                    cửa hàng</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="/storehouse" class="sidebar-link"><i
                                            class="me-2 mdi mdi-record"></i><span class="hide-menu">Quản lý
                                            kho
                                        </span></a></li>
                                <li class="sidebar-item"><a href="/store" class="sidebar-link"><i
                                            class="me-2 mdi mdi-record"></i><span class="hide-menu">Quản lý
                                            cửa hàng
                                        </span></a></li>
                                <li class="sidebar-item"><a href="#" class="sidebar-link"><i
                                            class="me-2 mdi mdi-record"></i><span class="hide-menu">Phân bố sản phẩm
                                        </span></a></li>
                            </ul>
                        </li>
                        <div class="title-header">
                            <div class="menu-title">
                                <span style="color:white;" class="hide-menu">BÁO CÁO - TÙY CHỈNH</span>
                            </div>
                        </div>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/chart"
                                aria-expanded="false"><i class="me-2 mdi mdi-chart-bar"></i><span class="hide-menu">Biểu
                                    đồ</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/#"
                                aria-expanded="false"><i class="me-2 mdi mdi-image-filter"></i><span
                                    class="hide-menu">Hình ảnh Banner Website</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        @yield('content')
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('assets/admin/dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('assets/admin/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('assets/admin/dist/js/custom.min.js') }}"></script>
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{ asset('assets/admin/libs/flot/excanvas.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('assets/admin/dist/js/pages/chart/chart-page-init.js') }}"></script>

    <!-- Select2 js Files -->
    {{-- <script src="{{ asset('assets/admin/libs/select2/dist/js/select2.full.min.js') }}"></script> --}}
    <script src="{{ asset('assets/admin/libs/select2/dist/js/select2.min.js') }}"></script>

    <!-- Charts js -->
    <script src="{{ asset('assets/admin/libs/chart/matrix.interface.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/chart/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/chart/matrix.charts.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/chart/jquery.flot.pie.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/chart/turning-series.js') }}"></script>

    <!-- Table js -->
    <script src="{{ asset('assets/admin/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
    <script src="{{ asset('assets/admin/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
    <script src="{{ asset('assets/admin/extra-libs/DataTables/datatables.min.js') }}"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();

        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

    </script>
</body>

</html>
