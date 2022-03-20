@extends('admin.layouts.app-admin')
@section('content')
    <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav" class="pt-4">
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="/admin" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                class="hide-menu">Bảng điều khiển</span></a></li>
                    <li class="sidebar-item selected"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="/chart" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span
                                class="hide-menu">Biểu đồ</span></a></li>
                    {{-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="widgets.html" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span
                            class="hide-menu">Widgets</span></a></li> --}}
                    {{-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="tables.html" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span
                            class="hide-menu">Bảng quản lý</span></a></li> --}}
                    {{-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="grid.html" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span
                            class="hide-menu">Full Width</span></a></li> --}}
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                            href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span
                                class="hide-menu">Bảng quản
                                lý</span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"><i
                                        class="mdi mdi-cellphone-iphone"></i><span class="hide-menu"> Sản
                                        phẩm
                                    </span></a></li>
                            <li class="sidebar-item"><a href="/table" class="sidebar-link"><i
                                        class="mdi mdi-contact-mail"></i><span class="hide-menu"> Nhân viên
                                    </span></a></li>
                        </ul>
                    </li>
                    {{-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="pages-buttons.html" aria-expanded="false"><i
                            class="mdi mdi-relative-scale"></i><span class="hide-menu">Buttons</span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span
                            class="hide-menu">Icons </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="icon-material.html" class="sidebar-link"><i
                                    class="mdi mdi-emoticon"></i><span class="hide-menu"> Material Icons
                                </span></a></li>
                        <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><i
                                    class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Font
                                    Awesome
                                    Icons </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="pages-elements.html" aria-expanded="false"><i class="mdi mdi-pencil"></i><span
                            class="hide-menu">Elements</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i
                            class="mdi mdi-move-resize-variant"></i><span class="hide-menu">Addons
                        </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="index2.html" class="sidebar-link"><i
                                    class="mdi mdi-view-dashboard"></i><span class="hide-menu">
                                    Dashboard-2
                                </span></a></li>
                        <li class="sidebar-item"><a href="pages-gallery.html" class="sidebar-link"><i
                                    class="mdi mdi-multiplication-box"></i><span class="hide-menu">
                                    Gallery
                                </span></a></li>
                        <li class="sidebar-item"><a href="pages-calendar.html" class="sidebar-link"><i
                                    class="mdi mdi-calendar-check"></i><span class="hide-menu"> Calendar
                                </span></a></li>
                        <li class="sidebar-item"><a href="pages-invoice.html" class="sidebar-link"><i
                                    class="mdi mdi-bulletin-board"></i><span class="hide-menu"> Invoice
                                </span></a></li>
                        <li class="sidebar-item"><a href="pages-chat.html" class="sidebar-link"><i
                                    class="mdi mdi-message-outline"></i><span class="hide-menu"> Chat
                                    Option
                                </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i
                            class="mdi mdi-account-key"></i><span class="hide-menu">Authentication
                        </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="authentication-login.html"
                                class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span
                                    class="hide-menu"> Login </span></a>
                        </li>
                        <li class="sidebar-item"><a href="authentication-register.html"
                                class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span
                                    class="hide-menu"> Register
                                </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-alert"></i><span
                            class="hide-menu">Errors </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="error-403.html" class="sidebar-link"><i
                                    class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 403
                                </span></a></li>
                        <li class="sidebar-item"><a href="error-404.html" class="sidebar-link"><i
                                    class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 404
                                </span></a></li>
                        <li class="sidebar-item"><a href="error-405.html" class="sidebar-link"><i
                                    class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 405
                                </span></a></li>
                        <li class="sidebar-item"><a href="error-500.html" class="sidebar-link"><i
                                    class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 500
                                </span></a></li>
                    </ul>
                </li> --}}
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
                    <h4 class="page-title">Biểu đồ</h4>
                    {{-- <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>
                    </div> --}}
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
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- Chart-1 -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Real Time Chart</h5>
                            <div id="real-time" style="height:400px;"></div>
                            <p>Time between updates:
                                <input id="updateInterval" type="text" value="" style="text-align: right; width:5em">
                                milliseconds
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ENd chart-1 -->
            <!-- Chart-2 -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Turning-series chart</h5>
                            <div id="placeholder" style="height: 400px;"></div>
                            <p id="choices" class="mt-3"></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Chart-2 -->
            <!-- Cards -->
            <div class="row">
                <div class="col-md-3">
                    <div class="card mt-0">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="peity_line_neutral left text-center mt-2"><span><span
                                            style="display: none;">10,15,8,14,13,10,10</span>
                                        <canvas width="50" height="24"></canvas>
                                    </span>
                                    <h6>10%</h6>
                                </div>
                            </div>
                            <div class="col-md-6 border-left text-center pt-2">
                                <h3 class="mb-0 fw-bold">150</h3>
                                <span class="text-muted">New Users</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mt-0">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="peity_bar_bad left text-center mt-2"><span><span
                                            style="display: none;">3,5,6,16,8,10,6</span>
                                        <canvas width="50" height="24"></canvas>
                                    </span>
                                    <h6>-40%</h6>
                                </div>
                            </div>
                            <div class="col-md-6 border-left text-center pt-2">
                                <h3 class="mb-0 fw-bold">4560</h3>
                                <span class="text-muted">Orders</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mt-0">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="peity_line_good left text-center mt-2"><span><span
                                            style="display: none;">12,6,9,23,14,10,17</span>
                                        <canvas width="50" height="24"></canvas>
                                    </span>
                                    <h6>+60%</h6>
                                </div>
                            </div>
                            <div class="col-md-6 border-left text-center pt-2">
                                <h3 class="mb-0 ">5672</h3>
                                <span class="text-muted">Active Users</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mt-0">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="peity_bar_good left text-center mt-2"><span>12,6,9,23,14,10,13</span>
                                    <h6>+30%</h6>
                                </div>
                            </div>
                            <div class="col-md-6 border-left text-center pt-2">
                                <h3 class="mb-0 fw-bold">2560</h3>
                                <span class="text-muted">Register</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End cards -->
            <!-- Chart-3 -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bar Chart</h5>
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-line-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End chart-3 -->
            <!-- Charts -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Pie Chart</h5>
                            <div class="pie" style="height: 400px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Line Chart</h5>
                            <div class="bars" style="height: 400px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Charts -->
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        {{-- <footer class="footer text-center">
            All Rights Reserved by Matrix-admin. Designed and Developed by <a
                href="https://www.wrappixel.com">WrapPixel</a>.
        </footer> --}}
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
@endsection
