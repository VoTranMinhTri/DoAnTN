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
                    <h4 class="page-title">Quản lý kết nối</h4>
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
                                <i class="fas fa-plus-circle"></i> THÊM KẾT NỐI
                            </button><a>
                                <hr>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Mạng di động</th>
                                            <th>Sim</th>
                                            <th>Wifi</th>
                                            <th>Gps</th>
                                            <th>Bluetooth</th>
                                            <th>Cổng kết nối</th>
                                            <th>Jack tai nghe</th>
                                            <th>Kết nối khác</th>
                                            <th class='thNormal' style='width:100px'>Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mạng di động 1</td>
                                            <td>Sim 1</td>
                                            <td>Wifi 1</td>
                                            <td>Gps 1</td>
                                            <td>Bluetooth 1</td>
                                            <td>Cổng kết nối 1</td>
                                            <td>Jack tai nghe 1</td>
                                            <td>Kết nối khác 1</td>
                                            <td>
                                                {{-- https://jsfiddle.net/prasun_sultania/KSk42/ hướng dẫn chỉnh lại title --}}
                                                <button type="button" class="btn btn-outline-secondary"
                                                    title="Chỉnh sửa thông tin kết nối"><i
                                                        class="far fa-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger"
                                                    title="Xóa kết nối"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Mạng di động 2</td>
                                            <td>Sim 2</td>
                                            <td>Wifi 2</td>
                                            <td>Gps 2</td>
                                            <td>Bluetooth 2</td>
                                            <td>Cổng kết nối 2</td>
                                            <td>Jack tai nghe 2</td>
                                            <td>Kết nối khác 2</td>
                                            <td>
                                                {{-- https://jsfiddle.net/prasun_sultania/KSk42/ hướng dẫn chỉnh lại title --}}
                                                <button type="button" class="btn btn-outline-secondary"
                                                    title="Chỉnh sửa thông tin kết nối"><i
                                                        class="far fa-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger"
                                                    title="Xóa kết nối"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Mạng di động</th>
                                            <th>Sim</th>
                                            <th>Wifi</th>
                                            <th>Gps</th>
                                            <th>Bluetooth</th>
                                            <th>Cổng kết nối</th>
                                            <th>Jack tai nghe</th>
                                            <th>Kết nối khác</th>
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
