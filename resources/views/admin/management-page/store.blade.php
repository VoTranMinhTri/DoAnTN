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
                    <h4 class="page-title">Quản lý cửa hàng</h4>
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
                                    <i class="fas fa-plus-circle"></i> THÊM CỬA HÀNG
                                </button><a>
                                    <hr>
                                    <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Tên cửa hàng</th>
                                                    <th>Địa chỉ cửa hàng</th>
                                                    <th>Tỉnh/Thành phố</th>
                                                    <th>Quận/Huyện</th>
                                                    <th>Phường/Xã/Thị trấn</th>
                                                    <th class='thNormal' style='width:100px'>Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Cửa hàng Hồ Chí Minh</td>
                                                    <td>137 Lũy Bán Bích</td>
                                                    <td>Hồ Chí Minh</td>
                                                    <td>Quận Tân Phú</td>
                                                    <td>Phường Tân Thành</td>
                                                    <td>
                                                        {{-- https://jsfiddle.net/prasun_sultania/KSk42/ hướng dẫn chỉnh lại title --}}
                                                        <button type="button" class="btn btn-outline-secondary"
                                                            title="Chỉnh sửa thông tin cửa hàng"><i
                                                                class="far fa-edit"></i></button>
                                                        <button type="button" class="btn btn-outline-danger"
                                                            title="Xóa cửa hàng"><i class="fas fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Cửa hàng Hà Nội</td>
                                                    <td>57 Hai Bà Trưng</td>
                                                    <td>Hà Nội</td>
                                                    <td>Quận Đống Đa</td>
                                                    <td>Phường Kim Lan</td>
                                                    <td>
                                                        {{-- https://jsfiddle.net/prasun_sultania/KSk42/ hướng dẫn chỉnh lại title --}}
                                                        <button type="button" class="btn btn-outline-secondary"
                                                            title="Chỉnh sửa thông tin cửa hàng"><i
                                                                class="far fa-edit"></i></button>
                                                        <button type="button" class="btn btn-outline-danger"
                                                            title="Xóa cửa hàng"><i class="fas fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Tên cửa hàng</th>
                                                    <th>Địa chỉ cửa hàng</th>
                                                    <th>Tỉnh/Thành phố</th>
                                                    <th>Quận/Huyện</th>
                                                    <th>Phường/Xã/Thị trấn</th>
                                                    <th class='thNormal' style='width:100px'>Chức năng</th>
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
