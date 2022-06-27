@extends('user.layouts.app-detail')
@section('content')
    <section>
        <div class="headshop">
            <img width="1200" height="253" src="{{ asset('assets/user/images/background_sieu_thi_large.png') }}">
            <div class="pos_1">
                <span>
                    <i class="iconshop-numshop"></i>
                    <b class="count">{{ count($danhSachCuaHang) }}</b>
                </span>
                Cửa hàng
            </div>
            <div class="pos_2">
                <span>
                    <i class="iconshop-customer"></i>
                    <b class="count">1.000</b>
                </span>
                Khách được phục vụ mỗi ngày
            </div>
            <div class="pos_3">
                <span>
                    <i class="iconshop-openshop"></i>
                    8:00 - 22:00
                </span>
                MỞ CỬA
                kể cả chủ nhật &amp; ngày lễ
            </div>
        </div>
        <div class="storefind-mid">
            <aside>
                <div
                    style="padding: 25px;
                border: 1px solid #ccc;
                border-radius: 3px;
                overflow: hidden;
                position: relative;">
                    <b style="margin-bottom: 10px;font-size: 20px;padding-bottom: 10px;display: block;">Tìm
                        cửa hàng T&T Mobile</b>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th style="color:#3e5569;font-weight:bold">Địa chỉ cửa hàng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($danhSachCuaHang as $tp)
                                    <tr>
                                        <td><a target="_blank" href="{{ $tp->google_map }}">{{ $tp->dia_chi }} (Tìm đường đến cửa hàng này)</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </aside>
        </div>
    </section>
@endsection
