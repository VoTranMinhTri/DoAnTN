@extends('user.layouts.app-other')
@section('content')
    <section class="wrapper login">
        <div>
            <span style="margin-bottom:25px">Đăng nhập</span>
            <form action="/login" method="POST">
                @csrf
                <input type="text" name="username" placeholder="Nhập tên đăng nhập" required>
                <input type="password" name="password" placeholder="Nhập mật khẩu" id="pass" required>
                @if ($errors->has('error'))
                    <div style="margin-bottom: 2%; color:red">
                        <span>{{ $errors->first('error') }}</span>
                    </div>
                @endif
                <label class="show-pass">
                    <input type="checkbox" name="show-pass" onclick="togglepass()"> Hiển thị password
                </label>
                <button type="submit" class="btn">Đăng nhập</button>
            </form>
            <a href="/forgotpassword">
                <p class="forgot-pass">Quên mật khẩu?</p>
            </a>
            <p class="create-account">Chưa có tài khoản? <a href="/signup"><span>Tạo tài khoản</span></a></p>
            <div class="social">
                <p class="social-heading"><span>Hoặc tiếp tục bằng</span></p>
                <ul class="social-items">
                    <a href="{{ route('login.facebook') }}">
                        <li class="social-item"><img src="{{ asset('assets/user/images/Logo-Facebook.png') }}"
                                alt="facebook">
                        </li>
                    </a>
                    <a href="{{ route('login.google') }}">
                        <li class="social-item"><img src="{{ asset('assets/user/images/Logo-Google.png') }}"
                                alt="google"></li>
                    </a>
                    <a href="{{ route('login.zalo') }}">
                        <li class="social-item"><img src="{{ asset('assets/user/images/Logo-Zalo.png') }}" alt="zalo">
                        </li>
                    </a>
                </ul>
            </div>
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

    <script>
        const body = this.document.querySelector('body');

        function togglepass() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        function closepopup() {
            const popup = this.document.querySelector('.popup.active.ketqua');
            popup.className = popup.className.replace(" active", "");
            body.style = "overflow: auto;";
        }
    </script>
@endsection
