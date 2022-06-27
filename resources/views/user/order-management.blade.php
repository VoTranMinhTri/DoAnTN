@extends('user.layouts.app-other')
@section('content')
    <section class="cate">
        <div class="container">
            <div class="left">
                <a href="/ordermanagement" class="active">Danh sách đơn hàng</a>
                <a href="/accountinformation" class="">Thông tin cá nhân</a>
                <a href="/review" class="">Đánh giá sản phẩm</a>
                @if(Auth::user()->loai_tai_khoan_id == 5)
                <a href="/thayDoiMatKhau" class="">Đổi mật khẩu</a>
                @endif
            </div>
            <div class="right">
                <div class="user" data-customer="1068820208">
                    Chào
                    @if ($thongTinTaiKhoan->gioi_tinh == 1)
                        anh
                    @else
                        chị
                    @endif
                    <b>{{ $thongTinTaiKhoan->ho_ten }}</b>
                </div>
                <div class="list" style="overflow: auto">
                    <b style="margin-bottom: 10px;">Đơn hàng đã mua gần đây</b>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th style="color:#3e5569;font-weight:bold">Mã đơn hàng</th>
                                    <th style="color:#3e5569;font-weight:bold">Ngày đặt mua</th>
                                    <th style="color:#3e5569;font-weight:bold">Trạng thái thanh toán</th>
                                    <th style="color:#3e5569;font-weight:bold">Trạng thái đơn hàng</th>
                                    <th style="color:#3e5569;font-weight:bold">Giá</th>
                                    <th style="color:#3e5569;font-weight:bold">Giảm</th>
                                    <th style="color:#3e5569;font-weight:bold">Phải trả</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($danhSachDonHang as $tp)
                                    <tr>
                                        <td><a href="{{ route('showDonHangKH', ['maDonHang' => $tp->ma_don_hang]) }}" class="order_item">{{ $tp->ma_don_hang }}</a></td>
                                        <td style="color:#3e5569">{{ $tp->ngay_tao }}</td>
                                        @if ($tp->trang_thai_thanh_toan == 0)
                                            <td style="color:red">Chưa thanh toán</td>
                                        @else
                                            <td style="color:#28b779!important">Đã thanh toán</td>
                                        @endif
                                        @if ($tp->trang_thai_don_hang == 0)
                                            <td style="color:#ffb848!important">Đang xử lý</td>
                                        @elseif($tp->trang_thai_don_hang == 1)
                                            <td style="color:#28b779!important">Đã xử lý</td>
                                        @elseif($tp->trang_thai_don_hang == 2)
                                            <td style="color:#ffb848!important">Đang vận chuyển</td>
                                        @elseif($tp->trang_thai_don_hang == 3)
                                            <td style="color:#28b779!important">Đã nhận hàng</td>
                                        @elseif($tp->trang_thai_don_hang == 4)
                                            <td style="color:red">Đã hủy</td>
                                        @endif
                                        <td style="color:#3e5569">{{ number_format($tp->tong_tien_chua_giam, 0,',','.') }} VNĐ</td>
                                        <td style="color:#3e5569">{{ number_format($tp->giam, 0,',','.') }} VNĐ</td>
                                        <td style="color:#3e5569">{{ number_format($tp->tong_tien, 0,',','.') }} VNĐ</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th style="color:#3e5569;font-weight:bold">Mã đơn hàng</th>
                                    <th style="color:#3e5569;font-weight:bold">Ngày đặt mua</th>
                                    <th style="color:#3e5569;font-weight:bold">Trạng thái thanh toán</th>
                                    <th style="color:#3e5569;font-weight:bold">Trạng thái đơn hàng</th>
                                    <th style="color:#3e5569;font-weight:bold">Giá</th>
                                    <th style="color:#3e5569;font-weight:bold">Giảm</th>
                                    <th style="color:#3e5569;font-weight:bold">Phải trả</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
