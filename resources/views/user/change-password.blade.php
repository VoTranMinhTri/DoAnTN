@extends('user.layouts.app-other')
@section('content')
    <section>
        <div class="container">
            <div class="left">
                <a href="/ordermanagement" class="">Danh sách đơn hàng</a>
                <a href="/accountinformation" class="">Thông tin cá nhân</a>
                <a href="/review" class="">Đánh giá sản phẩm</a>
                @if(Auth::user()->loai_tai_khoan_id == 5)
                <a href="/thayDoiMatKhau" class="active">Đổi mật khẩu</a>
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
                    <h3>Đổi mật khẩu</h3>
                    <input type="password" name="matkhaucu" placeholder="Mật khẩu" required id='pass'>
                    <input type="password" name="matkhaumoi" placeholder="Mật khẩu mới" required id='newpass'>
                    <input type="password" name="matkhauxacnhan" placeholder="Xác nhận mật khẩu" required style="float: none;" id='confirmpass'>
                    <input type="hidden" name='taikhoanid' value='{{ Auth::user()->id }}'>
                    <label class="show-pass" style="padding: 0;">
                        <input type="checkbox" name="show-pass" onclick="togglepass()"> Hiển thị mật khẩu
                    </label>
                    <a href="javascript:doiMatKhau()" class="button">CẬP NHẬT MẬT KHẨU</a>
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

        function doiMatKhau() {
            var taiKhoanId = $('input[name="taikhoanid"]').val();
            var matKhauCu = $('input[name="matkhaucu"]').val();
            var matKhauMoi = $('input[name="matkhaumoi"]').val();
            var matKhauXacNhan = $('input[name="matkhauxacnhan"]').val();
            $.ajax({
                type: 'get',
                url: '{{ URL::to('doiMatKhau') }}',
                data: {
                    'taiKhoanId': taiKhoanId,
                    'matKhauCu': matKhauCu,
                    'matKhauMoi': matKhauMoi,
                    'matKhauXacNhan': matKhauXacNhan,
                },
                success: function(data) {
                    alertify.success('Đổi mật khẩu thành công !');
                },
                error: function(data) {
                    alertify.error(data.responseText);
                }
            });
            loading[0].style = "display:block";
            setTimeout(fadeOutEffect, 500);
        }

        function togglepass() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
            var y = document.getElementById("newpass");
            if (y.type === "password") {
                y.type = "text";
            } else {
                y.type = "password";
            }
            var z = document.getElementById("confirmpass");
            if (z.type === "password") {
                z.type = "text";
            } else {
                z.type = "password";
            }
        }
    </script>
@endsection
