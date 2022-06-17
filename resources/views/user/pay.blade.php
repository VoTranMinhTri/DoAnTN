{{-- @extends('user.layouts.app-other')
@section('content') --}}
<div id="app">
    <section>
        <div class='middleCart'>
            <div class="alertsuccess-new"><strong style="font-size: 20px;color: black;">Chọn hình thức thanh
                    toán</strong></div>
            <div class="ordercontent">
                <div class="payment-method-new">
                    <!---->
                    <div>
                        <ul class="formality-pay-new">
                            <li class="normal-payment active" data-method="1" onclick="buttonNormal()"><a><i
                                        class="cartnew-choose-dot"></i>
                                    <div class="text-payment"><span><i class="choose-payment-default"></i><span>Thanh
                                                toán tiền mặt khi nhận hàng</span></span></div>
                                </a>
                                <!---->
                            </li>
                            <li class="" data-method="2" onclick="buttonPayPal()"><a><i
                                        class="cartnew-choose-dot"></i>
                                    <div class="text-payment"><span><i class="fab fa-cc-paypal"
                                                style="margin-right: 5px;"></i><span>Qua PayPal</span></span></div>
                                </a>
                                <!---->
                            </li>
                            <li class="qrcode" data-method="3" onclick="buttonVNPay()"><a><i
                                        class="cartnew-choose-dot"></i>
                                    <div class="text-payment"><span><i class="choose-payment-QR-Code"></i><span>Qua VNPay</span></span></div>
                                </a>
                                <!---->
                            </li>
                            <li class="momo" data-method="4" onclick="buttonMomo()"><a><i class="cartnew-choose-dot"></i>
                                    <div class="text-payment"><span><i class="choose-payment-MOMO"></i><span>Qua Ví
                                                điện tử MoMo</span></span></div>
                                </a>
                                <!---->
                            </li>
                            {{-- <li class=""><a><i class="cartnew-choose-dot"></i>
                                    <div class="text-payment"><span><i class="choose-payment-VMJ"></i><span>Qua thẻ
                                                quốc tế Visa, Master, JCB</span>
                                            <div class="listcard"><i class="cartnew-visa"></i><i
                                                    class="cartnew-mastercard"></i><i class="cartnew-jcb"></i></div>
                                        </span></div>
                                </a>
                                <!---->
                            </li>
                            <li class="moca"><a><i class="cartnew-choose-dot"></i>
                                    <div class="text-payment"><span><i class="choose-payment-Moca-Grab"></i><span>Qua
                                                Ví điện tử Moca by Grab</span></span></div>
                                </a>
                                <!---->
                            </li>
                            <li class="normal-payment"><a><i class="cartnew-choose-dot"></i>
                                    <div class="text-payment"><span><i
                                                class="choose-payment-use-card-when-receive"></i><span>Nhân viên mang
                                                máy cà thẻ khi nhận hàng</span></span></div>
                                </a>
                                <!---->
                            </li> --}}
                        </ul>
                        <button class="confirm-payment-button" onclick="thanhToan()" id="thanhtoan"><b>Thanh toán khi nhận hàng</b>
                        </button>
                        {{-- Thanh toán VNPay --}}
                        <form action="{{ route('vnpay_payment') }}" method="post">
                            @csrf
                            <button class="confirm-payment-button" id="vnpay-button" style="display: none;"
                                onclick="checkVNPay()" type="button"><b>Thanh toán VNPay</b>
                            </button>
                            <button style="display: none" name="redirect" id="vnpay" type="submit"></button>
                        </form>

                        {{-- Thanh toán Momo --}}
                        <form action="{{ route('momo_payment') }}" method="post">
                            @csrf
                            <button class="confirm-payment-button" id="momo-button" style="display: none;"
                                onclick="checkMomo()" type="button"><b>Thanh toán Momo</b>
                            </button>
                            <button style="display: none" id="momo" type="submit"></button>
                        </form>

                        {{-- Thanh toán PayPal --}}
                        <?php
                        $phanTramGiamVoucher = 0;
                        if (Session('Cart')->voucher != null) {
                            $phanTramGiamVoucher = Session('Cart')->voucher['phan_tram_giam'];
                        }
                        $tongTien = 0;
                        foreach (Session('Cart')->products as $tp) {
                            $tongTien += $tp['quantity'] * ($tp['productInfo']->gia - $tp['productInfo']->gia * ($tp['productInfo']->phan_tram_giam + $phanTramGiamVoucher));
                        }
                        $vnd_to_usd = $tongTien / 23000;
                        ?>

                        <div id="paypal-button" style="display: none;"></div>
                        <input type='hidden' id='vnd_to_usd' value='{{ round($vnd_to_usd, 2) }}'>
                    </div>
                    <div name="refund-popup" class="refund-popup"><span></span><a href="javascript:void(0)"
                            class="refund-policy">Xem chính sách hoàn tiền online</a>
                        <div class="popup-hoantien">
                            <div class="bg-hoantien"></div>
                            <div class="hoantienonline">
                                <div class="row-ht"><strong>Chính sách hoàn tiền khi thanh toán
                                        Online</strong><a href="javascript:;">Đóng</a></div>
                                <p> Trong trường hợp quý khách hàng đã mua hàng &amp; thanh toán trực tuyến thành công
                                    nhưng dư tiền, hoặc trả sản phẩm, T&T Mobile sẽ hoàn tiền vào thẻ quý khách đã
                                    dùng để thanh toán, theo thời hạn như sau: </p>
                                <p> - Đối với thẻ ATM: Thời gian khách hàng nhận được tiền hoàn từ 7-10 ngày (trừ thứ 7,
                                    chủ nhật và ngày lễ). Nếu qua thời gian trên không nhận được tiền, T&T Mobile
                                    sẽ hỗ trợ liên hệ ngân hàng của khách hàng để giải quyết. </p>
                                <p> - Đối với thẻ Visa/Master card/JCB: Thời gian Khách hàng nhận được tiền hoàn 7-15
                                    ngày. Nếu qua thời gian trên khách hàng không nhận được tiền, khách hàng liên hệ
                                    ngân hàng để giải quyết. </p>
                                <p> - Đối với thanh toán bằng hình thức Ví MoMo: Thời gian Khách hàng nhận được tiền
                                    hoàn 3 - 5 ngày. Tiền được hoàn sẽ cập nhật vào tài khoản Ví MoMo. Nếu qua thời gian
                                    trên khách hàng không nhận được tiền, khách hàng liên hệ T&T Mobile để được
                                    giải quyết. </p>
                            </div>
                        </div>
                    </div>
                    <!---->
                </div>
                <!---->
            </div>
        </div>
        {{-- <div id="paypal-button"></div> --}}
        <div class="loadingcover" style="display: none;" id="loading">
            <p class="csslder">
                <span class="csswrap">
                    <span class="cssdot"></span>
                    <span class="cssdot"></span>
                    <span class="cssdot"></span>
                </span>
            </p>
        </div>
    </section>
