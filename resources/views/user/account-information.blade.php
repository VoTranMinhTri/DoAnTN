@extends('user.layouts.app-other')
@section('content')
    <section>
        <div class="container">
            <div class="left">
                <a href="/ordermanagement" class="">Danh sách đơn hàng</a>
                <a href="/accountinformation" class="active">Thông tin cá nhân</a>
                <a href="/review" class="">Đánh giá sản phẩm</a>
                @if(Auth::user()->loai_tai_khoan_id == 5)
                <a href="/thayDoiMatKhau" class="">Đổi mật khẩu</a>
                @endif

            </div>
            <div class="right">
                <div class="user">
                    Chào
                    @if ($thongTinTaiKhoan->gioi_tinh == 1)
                        anh
                    @else
                        chị
                    @endif
                    <b>{{ $thongTinTaiKhoan->ho_ten }}</b>
                </div>
                <div class="profile">
                    <h3>Thông tin cá nhân</h3>
                    <div class="sex-customer" style="margin-bottom: 10px;">
                        @if ($thongTinTaiKhoan->gioi_tinh == 1)
                            <input type="radio" checked="checked" value="1" name="gioitinh">
                            <p style="display:inline-block;padding-right:10px">Anh</p>
                            <input type="radio" value="0" name="gioitinh"> Chị
                        @else
                            <input type="radio" value="1" name="gioitinh">
                            <p style="display:inline-block;padding-right:10px">Anh</p>
                            <input type="radio" checked="checked" value="0" name="gioitinh"> Chị
                        @endif
                    </div>

                    <input type="text" name="hoten" value="{{ $thongTinTaiKhoan->ho_ten }}" placeholder="Họ tên" required>
                    <input type="text" name="sdt" value="{{ $thongTinTaiKhoan->so_dien_thoai }}" placeholder="Số điện thoại"
                        required>
                    <input type="text" name="diachi" value="{{ $thongTinTaiKhoan->dia_chi }}" placeholder="Địa chỉ"
                        required>
                    <input type="text" name="email" value="{{ $thongTinTaiKhoan->email }}" placeholder="Email" required
                        style="float: right;">
                    <p style="margin-bottom: 5px;">Ngày sinh:</p>
                    <input type="date" name="ngaysinh" value="{{ $thongTinTaiKhoan->ngay_sinh }}" required>
                    <input type="hidden" name='taikhoanid' value='{{ Auth::user()->id }}'>
                    <a href="javascript:capNhatThongTin()" class="button">CẬP NHẬT</a>
                </div>
            </div>
        </div>
    </section>
    <div class="loadingcover" style="display: none;" id="loading">
        <p class="csslder">
            <span class="csswrap">
                <span class="cssdot"></span>
                <span class="cssdot"></span>
                <span class="cssdot"></span>
            </span>
        </p>
    </div>
    {{-- <script src="{{ asset('assets/user/js/account-information.js') }}"></script> --}}
    <script>
        const loading = document.getElementsByClassName("loadingcover");

        function fadeOutEffect() {
            var fadeTarget = document.getElementById("loading");
            var fadeEffect = setInterval(function() {
                if (!fadeTarget.style.opacity) {
                    fadeTarget.style.opacity = 1;
                }
                if (fadeTarget.style.opacity > 0) {
                    fadeTarget.style.opacity -= 0.1;
                } else {
                    clearInterval(fadeEffect);
                    loading[0].style = "display:none";
                }
            }, 50);
        }

        function capNhatThongTin() {
            var taiKhoanId = $('input[name="taikhoanid"]').val();
            var gioiTinh = $('input[name="gioitinh"]:checked').val();
            var hoTen = $('input[name="hoten"]').val();
            var sdt = $('input[name="sdt"]').val();
            var ngaySinh = $('input[name="ngaysinh"]').val();
            var email = $('input[name="email"]').val();
            var diaChi = $('input[name="diachi"]').val();
            $.ajax({
                type: 'get',
                url: '{{ URL::to('capNhatThongTin') }}',
                data: {
                    'taiKhoanId': taiKhoanId,
                    'gioiTinh': gioiTinh,
                    'hoTen': hoTen,
                    'sdt': sdt,
                    'email': email,
                    'diaChi': diaChi,
                    'ngaySinh': ngaySinh,
                },
                success: function(data) {
                    alertify.success('Cập nhật thành công !');
                },
                error: function(data) {
                    alertify.error(data.responseText);
                }
            });
            loading[0].style = "display:block";
            setTimeout(fadeOutEffect, 500);
        }
    </script>
@endsection
