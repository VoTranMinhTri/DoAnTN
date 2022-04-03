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
                        <ul aria-expanded="false" class="collapse  first-level in">
                            <li class="sidebar-item active"><a href="/product" class="sidebar-link"><i class="fas fa-dot-circle"></i></i><span class="hide-menu">Quản lý sản
                                        phẩm
                                    </span></a></li>
                            <li class="sidebar-item"><a href="/brand" class="sidebar-link"><i class="fas fa-circle"></i><span class="hide-menu">Quản lý thương
                                        hiệu
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
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Thêm sản phẩm</h4>
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
                            <a href="/product">
                                <button type="button" class="btn btn-outline-primary">
                                    <i class="fa fa-list-ul"></i> Quản lý sản phẩm
                                </button>
                            </a>
                            <hr>
                            <form action="#" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="card-title">SẢN PHẨM MỚI</h4>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group row">
                                                    <label for="product_name" class="col-sm-12">Tên sản phẩm <span
                                                            style="color:red">*</span></label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="product_name" type="text"
                                                            style="height: 40px;" id="product_name"
                                                            placeholder="Tên sản phẩm" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-12">Thương hiệu <span
                                                            style="color:red">*</span>
                                                    </label>
                                                    <div class="col-sm-11">
                                                        <select name="brand-id"
                                                            class="select2 form-select shadow-none select2-hidden-accessible"
                                                            style="width: 100%; height:36px;" tabindex="-1"
                                                            aria-hidden="true">
                                                            <option value="">Lựa chọn thương hiệu</option>
                                                            <option value="1">OPPO</option>
                                                            <option value="2">XIAOMI</option>
                                                        </select>
                                                    </div>
                                                    <button type="button" class="btn btn-outline-secondary"
                                                        style="width: 40px;">
                                                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-12">Giá sản phẩm <span
                                                            style="color:red">*</span></label>
                                                    <div>
                                                        <input class="form-control" name="product_price simple_money"
                                                            type="text" style="height: 40px; width: 95%; float: left;"
                                                            id="product_price" placeholder="0" value="">
                                                        <div
                                                            style="background-color: #ebebeb;padding: 8.5px;text-align: center;border-radius: 3px;border: 1px solid #ccc;">
                                                            đ</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="card-title">MÔ TẢ</h4>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <label>Hình ảnh đại diện</label>
                                                                <div class="col-sm-11 image-profile" align="center">
                                                                    <img class="profile-pic"
                                                                        src="{{ asset('assets/admin/images/icon-logo.png') }}"
                                                                        name="filed">
                                                                    <div class="upload-herf cursor">Upload Image</div>
                                                                    <input class="file-upload" name="store_logo"
                                                                        type="file"
                                                                        accept="image/x-png,image/gif,image/jpeg"
                                                                        id="store_logo"
                                                                        data-msg-accept="Chỉ nhận tập tin jpg|jpeg|png|gif">
                                                                    <input hidden="hidden" name="old_logo" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <label>Mô tả</label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <textarea class="form-control" tabindex="1" id="description" name="description" rows="8" placeholder=" Mô tả"
                                                            style="resize: vertical;"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12" style="text-align: center;">
                                        <button type="button" class="btn btn-primary">Thêm sản phẩm</button>
                                    </div>
                                </div>
                            </form>
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
