@extends('layouts.app')
@section('content')
    <section class="wrapper login">
        <div>
            <span style="margin-bottom:25px">Đăng ký</span>
            <form id="#" method="post">
                <input type="text" name="Username" placeholder="Nhập tên đăng nhập">
                <input type="text" name="Email" placeholder="Nhập email">
                <input type="password" name="Password" placeholder="Nhập mật khẩu">
                <input type="password" name="Password-Confirm" placeholder="Xác nhận mật khẩu">
                <label class="show-pass">
                    <input type="checkbox" checked="checked" name="show-pass"> Hiển thị password
                </label>
                <button type="submit" class="btn">Đăng ký</button>
            </form>
            <p class="login-account">Đã có tài khoản <a href="/signin"><span>Đăng nhập</span></a></p>
        </div>
    </section>
@endsection
