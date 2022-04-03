@extends('admin.layouts.app-admin')
@section('content')
    <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav" class="pt-4">
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin"
                            aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Bảng điều
                                khiển</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/chart"
                            aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Biểu
                                đồ</span></a></li>
                    <li class="sidebar-item selected"> <a class="sidebar-link has-arrow waves-effect waves-dark active"
                            href="javascript:void(0)" aria-expanded="false"><i class="fas fa-mobile"></i><span
                                class="hide-menu">Sản phẩm</span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="/product" class="sidebar-link"><span class="hide-menu"><i class="fas fa-circle"></i>Quản lý sản
                                        phẩm
                                    </span></a></li>
                            <li class="sidebar-item active"><a href="/brand" class="sidebar-link"><span class="hide-menu"><i class="fas fa-dot-circle"></i>Quản lý thương hiệu
                                    </span></a></li>
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
                    <h4 class="page-title">Quản lý thương hiệu</h4>
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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="#"><button type="button" class="btn btn-outline-primary">
                                    <i class="fas fa-plus-circle"></i> THÊM THƯƠNG HIỆU
                                </button><a>
                                    <hr>
                                    <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Tên thương hiệu</th>
                                                    <th class='thNormal' style='width:100px'>Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>OPPO</td>
                                                    <td>
                                                        {{-- https://jsfiddle.net/prasun_sultania/KSk42/ hướng dẫn chỉnh lại title --}}
                                                        <button type="button" class="btn btn-outline-secondary"
                                                            title="Chỉnh sửa thông tin sản phẩm"><i
                                                                class="far fa-edit"></i></button>
                                                        {{-- <button type="button" class="btn btn-outline-danger" title="Xóa sản phẩm"><i class="fas fa-trash"></i></button> --}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>SAMSUNG</td>
                                                    <td>
                                                        {{-- https://jsfiddle.net/prasun_sultania/KSk42/ hướng dẫn chỉnh lại title --}}
                                                        <button type="button" class="btn btn-outline-secondary"
                                                            title="Chỉnh sửa thông tin sản phẩm"><i
                                                                class="far fa-edit"></i></button>
                                                        {{-- <button type="button" class="btn btn-outline-danger" title="Xóa sản phẩm"><i class="fas fa-trash"></i></button> --}}
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Tên thương hiệu</th>
                                                    <th>Chức năng</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                        </div>
                    </div>
                </div>
            </div>
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
