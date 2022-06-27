@component('mail::message')
    <h1>T&T Mobile xin kính chào quý khách !</h1>
    @if ($details['loai'] == 1)
        <p style="color:#3d4852">Chúc mừng quý khách đã trở thành "{{ $details['ten_bac'] }}" của T&T Mobile.</p>
    @else
        <p style="color:#3d4852">Xin chân thành cảm ơn quý khách đã mua hàng tại T&T Mobile.</p>
    @endif
    <p style="color:#3d4852">Xin gửi tặng quý khách mã voucher: {{ $details['code'] }} - giảm {{ $details['phan_tram_giam'] }}%.</p>
    <p style="color:#3d4852">Chúc quý khách một ngày tốt lành !</p>
    <br>
    T&T Mobile
@endcomponent
