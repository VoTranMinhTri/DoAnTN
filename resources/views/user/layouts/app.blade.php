<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="{{ asset('assets/user/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/user/css/all.css') }}" type="text/css">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/admin/images/icon-logo.png') }}">
    <title>T&T Mobile</title>
</head>

<body class="theme">
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div class="nav-bar">
        <div>
            <a href="/" class="nav-bar-logo"><img src="{{ asset('assets/user/images/Logo-1.png') }}" /></a>
            <div class="bordercol"></div>
            <form action="#search" class="nav-bar-search">
                <input type="text" class="" placeholder="Nhập tên điện thoại bạn cần tìm..."
                    maxlength="100">
                <button type="submit"><i class="fas fa-search"></i></button>
                <div id="search-result" style="display: block;"></div>
            </form>
            <a href="/cart" class="nav-bar-cart active">
                {{-- <i class="fas fa-shopping-cart"> </i> --}}
                <i class="icon-cart">2</i>
                <span>Giỏ hàng</span>
            </a>
            <div class="nav-bar-space"></div>
            <div class="bordercol"></div>
            <a href="/signin" class="nav-bar-signin">
                <span>Đăng nhập</span>
            </a>
            <div class="bordercol"></div>
            <a href="/signup" class="nav-bar-signup">
                <span>Đăng ký</span>
            </a>
        </div>
    </div>
    @yield('content')
    <div class="sticky-sidebar">
        <a data-cate="0" href="#" class="banner-left">
            <img style="cursor:pointer" src="{{ asset('assets/user/images/banner-7-side.png') }}" width="79"
                height="271">
        </a>
        <a data-cate="0" href="#" class="banner-right">
            <img style="cursor:pointer" src="{{ asset('assets/user/images/banner-8-side.png') }}" width="79"
                height="271">
        </a>
    </div>

    <!-- ============================================================== -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <!--Custom JavaScript -->
    <script>$(function() {
        $(".preloader").fadeOut();
    });
    </script>
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
                <li><a rel="nofollow" href="#">Tìm cửa hàng</a></li>
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
        <div class="footer-col">
            <div class="f-certify">
                <a rel="nofollow" href="http://online.gov.vn/Home/WebDetails/20090" target="_blank">
                    <i class="icon-congthuong"></i>
                </a>
                <a rel="nofollow" href="/tos#giai-quyet-khieu-nai" target="_blank">
                    <i class="icon-khieunai"></i>
                </a>
                <a rel="nofollow" class="dmca-badge"
                    href="https://www.dmca.com/Protection/Status.aspx?ID=5b62e759-2a0c-4d86-b972-af903bfbc89d&amp;refurl=https://www.thegioididong.com/dtdd/oppo-reno6-z-5g"
                    target="_blank">
                    <i class="icon-protected"></i>
                </a>
                <a class="_ncsc" rel="nofollow"
                    href="https://tinnhiemmang.vn/danh-ba-tin-nhiem/thegioididongcom-1632835473"
                    title="Chung nhan Tin Nhiem Mang" target="_blank">
                    <img class=" lazyloaded" width="150" alt="Chung nhan Tin Nhiem Mang"
                        src="{{ asset('assets/user/images/handle_cert.png') }}">
                </a>
            </div>
        </div>
        {{-- <div style="display: inline-block">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d125419.44231589595!2d106.6434555198453!3d10.783901588468984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zVGjhur8gZ2nhu5tpIGRpIMSR4buZbmc!5e0!3m2!1svi!2s!4v1641105276560!5m2!1svi!2s" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div> --}}
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
