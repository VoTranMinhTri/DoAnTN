@extends('user.layouts.app-other')
@section('content')
    @if (Session('Cart') == null)
        <div class="giohang">
            <section>
                <div class="cartempty"><i class="cartnew-empty"></i><span>Không có sản phẩm nào trong giỏ hàng</span><a
                        href="/" class="backhome" style="width: 30%;position: relative;left: 34%;">Về trang chủ</a>
                </div>
            </section>
        </div>
    @else
        <?php
        Session('Cart')->voucher = null;
        ?>
        <div class="giohang">
            <section class="wrapper cart" style="padding: 20px 0;">
                <div style="margin: auto;">
                    <ul class="list-cart">
                        @foreach (Session('Cart')->products as $tp)
                            <li class="product-item">
                                <div class="img-product">
                                    <a
                                        href="{{ route('productDetail', ['sanPhamId' => $tp['productInfo']->dien_thoai_id]) }}">
                                        <img src="{{ asset('storage/images/' . $tp['productInfo']->hinh_anh) }}" />
                                    </a>
                                    <button onclick="deleteItemCart('{{ $tp['productInfo']->id }}')"><i
                                            class="fas fa-trash"></i> Xóa</button>
                                </div>
                                <div class="info-product">
                                    <div class="name-price">
                                        <div class="name">
                                            <a href="{{ route('productDetail', ['sanPhamId' => $tp['productInfo']->dien_thoai_id]) }}"
                                                class="product-item-name">
                                                Điện thoại {{ $tp['productInfo']->ten_san_pham }}
                                                {{ $tp['productInfo']->ram }}/{{ $tp['productInfo']->bo_nho_trong }} -
                                                {{ $tp['productInfo']->ten_mau_sac }}</a>
                                        </div>
                                        @if ($tp['productInfo']->phan_tram_giam == 0)
                                            <span>
                                                {{ number_format($tp['productInfo']->gia * $tp['quantity'], 0) }}₫</span>
                                        @else
                                            <span>
                                                {{ number_format($tp['productInfo']->gia * $tp['quantity'] - $tp['productInfo']->gia * $tp['quantity'] * $tp['productInfo']->phan_tram_giam, 0) }}<del>
                                                    {{ number_format($tp['productInfo']->gia * $tp['quantity'], 0) }}₫
                                                </del></span>
                                        @endif

                                    </div>
                                    <hr style="width: 65%; visibility: hidden;">
                                </div>
                                <div class="choose-color">
                                    <div class="choosenumber">
                                        @if ($tp['quantity'] == 1)
                                            <div class="minus" style="pointer-events: none;" onclick="minusQuantity('{{ $tp['productInfo']->id }}')"><i
                                                    style="background-color: rgb(204, 204, 204);"></i></div>
                                        @else
                                            <div class="minus" style="pointer-events: all;"
                                                onclick="minusQuantity('{{ $tp['productInfo']->id }}')"><i
                                                    style="background-color: rgb(40, 138, 214);"></i></div>
                                        @endif
                                        <input type="text" class="number" style="border: none; pointer-events: all;"
                                            id="{{ $tp['productInfo']->id }}" value="{{ $tp['quantity'] }}" readonly>
                                        <div class="plus" style="pointer-events: all;"
                                            onclick="plusQuantity('{{ $tp['productInfo']->id }}')"><i
                                                style="background-color: rgb(40, 138, 214);"></i><i
                                                style="background-color: rgb(40, 138, 214);"></i></div>
                                        <input type="hidden">
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <div class="total-provisional">
                        <span class="total-product-quantity">
                            <?php
                            $soLuong = 0;
                            $tamTinh = 0;
                            foreach (Session('Cart')->products as $tp) {
                                $soLuong += $tp['quantity'];
                                $tamTinh += $tp['quantity'] * ($tp['productInfo']->gia - $tp['productInfo']->gia * $tp['productInfo']->phan_tram_giam);
                            }
                            ?>
                            <span class="total-label">Tạm tính </span>({{ $soLuong }} sản phẩm):
                        </span>
                        <span class="temp-total-money">{{ number_format($tamTinh, 0) }}₫</span>
                    </div>

                    <div class="finaltotal">
                        <div class="area-total">
                            <div class="discountcode">
                                <div class="usecode coupon-code singlebox" id="myDIV" onclick="maKhuyenMai()">
                                    <div class="usecode-icon"><i class="fas fa-receipt"></i></div><span
                                        class="usecode-title">Dùng
                                        mã
                                        giảm giá</span>
                                </div>
                                <div class="clr"></div>
                                <div class="applycode">
                                    <div class="applycode-text-input"><input maxlength="20" placeholder="Nhập mã giảm giá" id="maGiamGia" value='{{ Session('Cart')->voucher }}'>
                                    </div>
                                    <div class="applycode-button"><button type="button" onclick="checkVoucher()">
                                            Áp dụng </button></div>
                                </div>
                                <div class="line-break"></div>
                            </div>
                            <div class="total-price"><strong>Tổng
                                    tiền:</strong><strong>{{ number_format($tamTinh, 0) }}₫</strong></div>
                            <a href='/confirm'><button type="button" class="submitorder"><b
                                        style="text-transform:uppercase">Đặt
                                        hàng</b></button></a>
                        </div>
                    </div>
                </div>
            </section>
            {{-- <div class="info-customer">
                        <h4>Thông tin khách hàng</h4>
                        <form class="form-customer">
                            <div class="sex-customer">
                                <input type="radio" checked="checked" value="Nam" name="radio">
                                <p style="display:inline-block;padding-right:10px">Anh</p>
                                <input type="radio" value="Nữ" name="radio"> Chị
                            </div>
                            <div class="name-phone-address-customer">
                                <div class="name">
                                    <input placeholder="Họ và Tên" maxlength="50">
                                </div>
                                <div class="name phone">
                                    <input placeholder="Số điện thoại" type="tel" maxlength="10">
                                </div>
                                <div class="name address">
                                    <input placeholder="Địa chỉ" maxlength="100">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="choosegetgoods">
                        <h4>Chọn cách thức nhận hàng</h4>
                        <div class="click-choose">
                            <div data-tab="tab-1" class="choose-link current"><i class="cartnew-choose"></i>&nbsp;
                                <span>Giao
                                    tận
                                    nơi</span>
                            </div>
                            <div data-tab="tab-2" class="choose-link"><i class="cartnew-choose"></i>&nbsp; <span>Nhận tại
                                    siêu
                                    thị</span></div>
                        </div>
                        <div id="tab-1" class="choose-content current">
                            <div class="deli-address">
                                <form class="active">
                                    <div class="cntry-district">
                                        <div class="btn-click country"><button type="button" class=""
                                                data-button-id="button-city-1">Hồ Chí
                                                Minh</button>
                                            <!--fragment#12b70475084#head--><input fragment="12b70475084" type="hidden"
                                                class="ddlist" value="3">
                                            <div class="select" fragment="12b70475084" style="display: none;"
                                                id="button-city-1">
                                                <div class="boxsearch"><input
                                                        placeholder="Nhập tỉnh, thành để tìm nhanh"><a
                                                        href="javascript:;"><i class="cartnew-search"></i></a></div>
                                                <div class="listName" style="position: relative;">
                                                    <aside>
                                                        <span class="active">Hồ Chí Minh</span>
                                                    </aside>
                                                    <aside>
                                                        <span class="">Hà Nội</span>
                                                    </aside>
                                                    <div class="resize-triggers">
                                                        <div class="expand-trigger">
                                                            <div style="width: 1px; height: 1px;"></div>
                                                        </div>
                                                        <div class="contract-trigger"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-click district"><button type="button" class=""
                                                data-button-id="button-district-1">Chọn Quận / Huyện</button>
                                            <!--fragment#cd1758f258#head--><input fragment="cd1758f258" type="hidden"
                                                class="ddlist" value="33">
                                            <div class="select" fragment="cd1758f258" style="display: none;"
                                                id="button-district-1">
                                                <div class="boxsearch"><input
                                                        placeholder="Nhập quận, huyện để tìm nhanh"><a
                                                        href="javascript:;"><i class="cartnew-search"></i></a></div>
                                                <div class="listName" style="position: relative;">
                                                    <aside><span class="">TP. Thủ Đức (Gồm Q2, Q9,
                                                            Q.TĐ)</span><span class="">Quận 1</span><span
                                                            class="">Quận
                                                            3</span><span class="">Quận 4</span><span
                                                            class="">Quận 5</span><span
                                                            class="">Quận
                                                            6</span><span class="">Quận 7</span><span
                                                            class="">Quận 8</span><span
                                                            class="">Quận
                                                            10</span><span class="">Quận 11</span><span
                                                            class="">Quận 12</span></aside>
                                                    <aside><span class="">Quận Bình Tân</span><span
                                                            class="">Quận Bình Thạnh</span><span
                                                            class="">Quận Gò Vấp</span><span
                                                            class="">Quận Phú Nhuận</span><span
                                                            class="">Quận Tân Bình</span><span
                                                            class="">Quận Tân Phú</span><span
                                                            class="">Huyện Bình Chánh</span><span
                                                            class="">Huyện Cần Giờ</span><span
                                                            class="">Huyện Củ Chi</span><span
                                                            class="">Huyện Hóc Môn</span><span
                                                            class="">Huyện Nhà Bè</span></aside>
                                                    <div class="resize-triggers">
                                                        <div class="expand-trigger">
                                                            <div style="width: 1px; height: 1px;"></div>
                                                        </div>
                                                        <div class="contract-trigger"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wards"><button type="button" class=""
                                            data-button-id="button-ward-1">Chọn Phường /
                                            Xã</button>
                                        <!--fragment#ab03dc3b42#head--><input fragment="ab03dc3b42" type="hidden"
                                            class="ddlist" value="0">
                                        <div class="select" fragment="ab03dc3b42" style="display: none;"
                                            id="button-ward-1">
                                            <div class="boxsearch"><input placeholder="Nhập phường, xã để tìm nhanh"><a
                                                    href="javascript:;"><i class="cartnew-search"></i></a></div>
                                            <div class="listName" style="position: relative;">
                                                <aside><span class="">Phường Hiệp Tân</span><span
                                                        class="">Phường Hoà Thạnh</span><span
                                                        class="">Phường Phú Thạnh</span><span
                                                        class="">Phường Phú Thọ Hoà</span><span
                                                        class="">Phường Phú Trung</span><span
                                                        class="">Phường Sơn Kỳ</span></aside>
                                                <aside><span class="">Phường Tân Quý</span><span
                                                        class="">Phường Tân Sơn Nhì</span><span
                                                        class="">Phường Tân Thành</span><span
                                                        class="">Phường Tân Thới Hoà</span><span
                                                        class="">Phường Tây Thạnh</span></aside>
                                                <div class="resize-triggers">
                                                    <div class="expand-trigger">
                                                        <div style="width: 1px; height: 1px;"></div>
                                                    </div>
                                                    <div class="contract-trigger"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filladdress"><input placeholder="Số nhà, tên đường" maxlength="255"
                                            class="untouched pristine required">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="tab-2" class="choose-content">
                            <aside>
                                <div class="deli-address">
                                    <div class="cntry-district">
                                        <div class="btn-click country"><button type="button" class=""
                                                data-button-id="button-city-2">Hồ Chí
                                                Minh</button>
                                            <!--fragment#5d83e31196#head--><input fragment="5d83e31196" type="hidden"
                                                class="ddlist" value="3">
                                            <div class="select" fragment="5d83e31196" style="display: none;"
                                                id="button-city-2">
                                                <div class="boxsearch"><input
                                                        placeholder="Nhập tỉnh, thành để tìm nhanh"><a
                                                        href="javascript:;"><i class="cartnew-search"></i></a></div>
                                                <div class="listName" style="position: relative;">
                                                    <aside><span class="active">Hồ Chí Minh</span></aside>
                                                    <aside><span class="">Hà Nội</span></aside>
                                                    <div class="resize-triggers">
                                                        <div class="expand-trigger">
                                                            <div style="width: 1px; height: 1px;"></div>
                                                        </div>
                                                        <div class="contract-trigger"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-click district"><button type="button" class=""
                                                data-button-id="button-district-2">Chọn Quận /
                                                Huyện</button>
                                            <input fragment="20191335fd" type="hidden" class="ddlist" value="0">
                                            <div class="select" fragment="20191335fd" style="display: none;"
                                                id="button-district-2">
                                                <div class="boxsearch"><input
                                                        placeholder="Nhập quận, huyện để tìm nhanh"><a
                                                        href="javascript:;"><i class="cartnew-search"></i></a></div>
                                                <div class="listName" style="position: relative;">
                                                    <aside><span class="">TP. Thủ Đức (Gồm Q2, Q9,
                                                            Q.TĐ)</span><span class="">Quận 1</span><span
                                                            class="">Quận
                                                            3</span><span class="">Quận 4</span><span
                                                            class="">Quận 5</span><span
                                                            class="">Quận
                                                            6</span><span class="">Quận 7</span><span
                                                            class="">Quận 8</span><span
                                                            class="">Quận
                                                            10</span><span class="">Quận 11</span><span
                                                            class="">Quận 12</span></aside>
                                                    <aside><span class="">Quận Bình Tân</span><span
                                                            class="">Quận Bình Thạnh</span><span
                                                            class="">Quận Gò Vấp</span><span
                                                            class="">Quận Phú Nhuận</span><span
                                                            class="">Quận Tân Bình</span><span
                                                            class="">Quận Tân Phú</span><span
                                                            class="">Huyện Bình Chánh</span><span
                                                            class="">Huyện Cần Giờ</span><span
                                                            class="">Huyện Củ Chi</span><span
                                                            class="">Huyện Hóc Môn</span><span
                                                            class="">Huyện Nhà Bè</span></aside>
                                                    <div class="resize-triggers">
                                                        <div class="expand-trigger">
                                                            <div style="width: 1px; height: 1px;"></div>
                                                        </div>
                                                        <div class="contract-trigger"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="choose-address">
                                    <ul id="listAvailableStores" class="" style="">
                                        <li data-storeid="7017" class="active"><i
                                                class="cartnew-choose"></i><span> Số
                                                55A Trần Quang Khải, P. Tân Định, Q. 1, Tp. Hồ Chí Minh <small
                                                    class="cohang"> Còn hàng </small></span></li>
                                        <li data-storeid="7025" class=""><i
                                                class="cartnew-choose"></i><span>
                                                105
                                                Tân Kỳ Tân Quý, P. Tân Sơn Nhì, Q. Tân Phú, TP. Hồ Chí Minh <small
                                                    class="cohang">
                                                    Còn hàng </small></span>
                                        </li>
                                    </ul>
                                    <svg viewBox="0 0 455 80" version="1.1" preserveAspectRatio="xMidYMid meet"
                                        style="display: none;">
                                        <rect clip-path="url(#fyaf4j4it59)" x="0" y="0" width="455" height="80"
                                            style="fill: url(&quot;#wacrqxn4mo&quot;);"></rect>
                                        <defs>
                                            <clipPath id="fyaf4j4it59">
                                                <rect x="48" y="8" rx="3" ry="3" width="88" height="6"></rect>
                                                <rect x="48" y="26" rx="3" ry="3" width="52" height="6"></rect>
                                                <rect x="0" y="56" rx="3" ry="3" width="410" height="6"></rect>
                                                <rect x="0" y="72" rx="3" ry="3" width="380" height="6"></rect>
                                                <rect x="0" y="88" rx="3" ry="3" width="178" height="6"></rect>
                                                <circle cx="20" cy="20" r="20"></circle>
                                            </clipPath>
                                            <linearGradient id="wacrqxn4mo">
                                                <stop offset="0%" stop-color="#cdcccb" stop-opacity="1">
                                                    <animate attributeName="offset" values="-2; 1" dur="2s"
                                                        repeatCount="indefinite"></animate>
                                                </stop>
                                                <stop offset="50%" stop-color="#ecebeb" stop-opacity="1">
                                                    <animate attributeName="offset" values="-1.5; 1.5" dur="2s"
                                                        repeatCount="indefinite"></animate>
                                                </stop>
                                                <stop offset="100%" stop-color="#cdcccb" stop-opacity="1">
                                                    <animate attributeName="offset" values="-1; 2" dur="2s"
                                                        repeatCount="indefinite"></animate>
                                                </stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="latch-order" fragment="bd3b85a0bc" style=""></div><span
                                    class="latch-order" fragment="bd3b85a0bc" style="display: none;"><span><input
                                            type="hidden" value="false"></span>
                                    <div class="box-order error-order" style="display: none;">
                                        <ul></ul><button type="button" class="del-product">Xóa 0 sản phẩm khỏi giỏ
                                            hàng</button>
                                    </div>
                                    <div class="box-order error-order" style="display: none;">
                                        <ul></ul><button type="button" class="del-product">Xóa 0 sản phẩm khỏi giỏ
                                            hàng</button>
                                    </div>
                                </span>
                            </aside>
                        </div>
                    </div>
                    <div class="note">
                        <h4>Ghi chú</h4>
                        <textarea placeholder="Ghi chú..." /></textarea>
                    </div> --}}
        </div>
        <div class="loadingcover" style="display: none;" id="loading">
            <p class="csslder">
                <span class="csswrap">
                    <span class="cssdot"></span>
                    <span class="cssdot"></span>
                    <span class="cssdot"></span>
                </span>
            </p>
        </div>
    @endif
    <script src="{{ asset('assets/user/js/address-cart.js') }}"></script>
    <script>
        const loading = document.getElementsByClassName("loadingcover");

        function fadeOutEffect() {
            var fadeTarget = document.getElementById("loading");
            var fadeEffect = setInterval(function() {
                if (!fadeTarget.style.opacity) {
                    fadeTarget.style.opacity = 1;
                }
                if (fadeTarget.style.opacity > 0) {
                    fadeTarget.style.opacity -= 0.1;
                } else {
                    clearInterval(fadeEffect);
                    loading[0].style = "display:none";
                }
            }, 50);
        }

        function deleteItemCart($idChiTiet) {
            $.ajax({
                type: 'get',
                url: '{{ URL::to('deleteItemCart') }}',
                data: {
                    'idChiTiet': $idChiTiet,
                },
                success: function(data) {
                    // $('.nav-bar-cart').html(data);
                    $('.giohang').html(data);
                },
                error: function(request, status, error) {
                    alertify.error('Xóa sản phẩm khỏi giỏ không thành công');
                }
            });
            loading[0].style = "display:block";
            setTimeout(fadeOutEffect, 500);
        }

        function minusQuantity($idChiTiet) {
            var el = document.getElementById($idChiTiet);
            el.value--;
            $.ajax({
                type: 'get',
                url: '{{ URL::to('minusItemCart') }}',
                data: {
                    'idChiTiet': $idChiTiet,
                },
                success: function(data) {
                    $('.giohang').html(data);
                },
            });
            loading[0].style = "display:block";
            setTimeout(fadeOutEffect, 500);
        }

        function plusQuantity($idChiTiet) {
            var el = document.getElementById($idChiTiet);
            el.value++;
            $.ajax({
                type: 'get',
                url: '{{ URL::to('plusItemCart') }}',
                data: {
                    'idChiTiet': $idChiTiet,
                },
                success: function(data) {
                    $('.giohang').html(data);
                },
            });
            loading[0].style = "display:block";
            setTimeout(fadeOutEffect, 500);
        }

        function checkVoucher(){
            var voucher = document.getElementById('maGiamGia');
            $.ajax({
                type: 'get',
                url: '{{ URL::to('checkVoucher') }}',
                data: {
                    'code': voucher.value,
                },
                success: function(data) {
                    $('.giohang').html(data);
                },
            });
            loading[0].style = "display:block";
            setTimeout(fadeOutEffect, 500);
        }
    </script>
@endsection
