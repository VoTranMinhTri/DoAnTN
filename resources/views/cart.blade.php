@extends('layouts.app')
@section('content')
    <section class="wrapper cart">
        <div>
            <ul class="list-cart">
                <li class="product-item">
                    <div class="img-product">
                        <a href="#detail">
                            <img src="{{ asset('assets/images/xiao-mi-10.jpg') }}" />
                        </a>
                        <button><i class="fas fa-trash"></i> Xóa</button>
                    </div>
                    <div class="info-product">
                        <div class="name-price">
                            <div class="name">
                                <a href="#" class="product-item-name"> Điện thoại Xiaomi Redmi Note 10S 8GB </a>
                            </div>
                            <span> 6.400.000₫<del> 6.490.000₫ </del></span>
                        </div>
                        <hr style="width: 65%; visibility: hidden;">
                    </div>
                </li>
                <li class="product-item">
                    <div class="img-product">
                        <a href="#detail">
                            <img src="{{ asset('assets/images/xiao-mi-10.jpg') }}" />
                        </a>
                        <button><i class="fas fa-trash"></i> Xóa</button>
                    </div>
                    <div class="info-product">
                        <div class="name-price">
                            <div class="name">
                                <a href="#" class="product-item-name"> Điện thoại Xiaomi Redmi Note 10S 8GB </a>
                            </div>
                            <span> 6.490.000₫ </span>
                        </div>
                        <hr style="width: 65%; visibility: hidden;">
                    </div>
                </li>
            </ul>
            <div class="total-provisional">
                <span data-tmp-total-product-quantity="1" class="total-product-quantity">
                    <span class="total-label">Tạm tính </span>(2 sản phẩm):
                </span>
                <span data-tmp-temp-total-money="12890000" class="temp-total-money">12.890.000₫</span>
            </div>
            <div class="info-customer">
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
            <div class="note">
                <h4>Ghi chú</h4>
                <textarea placeholder="Ghi chú..." /></textarea>
            </div>
            <div class="finaltotal">
                <div class="area-total">
                    <div class="discountcode">
                        <div class="usecode coupon-code singlebox" id="myDIV">
                            <div class="usecode-icon"><i class="fas fa-receipt"></i></div><span
                                class="usecode-title">Dùng mã giảm giá</span>
                        </div>
                        <div class="clr"></div>
                        <div class="applycode">
                            <div class="applycode-text-input"><input maxlength="20" placeholder="Nhập mã giảm giá"></div>
                            <div class="applycode-button"><button type="button" disabled="disabled" class="disabled">
                                    Áp dụng </button></div>
                            <!---->
                        </div>
                        <div class="line-break"></div>
                    </div>
                    <div data-tmp-total-money-in-all="12890000" class="total-price"><strong>Tổng tiền:</strong><strong>12.890.000₫</strong></div>
                    <button type="button" class="submitorder"><b style="text-transform:uppercase">Đặt hàng</b></button>
                </div>
            </div>


        </div>
        </div>
    </section>
    <script>
        var button = document.getElementById("myDIV");
        button.onclick = function() {
            if (button.className == "usecode coupon-code singlebox") {
                var current1 = document.getElementsByClassName("coupon-code");
                var current2 = document.getElementsByClassName("applycode");
                current1[0].className += " active";
                current2[0].className += " active";
            } else {
                var current1 = document.getElementsByClassName("coupon-code");
                var current2 = document.getElementsByClassName("applycode");
                current1[0].className = current1[0].className.replace(" active", "");
                current2[0].className = current2[0].className.replace(" active", "");
            }
        };
    </script>
@endsection
