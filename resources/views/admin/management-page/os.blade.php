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
                    <h4 class="page-title">Quản lý hệ điều hành - cpu</h4>
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
                                <i class="fas fa-plus-circle"></i> THÊM HỆ ĐIỀU HÀNH - CPU
                            </button><a>
                                <hr>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Hệ điều hành</th>
                                            <th>Chip xử lý</th>
                                            <th>Tốc độ cpu</th>
                                            <th>Chip đồ họa</th>
                                            <th class='thNormal' style='width:100px'>Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Hệ điều hành 1</td>
                                            <td>Chip xử lý 1</td>
                                            <td>Tốc độ cpu 1</td>
                                            <td>Chip đồ họa 1</td>
                                            <td>
                                                {{-- https://jsfiddle.net/prasun_sultania/KSk42/ hướng dẫn chỉnh lại title --}}
                                                <button type="button" class="btn btn-outline-secondary"
                                                    title="Chỉnh sửa thông tin hệ điều hành - cpu"><i
                                                        class="far fa-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger"
                                                    title="Xóa hệ điều hành - cpu"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Hệ điều hành 2</td>
                                            <td>Chip xử lý 2</td>
                                            <td>Tốc độ cpu 2</td>
                                            <td>Chip đồ họa 2</td>
                                            <td>
                                                {{-- https://jsfiddle.net/prasun_sultania/KSk42/ hướng dẫn chỉnh lại title --}}
                                                <button type="button" class="btn btn-outline-secondary"
                                                    title="Chỉnh sửa thông tin hệ điều hành - cpu"><i
                                                        class="far fa-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger"
                                                    title="Xóa hệ điều hành - cpu"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Hệ điều hành</th>
                                            <th>Chip xử lý</th>
                                            <th>Tốc độ cpu</th>
                                            <th>Chip đồ họa</th>
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
