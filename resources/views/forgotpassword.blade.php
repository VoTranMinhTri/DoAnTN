@extends('layouts.app-other')
@section('content')
    <section class="wrapper forgot">
        <div>
            <img src="{{ asset('assets/images/Forgot-password.png') }}"/>
            <span style="margin-bottom:25px">Quên mật khẩu</span>
            <form id="#" method="post">
                <input type="text" name="Username" placeholder="Nhập tên đăng nhập">
                <button type="submit" class="btn">Lấy lại mật khẩu</button>
            </form>
            <p class="login-account">Quay lại <a href="/signin"><span>Đăng nhập</span></a></p>
        </div>
    </section>
@endsection
