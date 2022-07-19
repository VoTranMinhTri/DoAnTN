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
                                                {{ number_format($tp['productInfo']->gia * $tp['quantity'], 0, ',', '.') }}₫</span>
                                        @else
                                            <span>
                                                {{ number_format($tp['productInfo']->gia * $tp['quantity'] - $tp['productInfo']->gia * $tp['quantity'] * $tp['productInfo']->phan_tram_giam, 0, ',', '.') }}₫<del>
                                                    {{ number_format($tp['productInfo']->gia * $tp['quantity'], 0, ',', '.') }}₫
                                                </del>
                                                <p style="display: inline;color: #666;">Giảm giá {{ $tp['productInfo']->phan_tram_giam * 100 }}%</p>
                                            </span>
                                        @endif

                                    </div>
                                    <hr style="width: 65%; visibility: hidden;">
                                </div>
                                <div class="choose-color">
                                    <div class="choosenumber">
                                        @if ($tp['quantity'] == 1)
                                            <div class="minus" style="pointer-events: none;"
                                                onclick="minusQuantity('{{ $tp['productInfo']->id }}')"><i
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
                        <span class="temp-total-money">{{ number_format($tamTinh, 0, ',', '.') }}₫</span>
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
                                    <div class="applycode-text-input"><input maxlength="20" placeholder="Nhập mã giảm giá"
                                            id="maGiamGia" value='{{ Session('Cart')->voucher }}'>
                                    </div>
                                    <div class="applycode-button"><button type="button" onclick="checkVoucher()">
                                            Áp dụng </button></div>
                                </div>
                                <div class="line-break"></div>
                            </div>
                            <div class="total-price"><strong>Tổng
                                    tiền:</strong><strong>{{ number_format($tamTinh, 0, ',', '.') }}₫</strong></div>
                            <a href='/confirm'><button type="button" class="submitorder"><b
                                        style="text-transform:uppercase">Đặt
                                        hàng</b></button></a>
                        </div>
                    </div>
                </div>
            </section>
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

        function checkVoucher() {
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
