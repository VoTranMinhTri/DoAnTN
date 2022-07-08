@component('mail::message')
    <h1>T&T Mobile xin kính chào quý khách !</h1>
    <p style="color:#3d4852">Quý khách vừa yêu cầu lấy lại mật khẩu, nếu đó không phải của quý khách vui lòng bỏ qua.</p>
    <p style="color:#3d4852">Quý khách hãy nhấn vào nút sau để cập nhật lại mật khẩu cho tài khoản:</p>
    <a href='{{ $details['link'] }}' style="margin-left: 32%;">
        <button style="cursor: pointer;height: 40px;
        width: 200px;background-color:#e8eaed;
        font-weight: bold;margin-bottom: 15px;
        color:#52e452;border:none;border-radius: 4px;
        font-size: 17px;">
            Cập nhật lại mật khẩu
        </button>
    </a>
    <p style="color:#3d4852">Chúc quý khách một ngày tốt lành !</p>
    <br>
    T&T Mobile
@endcomponent
