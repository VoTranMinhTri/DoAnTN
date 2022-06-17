<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="{{ asset('assets/user/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/user/css/all.css') }}" type="text/css">
    <link href="{{ asset('assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/admin/images/icon-logo.png') }}">
    <title>T&T Mobile</title>
</head>

<body>
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
            {{-- @if (Session('Cart') == null)
                <a href="/cart" class="nav-bar-cart">
                    <i class="icon-cart"></i>
                    <span>Giỏ hàng</span>
                </a>
            @else --}}
            <?php
            // $soLuong = 0;
            // foreach (Session('Cart')->products as $tp) {
            //     $soLuong += $tp['quantity'];
            // }
            ?>
            {{-- <a href="/cart" class="nav-bar-cart active">
                    <i class="icon-cart">{{ $soLuong }}</i>
                    <span>Giỏ hàng</span>
                </a> --}}
            {{-- @endif --}}
            <div class="nav-bar-space"></div>
            <div class="bordercol"></div>
            @if (Auth::guest())
                <a href="/signin" class="nav-bar-signin">
                    <span>Đăng nhập</span>
                </a>
                <div class="bordercol"></div>
                <a href="/signup" class="nav-bar-signup">
                    <span>Đăng ký</span>
                </a>
            @else
                <ul class="navbar-nav float-end">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#"
                            id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('assets/admin/images/users/1.jpg') }}" alt="user"
                                class="rounded-circle" width="40">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/accountinformation"><i class="ti-user me-1 ms-1"></i>
                                Thông tin của tôi</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/ordermanagement"><i class="ti-user me-1 ms-1"></i>
                                Đơn hàng của tôi</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/thayDoiMatKhau"><i class="ti-settings me-1 ms-1"></i>
                                Đổi
                                mật khẩu</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/logout"><i class="fa fa-power-off me-1 ms-1"></i> Đăng
                                xuất</a>
                        </ul>
                    </li>
                </ul>
            @endif
        </div>
    </div>
    @yield('content')
    {{-- <script src="https://www.paypalobjects.com/api/checkout.js"></script> --}}
    <script src="https://www.paypal.com/sdk/js?client-id=AR9W53CxF61QShw6HNHEWQan3vw7tqxm-q6eMXcDu6X_DR_Xs_Q7lQDJY8GAKdLWtxAeRloiOrDcp3FI&disable-funding=credit,card&currency=USD&vault=true"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <div class="zalo-chat-widget" data-oaid="2920828326549610293" data-welcome-message="Rất vui khi được hỗ trợ bạn!"
        data-autopopup="0" data-width="" data-height=""></div>
    </div>

    <script src="https://sp.zalo.me/plugins/sdk.js"></script>
</body>
<script src="{{ asset('assets/admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />

<!-- Table js -->
<script src="{{ asset('assets/admin/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
<script src="{{ asset('assets/admin/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
<script src="{{ asset('assets/admin/extra-libs/DataTables/datatables.min.js') }}"></script>
<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable();
    $('#one_config').DataTable();
</script>

</html>
