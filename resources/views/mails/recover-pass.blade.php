@component('mail::message')
    <h1>T&T Mobile xin kính chào quý khách !</h1>
    <p>Quý khách vừa yêu cầu lấy lại mật khẩu, nếu đó không phải của quý khách vui lòng bỏ qua.</p>
    <p>Quý khách hãy nhấn vào đường dẫn sau để cập nhật lại mật khẩu cho tài khoản: {{ $details['link'] }} .</p>
    <p>Chúc quý khách một ngày tốt lành !</p>
    <br>
    T&T Mobile
@endcomponent
