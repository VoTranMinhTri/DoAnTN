@extends('layouts.app-other')
@section('content')
    <section class="wrapper login">
        <div>
            <span style="margin-bottom:25px">Đăng nhập</span>
            <form id="#">
                <input type="text" name="Username" placeholder="Nhập tên đăng nhập">
                <input type="password" name="Password" placeholder="Nhập mật khẩu">
                <label class="show-pass">
                    <input type="checkbox" checked="checked" name="show-pass"> Hiển thị password
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
                    <a href="{{ url('auth/facebook') }}">
                        <li class="social-item"><img src="{{ asset('assets/images/Logo-Facebook.png') }}"
                                alt="facebook">
                        </li>
                    </a>
                    <li class="social-item"><img src="{{ asset('assets/images/Logo-Google.png') }}" alt="google"></li>
                    <li class="social-item"><img src="{{ asset('assets/images/Logo-Zalo.png') }}" alt="zalo"></li>
                </ul>
            </div>
        </div>
    </section>
@endsection
