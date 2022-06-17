@extends('user.layouts.app-other')
@section('content')
    <section class="wrapper login">
        <div>
            <span style="margin-bottom:25px">Đăng ký</span>
            <form href="/signup" method="post">
                @csrf
                <input type="text" name="username" placeholder="Nhập tên đăng nhập" required>
                <input type="text" name="hoten" placeholder="Nhập họ tên" required>
                <input type="text" name="email" placeholder="Nhập email" required>
                <input type="password" name="matkhau" placeholder="Nhập mật khẩu" id="pass" required>
                <input type="password" name="matkhauxacnhan" placeholder="Xác nhận mật khẩu" id="pass-confirm" required>
                <label class="show-pass">
                    <input type="checkbox" name="show-pass" onclick="togglepass()"> Hiển thị password
                </label>
                <button type="submit" class="btn">Đăng ký</button>
            </form>
            <p class="login-account">Đã có tài khoản <a href="/signin"><span>Đăng nhập</span></a></p>
        </div>
    </section>
    @if (Session::has('thongbao'))
        <div class="popup active ketqua">
            <div class="bg-popup"></div>
            <div class="form-popup" style="width: auto">
                <div class="row-popup" style="text-align: center;">
                    <h3 style="color:green; font-size:25px">Thông báo</h3>
                </div>
                <h4 style="display:block;text-align: center; font-size:18px">{{ Session::get('thongbao') }}</h4>
                <p style="margin-top: 10px; text-align: center">
                    <button type="button" style="height:35px; width: 150px" class="btn btn-outline-secondary" onclick="closepopup()">Ok</button>
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
                    <h3 style="color:red; font-size:25px">Thông báo</h3>
                </div>
                @foreach ($errors->all() as $error)
                    <h4 style="display:block;text-align: center; font-size:18px">{{ $error }}</h4>
                @endforeach
                <p style="margin-top: 10px; text-align: center">
                    <button type="button" style="height:35px; width: 150px" class="btn btn-outline-secondary"
                        onclick="closepopup()">Ok</button>
                </p>
            </div>
        </div>
    @endif
    <script>
        const body = this.document.querySelector('body');
        //Đóng thông báo kết quả
        function closepopup() {
            const popup = this.document.querySelector('.popup.active.ketqua');
            popup.className = popup.className.replace(" active", "");
            body.style = "overflow: auto;";
        }

        function togglepass() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
            var y = document.getElementById("pass-confirm");
            if (y.type === "password") {
                y.type = "text";
            } else {
                y.type = "password";
            }
        }
    </script>
@endsection
