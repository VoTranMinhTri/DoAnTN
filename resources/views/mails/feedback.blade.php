@component('mail::message')
    <h1>{{ $details['title'] }}</h1>
    <p style="color:#3d4852">Họ tên khách hàng: {{ $details['fullname'] }}.</p>
    <p style="color:#3d4852">Email khách hàng: {{ $details['email'] }}.</p>
    <p style="color:#3d4852">Số điện thoại khách hàng: {{ $details['phone'] }}.</p>
    <p style="color:#3d4852">Nội dung: {{ $details['message'] }}.</p>
    <br>
    T&T Mobile
@endcomponent
