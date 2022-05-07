@extends('admin.layouts.app-admin')
@section('content')
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
                    <h4 class="page-title">Cập nhật chi tiết sản phẩm</h4>
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
                            <a href="/edit-product">
                                <button type="button" class="btn btn-outline-primary">
                                    <i class="fa fa-list-ul"></i> Quản lý chi tiết sản phẩm
                                </button>
                            </a>
                            <hr>
                            <form action="#" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="card-title">CHI TIẾT SẢN PHẨM</h4>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-12">Màn hình <span
                                                            style="color:red">*</span>
                                                    </label>
                                                    <div class="col-sm-11">
                                                        <select name=""
                                                            class="select2 form-select shadow-none select2-hidden-accessible"
                                                            style="width: 100%; height:36px;" tabindex="-1"
                                                            aria-hidden="true">
                                                            <option value="">Lựa chọn màn hình</option>
                                                            <option value="1" selected>Công nghệ màn hình - Độ phân giải - Màn hình rộng - Độ sáng tối đa - Mặt kính cảm ứng</option>
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
                                                    <label class="col-sm-12">Camera Sau <span
                                                            style="color:red">*</span>
                                                    </label>
                                                    <div class="col-sm-11">
                                                        <select name=""
                                                            class="select2 form-select shadow-none select2-hidden-accessible"
                                                            style="width: 100%; height:36px;" tabindex="-1"
                                                            aria-hidden="true">
                                                            <option value="">Lựa chọn camera sau</option>
                                                            <option value="1" selected>Độ phân giải - Quay phim - Đèn flash</option>
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
                                                    <label class="col-sm-12">Camera Trước <span
                                                            style="color:red">*</span>
                                                    </label>
                                                    <div class="col-sm-11">
                                                        <select name=""
                                                            class="select2 form-select shadow-none select2-hidden-accessible"
                                                            style="width: 100%; height:36px;" tabindex="-1"
                                                            aria-hidden="true">
                                                            <option value="">Lựa chọn camera trước</option>
                                                            <option value="1" selected>Độ phân giải - Tính năng</option>
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
                                                    <label class="col-sm-12">Hệ điều hành - CPU <span
                                                            style="color:red">*</span>
                                                    </label>
                                                    <div class="col-sm-11">
                                                        <select name=""
                                                            class="select2 form-select shadow-none select2-hidden-accessible"
                                                            style="width: 100%; height:36px;" tabindex="-1"
                                                            aria-hidden="true">
                                                            <option value="">Lựa chọn hệ điều hành - cpu</option>
                                                            <option value="1" selected>Hệ điều hành - Chip xử lý - Tốc độ CPU - Chip đồ họa</option>
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
                                                    <label class="col-sm-12">Bộ nhớ lưu trữ <span
                                                            style="color:red">*</span>
                                                    </label>
                                                    <div class="col-sm-11">
                                                        <select name=""
                                                            class="select2 form-select shadow-none select2-hidden-accessible"
                                                            style="width: 100%; height:36px;" tabindex="-1"
                                                            aria-hidden="true">
                                                            <option value="">Lựa chọn bộ nhớ lưu trữ</option>
                                                            <option value="1" selected>Ram - Bộ nhớ trong - Bộ nhớ còn lại - Danh bạ</option>
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
                                                    <label class="col-sm-12">Kết nối <span
                                                            style="color:red">*</span>
                                                    </label>
                                                    <div class="col-sm-11">
                                                        <select name=""
                                                            class="select2 form-select shadow-none select2-hidden-accessible"
                                                            style="width: 100%; height:36px;" tabindex="-1"
                                                            aria-hidden="true">
                                                            <option value="">Lựa chọn kết nối</option>
                                                            <option value="1" selected>Mạng di động - Sim - Wifi - GPS - Bluetooth - Cổng kết nối - Jack tai nghe - Kết nối khác</option>
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
                                                    <label class="col-sm-12">Pin sạc <span
                                                            style="color:red">*</span>
                                                    </label>
                                                    <div class="col-sm-11">
                                                        <select name=""
                                                            class="select2 form-select shadow-none select2-hidden-accessible"
                                                            style="width: 100%; height:36px;" tabindex="-1"
                                                            aria-hidden="true">
                                                            <option value="">Lựa chọn pin sạc</option>
                                                            <option value="1" selected>Dung lượng pin - Loại pin - Hỗ trợ sạc tối đa - Công nghệ pin</option>
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
                                                    <label class="col-sm-12">Tiện ích <span
                                                            style="color:red">*</span>
                                                    </label>
                                                    <div class="col-sm-11">
                                                        <select name=""
                                                            class="select2 form-select shadow-none select2-hidden-accessible"
                                                            style="width: 100%; height:36px;" tabindex="-1"
                                                            aria-hidden="true">
                                                            <option value="">Lựa chọn tiện ích</option>
                                                            <option value="1" selected>Bảo mật nâng cao - Tính năng đặt biệt - Kháng nước bụi - Xem phim - Nghe nhạc</option>
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
                                                    <label class="col-sm-12">Thông tin chung <span
                                                            style="color:red">*</span>
                                                    </label>
                                                    <div class="col-sm-11">
                                                        <select name=""
                                                            class="select2 form-select shadow-none select2-hidden-accessible"
                                                            style="width: 100%; height:36px;" tabindex="-1"
                                                            aria-hidden="true">
                                                            <option value="">Lựa chọn thông tin chung</option>
                                                            <option value="1" selected>Thiết kế - chất liệu - Kích thước khối lượng - Thời điểm ra mắt</option>
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
                                                            type="number" style="height: 40px; width: 95%; float: left;"
                                                            id="product_price" placeholder="0" value="8900000">
                                                        <div
                                                            style="background-color: #ebebeb;padding: 8.5px;text-align: center;border-radius: 3px;border: 1px solid #ccc;">
                                                            đ</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group row">
                                                    <label for="product_name" class="col-sm-12">Số lượng <span
                                                            style="color:red">*</span></label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="product_name" type="number"
                                                            style="height: 40px;"
                                                            placeholder="Số lượng" value="10">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" style="text-align: center; margin-top: 20px">
                                        <button type="button" class="btn btn-primary">Cập nhật chi tiết sản phẩm</button>
                                    </div>
                                </div>
                            </form>
                            <!--<hr>
                            <h4 class="card-title">QUẢN LÝ HÌNH ẢNH CHI TIẾT SẢN PHẨM</h4>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th class='thNormal'>Hình ảnh</th>
                                            <th>Hình ảnh đại diện</th>
                                            <th class='thNormal' style='width:100px'>Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><img src="{{ asset('assets/user/images/oppo-reno6-z-5g-aurora-1-200x200.jpg') }}"
                                                class="no-text"></td>
                                            <td>X</td>
                                            <td>
                                                {{-- https://jsfiddle.net/prasun_sultania/KSk42/ hướng dẫn chỉnh lại title --}}
                                                {{-- <button type="button" class="btn btn-outline-info"
                                                    title="Xem chi tiết sản phẩm"><i
                                                        class="fas fa-info"></i></button> --}}
                                                <a href="/edit-product-detail"><button type="button"
                                                        class="btn btn-outline-secondary"
                                                        title="Chỉnh sửa hình ảnh chi tiết sản phẩm"><i
                                                            class="far fa-edit"></i></button></a>
                                                {{-- <button type="button" class="btn btn-outline-danger" title="Xóa sản phẩm"><i class="fas fa-trash"></i></button> --}}
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>STT</th>
                                            <th>Hình ảnh</th>
                                            <th>Hình ảnh đại diện</th>
                                            <th>Chức năng</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>-->
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

    <script type="text/javascript">
        $(document).ready(function() {
            var readURL = function(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('.profile-pic').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            };

            $(".file-upload").on('change', function() {
                readURL(this);
            });

            $(".upload-herf").on('click', function() {
                $(".file-upload").click();
            });
            $('.bootstrap-tagsinput input').keydown(function(event) {
                if (event.which == 13) {
                    $(this).blur();
                    $(this).focus();
                    return false;
                }
            })


        });
        // var readURL = function(input) {
        //     if (input.files && input.files[0]) {
        //         var reader = new FileReader();
        //         reader.onload = function(e) {
        //             $(this).closest('.img_product').find('.pic-default').attr('src', e.target.result);
        //         };
        //         reader.readAsDataURL(input.files[0]);
        //     }
        // };

        // $(document).on("change", ".file-upload", function() {
        //     var _this = $(this);
        //     var reader = new FileReader();
        //     reader.onload = function(e) {
        //         _this.closest('.img_product').find('.pic-default').attr('src', e.target.result);
        //     };
        //     reader.readAsDataURL(this.files[0]);
        // });

        // $(document).on("click", ".upload-herf", function() {
        //     $(this).closest('.img_product').find(".file-upload").click();
        // });
    </script>
@endsection
