@extends('user.layouts.app-other')
@section('content')
    <section class="cate">
        <div class="container">
            <div class="left">
                <a href="/ordermanagement" class="active">Danh sách đơn hàng</a>
                <a href="/accountinformation" class="">Thông tin cá nhân</a>
                <a href="/review" class="">Đánh giá sản phẩm</a>
                @if(Auth::user()->loai_tai_khoan_id == 5)
                <a href="/thayDoiMatKhau" class="active">Đổi mật khẩu</a>
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
                <div class="detail-order" id="detail_order">
                    <div class="title">
                        <span>
                            Trạng thái đơn hàng:
                            @if ($donHang->trang_thai_don_hang == 0)
                                <i style="color:#ffb848!important">Đang xử lý</i>
                            @elseif($donHang->trang_thai_don_hang == 1)
                                <i style="color:#28b779!important">Đã xử lý</i>
                            @elseif($donHang->trang_thai_don_hang == 2)
                                <i style="color:#ffb848!important">Đang vận chuyển</i>
                            @elseif($donHang->trang_thai_don_hang == 3)
                                <i style="color:#28b779!important">Đã nhận hàng</i>
                            @elseif($donHang->trang_thai_don_hang == 4)
                                <i style="color:red">Đã hủy</i>
                            @endif
                        </span>
                        <p style="font-weight: bold">Chi tiết đơn hàng: {{ $donHang->ma_don_hang }}</p>
                    </div>

                    @foreach ($danhSachChiTietDH as $tp)
                        <div class="item">
                            <a href="{{ route('productDetail', ['sanPhamId' => $tp->dien_thoai_id]) }}" class="fl"><img
                                    src="{{ asset('storage/images/' . $tp->hinh_anh) }}"></a>
                            <div class="fl" data-apply="">
                                <a href="{{ route('productDetail', ['sanPhamId' => $tp->dien_thoai_id]) }}">Điện thoại {{ $tp->ten_san_pham }} -
                                    {{ $tp->ram }}/{{ $tp->bo_nho_trong }} -
                                    {{ $tp->ten_mau_sac }}</a>
                                <i>Số lượng: <b>{{ $tp->so_luong }}</b></i>
                            </div>
                            <div class="fr">
                                <b>{{ number_format($tp->gia_giam, 0) }}₫</b>
                                <em>{{ number_format($tp->gia, 0) }}₫</em>
                            </div>
                        </div>
                    @endforeach

                    <div class="sum">
                        <span><label>Giá tạm tính:</label> <b style="color:#3e5569">{{ number_format($tongTien, 0) }}₫</b></span>
                        <span><strong>Tổng tiền:</strong> <b>{{ number_format($tongTien, 0) }}₫</b></span>
                        {{-- <span><strong class="paid">Đã thanh toán:</strong><b>9.490.000₫</b></span> --}}
                    </div>
                    <div class="info type0" data-recievetype="0">
                        <b>Địa chỉ và thông tin người nhận hàng:</b>

                        <span class="receiver">{{ $donHang->ho_ten_nguoi_nhan }} -
                            {{ $donHang->so_dien_thoai_nguoi_nhan }}.</span>

                        <span>Địa chỉ nhận hàng: {{ $donHang->dia_chi_nhan_hang }}.</span>

                        <span>Ngày nhận hàng:
                            @if ($donHang->ngay_giao == null)
                                Chưa có thông tin.
                            @else
                                {{ $donHang->ngay_giao }}.
                            @endif
                        </span>
                    </div>
                    <div class="pay">
                        @if($donHang->trang_thai_don_hang == 0)
                        <div class="box_payment">
                            <a href="javascript:confirm()" class="back" style="background:red">Hủy đơn hàng</a>
                        </div>
                        @endif
                        <div class="box_payment">
                            <a href="/ordermanagement" class="back">Quay lại danh sách đơn hàng</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <div class="popup">
        <div class="bg-popup"></div>
        <div class="form-popup" style="width: auto">
            <div class="row-popup">
                <h2 style="color:red;text-align: center;">Hủy đơn hàng</h3>
            </div>
            <form method="post" action="{{ route('huyDonHang',['maDonHang'=>$donHang->ma_don_hang]) }}" id="formdelete">
                @csrf
                <h3 style="display:block">Bạn có muốn hủy đơn hàng này không
                    ?</h4>
                <p style="margin-top: 10px;margin-bottom: 10px; text-align: center; display:flex">
                    <button type="submit" class="btn btn-outline-danger" style="width: 175px;height: 40px;margin-right: 14px;">Có</button>
                    <button type="button" class="btn btn-outline-secondary formclose" style="width: 175px;height: 40px;">Không</button>
                </p>

            </form>
        </div>
    </div>

    @if (Session::has('thongbao'))
        <div class="popup active ketqua">
            <div class="bg-popup"></div>
            <div class="form-popup" style="width: auto">
                <div class="row-popup" style="text-align: center;">
                    <h3 style="color:green; font-size:25px">Thông báo</h3>
                </div>
                <h4 style="display:block;text-align: center; font-size:18px">{{ Session::get('thongbao') }}</h4>
                <p style="margin-top: 10px; text-align: center">
                    <button type="button" style="height:35px; width: 150px" class="btn btn-outline-secondary" onclick="closepopup()">Ok</button>
                </p>
            </div>
        </div>
    @endif
    <script>
        const body = this.document.querySelector('body');
        const popup = this.document.querySelector('.popup');
        const btnclose = this.document.querySelector('.formclose');
        //Hiển thị
        function confirm() {
            popup.className += " active";
            body.style = "overflow: hidden;";
        };
        //Đóng
        btnclose.onclick = function() {
            popup.className = popup.className.replace(" active", "");
            body.style = "overflow: auto;";
        };

        function closepopup() {
            const popup = this.document.querySelector('.popup.active.ketqua');
            popup.className = popup.className.replace(" active", "");
            body.style = "overflow: auto;";
        }
    </script>
@endsection