</div>

<script>
    var usd = document.getElementById('vnd_to_usd').value;
    paypal.Buttons({
        // Configure environment
        env: 'sandbox',
        client: {
            sandbox: 'AR9W53CxF61QShw6HNHEWQan3vw7tqxm-q6eMXcDu6X_DR_Xs_Q7lQDJY8GAKdLWtxAeRloiOrDcp3FI',
            production: 'demo_production_client_id'
        },
        // Customize button (optional)
        locale: 'en_US',
        style: {
            color: 'blue',
            shape: 'rect',
            tagline: 'false',
            label: 'paypal'
        },
        onClick: function(data, actions) {
            return fetch('/kiemTraSoLuong', {
                method: 'get',
                headers: {
                    'content-type': 'application/json',
                }
            }).then(function(res) {
                return res.json();
            }).then(function(data) {
                // If there is a validation error, reject, otherwise resolve
                if (data != 'ok') {
                    alertify.error(data);
                    return actions.reject();
                } else {
                    return actions.resolve();
                }
            });
        },

        // Enable Pay Now checkout flow (optional)
        commit: true,
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: `${usd}`
                        // value: '0.01'
                    }
                }]
            });
        },

        onApprove: function(data, actions) {
            return actions.order.capture().then(function() {
                $.ajax({
                    type: 'get',
                    url: '{{ URL::to('thanhToan') }}',
                    data: {
                        'phuongThuc': 2,
                    },
                    success: function(data) {
                        $('.middleCart').html(data);
                    },
                    error: function(data) {
                        alertify.error(data.responseText);
                    }
                });
            });
        }
    }).render('#paypal-button');
