@extends('user.layouts.app-other')
@section('content')
    <section class="cate">
        <div class="container">
            <div class="left">
                <a href="/ordermanagement" class="active">Danh sách đơn hàng</a>
                <a href="/accountinformation" class="">Thông tin cá nhân</a>
            </div>
            <div class="right">
                <div class="user" data-customer="1068820208">
                    Chào anh
                    <b>Võ Trần Minh Trí</b> - <b>0918013807</b>
                    <a href="/signin" class="logout-h">Thoát tài khoản</a>
                </div>
                <div class="detail-order " id="detail_order">

                    <div class="title">
                        <span>
                            Trạng thái:
                            <i class="success">Đã nhận hàng</i>
                        </span>
                        <p>Chi tiết đơn hàng #00889SO22010135392</p>
                        <small>Mua tại T&TMobile.com , 136 Nguyễn Thái Học, P.Phạm Ngũ Lão, Q.1, TP. HCM</small>
                    </div>


                    <div class="item">
                        <a href="/productdetail" class="fl"><img
                                src="{{ asset('assets/user/images/oppo-reno6-z-5g-aurora-1-200x200.jpg') }}"></a>
                        <div class="fl" data-apply="">
                            <a href="/productdetail">Điện thoại OPPO Reno6 Z 5G - Bạc</a>
                            {{-- <p>Giảm 10%</p>
                            <p>Giảm 25%</p> --}}
                            <i>Màu: <b>Bạc</b></i>
                            <i>Số lượng: <b>1</b></i>
                        </div>
                        <div class="fr">
                            <b>9.490.000₫</b>
                            {{-- <em>990.000₫</em> --}}
                        </div>
                    </div>
                    <div class="sum">
                        <span><label>Giá tạm tính:</label> <i>9.490.000₫</i></span>
                        <span><strong>Tổng tiền:</strong> <b>9.490.000₫</b></span>
                        <span><strong class="paid">Đã thanh toán:</strong><b>9.490.000₫</b></span>
                    </div>
                    <div class="info type0" data-recievetype="0">
                        <b>Địa chỉ và thông tin người nhận hàng:</b>

                        <span class="receiver">Võ Trần Minh Trí - 0918013807</span>

                        <span>Siêu thị nhận hàng: 136 Nguyễn Thái Học, P.Phạm Ngũ Lão, Q.1, TP. HCM</span>

                        <span>Thời gian nhận hàng: Trước 14:53 09/01/2022</span>
                    </div>

                    <div class="pay">
                        <div class="box_payment">

                            <a href="/ordermanagement" class="back">Quay lại danh sách đơn hàng</a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
