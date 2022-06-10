@extends('user.layouts.app-other')
@section('content')
    <section class="wrapper login">
        <div>
            <span style="margin-bottom:25px">Đăng nhập</span>
            <form action="/login" method="POST">
                @csrf
                <input type="text" name="username" placeholder="Nhập tên đăng nhập">
                <input type="password" name="password" placeholder="Nhập mật khẩu" id="pass">
                @if ($errors->has('error'))
                    <div style="margin-bottom: 2%; color:red">
                        <span>{{ $errors->first('error') }}</span>
                    </div>
                @endif
                @if (Session::has('thongbao'))
                    <div style="margin-bottom: 2%; color:red">
                        <span>{{ Session::get('thongbao') }}</span>
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
    <script>
        function togglepass() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        function closepopup() {
            var popup = document.querySelector('.popup-thongbao');
            popup.className = popup.className.replace(' active', '');
            var bo = document.querySelector('body');
            bo.className = bo.className.replace('hidden-y', '');
        }
    </script>
@endsection
