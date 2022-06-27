<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 15px;
        }

        .detail-order {
            padding: 25px 35px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .detail-order .title {
            padding-bottom: 10px;
            display: block;
            font-size: 18px;
            font-weight: normal;
        }

        .detail-order .title>span {
            float: right;
            font-size: 14px;
        }

        .detail-order .info {
            padding: 15px 0 3px 0;
            overflow: hidden;
        }

        .detail-order .info>* {
            display: block;
            padding: 0 10px;
            margin-bottom: 7px;
        }

        .detail-order .info>span.receiver {
            display: inline-block;
            text-transform: capitalize;
        }

        .detail-order .info>span {
            position: relative;
            padding-left: 20px;
            line-height: 1.5;
        }

        .detail-order .info>span:before {
            content: "";
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background-color: #d8d8d8;
            left: 10px;
            top: 15px;
            position: absolute;
        }

        .sum {
            margin-top: 20px;
            border-top: 1px solid #d6dfe7;
            padding-top: 5px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e6e6e6;
            text-align: right;
        }

        .fl>i {
            display: inline-block;
            vertical-align: top;
            min-width: 100px;
            margin: 7px 10px 0 0;
            font-style: normal;
            font-size: 13px;
        }

        .detail-order .item>div.fl>* {
            display: block;
            margin-bottom: 5px;
        }

        .detail-order .item>div.fr>* {
            display: block;
            text-align: right;
            margin-bottom: 5px;
            font-size: 14px;
        }

        .detail-order .item>div.fr>b {
            font-weight: normal;
        }

        .nqp {
            font-size: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #e6e6e6;
        }

        .pbh {
            margin-top: 10px;
            border-top: 1px solid #d6dfe7;
            padding-top: 5px;
            padding-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="detail-order">

        <div class="title">
            <div style="display:inline-block;padding-top:25px">
                <p style="font-weight: bold;padding-bottom:0">Mã hóa đơn: {{ $donHang->ma_don_hang }}</p>
                <p style="font-size: 15px">Ngày tạo: {{ $donHang->ngay_tao }}</p>
            </div>
            <div style="float:right"><img src="{{ public_path('assets/user/images/Logo.png') }}" width="200px"></div>
            <div class="nqp">
                <div style="display:inline-block">
                    <b>Tên sản phẩm / Số lượng</b>
                </div>
                <div class="fr" style="float:right">
                    <b>Giá</b>
                </div>
            </div>
        </div>

        @foreach ($danhSachChiTietDH as $tp)
            <div class="item">
                <div class="fl" style="display:inline-block">
                    <a>Điện thoại
                        {{ $tp->ten_san_pham }} -
                        {{ $tp->ram }}/{{ $tp->bo_nho_trong }} -
                        {{ $tp->ten_mau_sac }}</a>
                    <i>Số lượng: <b style="font-weight: normal;">{{ $tp->so_luong }}</b></i>
                </div>
                <div class="fr" style="float:right">
                    <b>{{ number_format($tp->gia_giam, 0,',','.') }}₫</b>
                    <em
                        style="font-style: normal;text-decoration: line-through;">{{ number_format($tp->gia, 0,',','.') }}₫</em>
                </div>
            </div>
        @endforeach
        <div class='sum'>
            <span><strong>Giá tạm tính:</strong> <b>{{ number_format($tongTien, 0,',','.') }}₫</b></span>
            <span style="display: block"><strong>Tổng tiền:</strong> <b>{{ number_format($tongTien, 0,',','.') }}₫</b></span>
        </div>
        <div class="info type0" data-recievetype="0">
            <b style='padding-left:0'>Địa chỉ và thông tin người nhận hàng:</b>
            <span class="receiver">{{ $donHang->ho_ten_nguoi_nhan }} -
                {{ $donHang->so_dien_thoai_nguoi_nhan }}.</span>
            <span>Địa chỉ nhận hàng: {{ $donHang->dia_chi_nhan_hang }}.</span>
        </div>
        <div class="pbh">
            <div><b>Phiếu bảo hành sản phẩm</b></div>
            <p>Sản phẩm được bảo hành theo chính sách hãng tại tất cả các trung tâm bảo hành của hãng hoặc tại cửa hàng
                T&T Mobile.<br>
                Chính sách bảo hành của hãng, địa chỉ của các trung tâm bảo hành quý khách vui lòng liên hệ tại SĐT 1800
                1234, tại tất cả các cửa hàng của T&T Mobile.</p>
        </div>
    </div>
</body>

</html>
