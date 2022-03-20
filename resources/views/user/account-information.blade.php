@extends('user.layouts.app-other')
@section('content')
    <section>
        <div class="container">
            <div class="left">
                <a href="/ordermanagement" class="">Danh sách đơn hàng</a>
                <a href="/accountinformation" class="active">Thông tin cá nhân</a>
            </div>
            <div class="right">
                <div class="user" data-customer="1068820208">
                    Chào anh
                    <b>Võ Trần Minh Trí</b> - <b>0918013807</b>
                    <a href="/signin" class="logout-h">Thoát tài khoản</a>
                </div>
                <div class="profile">

                    <h3>Thông tin cá nhân</h3>
                    <div>
                        <span class="active" data-val="1"><i></i><b>Anh</b></span>
                        <span class="" data-val="0"><i></i><b>Chị</b></span>
                        <input type="hidden" name="hdGender" value="1">
                    </div>
                    <input type="text" name="txtFullName" value="Võ Trần Minh Trí">
                    <input type="tel" name="txtPhoneNumber" disabled="" value="0918013807">
                    <h3>Địa chỉ nhận hàng</h3>
                    <span id="add33946519" data-id="33946519" class="address active">
                        <span>111 Khuông Việt, Phường Phú Trung, Quận Tân Phú, Hồ Chí Minh</span><br>
                        <a href="javascript:;" onclick="" class="edit"><i class="iconlsmh-edit"></i>Sửa</a>
                    </span>
                    <form id="frmAddress" class="address hide" onsubmit="return AddressSubmit()">
                        <input name="__RequestVerificationToken" type="hidden"
                            value="CfDJ8BKZPHkEDDpAnNakfT2wE0qpNmgz6Ty9HtzGQ_OKmD4AUZ8F4hArKMr9LJ5yJA1GeDV6d1zd_PR8kH1VqKVe-Wo5pnng2EApD2ZdupSzH_SN2PwQeiIBBRTreWi7mqlDZas4Wa19FFzivNgmn2DbBmnKiEPF4wi17xm2pHM1REXdbFkwXYw_4QziC0qq9tHKXg">
                        <div data-id="ddlProvince" class="province inline">
                            <span data-value="3">Hồ Chí Minh</span>
                            <div class="select" id="ddlProvince">
                                <div class="o-search">
                                    <input type="text" name="key" placeholder="Nhập tỉnh, thành để tìm nhanh">
                                    <button></button>
                                </div>
                                <div class="list scroll">
                                    <div class="item">
                                        <a href="javascript:;" data-value="3">Hồ Chí Minh</a>
                                    </div>
                                    <div class="item">
                                        <a href="javascript:;" data-value="5">Hà Nội</a>
                                    </div>
                                </div>
                                <input type="hidden" name="hdProvinceId" value="3">
                            </div>
                        </div>
                        <div data-id="ddlDistrict" class="district inline">
                            <span data-value="33">Quận Tân Phú</span>
                            <div class="select" id="ddlDistrict">
                                <div class="o-search">
                                    <input type="text" name="key" placeholder="Nhập quận, huyện để tìm nhanh">
                                    <button></button>
                                </div>
                                <div class="list scroll">
                                    <div class="item">
                                        <a href="javascript:;" data-value="2087">TP. Thủ Đức (Gồm Q2, Q9, Q.TĐ)</a>
                                        <a href="javascript:;" data-value="16">Quận 1</a>
                                        <a href="javascript:;" data-value="18">Quận 3</a>
                                        <a href="javascript:;" data-value="19">Quận 4</a>
                                        <a href="javascript:;" data-value="20">Quận 5</a>
                                        <a href="javascript:;" data-value="21">Quận 6</a>
                                        <a href="javascript:;" data-value="22">Quận 7</a>
                                        <a href="javascript:;" data-value="23">Quận 8</a>
                                        <a href="javascript:;" data-value="25">Quận 10</a>
                                        <a href="javascript:;" data-value="26">Quận 11</a>
                                        <a href="javascript:;" data-value="27">Quận 12</a>
                                    </div>
                                    <div class="item">
                                        <a href="javascript:;" data-value="31">Quận Bình Tân</a>
                                        <a href="javascript:;" data-value="51">Quận Bình Thạnh</a>
                                        <a href="javascript:;" data-value="29">Quận Gò Vấp</a>
                                        <a href="javascript:;" data-value="52">Quận Phú Nhuận</a>
                                        <a href="javascript:;" data-value="30">Quận Tân Bình</a>
                                        <a href="javascript:;" data-value="33">Quận Tân Phú</a>
                                        <a href="javascript:;" data-value="36">Huyện Bình Chánh</a>
                                        <a href="javascript:;" data-value="61">Huyện Cần Giờ</a>
                                        <a href="javascript:;" data-value="34">Huyện Củ Chi</a>
                                        <a href="javascript:;" data-value="32">Huyện Hóc Môn</a>
                                        <a href="javascript:;" data-value="35">Huyện Nhà Bè</a>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="hdDistrictId" value="33">
                        </div>
                        <div data-id="ddlWard" class="ward inline">
                            <span data-value="10338">Phường Phú Trung</span>
                            <div class="select" id="ddlWard">
                                <div class="o-search">
                                    <input type="text" name="key" placeholder="Nhập phường/ xã để tìm nhanh">
                                    <button></button>
                                </div>
                                <div class="list scroll">
                                    <div class="item">
                                        <a href="javascript:;" data-value="10334">Phường Hiệp Tân</a>
                                        <a href="javascript:;" data-value="10344">Phường Tây Thạnh</a>
                                        <a href="javascript:;" data-value="10343">Phường Tân Thới Hoà</a>
                                        <a href="javascript:;" data-value="10342">Phường Tân Thành</a>
                                        <a href="javascript:;" data-value="10341">Phường Tân Sơn Nhì</a>
                                    </div>
                                    <div class="item">
                                        <a href="javascript:;" data-value="10340">Phường Tân Quý</a>
                                        <a href="javascript:;" data-value="10339">Phường Sơn Kỳ</a>
                                        <a href="javascript:;" data-value="10338">Phường Phú Trung</a>
                                        <a href="javascript:;" data-value="10337">Phường Phú Thọ Hoà</a>
                                        <a href="javascript:;" data-value="10336">Phường Phú Thạnh</a>
                                        <a href="javascript:;" data-value="10335">Phường Hoà Thạnh</a>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="hdWardId" value="10338">
                        </div>
                        <input type="text" name="txtAddress" class="inline" placeholder="Số nhà, tên đường"
                            value="111 Khuông Việt">
                        <p class="frmAddress_error"></p>
                    </form>
                    <a href="javascript:" class="button">CẬP NHẬT</a>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('assets/user/js/account-information.js') }}"></script>
@endsection
