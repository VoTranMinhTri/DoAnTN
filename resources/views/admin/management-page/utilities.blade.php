@extends('admin.layouts.app-admin')
@section('content')
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
                    <h4 class="page-title">Quản lý tiện ích</h4>
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
                                <i class="fas fa-plus-circle"></i> THÊM TIỆN ÍCH
                            </button><a>
                                <hr>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Bảo mật nâng cao</th>
                                            <th>Tính năng đặt biệt</th>
                                            <th>Kháng nước bụi</th>
                                            <th>Xem phim</th>
                                            <th>Nghe nhạc</th>
                                            <th class='thNormal' style='width:100px'>Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Bảo mật nâng cao 1</td>
                                            <td>Tính năng đặt biệt 1</td>
                                            <td>Kháng nước bụi 1</td>
                                            <td>Xem phim 1</td>
                                            <td>Nghe nhạc 1</td>
                                            <td>
                                                {{-- https://jsfiddle.net/prasun_sultania/KSk42/ hướng dẫn chỉnh lại title --}}
                                                <button type="button" class="btn btn-outline-secondary"
                                                    title="Chỉnh sửa thông tin tiện ích"><i
                                                        class="far fa-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger"
                                                    title="Xóa tiện ích"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Bảo mật nâng cao 2</td>
                                            <td>Tính năng đặt biệt 2</td>
                                            <td>Kháng nước bụi 2</td>
                                            <td>Xem phim 2</td>
                                            <td>Nghe nhạc 2</td>
                                            <td>
                                                {{-- https://jsfiddle.net/prasun_sultania/KSk42/ hướng dẫn chỉnh lại title --}}
                                                <button type="button" class="btn btn-outline-secondary"
                                                    title="Chỉnh sửa thông tin tiện ích"><i
                                                        class="far fa-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger"
                                                    title="Xóa tiện ích"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Bảo mật nâng cao</th>
                                            <th>Tính năng đặt biệt</th>
                                            <th>Kháng nước bụi</th>
                                            <th>Xem phim</th>
                                            <th>Nghe nhạc</th>
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
