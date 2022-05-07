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
                    <h4 class="page-title">Quản lý hình ảnh màu sắc</h4>
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
                            <a href="/edit-product"><button type="button" class="btn btn-outline-secondary">
                                <i class="fas fa-arrow-left"></i> QUAY LẠI
                            </button><a>
                            <button type="button" class="btn btn-outline-primary  add-colordpicture">
                                    <i class="fas fa-plus-circle"></i> THÊM HÌNH ẢNH MÀU SẮC
                                </button>
                                    <hr>
                                    <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th class='thNormal'>Hình ảnh</th>
                                                    <th>Màu sắc</th>
                                                    <th class='thNormal' style='width:100px'>Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><img src="{{ asset('assets/user/images/oppo-reno6-z-5g-aurora.jpg') }}" style="width: 250px"></td>
                                                    <td>Xanh</td>
                                                    <td>
                                                        {{-- https://jsfiddle.net/prasun_sultania/KSk42/ hướng dẫn chỉnh lại title --}}
                                                        <a href="/edit-bonus"><button type="button"
                                                                class="btn btn-outline-secondary"
                                                                title="Chỉnh sửa thông tin hình ảnh màu sắc"><i
                                                                    class="far fa-edit"></i></button></a>
                                                        <button type="button" class="btn btn-outline-danger"
                                                            title="Xóa hình ảnh màu sắc"><i
                                                                class="fas fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Hình ảnh</th>
                                                    <th>Màu sắc</th>
                                                    <th class='thNormal' style='width:100px'>Chức năng</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                        </div>
                        <div class="popup">
                            <div class="bg-popup"></div>
                            <div class="form-popup">
                                <div class="row-popup">
                                    <strong>Thêm hình ảnh màu sắc</strong>
                                    <button>Đóng</button>
                                </div>
                                <form action="#" enctype="multipart/form-data" method="post"
                                    accept-charset="utf-8">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-6" style="margin-left: 26.5%;">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label>Hình ảnh màu sắc</label>
                                                                    <div class="col-sm-11 image-profile"
                                                                        align="center">
                                                                        <img class="profile-pic"
                                                                            src="{{ asset('assets/admin/images/icon-logo.png') }}"
                                                                            name="filed">
                                                                        <div class="upload-herf cursor">
                                                                            Upload Image</div>
                                                                        <input class="file-upload"
                                                                            name="store_logo" type="file"
                                                                            accept="image/x-png,image/gif,image/jpeg"
                                                                            id="store_logo"
                                                                            data-msg-accept="Chỉ nhận tập tin jpg|jpeg|png|gif">
                                                                        <input hidden="hidden" name="old_logo"
                                                                            value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group row">
                                                                <label class="col-sm-12">Màu sắc <span
                                                                        style="color:red">*</span>
                                                                </label>
                                                                <div class="col-sm-11">
                                                                    <select name=""
                                                                        class="select2 form-select shadow-none select2-hidden-accessible"
                                                                        style="width: 100%; height:36px;" tabindex="-1"
                                                                        aria-hidden="true">
                                                                        <option value="">Lựa chọn màu sắc</option>
                                                                        <option value="1" selected>Xanh</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12" style="text-align: center; margin-top:20px">
                                            <button type="button" class="btn btn-primary">Thêm hình ảnh</button>
                                        </div>
                                    </div>
                                </form>
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
    <script>
        const a = this.document.querySelector('.add-colordpicture');
        const popup = this.document.querySelector('.popup');
        const html = this.document.querySelector('html');
        const btnclose = this.document.querySelector('.form-popup .row-popup button');

        //Hiển thị form thêm thương hiệu
        a.onclick = function() {
            popup.className += " active";
            html.style = "overflow: hidden;";
        };

        //Đóng form
        btnclose.onclick = function() {
            popup.className = popup.className.replace(" active", "");
            html.style = "overflow: auto;";
        };
    </script>
@endsection
