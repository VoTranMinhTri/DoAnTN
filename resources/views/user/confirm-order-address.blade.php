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
                                </div>
                                <div class="info-product">
                                    <div class="name-price">
                                        <div class="name">
                                            <a href="{{ route('productDetail', ['sanPhamId' => $tp['productInfo']->dien_thoai_id]) }}"
                                                class="product-item-name" style="height: 35px;">
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
                                <div class="choose-color"
                                    style="width: 100%;left: 0;display: block;justify-content: center;text-align: right;">
                                    <p style="color: black;font-size: 14px;">Số lượng: {{ $tp['quantity'] }}</p>
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
                            <div class="total-price"><strong>Tổng
                                    tiền:</strong><strong>{{ number_format($tamTinh, 0) }}₫</strong></div>
                        </div>
                    </div>
                    <div class="info-customer">
                        <h4>Thông tin khách hàng</h4>
                        <form class="form-customer">
                            <div class="sex-customer">
                                @if ($infoUser->gioi_tinh == 1)
                                    <input type="radio" checked="checked" value="1" name="gioitinh">
                                    <p style="display:inline-block;padding-right:10px">Anh</p>
                                    <input type="radio" value="0" name="gioitinh"> Chị
                                @else
                                    <input type="radio" value="1" name="gioitinh">
                                    <p style="display:inline-block;padding-right:10px">Anh</p>
                                    <input type="radio" checked="checked" value="0" name="gioitinh"> Chị
                                @endif
                            </div>
                            <div class="name-phone-address-customer">
                                <div class="name">
                                    <input placeholder="Họ và Tên" maxlength="50" value="{{ $infoUser->ho_ten }}"
                                        name='hoten'>
                                </div>
                                <div class="name phone">
                                    <input placeholder="Số điện thoại" type="tel" maxlength="10"
                                        value="{{ $infoUser->sdt }}" name='sdt'>
                                </div>
                                {{-- <div class="name address">
                                    <input placeholder="Địa chỉ" maxlength="100">
                                </div> --}}
                            </div>
                        </form>
                    </div>
                    <div class="choosegetgoods">
                        <h4 style="color: black;">Chọn cách thức nhận hàng</h4>
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
                                <form class="form-customer">
                                    <div class="name address">
                                        <input placeholder="Địa chỉ nhận hàng" maxlength="100"
                                            value="{{ $infoUser->dia_chi }}" name='diachi'>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="tab-2" class="choose-content">
                            <aside>
                                <div class="choose-address">
                                    <ul id="listAvailableStores" class="" style="">
                                        @foreach ($danhSachCuaHang as $tp)
                                            @if ($tp->trang_thai_san_pham == 'Còn hàng')
                                                <li data-storeid="{{ $tp->id }}" class="active"><i
                                                        class="cartnew-choose"></i><span>Số {{ $tp->dia_chi }}<small
                                                            class="cohang"> Còn hàng </small></span></li>
                                            @else
                                                <li data-storeid="{{ $tp->id }}"><span>Số {{ $tp->dia_chi }}<small
                                                            class="cohang"> Hết hàng </small></span></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                    <div class="note">
                        <h4>Ghi chú</h4>
                        <textarea placeholder="Ghi chú..." id='ghichu'></textarea>
                    </div>
                    <div class="finaltotal">
                        <button type="button" class="submitorder" onclick="xacNhanThongTin()"><b style="text-transform:uppercase">Xác nhận thông tin</b></button>
                    </div>
                </div>
            </section>
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

        function xacNhanThongTin() {
            var gioiTinh = $('input[name="gioitinh"]:checked').val();
            var hoTen = $('input[name="hoten"]').val();
            var sdt = $('input[name="sdt"]').val();
            var ghiChu = document.getElementById("ghichu").value;
            var cachThucNhan = document.querySelector('.choose-link.current');
            var dataID = cachThucNhan.getAttribute('data-tab');
            if (dataID == 'tab-1') {
                var diaChi = $('input[name="diachi"]').val();
                $.ajax({
                    type: 'get',
                    url: '{{ URL::to('xacNhanThongTin') }}',
                    data: {
                        'gioiTinh': gioiTinh,
                        'hoTen': hoTen,
                        'sdt': sdt,
                        'ghiChu': ghiChu,
                        'diaChi': diaChi,
                        'cachThucNhan': dataID
                    },
                    success: function(data) {
                        $('.giohang').html(data);
                    },
                    error: function(data){
                        alertify.error(data.responseText);
                    }
                });
            } else {
                var cuaHang = document.querySelector('.active');
                $.ajax({
                    type: 'get',
                    url: '{{ URL::to('xacNhanThongTin') }}',
                    data: {
                        'gioiTinh': gioiTinh,
                        'hoTen': hoTen,
                        'sdt': sdt,
                        'ghiChu': ghiChu,
                        'cuaHangId': cuaHang.getAttribute('data-storeid'),
                        'cachThucNhan': dataID
                    },
                    success: function(data) {
                        $('.giohang').html(data);
                    },
                    error: function(data){
                        alertify.error(data.responseText);
                    }
                });
            }
        }
    </script>
@endsection
