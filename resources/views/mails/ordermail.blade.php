@component('mail::message')
    <h1>Cảm ơn quý khách đã cho T&T Mobile cơ hội được phục vụ.</h1>
    <p style="color:#3d4852">Mã đơn hàng: {{ $details['ma_don_hang'] }}.</p>
    <p style="color:#3d4852">Họ tên người nhận: {{ $details['ho_ten_nguoi_nhan'] }}.</p>
    <p style="color:#3d4852">Số điện thoại người nhận: {{ $details['so_dien_thoai_nguoi_nhan'] }}.</p>
    <p style="color:#3d4852">Địa chỉ nhận hàng: {{ $details['dia_chi_nhan'] }}.</p>
    <p style="color:#3d4852">Tổng tiền đơn hàng: {{ number_format($details['tong_tien'], 0, ',', '.') }} VNĐ.</p>
    <br>
    T&T Mobile
@endcomponent
