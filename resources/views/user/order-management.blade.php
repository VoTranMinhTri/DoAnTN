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
                <div class="list">
                    <b>Đơn hàng đã mua gần đây</b>
                    <table cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <th>Mã đơn hàng</th>
                                <th>Sản phẩm</th>
                                <th>Giá</th>
                                <th>Ngày đặt mua</th>
                                <th>Trạng thái</th>
                            </tr>


                            <tr class="" data-id="00889SH22010135391  ">
                                <td>
                                    <a href="/orderdetail"
                                        data-id="00889SH22010135391  " class="order_item">#00889SH22010135391 </a>
                                </td>

                                <td>
                                    <a href="#"
                                        data-id="00889SH22010135391  " class="order_item"><img
                                            src="{{ asset('assets/user/images/oppo-reno6-z-5g-aurora-1-200x200.jpg') }}"></a>
                                    <div>
                                        <a href="#"
                                            data-id="00889SH22010135391  " class="order_item">Điện thoại OPPO Reno6 Z 5G - Bạc</a>



                                        <div class="link">
                                            <a href="/orderdetail"
                                                data-id="00889SH22010135391  " class="order_item">Xem chi tiết</a>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <b>9.490.000₫</b>
                                </td>

                                <td><span>09/01/2022</span></td>

                                <td>
                                    <i class="success" data-status="1">Đã nhận hàng</i>
                                </td>
                            </tr>
                            <tr class="" data-id="00889SH22010135391  ">
                                <td>
                                    <a href="/orderdetail"
                                        data-id="00889SH22010135391  " class="order_item">#00889SH22010135391 </a>
                                </td>

                                <td>
                                    <a href="#"
                                        data-id="00889SH22010135391  " class="order_item"><img
                                            src="{{ asset('assets/user/images/oppo-reno6-z-5g-aurora-1-200x200.jpg') }}"></a>
                                    <div>
                                        <a href="#"
                                            data-id="00889SH22010135391  " class="order_item">Điện thoại OPPO Reno6 Z 5G - Bạc</a>



                                        <div class="link">
                                            <a href="/orderdetail"
                                                data-id="00889SH22010135391  " class="order_item">Xem chi tiết</a>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <b>9.490.000₫</b>
                                </td>

                                <td><span>09/01/2022</span></td>

                                <td>
                                    <i class="success" data-status="1">Đã nhận hàng</i>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
