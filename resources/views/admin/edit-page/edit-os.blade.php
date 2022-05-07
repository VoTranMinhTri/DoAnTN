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
                    <h4 class="page-title">Cập nhật hệ điều hành - cpu</h4>
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
                            <a href="{{ route('heDieuHanh_CPU.index') }}">
                                <button type="button" class="btn btn-outline-primary">
                                    <i class="fa fa-list-ul"></i> Quản lý hệ điều hành - cpu
                                </button>
                            </a>
                            <hr>
                            <form action="{{ route('heDieuHanh_CPU.update', ['heDieuHanh_CPU' => $heDieuHanh_CPU]) }}"  method="post" accept-charset="utf-8">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="card-title">THÔNG TIN HỆ ĐIỀU HÀNH - CPU</h4>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="card-title">HỆ ĐIỀU HÀNH - CPU MỚI</h4>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-12">Hệ điều hành<span
                                                                    style="color:red">*</span></label>
                                                            <div class="col-sm-12">
                                                                <input class="form-control" name="hedieuhanh" type="text"
                                                                    style="height: 40px;"
                                                                    placeholder="Hệ điều hành" value="{{ $heDieuHanh_CPU->he_dieu_hanh }}" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-12">Chip xử lý<span
                                                                    style="color:red">*</span></label>
                                                            <div class="col-sm-12">
                                                                <input class="form-control" name="chipxuly" type="text"
                                                                    style="height: 40px;"
                                                                    placeholder="Chip xử lý" value="{{ $heDieuHanh_CPU->chip_xu_ly }}" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-12">Tốc độ cpu<span
                                                                    style="color:red">*</span></label>
                                                            <div class="col-sm-12">
                                                                <input class="form-control" name="tocdocpu" type="text"
                                                                    style="height: 40px;"
                                                                    placeholder="Tốc độ cpu" value="{{ $heDieuHanh_CPU->toc_do_cpu }}" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-12">Chip đồ họa<span
                                                                    style="color:red">*</span></label>
                                                            <div class="col-sm-12">
                                                                <input class="form-control" name="chipdohoa" type="text"
                                                                    style="height: 40px;"
                                                                    placeholder="Chip đồ họa" value="{{ $heDieuHanh_CPU->chip_do_hoa }}" required>
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
                                        <button type="submit" class="btn btn-primary">Cập nhật hệ điều hành - cpu</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @if (Session::has('thongbao'))
                            <div class="popup active ketqua">
                                <div class="bg-popup"></div>
                                <div class="form-popup" style="width: auto">
                                    <div class="row-popup" style="text-align: center;">
                                        <h3 style="color:gray">Thông báo</h3>
                                    </div>
                                    <h4 style="display:block;text-align: center;">{{ Session::get('thongbao') }}</h4>
                                    <p style="margin-top: 10px; text-align: center">
                                        <button type="button" class="btn btn-outline-secondary"
                                            onclick="closepopup()">Ok</button>
                                    </p>
                                </div>
                            </div>
                        @endif

                        {{-- Thông báo validate --}}
                        @if ($errors->any())
                            <div class="popup active ketqua">
                                <div class="bg-popup"></div>
                                <div class="form-popup" style="width: auto">
                                    <div class="row-popup" style="text-align: center;">
                                        <h3 style="color:gray">Thông báo</h3>
                                    </div>
                                    @foreach ($errors->all() as $error)
                                        <h4 style="display:block;text-align: center;">{{ $error }}</h4>
                                    @endforeach
                                    <p style="margin-top: 10px; text-align: center">
                                        <button type="button" class="btn btn-outline-secondary"
                                            onclick="closepopup()">Ok</button>
                                    </p>
                                </div>
                            </div>
                        @endif
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
        const body = this.document.querySelector('body');
        //Đóng thông báo kết quả
        function closepopup() {
            const popup = this.document.querySelector('.popup.active.ketqua');
            popup.className = popup.className.replace(" active", "");
            body.style = "overflow: auto;";
        }
    </script>
@endsection