</script>
<script src="{{ asset('assets/user/js/pay.js') }}"></script>
<script>
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

    function thanhToan() {
        var phuongThuc = document.querySelector('.active');
        if (phuongThuc.getAttribute('data-method') == 1) {
            $.ajax({
                type: 'get',
                url: '{{ URL::to('thanhToan') }}',
                data: {
                    'phuongThuc': phuongThuc.getAttribute('data-method'),
                },
                success: function(data) {
                    $('.middleCart').html(data);
                },
                error: function(data) {
                    alertify.error(data.responseText);
                }
            });
            loading[0].style = "display:block";
            setTimeout(fadeOutEffect, 500);
        }
    }

    function checkVNPay() {
        $.ajax({
            type: 'get',
            url: '{{ URL::to('kiemTraSoLuong') }}',
            data: {
                'phuongThuc': 3,
            },
            success: function(data) {
                document.getElementById('vnpay').click();
            },
            error: function(data) {
                alertify.error(data.responseText);
            }
        });
        loading[0].style = "display:block";
        setTimeout(fadeOutEffect, 500);
    }

    function checkMomo() {
        $.ajax({
            type: 'get',
            url: '{{ URL::to('kiemTraSoLuong') }}',
            data: {
                'phuongThuc': 4,
            },
            success: function(data) {
                document.getElementById('momo').click();
            },
            error: function(data) {
                alertify.error(data.responseText);
            }
        });
        loading[0].style = "display:block";
        setTimeout(fadeOutEffect, 500);
    }

    function buttonMomo() {
        var thanhtoan = document.getElementById("thanhtoan");
        var payPal = document.getElementById("paypal-button");
        var vnPay = document.getElementById("vnpay-button");
        var momo = document.getElementById("momo-button");
        thanhtoan.style = "display:none";
        payPal.style = "display:none";
        vnPay.style = "display:none";
        momo.style = "display:block";
    }

    function buttonVNPay() {
        var thanhtoan = document.getElementById("thanhtoan");
        var payPal = document.getElementById("paypal-button");
        var vnPay = document.getElementById("vnpay-button");
        var momo = document.getElementById("momo-button");
        thanhtoan.style = "display:none";
        payPal.style = "display:none";
        vnPay.style = "display:block";
        momo.style = "display:none";
    }

    function buttonPayPal() {
        var thanhtoan = document.getElementById("thanhtoan");
        var payPal = document.getElementById("paypal-button");
        var vnPay = document.getElementById("vnpay-button");
        var momo = document.getElementById("momo-button");
        thanhtoan.style = "display:none";
        payPal.style = "position: relative;display: block; text-align: center;width: 70%;left: 85px;";
        vnPay.style = "display:none";
        momo.style = "display:none";
    }

    function buttonNormal() {
        var thanhtoan = document.getElementById("thanhtoan");
        var payPal = document.getElementById("paypal-button");
        var vnPay = document.getElementById("vnpay-button");
        var momo = document.getElementById("momo-button");
        thanhtoan.style = "display:block";
        payPal.style = "display:none; text-align: center;";
        vnPay.style = "display:none";
        momo.style = "display:none";
    }
</script>
{{-- @endsection --}}
