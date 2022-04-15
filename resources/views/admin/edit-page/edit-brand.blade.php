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
                    <h4 class="page-title">Cập nhật thương hiệu</h4>
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
                            <a href="/brand">
                                <button type="button" class="btn btn-outline-primary">
                                    <i class="fa fa-list-ul"></i> Quản lý thương hiệu
                                </button>
                            </a>
                            <hr>
                            <form action="#" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                <div class="row" style="margin-left: 34.5%;">
                                    <div class="col-sm-12">
                                        <h4 class="card-title">THÔNG TIN THƯƠNG HIỆU</h4>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-12">Tên thương hiệu <span
                                                            style="color:red">*</span></label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="" type="text"
                                                            style="height: 40px;" id=""
                                                            placeholder="Tên sản phẩm" value="OPPO">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-left: 34.5%;">
                                    <div class="col-sm-12">
                                        <h4 class="card-title">MÔ TẢ</h4>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="row" >
                                                    <div class="col-sm-12">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <label>Hình ảnh đại diện</label>
                                                                <div class="col-sm-11 image-profile" align="center">
                                                                    <img class="profile-pic"
                                                                        src="{{ asset('assets/user/images/logo-oppo.jpg') }}"
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
@endsection
