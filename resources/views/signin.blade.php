<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://t-t-mobile.herokuapp.com/assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://t-t-mobile.herokuapp.com/assets/css/all.css">
    <title>Đăng nhập</title>
</head>

<body>
    <div class="nav-bar">
        <div>
            <a href="#index" class="nav-bar-logo"><img src="{{ URL::to('assets/images/Logo-1.png') }}" /></a>
            <div class="bordercol"></div>
            <form action="#search" class="nav-bar-search">
                <input type="text" class="" placeholder="Nhập tên điện thoại bạn cần tìm..."
                    maxlength="100">
                <button type="submit"><i class="fas fa-search"></i></button>
                <div id="search-result" style="display: block;"></div>
            </form>
            <a href="#cart" class="nav-bar-cart">
                <i class="fas fa-shopping-cart"> </i>
                <span>Giỏ hàng</span>
            </a>
            <div class="nav-bar-space"></div>
            <div class="bordercol"></div>
            <a href="/signin" class="nav-bar-signin">
                <span>Đăng nhập</span>
            </a>
            <div class="bordercol"></div>
            <a href="#signup" class="nav-bar-signup">
                <span>Đăng ký</span>
            </a>
        </div>
    </div>
    <section class="wrapper login">
        <div>
            <span style="margin-bottom:25px">Đăng nhập</span>
            <form id="#" method="post">
                <input type="text" name="Username" placeholder="Nhập tên đăng nhập">
                <input type="password" name="Password" placeholder="Nhập tên mật khẩu">
                <button type="submit" class="btn">Đăng nhập</button>
            </form>
            <p class="forgot-pass">Quên mật khẩu?</p>
            <p class="create-account">Chưa có tài khoản? <span>Tạo tài khoản</span></p>
            <div class="social">
                <p class="social-heading"><span>Hoặc tiếp tục bằng</span></p>
                <ul class="social-items">
                    <a href="{{ url('auth/facebook') }}">
                        <li class="social-item"><img
                                src="https://salt.tikicdn.com/ts/upload/3a/22/45/0f04dc6e4ed55fa62dcb305fd337db6c.png"
                                alt="facebook">
                        </li>
                    </a>
                    <li class="social-item"><img
                            src="https://salt.tikicdn.com/ts/upload/1c/ac/e8/141c68302262747f5988df2aae7eb161.png"
                            alt="google"></li>
                    <li class="social-item"><img
                            src="https://salt.tikicdn.com/ts/upload/98/37/86/517cfc05f04466b3118357a1fb4182c8.png"
                            alt="zalo"></li>
                </ul>
            </div>
        </div>
    </section>
</body>

<footer class="footer">
    <section class="clearfix footer__top">
        <div class="footer-col">
            <ul class="f-listmenu">
                <li><a rel="nofollow" href="#">Lịch sử mua hàng</a></li>
                <li><a rel="nofollow" href="#">Cộng tác viên</a></li>
                <li><a rel="nofollow" href="#">Tìm hiểu về mua trả góp</a></li>
                <li><a rel="nofollow" href="#">Chính sách bảo hành</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <ul class="f-listmenu">
                <li><a rel="nofollow" href="#">Giới thiệu</a></li>
                <li><a rel="nofollow" href="#">Tuyển dụng</a></li>
                <li><a rel="nofollow" href="#">Gửi góp ý, khiếu nại</a></li>
                <li><a rel="nofollow" href="#">Tìm siêu thị</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <ul class="f-listmenu">
                <li><a href="#">Tin tức</a></li>
                <li><a href="#">Sản phẩm</a></li>
                <li><a href="#">Thương hiệu</a></li>
                <li><a href="#">Nhân viên</a></li>
            </ul>
        </div>
    </section>
    <div class="copyright">
        <section>
            <p>
                © 2021. T&T Mobile. GPDKKD: 0303217354 do sở KH &amp; ĐT TP.HCM cấp ngày 01/01/2021. GPMXH: 238/GP-BTTTT
                do Bộ Thông Tin và Truyền Thông cấp ngày 01/01/2021.<br>
                Địa chỉ: TP.Hồ Chí Minh. Điện thoại: 0123456789. Email: T&TMobile@gmail.com. Chịu trách nhiệm nội dung:
                Võ Trần Minh Trí. <a rel="nofollow" href="#">Xem chính sách sử dụng</a>
            </p>
        </section>
    </div>
</footer>

</html>
