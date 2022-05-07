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
                    <h4 class="page-title">Thông tin chi tiết sản phẩm</h4>
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
                            <a href="/featuredpicture">
                                <button type="button" class="btn btn-outline-info">
                                    <i class="fas fa-list-ul"></i> Quản lý hình ảnh nổi bật của sản phẩm
                                </button>
                            </a>
                            <a href="/colorpicture">
                                <button type="button" class="btn btn-outline-success">
                                    <i class="fas fa-list-ul"></i> Quản lý hình ảnh màu sắc của sản phẩm
                                </button>
                            </a>
                            <a href="/360picture">
                                <button type="button" class="btn btn-outline-warning">
                                    <i class="fas fa-list-ul"></i> Quản lý hình ảnh 360 của sản phẩm
                                </button>
                            </a>
                            <a href="/add-product-detail">
                                <button type="button" class="btn btn-outline-secondary" style="margin-top: 4px">
                                    <i class="fas fa-plus-circle"></i> Thêm chi tiết sản phẩm
                                </button>
                            </a>
                            <hr>
                            <form action="#" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="card-title">THÔNG TIN SẢN PHẨM</h4>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group row">
                                                    <label for="product_name" class="col-sm-12">Tên sản phẩm <span
                                                            style="color:red">*</span></label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="product_name" type="text"
                                                            style="height: 40px;" id="product_name"
                                                            placeholder="Tên sản phẩm" value="Điện thoại OPPO Reno6 Z 5G">
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
                                                            <option value="1" selected>OPPO</option>
                                                            <option value="2">XIAOMI</option>
                                                        </select>
                                                    </div>
                                                    <button type="button" class="btn btn-outline-secondary add-brand"
                                                        style="width: 40px;">
                                                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            {{-- <div class="col-sm-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-12">Giá sản phẩm <span
                                                            style="color:red">*</span></label>
                                                    <div>
                                                        <input class="form-control" name="product_price simple_money"
                                                            type="text" style="height: 40px; width: 95%; float: left;"
                                                            id="product_price" placeholder="0" value="8900000">
                                                        <div
                                                            style="background-color: #ebebeb;padding: 8.5px;text-align: center;border-radius: 3px;border: 1px solid #ccc;">
                                                            đ</div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
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
                                                                        src="{{ asset('assets/user/images/oppo-reno6-z-5g-aurora.jpg') }}"
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
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <label>Hình ảnh thông số kỹ thuật</label>
                                                                <div class="col-sm-11 image-profile" align="center">
                                                                    <img class="profile-pic"
                                                                        src="{{ asset('assets/user/images/oppo-reno6-z-5g-note-2.jpg') }}"
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
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <label>Hình ảnh mở hộp</label>
                                                                <div class="col-sm-11 image-profile" align="center">
                                                                    <img class="profile-pic"
                                                                        src="{{ asset('assets/user/images/oppo-reno6-z-5g-bbh-org.jpg') }}"
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
                                                            style="resize: vertical;">Hộp, Cây lấy sim, Ốp lưng, Tai nghe dây, Cáp Type C, Củ sạc nhanh rời đầu Type A, Sách hướng dẫn</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" style="text-align: center;margin-top:20px">
                                        <button type="button" class="btn btn-primary">Cập nhật sản phẩm</button>
                                    </div>
                                </div>
                            </form>
                            <div class="popup">
                                <div class="bg-popup"></div>
                                <div class="form-popup">
                                    <div class="row-popup">
                                        <strong>Thêm thương hiệu</strong>
                                        <button>Đóng</button>
                                    </div>
                                    <form action="#" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-12">Tên thương hiệu <span
                                                                    style="color:red">*</span></label>
                                                            <div class="col-sm-12">
                                                                <input class="form-control" name="" type="text"
                                                                    style="height: 40px;" id=""
                                                                    placeholder="Tên thương hiệu" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="card-title">MÔ TẢ</h4>
                                                <div class="row">
                                                    <div class="col-sm-6" style="margin-left: 26.5%;">
                                                        <div class="row" >
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
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12" style="text-align: center; margin-top:20px">
                                                <button type="button" class="btn btn-primary">Thêm thương hiệu</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <hr>
                            <h4 class="card-title">QUẢN LÝ CHI TIẾT SẢN PHẨM</h4>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Tên phiên bản</th>
                                            <th>SKU</th>
                                            <th>Giá</th>
                                            <th>Số lượng</th>
                                            <th class='thNormal' style='width:100px'>Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Điện thoại OPPO Reno6 Z 5G - 4GB - Xanh</td>
                                            <td>OPPOR01</td>
                                            <td>8900000</td>
                                            <td>10</td>
                                            <td>
                                                {{-- https://jsfiddle.net/prasun_sultania/KSk42/ hướng dẫn chỉnh lại title --}}
                                                {{-- <button type="button" class="btn btn-outline-info"
                                                    title="Xem chi tiết sản phẩm"><i
                                                        class="fas fa-info"></i></button> --}}
                                                <a href="/edit-product-detail"><button type="button"
                                                        class="btn btn-outline-secondary"
                                                        title="Chỉnh sửa thông tin chi tiết sản phẩm"><i
                                                            class="far fa-edit"></i></button></a>
                                                {{-- <button type="button" class="btn btn-outline-danger" title="Xóa sản phẩm"><i class="fas fa-trash"></i></button> --}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Điện thoại OPPO Reno6 Z 5G - 4GB - Đen</td>
                                            <td>OPPOR02</td>
                                            <td>8900000</td>
                                            <td>10</td>
                                            <td>
                                                {{-- <button type="button" class="btn btn-outline-info"
                                                    title="Xem chi tiết sản phẩm"><i
                                                        class="fas fa-info"></i></button> --}}
                                                <button type="button" class="btn btn-outline-secondary"
                                                    title="Chỉnh sửa thông tin chi tiết sản phẩm"><i
                                                        class="far fa-edit"></i></button>
                                                {{-- <button type="button" class="btn btn-outline-danger" title="Xóa sản phẩm"><i class="fas fa-trash"></i></button> --}}
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Tên phiên bản</th>
                                            <th>SKU</th>
                                            <th>Giá</th>
                                            <th>Số lượng</th>
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
    </script>
    <script>
        const a = this.document.querySelector('.add-brand');
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
