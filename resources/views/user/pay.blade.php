@extends('user.layouts.app-other')
@section('content')
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
                                <li class="normal-payment"><a><i class="cartnew-choose-dot"></i>
                                        <div class="text-payment"><span><i class="choose-payment-default"></i><span>Thanh
                                                    toán tiền mặt khi nhận hàng</span></span></div>
                                    </a>
                                    <!---->
                                </li>
                                <li class="active"><a><i class="cartnew-choose-dot"></i>
                                        <div class="text-payment"><span><i class="choose-payment-bank"></i><span>Chuyển
                                                    khoản ngân hàng</span></span></div>
                                    </a>
                                    <!---->
                                </li>
                                <li class=""><a><i class="cartnew-choose-dot"></i>
                                        <div class="text-payment"><span><i class="choose-payment-atm"></i><span>Qua thẻ
                                                    ATM (có Internet Banking)</span></span></div>
                                    </a>
                                    <!---->
                                </li>
                                <li class="qrcode"><a><i class="cartnew-choose-dot"></i>
                                        <div class="text-payment"><span><i class="choose-payment-QR-Code"></i><span>Qua QR
                                                    Code</span></span></div>
                                    </a>
                                    <!---->
                                </li>
                                <li class="momo"><a><i class="cartnew-choose-dot"></i>
                                        <div class="text-payment"><span><i class="choose-payment-MOMO"></i><span>Qua Ví
                                                    điện tử MoMo</span></span></div>
                                    </a>
                                    <!---->
                                </li>
                                <li class=""><a><i class="cartnew-choose-dot"></i>
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
                                </li>
                            </ul><button class="confirm-payment-button"> <b>Xác nhận</b> </button>
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
        </section>
    </div>
    <script src="{{ asset('assets/user/js/pay.js') }}"></script>
@endsection
