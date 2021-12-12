<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::to('assets/css/all.css') }}">
    <title>T&T Mobile</title>
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
