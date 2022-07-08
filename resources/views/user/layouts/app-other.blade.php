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
            <form action="{{ route('resultSearch') }}" class="nav-bar-search" method='get'>
                <input type="text" class="" placeholder="Nhập tên điện thoại bạn cần tìm..." maxlength="100" name='search' autocomplete="off"
                    id='search' onkeyup="suggestSearch()">
                <button type="submit"><i class="fas fa-search"></i></button>
                <div id="search-result" style="display: none;">
                    <ul class="suggest_search">
                        <li class="ttitle">
                            <div class="viewed">Có phải bạn muốn tìm</div>
                        </li>
                    </ul>
                </div>
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
                            @if (Auth::user()->loai_tai_khoan_id == 5)
                                <a class="dropdown-item" href="/thayDoiMatKhau"><i class="ti-settings me-1 ms-1"></i>
                                    Đổi
                                    mật khẩu</a>
                            @endif
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
    <a href="https://www.messenger.com/t/100312812742200/?messaging_source=source%3Apages%3Amessage_shortlink&source_id=1441792" target="_blank">
        <div style="height: 50px;width: 50px;position: fixed;inset: auto 0px 123px 20px;cursor: pointer;">
            <img src="{{ asset('assets/user/images/chat-messenger.png') }}" width="50" height="50">
        </div>
    </a>
    <a href="https://zalo.me/0363868840" target="_blank">
        <div style="height: 50px;width: 50px;position: fixed;inset: auto 0px 50px 20px;cursor: pointer;">
            <img src="{{ asset('assets/user/images/Logo.svg') }}" width="50" height="50">
        </div>
    </a>
    {{-- <div class="zalo-chat-widget" data-oaid="2920828326549610293" data-welcome-message="Rất vui khi được hỗ trợ bạn!"
        data-autopopup="0" data-width="" data-height=""></div>
    </div>

    <script src="https://sp.zalo.me/plugins/sdk.js"></script> --}}
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
<script>
    function suggestSearch() {
        var searchResult = document.getElementById('search-result');
        searchResult.style = 'display:block';
        var value = $('#search').val();
        if (value == '') {
            searchResult.style = 'display:none';
        } else {
            $.ajax({
                type: 'get',
                url: '{{ URL::to('suggestSearch') }}',
                data: {
                    'search': value,
                },
                success: function(data) {
                    $('.suggest_search').html(data);
                },
            });
        }
    }
    $(document).click(function() {
        document.getElementById('search-result').style = 'display:none';
    });
</script>
</html>
