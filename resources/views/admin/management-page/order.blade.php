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
                    <h4 class="page-title">Quản lý đơn hàng</h4>
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
                            {{-- <a href="#"><button type="button" class="btn btn-outline-primary">
                                    <i class="fas fa-plus-circle"></i>
                                </button><a>
                                    <hr> --}}
                                    <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Tài khoản khách hàng</th>
                                                    <th>Tài khoản nhân viên</th>
                                                    <th>Họ tên người nhận</th>
                                                    <th>Số điện thoại người nhận</th>
                                                    <th>Địa chỉ nhận hàng</th>
                                                    <th>Phương thức nhận hàng</th>
                                                    <th>Phương thức thanh toán</th>
                                                    <th>Trạng thái thanh toán</th>
                                                    <th>Trạng thái đơn hàng</th>
                                                    <th>Ngày tạo đơn</th>
                                                    <th>Ngày giao hàng</th>
                                                    <th class='thNormal' style='width:100px'>Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>khachhang</td>
                                                    <td>nhanvien</td>
                                                    <td>0918123123</td>
                                                    <td>Nguyễn Văn Test</td>
                                                    <td>
                                                        <p>115 Lũy Bán Bích, phường Tân Thành, quận Tân Phú, Hồ Chí Minh</p>
                                                    </td>
                                                    <td>Giao tận nhà</td>
                                                    <td>Thanh toán tiền mặt</td>
                                                    <td>Chưa thanh toán</td>
                                                    <td>Đang xử lý</td>
                                                    <td>1/1/2022</td>
                                                    <td>Chưa có</td>
                                                    <td>
                                                        {{-- https://jsfiddle.net/prasun_sultania/KSk42/ hướng dẫn chỉnh lại title --}}
                                                        <button type="button" class="btn btn-outline-danger"
                                                            title="Xóa đơn hàng"><i class="fas fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Tài khoản khách hàng</th>
                                                    <th>Tài khoản nhân viên</th>
                                                    <th>Họ tên người nhận</th>
                                                    <th>Số điện thoại người nhận</th>
                                                    <th>Địa chỉ nhận hàng</th>
                                                    <th>Phương thức nhận hàng</th>
                                                    <th>Phương thức thanh toán</th>
                                                    <th>Trạng thái thanh toán</th>
                                                    <th>Trạng thái đơn hàng</th>
                                                    <th>Ngày tạo đơn</th>
                                                    <th>Ngày giao hàng</th>
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
