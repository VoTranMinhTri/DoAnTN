@extends('user.layouts.app-detail')
@section('content')
    <section class='detail'>
        <ul class="breadcrumb">
            <li>
                <a href="/">Home</a>
                <meta property="position" content="1">
            </li>
            <li>
                <span>›</span>
                <a
                    href="{{ route('productDetail', ['sanPhamId' => $dienThoai->id]) }}">{{ $dienThoai->ten_san_pham }}</a>
                <meta property="position" content="2">
            </li>
        </ul>
        <h1>Điện thoại {{ $dienThoai->ten_san_pham }}</h1>
        <div class='box'>
            <div class='box-left'>
                <div class='detail-rate'>
                    <p style="font: 14px/18px Arial,Helvetica,sans-serif;">
                        <i class="icondetail-star"></i>
                        <i class="icondetail-star"></i>
                        <i class="icondetail-star"></i>
                        <i class="icondetail-star"></i>
                        <i class="icondetail-star"></i>
                    </p>
                    <p class="detail-rate-total">1 <span>đánh giá</span></p>
                </div>
            </div>
            <div class="box-right">
                <i class="icondetail-sosanh"></i>
                So sánh
            </div>
        </div>
        <div class='box-main'>
            <div class='box-main-left'>
                <div class='box-main-left-01'>
                    <div class='box-main-left-01-show'>
                        <div class='show-tab active' data-gallery-id="featured-images-gallery">
                            <div class='detail-slider owl-carousel owl-loaded owl-drag'>
                                <div class='owl-stage-outer owl-height' style="height: 396.763px;">
                                    <div class='owl-stage'
                                        style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 9940px;">
                                        @foreach ($danhSachHinhAnhNoiBat as $tp)
                                            <div class='owl-item' style="width: 710px;">
                                                <a href="#" class="slider-item ">
                                                    <img src="{{ asset('storage/images/' . $tp->hinh_anh) }}" width="710"
                                                        height="394">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="owl-nav">
                                    <button type="button" role="presentation" class="owl-prev disabled"
                                        data-prev-id="showtab"></button>
                                    <button type="button" role="presentation" class="owl-next"
                                        data-next-id="showtab"></button>
                                </div>

                            </div>
                            <div class="total-imgslider">
                                <div class="counter">(1/?)</div>
                            </div>
                        </div>
                        @foreach ($hinhAnhMauSacSanPhamDaiDien as $tp)
                            <div class='show-tab' data-gallery-id="color-images-gallery-{{ $tp->mau_sac_id }}">
                                <div class='detail-slider owl-carousel owl-loaded owl-drag'>
                                    <div class='owl-stage-outer owl-height' style="height: 473.325px;">
                                        <div class='owl-stage'
                                            style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 9230px;">
                                            @foreach ($danhSachHinhAnhMauSac as $ha)
                                                @if ($ha->mau_sac_id == $tp->mau_sac_id)
                                                    <div class='owl-item' style="width: 710px;">
                                                        <a href="#" class="slider-item ">
                                                            <img src="{{ asset('storage/images/' . $ha->hinh_anh) }}"
                                                                class='owl-lazy' style='opacity: 1;' alt="" width="710"
                                                                height="473.33px">
                                                        </a>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="owl-nav">
                                        <button type="button" role="presentation" class="owl-prev disabled"
                                            data-prev-id="showtab"></button>
                                        <button type="button" role="presentation" class="owl-next"
                                            data-next-id="showtab"></button>
                                    </div>
                                </div>
                                <div class="total-imgslider">
                                    <div class="counter">#</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="scrolling-inner">
                        <div class="box-main-left-01-tab scrolling">
                            <div id="thumb-featured-images-gallery-0" class="item itemTab active "
                                data-gallery-id="featured-images-gallery">
                                <div class="item-border">
                                    <i class="icondetail-noibat"></i>
                                </div>
                                <p>Điểm nổi bật</p>
                            </div>
                            @foreach ($hinhAnhMauSacSanPhamDaiDien as $tp)
                                <div id="thumb-color-images-gallery-{{ $tp->mau_sac_id }}" class="item itemTab"
                                    data-gallery-id="color-images-gallery-{{ $tp->mau_sac_id }}">
                                    <div class="item-border">
                                        <img alt="Bạc" width="41" height="41" loading="lazy" class=" lazyloaded"
                                            src="{{ asset('storage/images/' . $tp->hinh_anh) }}">
                                    </div>
                                    <p>{{ $tp->ten_mau_sac }}</p>
                                </div>
                            @endforeach
                            <div id="thumb-unbox-gallery-0" class="item itemTab is-show-popup"
                                data-gallery-id="unbox-gallery">
                                <div class="item-border">
                                    <i class="icondetail-box"></i>
                                </div>
                                <p>Hình mở hộp</p>
                            </div>
                            <div id="thumb-360-degree-gallery-0" class="item itemTab is-show-popup"
                                data-gallery-id="360-degree-gallery">
                                <div class="item-border">
                                    <i class="icondetail-360do"></i>
                                </div>
                                <p>Hình 360 độ</p>
                            </div>
                            <div id="thumb-specification-gallery-0" class="item itemTab is-show-popup"
                                data-gallery-id="specification-gallery">
                                <div class="item-border">
                                    <i class="icondetail-thongso"></i>
                                </div>
                                <p>Thông số kỹ thuật</p>
                            </div>
                            {{-- <div id="thumb-article-gallery-0" class="item itemTab is-show-popup"
                                data-gallery-id="article-gallery">
                                <div class="item-border">
                                    <i class="icondetail-danhgia"></i>
                                </div>
                                <p>Thông tin sản phẩm</p>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="block-tab">
                    <div class="bt-overlay"></div>
                    <ul class="block-tab-top">
                        <li data-tab-id="tab-unbox-gallery-0" class="tab-item" data-is-360-gallery="False"
                            data-gallery-id="unbox-gallery" data-color-id="0" data-thump-name="Hình mở hộp">
                            Hình mở hộp
                        </li>
                        <li data-tab-id="tab-360-degree-gallery-0" class="tab-item" data-is-360-gallery="True"
                            data-gallery-id="360-degree-gallery" data-color-id="0" data-thump-name="Hình 360 độ">
                            Hình 360 độ
                        </li>
                        <li data-tab-id="tab-specification-gallery-0" class="tab-item" data-is-360-gallery="False"
                            data-gallery-id="specification-gallery" data-color-id="0" data-thump-name="Thông số kỹ thuật">
                            Thông số kỹ thuật
                        </li>
                        {{-- <li data-tab-id="tab-article-gallery-0" class="tab-item" data-is-360-gallery="False"
                            data-gallery-id="article-gallery" data-color-id="0" data-thump-name="Thông tin sản phẩm">
                            Thông tin sản phẩm
                        </li> --}}
                    </ul>
                    <div class="btn-closemenu close-tab">Đóng</div>
                    <div class="block-tab-content">
                        <div class="content-t" data-tab-id="tab-unbox-gallery-0" data-gallery-id="unbox-gallery">
                            <a class="top-flag" name="top-unbox-gallery-0"></a>
                            <div class="content-t-list">
                                <div class=" unbox-gallery">
                                    <div class="content-t-ist-item divshow li-img" data-color-id="0" data-picture-id="0"
                                        data-index="0">
                                        <div class="content-t-list-item-img-container">
                                            <a href="#" class="" data-video-url="" data-video-id=""
                                                data-time="0">
                                                <img class="single-item"
                                                    src="{{ asset('storage/images/' . $hinhAnhMoHop->hinh_anh) }}"
                                                    alt="OPPO Reno6 Z 5G">
                                                <span class="content-t-list-item-desc">{{ $dienThoai->mo_ta }}</span>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="scroll-top" href="#top-unbox-gallery-0"></a>
                        </div>
                        <div class="content-t" data-tab-id="tab-360-degree-gallery-0"
                            data-gallery-id="360-degree-gallery">
                            <a class="top-flag" name="top-360-degree-gallery-0"></a>
                            <div class="content-t-list">
                                <div id="three-d-degree-image" style="width: 100%; cursor: move;">
                                    @foreach ($danhSachHinhAnh360 as $tp)
                                        <img style="cursor: move;" src="{{ asset('storage/images/' . $tp->hinh_anh) }}">
                                    @endforeach
                                </div>
                            </div>

                        </div>
                        <div class="content-t" data-tab-id="tab-specification-gallery-0"
                            data-gallery-id="specification-gallery">
                            <a class="top-flag" name="top-tskt"></a>
                            <div class="img">
                                <img src="{{ asset('storage/images/' . $hinhAnhThongSoKyThuat->hinh_anh) }}"
                                    alt="OPPO Reno6 Z 5G">
                            </div>
                            <div class="content-t-wrap">
                                <div class="parameter-all">
                                    <div class="parameter-item">
                                        <p class="parameter-ttl">Màn hình</p>
                                        <ul class="ulist">
                                            <li data-id="6459">
                                                <div class="ctLeft">
                                                    <p>Công nghệ màn hình:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <a class="" href="#"
                                                        target="_blank">{{ $thongSoKyThuat->cong_nghe_man_hinh }}</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ctLeft">
                                                    <p>Độ phân giải:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <a class="" href="#"
                                                        target="_blank">{{ $thongSoKyThuat->do_phan_giai }}</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ctLeft">
                                                    <p>Màn hình rộng:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <span
                                                        class="">{{ $thongSoKyThuat->man_hinh_rong }}</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ctLeft">
                                                    <p>Độ sáng tối đa:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <span
                                                        class="">{{ $thongSoKyThuat->do_sang_toi_da }}</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ctLeft">
                                                    <p>Mặt kính cảm ứng:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <a class="" href="#"
                                                        target="_blank">{{ $thongSoKyThuat->mat_kinh_cam_ung }}</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="parameter-item">
                                        <p class="parameter-ttl" data-group-id="1841" data-index="2">Camera sau</p>
                                        <ul class="ulist">
                                            <li data-id="27" data-group-id="1841" data-index="1">
                                                <div class="ctLeft">
                                                    <a href="#">Độ
                                                        phân giải:</a>
                                                </div>
                                                <div class="ctRight">
                                                    <span
                                                        class="">{{ $thongSoKyThuat->sau_phan_giai }}</span>
                                                </div>
                                            </li>
                                            <li data-id="31" data-group-id="1841" data-index="2">
                                                <div class="ctLeft">
                                                    <p>Quay phim:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <p class="circle">
                                                        <a href="#" target="_blank">{{ $thongSoKyThuat->quay_phim }}</a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li data-id="6460" data-group-id="1841" data-index="3">
                                                <div class="ctLeft">
                                                    <p>Đèn Flash:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <a class="" href="#"
                                                        target="_blank">{{ $thongSoKyThuat->den_flash }}</a>
                                                </div>
                                            </li>
                                            <li data-id="28" data-group-id="1841" data-index="4">
                                                <div class="ctLeft">
                                                    <p>Tính năng:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <p class="circle">
                                                        <a href="#"
                                                            target="_blank">{{ $thongSoKyThuat->sau_tinh_nang }}</a>
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="parameter-item">
                                        <p class="parameter-ttl" data-group-id="2701" data-index="3">Camera trước</p>
                                        <ul class="ulist">
                                            <li data-id="29" data-group-id="2701" data-index="1">
                                                <div class="ctLeft">
                                                    <a href="#">Độ
                                                        phân giải:</a>
                                                </div>
                                                <div class="ctRight">
                                                    <span
                                                        class="">{{ $thongSoKyThuat->truoc_phan_giai }}</span>
                                                </div>
                                            </li>
                                            <li data-id="7801" data-group-id="2701" data-index="4">
                                                <div class="ctLeft">
                                                    <p>Tính năng:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <p class="circle">
                                                        <a href="#"
                                                            target="_blank">{{ $thongSoKyThuat->truoc_tinh_nang }}</a>
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="parameter-item">
                                        <p class="parameter-ttl" data-group-id="2121" data-index="4">Hệ điều hành &amp;
                                            CPU</p>
                                        <ul class="ulist">
                                            <li data-id="72" data-group-id="2121" data-index="1">
                                                <div class="ctLeft">
                                                    <p>Hệ điều hành:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <a class="" href="#"
                                                        target="_blank">{{ $thongSoKyThuat->he_dieu_hanh }}</a>
                                                </div>
                                            </li>
                                            <li data-id="6059" data-group-id="2121" data-index="2">
                                                <div class="ctLeft">
                                                    <p>Chip xử lý (CPU):</p>
                                                </div>
                                                <div class="ctRight">
                                                    <a class="" href="#"
                                                        target="_blank">{{ $thongSoKyThuat->chip_xu_ly }}</a>
                                                </div>
                                            </li>
                                            <li data-id="51" data-group-id="2121" data-index="4">
                                                <div class="ctLeft">
                                                    <a href="#">Tốc
                                                        độ CPU:</a>
                                                </div>
                                                <div class="ctRight">
                                                    <span
                                                        class="">{{ $thongSoKyThuat->toc_do_cpu }}</span>
                                                </div>
                                            </li>
                                            <li data-id="6079" data-group-id="2121" data-index="5">
                                                <div class="ctLeft">
                                                    <p>Chip đồ họa (GPU):</p>
                                                </div>
                                                <div class="ctRight">
                                                    <a class="" href="#"
                                                        target="_blank">{{ $thongSoKyThuat->chip_do_hoa }}</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="parameter-item">
                                        <p class="parameter-ttl" data-group-id="22" data-index="5">Bộ nhớ &amp; Lưu trữ
                                        </p>
                                        <ul class="ulist">
                                            <li data-id="50" data-group-id="22" data-index="1">
                                                <div class="ctLeft">
                                                    <a href="#">RAM:</a>
                                                </div>
                                                <div class="ctRight">
                                                    <span class="">{{ $thongSoKyThuat->ram }}</span>
                                                </div>
                                            </li>
                                            <li data-id="49" data-group-id="22" data-index="2">
                                                <div class="ctLeft">
                                                    <p>Bộ nhớ trong:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <span
                                                        class="">{{ $thongSoKyThuat->bo_nho_trong }}</span>
                                                </div>
                                            </li>
                                            <li data-id="7803" data-group-id="22" data-index="3">
                                                <div class="ctLeft">
                                                    <p>Bộ nhớ còn lại (khả dụng) khoảng:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <span
                                                        class="">{{ $thongSoKyThuat->bo_nho_con_lai }}</span>
                                                </div>
                                            </li>
                                            <li data-id="52" data-group-id="22" data-index="4">
                                                <div class="ctLeft">
                                                    <p>Thẻ nhớ:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <a class="" href="#"
                                                        target="_blank">{{ $thongSoKyThuat->the_nho }}</a>
                                                </div>
                                            </li>
                                            <li data-id="54" data-group-id="22" data-index="11">
                                                <div class="ctLeft">
                                                    <p>Danh bạ:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <span class="">{{ $thongSoKyThuat->danh_ba }}</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="parameter-item">
                                        <p class="parameter-ttl" data-group-id="24" data-index="6">Kết nối</p>
                                        <ul class="ulist">
                                            <li data-id="7761" data-group-id="24" data-index="3">
                                                <div class="ctLeft">
                                                    <p>Mạng di động:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <a class="" href="#"
                                                        target="_blank">{{ $thongSoKyThuat->mang_di_dong }}</a>
                                                </div>
                                            </li>
                                            <li data-id="6339" data-group-id="24" data-index="6">
                                                <div class="ctLeft">
                                                    <p>SIM:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <a class="" href="#"
                                                        target="_blank">{{ $thongSoKyThuat->sim }}</a>
                                                </div>
                                            </li>
                                            <li data-id="66" data-group-id="24" data-index="7">
                                                <div class="ctLeft">
                                                    <p>Wifi:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <p class="circle">
                                                        <a href="#" target="_blank">{{ $thongSoKyThuat->wifi }}</a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li data-id="68" data-group-id="24" data-index="8">
                                                <div class="ctLeft">
                                                    <p>GPS:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <p class="circle">
                                                        <a href="#" target="_blank">{{ $thongSoKyThuat->gps }}</a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li data-id="69" data-group-id="24" data-index="9">
                                                <div class="ctLeft">
                                                    <p>Bluetooth:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <p class="circle">
                                                        <a href="#" target="_blank">{{ $thongSoKyThuat->bluetooth }}</a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li data-id="71" data-group-id="24" data-index="11">
                                                <div class="ctLeft">
                                                    <p>Cổng kết nối/sạc:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <a class="" href="#"
                                                        target="_blank">{{ $thongSoKyThuat->cong_ket_noi }}</a>
                                                </div>
                                            </li>
                                            <li data-id="48" data-group-id="24" data-index="12">
                                                <div class="ctLeft">
                                                    <p>Jack tai nghe:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <span
                                                        class="">{{ $thongSoKyThuat->jack_tai_nghe }}</span>
                                                </div>
                                            </li>
                                            <li data-id="5199" data-group-id="24" data-index="13">
                                                <div class="ctLeft">
                                                    <p>Kết nối khác:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <a class="" href="#"
                                                        target="_blank">{{ $thongSoKyThuat->ket_noi_khac }}</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="parameter-item">
                                        <p class="parameter-ttl" data-group-id="2122" data-index="8">Pin &amp; Sạc</p>
                                        <ul class="ulist">
                                            <li data-id="84" data-group-id="2122" data-index="2">
                                                <div class="ctLeft">
                                                    <p>Dung lượng pin:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <span
                                                        class="">{{ $thongSoKyThuat->dung_luong_pin }}</span>
                                                </div>
                                            </li>
                                            <li data-id="83" data-group-id="2122" data-index="2">
                                                <div class="ctLeft">
                                                    <p>Loại pin:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <a class="" href="#"
                                                        target="_blank">{{ $thongSoKyThuat->loai_pin }}</a>
                                                </div>
                                            </li>
                                            <li data-id="26846" data-group-id="2122" data-index="3">
                                                <div class="ctLeft">
                                                    <p>Hỗ trợ sạc tối đa:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <span
                                                        class="">{{ $thongSoKyThuat->ho_tro_sac_toi_da }}</span>
                                                </div>
                                            </li>
                                            <li data-id="26847" data-group-id="2122" data-index="4">
                                                <div class="ctLeft">
                                                    <p>Sạc kèm theo máy:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <span
                                                        class="">{{ $thongSoKyThuat->sac_kem_theo_may }}</span>
                                                </div>
                                            </li>
                                            <li data-id="10859" data-group-id="2122" data-index="5">
                                                <div class="ctLeft">
                                                    <p>Công nghệ pin:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <a class="" href="#"
                                                        target="_blank">{{ $thongSoKyThuat->cong_nghe_pin }}</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="parameter-item">
                                        <p class="parameter-ttl" data-group-id="19" data-index="9">Tiện ích</p>
                                        <ul class="ulist">
                                            <li data-id="10860" data-group-id="19" data-index="1">
                                                <div class="ctLeft">
                                                    <p>Bảo mật nâng cao:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <a class="comma" href="#"
                                                        target="_blank">{{ $thongSoKyThuat->bao_mat_nang_cao }}</a>
                                                </div>
                                            </li>
                                            <li data-id="43" data-group-id="19" data-index="2">
                                                <div class="ctLeft">
                                                    <p>Tính năng đặc biệt:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <a class="comma" href="#"
                                                        target="_blank">{{ $thongSoKyThuat->tinh_nang_dac_biet }}</a>
                                                </div>
                                            </li>
                                            <li data-id="27511" data-group-id="19" data-index="3">
                                                <div class="ctLeft">
                                                    <p>Kháng nước, bụi:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <span
                                                        class="">{{ $thongSoKyThuat->khang_nuoc_bui }}</span>
                                                </div>
                                            </li>
                                            <li data-id="36" data-group-id="19" data-index="4">
                                                <div class="ctLeft">
                                                    <p>Ghi âm:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <span class="">{{ $thongSoKyThuat->ghi_am }}</span>
                                                </div>
                                            </li>
                                            <li data-id="32" data-group-id="19" data-index="6">
                                                <div class="ctLeft">
                                                    <p>Xem phim:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <p class="circle">
                                                        <a href="#" target="_blank">{{ $thongSoKyThuat->xem_phim }}</a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li data-id="33" data-group-id="19" data-index="7">
                                                <div class="ctLeft">
                                                    <p>Nghe nhạc:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <p class="circle">
                                                        <a href="#" target="_blank">{{ $thongSoKyThuat->nghe_nhac }}</a>
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="parameter-item">
                                        <p class="parameter-ttl" data-group-id="28" data-index="10">Thông tin chung</p>
                                        <ul class="ulist">
                                            <li data-id="7804" data-group-id="28" data-index="1">
                                                <div class="ctLeft">
                                                    <p>Thiết kế:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <a class="" href="#"
                                                        target="_blank">{{ $thongSoKyThuat->thiet_ke }}</a>
                                                </div>
                                            </li>
                                            <li data-id="7805" data-group-id="28" data-index="2">
                                                <div class="ctLeft">
                                                    <p>Chất liệu:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <span class="">{{ $thongSoKyThuat->chat_lieu }}</span>
                                                </div>
                                            </li>
                                            <li data-id="88" data-group-id="28" data-index="3">
                                                <div class="ctLeft">
                                                    <p>Kích thước, khối lượng:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <span
                                                        class="">{{ $thongSoKyThuat->kich_thuoc_khoi_luong }}</span>
                                                </div>
                                            </li>
                                            <li data-id="13045" data-group-id="28" data-index="100">
                                                <div class="ctLeft">
                                                    <p>Thời điểm ra mắt:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <span
                                                        class="">{{ $thongSoKyThuat->thoi_diem_ra_mat }}</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="content-t" data-tab-id="tab-article-gallery-0" data-gallery-id="article-gallery">
                            <a class="top-flag" name="top-article"></a>
                            <div class="article content-t-wrap">
                                <div class="article-content showall review-post">
                                    <h3><a href="https://www.thegioididong.com/dtdd/oppo-reno6-z-5g" target="_blank"
                                            title="Tham khảo điện thoại OPPO Reno6 Z 5G kinh doanh chính hãng tại Thegioididong.com">Reno6
                                            Z 5G</a> đến từ nhà <a href="https://www.thegioididong.com/dtdd-oppo"
                                            target="_blank"
                                            title="Tham khảo điện thoại OPPO đang bán tại thegioididong.com">OPPO</a> với
                                        hàng loạt sự nâng cấp và cải tiến không chỉ ngoại hình bên ngoài mà còn sức mạnh bên
                                        trong. Đặc biệt, chiếc <a href="https://www.thegioididong.com/dtdd" target="_blank"
                                            title="Tham khảo điện thoại đang bán tại thegioididong.com">điện thoại</a> được
                                        hãng đánh giá “chuyên gia chân dung bắt trọn mọi cảm xúc chân thật nhất”, đây chắc
                                        chắn sẽ là một “siêu phẩm" mà bạn không thể bỏ qua.</h3>
                                    <h3>Bộ 3 camera chuyên nghiệp - Mỗi cảm xúc, một chân dung</h3>
                                    <p>Hệ thống camera sau được trang bị tối tân, trong đó có camera chính 64 MP, <a
                                            href="https://www.thegioididong.com/dtdd-camera-goc-rong" target="_blank"
                                            title="Tham khảo điện thoại có camera góc siêu rộng tại Thegioididong.com">camera
                                            góc siêu rộng</a> 8 MP và <a
                                            href="https://www.thegioididong.com/dtdd-camera-macro" target="_blank"
                                            title="Tham khảo điện thoại có camera macro kinh doanh tại Thegioididong.com">camera
                                            macro</a> 2 MP cùng camera trước 32 MP luôn sẵn sàng bắt trọn mọi cảm xúc trong
                                        khung hình, giúp người dùng thoải mái ghi lại những khoảnh khắc trong cuộc sống một
                                        cách ấn tượng nhất.</p>
                                    <p><a class="preventdefault"
                                            href="https://www.thegioididong.com/images/42/239747/oppo-reno6-z-5g-01.jpg"
                                            onclick="return false;"><img alt="OPPO Reno6 Z 5G - Cụm camera sau"
                                                class=" lazyloaded" title="OPPO Reno6 Z 5G - Cụm camera sau"
                                                src="{{ asset('assets/user/images/oppo-reno6-z-5g-01.jpg') }}"></a>
                                    </p>
                                    <p>Camera chính có độ phân giải cao và nhờ thuật toán có thể tăng độ phân giải bức ảnh
                                        lên đến 108 MP. Với tính năng này, chúng ta sẽ rất dễ dàng chụp được những bức ảnh
                                        đông người hay các cảnh vật ở xa và khi zoom lên các chi tiết vẫn rất rõ nét.</p>
                                    <p><a class="preventdefault"
                                            href="https://www.thegioididong.com/images/42/239747/oppo-reno6-z-5g-02.jpg"
                                            onclick="return false;"><img alt="OPPO Reno6 Z 5G - Ảnh chụp trên camera"
                                                data-src="https://cdn.tgdd.vn/Products/Images/42/239747/oppo-reno6-z-5g-02.jpg"
                                                class=" lazyloaded" title="OPPO Reno6 Z 5G - Ảnh chụp trên camera"
                                                src="{{ asset('assets/user/images/oppo-reno6-z-5g-02.jpg') }}"></a>
                                    </p>
                                    <p>Đón đầu xu hướng cùng nhà OPPO với tính năng đột phá “Chân dung Bokeh Flare” không
                                        chỉ đơn thuần là xóa phông, mà nó sẽ xử lý chủ thể và hậu cảnh một cách độc lập, từ
                                        đó kết hợp cùng công nghệ AI chỉnh ánh sáng phía sau thành phông nền ảo diệu làm cho
                                        tổng thể bức ảnh lung linh hơn và nghệ thuật hơn.</p>
                                    <p><a class="preventdefault"
                                            href="https://www.thegioididong.com/images/42/239747/reno6-z-5g-34.jpg"
                                            onclick="return false;"><img alt="OPPO Reno6 Z 5G - Ảnh chụp trên camera"
                                                data-src="https://cdn.tgdd.vn/Products/Images/42/239747/reno6-z-5g-34.jpg"
                                                class=" ls-is-cached lazyloaded"
                                                title="OPPO Reno6 Z 5G - Ảnh chụp trên camera"
                                                src="{{ asset('assets/user/images/reno6-z-5g-34.jpg') }}"></a>
                                    </p>
                                    <p>Tính năng chụp ảnh nhanh SnapShot cho độ phơi sáng lên đến 1/1000 ms ở ngoài trời với
                                        ánh sáng tốt. Qua đó, bạn có thể bắt trọn từng chuyển động của đối tượng như trẻ em
                                        đang chạy nhảy, các bộ môn thể thao với độ rõ nét tốt hơn.</p>
                                    <p><a class="preventdefault"
                                            href="https://www.thegioididong.com/images/42/239747/reno6-z-5g-23.jpg"
                                            onclick="return false;"><img alt="OPPO Reno6 Z 5G - Ảnh chụp trên camera"
                                                data-src="https://cdn.tgdd.vn/Products/Images/42/239747/reno6-z-5g-23.jpg"
                                                class=" ls-is-cached lazyloaded"
                                                title="OPPO Reno6 Z 5G - Ảnh chụp trên camera"
                                                src="{{ asset('assets/user/images/reno6-z-5g-23.jpg') }}"></a>
                                    </p>
                                    <p>Giờ đây mỗi chuyển động đều được Reno6 Z 5G ghi lại rõ ràng và sắc nét với quay phim
                                        4K, tốc độ 30 FPS cho chất lượng hình ảnh trong video mượt mà. Cùng tính năng Live
                                        HDR giúp cân bằng ánh sáng để làm cho chủ thể nổi bật, sáng hơn trong điều kiện
                                        thiếu sáng dù ban ngày hay lẫn ban đêm.
                                    </p>
                                    <p><a class="preventdefault"
                                            href="https://www.thegioididong.com/images/42/239747/oppo-reno6-z-5g-42.jpg"
                                            onclick="return false;"><img alt="OPPO Reno6 Z 5G - Live HDR"
                                                data-src="https://cdn.tgdd.vn/Products/Images/42/239747/oppo-reno6-z-5g-42.jpg"
                                                class=" lazyloaded" title="OPPO Reno6 Z 5G - Live HDR"
                                                src="{{ asset('assets/user/images/oppo-reno6-z-5g-42.jpg') }}"></a>
                                    </p>
                                    <p>Nhân đôi cảm xúc cùng tính năng video hiển thị kép cho phép bạn quay video cả camera
                                        trước và camera sau, cả hai video được hiển thị đồng thời trên màn hình, thật là ý
                                        nghĩa để bạn có thể ghi lại những khoảnh khắc đáng nhớ khi đi khám phá, du lịch.</p>
                                    <p><a class="preventdefault"
                                            href="https://www.thegioididong.com/images/42/239747/oppo-reno6-z-5g-41.jpg"
                                            onclick="return false;"><img alt="OPPO Reno6Z 5G - Camera"
                                                data-src="https://cdn.tgdd.vn/Products/Images/42/239747/oppo-reno6-z-5g-41.jpg"
                                                class=" lazyloaded" title="OPPO Reno6Z 5G - Camera"
                                                src="{{ asset('assets/user/images/oppo-reno6-z-5g-41.jpg') }}"></a>
                                    </p>
                                    <h3>Thiết kế thời thượng, vẻ ngoài đầy ấn tượng</h3>
                                    <p>Reno6 Z 5G với thiết kế nguyên khối siêu <a
                                            href="https://www.thegioididong.com/dtdd-mong-nhe" target="_blank"
                                            title="Tham khảo điện thoại với thiết kế mỏng nhẹ đang bán tại thegioididong.com">mỏng
                                            nhẹ</a> 173 gam cùng các góc cạnh bo cong mềm mại, uyển chuyển mang đến sự mượt
                                        mà và tinh tế, cho bạn dễ dàng cầm nắm trong quá trình sử dụng.&nbsp;</p>
                                    <p><a class="preventdefault"
                                            href="https://www.thegioididong.com/images/42/239747/oppo-reno6-z-5g-04.jpg"
                                            onclick="return false;"><img alt="OPPO Reno6 Z 5G - Thiết kế mỏng nhẹ 173 g"
                                                data-src="https://cdn.tgdd.vn/Products/Images/42/239747/oppo-reno6-z-5g-04.jpg"
                                                class=" lazyloaded" title="OPPO Reno6 Z 5G - Thiết kế mỏng nhẹ 173 g"
                                                src="{{ asset('assets/user/images/oppo-reno6-z-5g-04.jpg') }}"></a>
                                    </p>
                                    <p>Mặt lưng của máy được trang bị hiệu ứng quang phổ kim cương tích hợp bởi rất nhiều
                                        lớp vật liệu khác nhau tạo ra hiệu ứng màu độc đáo trong từng điều kiện môi trường
                                        và ánh sáng khác nhau.</p>
                                    <p>Reno6 Z có 2 màu sắc độc đáo: Đen huyền bí và Bạc đa sắc được phủ một lớp Reno Glow
                                        cho mặt lưng nhám, hạn chế bám bẩn, dấu vân tay.&nbsp;</p>
                                    <p><a class="preventdefault"
                                            href="https://www.thegioididong.com/images/42/239747/oppo-reno6-z-5g-03.jpg"
                                            onclick="return false;"><img
                                                alt="OPPO Reno6 Z 5G - Thiết kế mặt lưng đẹp mắt với 2 màu sắc đi kèm"
                                                data-src="https://cdn.tgdd.vn/Products/Images/42/239747/oppo-reno6-z-5g-03.jpg"
                                                class=" lazyloaded"
                                                title="OPPO Reno6 Z 5G - Thiết kế mặt lưng đẹp mắt với 2 màu sắc đi kèm"
                                                src="{{ asset('assets/user/images/oppo-reno6-z-5g-03.jpg') }}"></a>
                                    </p>
                                    <p>Mặt trước của điện thoại cũng không kém phần ấn tượng với màn hình thiết kế kiểu cạnh
                                        viền mỏng tích hợp <a href="https://www.thegioididong.com/dtdd-bao-mat-van-tay"
                                            target="_blank"
                                            title="Tham khảo điện thoại có bảo mật vân tay đang bán tại Thegioididong.com">bảo
                                            mật vân tay</a> dưới màn hình 3.0, cho tốc độ mở máy nhanh hơn, nhạy hơn và bảo
                                        mật tốt hơn.</p>
                                    <p><a class="preventdefault"
                                            href="https://www.thegioididong.com/images/42/239747/reno6-z-5g-29.jpg"
                                            onclick="return false;"><img
                                                alt="OPPO Reno6 Z 5G - Cảm biến vân tay dưới màn hình"
                                                data-src="https://cdn.tgdd.vn/Products/Images/42/239747/reno6-z-5g-29.jpg"
                                                class=" lazyloaded"
                                                title="OPPO Reno6 Z 5G - Cảm biến vân tay dưới màn hình"
                                                src="{{ asset('assets/user/images/reno6-z-5g-29.jpg') }}"></a>
                                    </p>
                                    <h3>Không gian hiển thị lớn với <a
                                            href="https://www.thegioididong.com/dtdd-tu-6-inch-tro-len" target="_blank"
                                            title="Tham khảo điện thoại màn hình 6 inch trở lên đang bán tại thegioididong.com">màn
                                            hình 6.43 inch</a></h3>
                                    <p>Reno6 Z 5G sẽ sở hữu <a
                                            href="https://www.thegioididong.com/hoi-dap/man-hinh-amoled-la-gi-905766"
                                            target="_blank" title="Màn hình AMOLED là gì?">màn hình AMOLED</a>&nbsp;6.43
                                        inch cùng độ phân giải Full HD+, giúp tái tạo màu sắc cho độ chân thực cao hơn, đem
                                        đến hình ảnh sắc nét và góc nhìn rộng hơn đáng kể.&nbsp;</p>
                                    <p><a class="preventdefault"
                                            href="https://www.thegioididong.com/images/42/239747/reno6-z-5g-24.jpg"
                                            onclick="return false;"><img alt="OPPO Reno6 Z 5G - Trang bị màn hình AMOLED"
                                                data-src="https://cdn.tgdd.vn/Products/Images/42/239747/reno6-z-5g-24.jpg"
                                                class=" lazyloaded" title="OPPO Reno6 Z 5G - Trang bị màn hình AMOLED"
                                                src="{{ asset('assets/user/images/reno6-z-5g-24.jpg') }}"></a>
                                    </p>
                                    <p>Không những thế màn hình của thiết bị được bảo vệ bởi kính cường lực Gorilla Glass 5
                                        tăng độ bền cho máy, giúp máy càng trở nên cứng cáp hơn hẳn, hạn chế được các va
                                        đập, trầy xước.</p>
                                    <p><a class="preventdefault"
                                            href="https://www.thegioididong.com/images/42/239747/reno6-z-5g-20.jpg"
                                            onclick="return false;"><img alt="OPPO Reno6 Z 5G - Thiết kế"
                                                data-src="https://cdn.tgdd.vn/Products/Images/42/239747/reno6-z-5g-20.jpg"
                                                class=" lazyloaded" title="OPPO Reno6 Z 5G - Thiết kế"
                                                src="{{ asset('assets/user/images/reno6-z-5g-20.jpg') }}"></a>
                                    </p>
                                    <p>Để mắt người dùng luôn thoải mái khi sử dụng điện thoại, đặc biệt trong thời gian
                                        dài, màn hình Reno6 Z 5G đã&nbsp;đạt&nbsp;được chứng nhận màn hình bảo vệ mắt toàn
                                        diện bởi SGS.</p>
                                    <p><a class="preventdefault"
                                            href="https://www.thegioididong.com/images/42/239747/reno6-z-5g-25.jpg"
                                            onclick="return false;"><img
                                                alt="OPPO Reno6 Z 5G - Màn hình đạt được chứng nhận bảo vệ mắt toàn diện bởi SGS"
                                                data-src="https://cdn.tgdd.vn/Products/Images/42/239747/reno6-z-5g-25.jpg"
                                                class=" lazyloaded"
                                                title="OPPO Reno6 Z 5G - Màn hình đạt được chứng nhận bảo vệ mắt toàn diện bởi SGS"
                                                src="{{ asset('assets/user/images/reno6-z-5g-25.jpg') }}"></a>
                                    </p>
                                    <p>Ngoài ra, máy còn đạt các chứng nhận của Netflix HD và Amazon Prime video HD cho bạn
                                        trải nghiệm các bộ phim điện ảnh hay truyền hình yêu thích trên nền tảng xem phim
                                        tốt nhất.&nbsp;</p>
                                    <p><a class="preventdefault"
                                            href="https://www.thegioididong.com/images/42/239747/reno6-z-5g-26.jpg"
                                            onclick="return false;"><img
                                                alt="OPPO Reno6 Z 5G - Đạt các chứng nhận của Netflix HD và Amazon Prime video HD"
                                                data-src="https://cdn.tgdd.vn/Products/Images/42/239747/reno6-z-5g-26.jpg"
                                                class=" lazyloaded"
                                                title="OPPO Reno6 Z 5G - Đạt các chứng nhận của Netflix HD và Amazon Prime video HD"
                                                src="{{ asset('assets/user/images/reno6-z-5g-26.jpg') }}"></a>
                                    </p>
                                    <h3>Hiệu năng mạnh mẽ, cân được nhiều tác vụ</h3>
                                    <p>Reno6 Z 5G được trang bị con chip MediaTek Dimensity 800U 5G 8 nhân, với con chip này
                                        người dùng có thể thoải mái trải nghiệm các game đồ họa hot nhất hiện nay như: Liên
                                        Quân, PUBG,... và các thao tác cơ bản hằng ngày như lướt web, xem youtube đều diễn
                                        ra một cách mượt mà, trơn tru.&nbsp;</p>
                                    <p><a class="preventdefault"
                                            href="https://www.thegioididong.com/images/42/239747/oppo-reno6-z-5g-2.jpg"
                                            onclick="return false;"><img
                                                alt="OPPO Reno6 Z 5G - Trang bị chip Dimensity 800U 5G"
                                                data-src="https://cdn.tgdd.vn/Products/Images/42/239747/oppo-reno6-z-5g-2.jpg"
                                                class=" lazyloaded"
                                                title="OPPO Reno6 Z 5G - Trang bị chip Dimensity 800U 5G"
                                                src="{{ asset('assets/user/images/oppo-reno6-z-5g-2.jpg') }}"></a>
                                    </p>
                                    <p>Máy sở hữu <a href="https://www.thegioididong.com/dtdd-oppo-ram-8gb" target="_blank"
                                            title="Tham khảo điện thoại OPPO RAM 8 GB đang bán tại thegioididong.com">RAM 8
                                            GB</a> cùng công nghệ cải tiến bạn có thể mở rộng RAM thêm đến 5 GB giúp bạn xử
                                        lý tác vụ đa nhiệm được mượt hơn, hạn chế tình trạng giật hay đơ máy. Bạn cũng có
                                        thể lưu trữ nhiều tài liệu cũng như tải các ứng dụng cần thiết, các game giải trí
                                        yêu thích với <a href="https://www.thegioididong.com/dtdd-oppo-rom-128gb"
                                            target="_blank"
                                            title="Tham khảo Điện thoại OPPO ROM 128 GB đang bán tại thegioididong,com">bộ
                                            nhớ trong 128 GB</a>.</p>
                                    <p><a class="preventdefault"
                                            href="https://www.thegioididong.com/images/42/239747/reno6-z-5g-30.jpg"
                                            onclick="return false;"><img alt="OPPO Reno6Z 5G - RAM"
                                                data-src="https://cdn.tgdd.vn/Products/Images/42/239747/reno6-z-5g-30.jpg"
                                                class=" lazyloaded" title="OPPO Reno6Z 5G - RAM"
                                                src="{{ asset('assets/user/images/reno6-z-5g-30.jpg') }}"></a>
                                    </p>
                                    <p>Reno6 Z được hỗ trợ kết nối mạng <a href="https://www.thegioididong.com/dtdd-5g"
                                            target="_blank"
                                            title="Tham khảo điện thoại hỗ trợ 5G đang bán tại thegioididong.com">5G</a>,
                                        mang đến tốc độ truyền tải nhanh hơn gấp nhiều lần khi so sánh với mạng 4G, từ đó mà
                                        việc tải dữ liệu được diễn ra nhanh chóng, độ trễ được hạ xuống mức thấp nhất sẽ
                                        giúp ích rất nhiều cho các nhu cầu giải trí đặc biệt là game online.</p>
                                    <p><a class="preventdefault"
                                            href="https://www.thegioididong.com/images/42/239747/reno6-z-5g-14.jpg"
                                            onclick="return false;"><img
                                                alt="OPPO Reno6 Z 5G - Với kết nối 5G tăng cảm giác trải nghiệm tốt hơn"
                                                data-src="https://cdn.tgdd.vn/Products/Images/42/239747/reno6-z-5g-14.jpg"
                                                class=" lazyloaded"
                                                title="OPPO Reno6 Z 5G - Với kết nối 5G tăng cảm giác trải nghiệm tốt hơn"
                                                src="{{ asset('assets/user/images/reno6-z-5g-14.jpg') }}"></a>
                                    </p>
                                    <p>Hệ thống làm mát đa năng được tích hợp tấm tản nhiệt ngay trên phần mềm và phần cứng
                                        giúp điện thoại luôn được làm mát. Ngoài ra, máy còn hỗ trợ chế độ Game Focus có thể
                                        tắt được hết các cuộc gọi, tin nhắn,... để bạn có thể tập trung vào các trận đấu mà
                                        không bị làm phiền.</p>
                                    <h3>Viên pin lớn, hỗ trợ <a href="https://www.thegioididong.com/dtdd-sac-pin-nhanh"
                                            target="_blank"
                                            title="Tham khảo điện thoại sạc pin nhanh đang bán tại thegioididong.com">sạc
                                            nhanh</a> 30 W</h3>
                                    <p>Reno6 Z 5G được tích hợp viên pin dung lượng lớn 4.310 mAh đáp ứng tốt cho nhu cầu sử
                                        dụng của người dùng như xem phim hay chơi game cả ngày dài mà không bị hết pin quá
                                        nhanh.</p>
                                    <p><a class="preventdefault"
                                            href="https://www.thegioididong.com/images/42/239747/reno6-z-5g-12.jpg"
                                            onclick="return false;"><img alt="OPPO Reno6 Z 5G - Dung lượng pin lớn 4310 mAh"
                                                data-src="https://cdn.tgdd.vn/Products/Images/42/239747/reno6-z-5g-12.jpg"
                                                class=" lazyloaded"
                                                title="OPPO Reno6 Z 5G - Dung lượng pin lớn 4310 mAh"
                                                src="{{ asset('assets/user/images/reno6-z-5g-12.jpg') }}"></a>
                                    </p>
                                    <p>Ngoài ra, Reno6 Z 5G còn hỗ trợ sạc siêu nhanh VOOC 30 W sạc qua cổng Type-C, máy có
                                        thể sạc đầy 100% pin chỉ khoảng 52 phút, rất là nhanh và tiện lợi, bạn có thể làm
                                        được nhiều công việc hơn, tiết kiệm tối đa thời gian sạc pin, tự do giải trí mà
                                        không lo sạc hoài.</p>
                                    <p><a class="preventdefault"
                                            href="https://www.thegioididong.com/images/42/239747/reno6-z-5g-31.jpg"
                                            onclick="return false;"><img alt="OPPO Reno6 Z 5G - Hỗ trợ sạc nhanh 30 W"
                                                data-src="https://cdn.tgdd.vn/Products/Images/42/239747/reno6-z-5g-31.jpg"
                                                class=" lazyloaded" title="OPPO Reno6 Z 5G - Hỗ trợ sạc nhanh 30 W"
                                                src="{{ asset('assets/user/images/reno6-z-5g-31.jpg') }}"></a>
                                    </p>
                                    <p>Reno6 Z 5G với thiết kế tinh tế, cụm camera với nhiều tính năng chuyên nghiệp, hiệu
                                        năng ổn định, phần mềm được tối ưu hoá thông minh. Đây không chỉ là một sản phẩm mà
                                        nó còn là người bạn đồng hành lâu dài, hỗ trợ bạn tạo ra những cảm xúc thăng hoa
                                        trong những khoảnh khắc đáng nhớ.</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="policy_intuitive cate42 scenarioNomal">
                    <div class="policy">
                        <ul class="policy-list">
                            <li>
                                <div class="iconl">
                                    <i class="icondetail-doimoi"></i>
                                </div>
                                <p>
                                    Hư gì đổi nấy <b>12 tháng</b> tại cửa hàng (miễn phí tháng đầu) <a
                                        href="https://www.thegioididong.com/chinh-sach-bao-hanh-san-pham"></a>
                                </p>
                            </li>
                            <li data-field="IsSameBHAndDT">
                                <div class="iconl">
                                    <i class="icondetail-baohanh"></i>
                                </div>
                                <p>
                                    Bảo hành <b>chính hãng điện thoại 12 tháng</b>

                                </p>
                            </li>

                            <li>
                                <div class="iconl"><i class="icondetail-sachhd"></i></div>
                                <p>{{ $dienThoai->mo_ta }}<a href="javascript:showBlockTabUnBox()"
                                        class="hinh-mo-hop-link"> Xem hình</a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="img-main">
                    <img class=" lazyloaded" alt="Điện thoại OPPO Reno6 Z 5G"
                        src="{{ asset('storage/images/' . $hinhAnhMoHop->hinh_anh) }}">
                </div>
                {{-- <div class="article content-t-wrap">
                    <div class="article-content short">
                        <h3 class="article-content-title">Thông tin sản phẩm</h3>
                        <h3><a href="https://www.thegioididong.com/dtdd/oppo-reno6-z-5g" target="_blank"
                                title="Tham khảo điện thoại OPPO Reno6 Z 5G kinh doanh chính hãng tại Thegioididong.com">Reno6
                                Z 5G</a> đến từ nhà <a href="https://www.thegioididong.com/dtdd-oppo" target="_blank"
                                title="Tham khảo điện thoại OPPO đang bán tại thegioididong.com">OPPO</a> với hàng loạt sự
                            nâng cấp và cải tiến không chỉ ngoại hình bên ngoài mà còn sức mạnh bên trong. Đặc biệt, chiếc
                            <a href="https://www.thegioididong.com/dtdd" target="_blank"
                                title="Tham khảo điện thoại đang bán tại thegioididong.com">điện thoại</a> được hãng đánh
                            giá “chuyên gia chân dung bắt trọn mọi cảm xúc chân thật nhất”, đây chắc chắn sẽ là một “siêu
                            phẩm" mà bạn không thể bỏ qua.
                        </h3>
                        <h3>Bộ 3 camera chuyên nghiệp - Mỗi cảm xúc, một chân dung</h3>
                        <p>Hệ thống camera sau được trang bị tối tân, trong đó có camera chính 64 MP, <a
                                href="https://www.thegioididong.com/dtdd-camera-goc-rong" target="_blank"
                                title="Tham khảo điện thoại có camera góc siêu rộng tại Thegioididong.com">camera góc siêu
                                rộng</a> 8 MP và <a href="https://www.thegioididong.com/dtdd-camera-macro" target="_blank"
                                title="Tham khảo điện thoại có camera macro kinh doanh tại Thegioididong.com">camera
                                macro</a> 2 MP cùng camera trước 32 MP luôn sẵn sàng bắt trọn mọi cảm xúc trong khung hình,
                            giúp người dùng thoải mái ghi lại những khoảnh khắc trong cuộc sống một cách ấn tượng nhất.</p>
                        <p><a class="preventdefault"
                                href="https://www.thegioididong.com/images/42/239747/oppo-reno6-z-5g-01.jpg"
                                onclick="return false;"><img alt="OPPO Reno6 Z 5G - Cụm camera sau"
                                    data-src="https://cdn.tgdd.vn/Products/Images/42/239747/oppo-reno6-z-5g-01.jpg"
                                    class=" lazyloaded" title="OPPO Reno6 Z 5G - Cụm camera sau"
                                    src="https://cdn.tgdd.vn/Products/Images/42/239747/oppo-reno6-z-5g-01.jpg"></a></p>
                        <p>Camera chính có độ phân giải cao và nhờ thuật toán có thể tăng độ phân giải bức ảnh lên đến 108
                            MP. Với tính năng này, chúng ta sẽ rất dễ dàng chụp được những bức ảnh đông người hay các cảnh
                            vật ở xa và khi zoom lên các chi tiết vẫn rất rõ nét.</p>
                        <p><a class="preventdefault"
                                href="https://www.thegioididong.com/images/42/239747/oppo-reno6-z-5g-02.jpg"
                                onclick="return false;"><img alt="OPPO Reno6 Z 5G - Ảnh chụp trên camera"
                                    data-src="https://cdn.tgdd.vn/Products/Images/42/239747/oppo-reno6-z-5g-02.jpg"
                                    class=" lazyloaded" title="OPPO Reno6 Z 5G - Ảnh chụp trên camera"
                                    src="https://cdn.tgdd.vn/Products/Images/42/239747/oppo-reno6-z-5g-02.jpg"></a></p>
                        <p>Đón đầu xu hướng cùng nhà OPPO với tính năng đột phá “Chân dung Bokeh Flare” không chỉ đơn thuần
                            là xóa phông, mà nó sẽ xử lý chủ thể và hậu cảnh một cách độc lập, từ đó kết hợp cùng công nghệ
                            AI chỉnh ánh sáng phía sau thành phông nền ảo diệu làm cho tổng thể bức ảnh lung linh hơn và
                            nghệ thuật hơn.</p>
                        <p><a class="preventdefault"
                                href="https://www.thegioididong.com/images/42/239747/reno6-z-5g-34.jpg"
                                onclick="return false;"><img alt="OPPO Reno6 Z 5G - Ảnh chụp trên camera"
                                    data-src="https://cdn.tgdd.vn/Products/Images/42/239747/reno6-z-5g-34.jpg"
                                    class=" lazyloaded" title="OPPO Reno6 Z 5G - Ảnh chụp trên camera"
                                    src="https://cdn.tgdd.vn/Products/Images/42/239747/reno6-z-5g-34.jpg"></a></p>
                        <p>Tính năng chụp ảnh nhanh SnapShot cho độ phơi sáng lên đến 1/1000 ms ở ngoài trời với ánh sáng
                            tốt. Qua đó, bạn có thể bắt trọn từng chuyển động của đối tượng như trẻ em đang chạy nhảy, các
                            bộ môn thể thao với độ rõ nét tốt hơn.</p>
                        <p><a class="preventdefault"
                                href="https://www.thegioididong.com/images/42/239747/reno6-z-5g-23.jpg"
                                onclick="return false;"><img alt="OPPO Reno6 Z 5G - Ảnh chụp trên camera"
                                    data-src="https://cdn.tgdd.vn/Products/Images/42/239747/reno6-z-5g-23.jpg"
                                    class="lazyload" title="OPPO Reno6 Z 5G - Ảnh chụp trên camera"></a></p>
                        <p>Giờ đây mỗi chuyển động đều được Reno6 Z 5G ghi lại rõ ràng và sắc nét với quay phim 4K, tốc độ
                            30 FPS cho chất lượng hình ảnh trong video mượt mà. Cùng tính năng Live HDR giúp cân bằng ánh
                            sáng để làm cho chủ thể nổi bật, sáng hơn trong điều kiện thiếu sáng dù ban ngày hay lẫn ban
                            đêm.</p>
                        <p><a class="preventdefault"
                                href="https://www.thegioididong.com/images/42/239747/oppo-reno6-z-5g-42.jpg"
                                onclick="return false;"><img alt="OPPO Reno6 Z 5G - Live HDR"
                                    data-src="https://cdn.tgdd.vn/Products/Images/42/239747/oppo-reno6-z-5g-42.jpg"
                                    class="lazyload" title="OPPO Reno6 Z 5G - Live HDR"></a></p>
                        <p>Nhân đôi cảm xúc cùng tính năng video hiển thị kép cho phép bạn quay video cả camera trước và
                            camera sau, cả hai video được hiển thị đồng thời trên màn hình, thật là ý nghĩa để bạn có thể
                            ghi lại những khoảnh khắc đáng nhớ khi đi khám phá, du lịch.</p>
                        <p><a class="preventdefault"
                                href="https://www.thegioididong.com/images/42/239747/oppo-reno6-z-5g-41.jpg"
                                onclick="return false;"><img alt="OPPO Reno6Z 5G - Camera"
                                    data-src="https://cdn.tgdd.vn/Products/Images/42/239747/oppo-reno6-z-5g-41.jpg"
                                    class="lazyload" title="OPPO Reno6Z 5G - Camera"></a></p>
                        <h3>Thiết kế thời thượng, vẻ ngoài đầy ấn tượng</h3>
                        <p>Reno6 Z 5G với thiết kế nguyên khối siêu <a href="https://www.thegioididong.com/dtdd-mong-nhe"
                                target="_blank"
                                title="Tham khảo điện thoại với thiết kế mỏng nhẹ đang bán tại thegioididong.com">mỏng
                                nhẹ</a> 173 gam cùng các góc cạnh bo cong mềm mại, uyển chuyển mang đến sự mượt mà và tinh
                            tế, cho bạn dễ dàng cầm nắm trong quá trình sử dụng.&nbsp;</p>
                        <p><a class="preventdefault"
                                href="https://www.thegioididong.com/images/42/239747/oppo-reno6-z-5g-04.jpg"
                                onclick="return false;"><img alt="OPPO Reno6 Z 5G - Thiết kế mỏng nhẹ 173 g"
                                    data-src="https://cdn.tgdd.vn/Products/Images/42/239747/oppo-reno6-z-5g-04.jpg"
                                    class="lazyload" title="OPPO Reno6 Z 5G - Thiết kế mỏng nhẹ 173 g"></a></p>
                        <p>Mặt lưng của máy được trang bị hiệu ứng quang phổ kim cương tích hợp bởi rất nhiều lớp vật liệu
                            khác nhau tạo ra hiệu ứng màu độc đáo trong từng điều kiện môi trường và ánh sáng khác nhau.</p>
                        <p>Reno6 Z có 2 màu sắc độc đáo: Đen huyền bí và Bạc đa sắc được phủ một lớp Reno Glow cho mặt lưng
                            nhám, hạn chế bám bẩn, dấu vân tay.&nbsp;</p>
                        <p><a class="preventdefault"
                                href="https://www.thegioididong.com/images/42/239747/oppo-reno6-z-5g-03.jpg"
                                onclick="return false;"><img
                                    alt="OPPO Reno6 Z 5G - Thiết kế mặt lưng đẹp mắt với 2 màu sắc đi kèm"
                                    data-src="https://cdn.tgdd.vn/Products/Images/42/239747/oppo-reno6-z-5g-03.jpg"
                                    class="lazyload"
                                    title="OPPO Reno6 Z 5G - Thiết kế mặt lưng đẹp mắt với 2 màu sắc đi kèm"></a></p>
                        <p>Mặt trước của điện thoại cũng không kém phần ấn tượng với màn hình thiết kế kiểu cạnh viền mỏng
                            tích hợp <a href="https://www.thegioididong.com/dtdd-bao-mat-van-tay" target="_blank"
                                title="Tham khảo điện thoại có bảo mật vân tay đang bán tại Thegioididong.com">bảo mật vân
                                tay</a> dưới màn hình 3.0, cho tốc độ mở máy nhanh hơn, nhạy hơn và bảo mật tốt hơn.</p>
                        <p><a class="preventdefault"
                                href="https://www.thegioididong.com/images/42/239747/reno6-z-5g-29.jpg"
                                onclick="return false;"><img alt="OPPO Reno6 Z 5G - Cảm biến vân tay dưới màn hình"
                                    data-src="https://cdn.tgdd.vn/Products/Images/42/239747/reno6-z-5g-29.jpg"
                                    class="lazyload" title="OPPO Reno6 Z 5G - Cảm biến vân tay dưới màn hình"></a>
                        </p>
                        <h3>Không gian hiển thị lớn với <a href="https://www.thegioididong.com/dtdd-tu-6-inch-tro-len"
                                target="_blank"
                                title="Tham khảo điện thoại màn hình 6 inch trở lên đang bán tại thegioididong.com">màn hình
                                6.43 inch</a></h3>
                        <p>Reno6 Z 5G sẽ sở hữu <a href="https://www.thegioididong.com/hoi-dap/man-hinh-amoled-la-gi-905766"
                                target="_blank" title="Màn hình AMOLED là gì?">màn hình AMOLED</a>&nbsp;6.43 inch cùng độ
                            phân giải Full HD+, giúp tái tạo màu sắc cho độ chân thực cao hơn, đem đến hình ảnh sắc nét và
                            góc nhìn rộng hơn đáng kể.&nbsp;</p>
                        <p><a class="preventdefault"
                                href="https://www.thegioididong.com/images/42/239747/reno6-z-5g-24.jpg"
                                onclick="return false;"><img alt="OPPO Reno6 Z 5G - Trang bị màn hình AMOLED"
                                    data-src="https://cdn.tgdd.vn/Products/Images/42/239747/reno6-z-5g-24.jpg"
                                    class="lazyload" title="OPPO Reno6 Z 5G - Trang bị màn hình AMOLED"></a></p>
                        <p>Không những thế màn hình của thiết bị được bảo vệ bởi kính cường lực Gorilla Glass 5 tăng độ bền
                            cho máy, giúp máy càng trở nên cứng cáp hơn hẳn, hạn chế được các va đập, trầy xước.</p>
                        <p><a class="preventdefault"
                                href="https://www.thegioididong.com/images/42/239747/reno6-z-5g-20.jpg"
                                onclick="return false;"><img alt="OPPO Reno6 Z 5G - Thiết kế"
                                    data-src="https://cdn.tgdd.vn/Products/Images/42/239747/reno6-z-5g-20.jpg"
                                    class="lazyload" title="OPPO Reno6 Z 5G - Thiết kế"></a></p>
                        <p>Để mắt người dùng luôn thoải mái khi sử dụng điện thoại, đặc biệt trong thời gian dài, màn hình
                            Reno6 Z 5G đã&nbsp;đạt&nbsp;được chứng nhận màn hình bảo vệ mắt toàn diện bởi SGS.</p>
                        <p><a class="preventdefault"
                                href="https://www.thegioididong.com/images/42/239747/reno6-z-5g-25.jpg"
                                onclick="return false;"><img
                                    alt="OPPO Reno6 Z 5G - Màn hình đạt được chứng nhận bảo vệ mắt toàn diện bởi SGS"
                                    data-src="https://cdn.tgdd.vn/Products/Images/42/239747/reno6-z-5g-25.jpg"
                                    class="lazyload"
                                    title="OPPO Reno6 Z 5G - Màn hình đạt được chứng nhận bảo vệ mắt toàn diện bởi SGS"></a>
                        </p>
                        <p>Ngoài ra, máy còn đạt các chứng nhận của Netflix HD và Amazon Prime video HD cho bạn trải nghiệm
                            các bộ phim điện ảnh hay truyền hình yêu thích trên nền tảng xem phim tốt nhất.&nbsp;</p>
                        <p><a class="preventdefault"
                                href="https://www.thegioididong.com/images/42/239747/reno6-z-5g-26.jpg"
                                onclick="return false;"><img
                                    alt="OPPO Reno6 Z 5G - Đạt các chứng nhận của Netflix HD và Amazon Prime video HD"
                                    data-src="https://cdn.tgdd.vn/Products/Images/42/239747/reno6-z-5g-26.jpg"
                                    class="lazyload"
                                    title="OPPO Reno6 Z 5G - Đạt các chứng nhận của Netflix HD và Amazon Prime video HD"></a>
                        </p>
                        <h3>Hiệu năng mạnh mẽ, cân được nhiều tác vụ</h3>
                        <p>Reno6 Z 5G được trang bị con chip MediaTek Dimensity 800U 5G 8 nhân, với con chip này người dùng
                            có thể thoải mái trải nghiệm các game đồ họa hot nhất hiện nay như: Liên Quân, PUBG,... và các
                            thao tác cơ bản hằng ngày như lướt web, xem youtube đều diễn ra một cách mượt mà, trơn
                            tru.&nbsp;</p>
                        <p><a class="preventdefault"
                                href="https://www.thegioididong.com/images/42/239747/oppo-reno6-z-5g-2.jpg"
                                onclick="return false;"><img alt="OPPO Reno6 Z 5G - Trang bị chip Dimensity 800U 5G"
                                    data-src="https://cdn.tgdd.vn/Products/Images/42/239747/oppo-reno6-z-5g-2.jpg"
                                    class="lazyload" title="OPPO Reno6 Z 5G - Trang bị chip Dimensity 800U 5G"></a>
                        </p>
                        <p>Máy sở hữu <a href="https://www.thegioididong.com/dtdd-oppo-ram-8gb" target="_blank"
                                title="Tham khảo điện thoại OPPO RAM 8 GB đang bán tại thegioididong.com">RAM 8 GB</a> cùng
                            công nghệ cải tiến bạn có thể mở rộng RAM thêm đến 5 GB giúp bạn xử lý tác vụ đa nhiệm được mượt
                            hơn, hạn chế tình trạng giật hay đơ máy. Bạn cũng có thể lưu trữ nhiều tài liệu cũng như tải các
                            ứng dụng cần thiết, các game giải trí yêu thích với <a
                                href="https://www.thegioididong.com/dtdd-oppo-rom-128gb" target="_blank"
                                title="Tham khảo Điện thoại OPPO ROM 128 GB đang bán tại thegioididong,com">bộ nhớ trong 128
                                GB</a>.</p>
                        <p><a class="preventdefault"
                                href="https://www.thegioididong.com/images/42/239747/reno6-z-5g-30.jpg"
                                onclick="return false;"><img alt="OPPO Reno6Z 5G - RAM"
                                    data-src="https://cdn.tgdd.vn/Products/Images/42/239747/reno6-z-5g-30.jpg"
                                    class="lazyload" title="OPPO Reno6Z 5G - RAM"></a></p>
                        <p>Reno6 Z được hỗ trợ kết nối mạng <a href="https://www.thegioididong.com/dtdd-5g" target="_blank"
                                title="Tham khảo điện thoại hỗ trợ 5G đang bán tại thegioididong.com">5G</a>, mang đến tốc
                            độ truyền tải nhanh hơn gấp nhiều lần khi so sánh với mạng 4G, từ đó mà việc tải dữ liệu được
                            diễn ra nhanh chóng, độ trễ được hạ xuống mức thấp nhất sẽ giúp ích rất nhiều cho các nhu cầu
                            giải trí đặc biệt là game online.</p>
                        <p><a class="preventdefault"
                                href="https://www.thegioididong.com/images/42/239747/reno6-z-5g-14.jpg"
                                onclick="return false;"><img
                                    alt="OPPO Reno6 Z 5G - Với kết nối 5G tăng cảm giác trải nghiệm tốt hơn"
                                    data-src="https://cdn.tgdd.vn/Products/Images/42/239747/reno6-z-5g-14.jpg"
                                    class="lazyload"
                                    title="OPPO Reno6 Z 5G - Với kết nối 5G tăng cảm giác trải nghiệm tốt hơn"></a></p>
                        <p>Hệ thống làm mát đa năng được tích hợp tấm tản nhiệt ngay trên phần mềm và phần cứng giúp điện
                            thoại luôn được làm mát. Ngoài ra, máy còn hỗ trợ chế độ Game Focus có thể tắt được hết các cuộc
                            gọi, tin nhắn,... để bạn có thể tập trung vào các trận đấu mà không bị làm phiền.</p>
                        <h3>Viên pin lớn, hỗ trợ <a href="https://www.thegioididong.com/dtdd-sac-pin-nhanh" target="_blank"
                                title="Tham khảo điện thoại sạc pin nhanh đang bán tại thegioididong.com">sạc nhanh</a> 30 W
                        </h3>
                        <p>Reno6 Z 5G được tích hợp viên pin dung lượng lớn 4.310 mAh đáp ứng tốt cho nhu cầu sử dụng của
                            người dùng như xem phim hay chơi game cả ngày dài mà không bị hết pin quá nhanh.</p>
                        <p><a class="preventdefault"
                                href="https://www.thegioididong.com/images/42/239747/reno6-z-5g-12.jpg"
                                onclick="return false;"><img alt="OPPO Reno6 Z 5G - Dung lượng pin lớn 4310 mAh"
                                    data-src="https://cdn.tgdd.vn/Products/Images/42/239747/reno6-z-5g-12.jpg"
                                    class="lazyload" title="OPPO Reno6 Z 5G - Dung lượng pin lớn 4310 mAh"></a></p>
                        <p>Ngoài ra, Reno6 Z 5G còn hỗ trợ sạc siêu nhanh VOOC 30 W sạc qua cổng Type-C, máy có thể sạc đầy
                            100% pin chỉ khoảng 52 phút, rất là nhanh và tiện lợi, bạn có thể làm được nhiều công việc hơn,
                            tiết kiệm tối đa thời gian sạc pin, tự do giải trí mà không lo sạc hoài.</p>
                        <p><a class="preventdefault"
                                href="https://www.thegioididong.com/images/42/239747/reno6-z-5g-31.jpg"
                                onclick="return false;"><img alt="OPPO Reno6 Z 5G - Hỗ trợ sạc nhanh 30 W"
                                    data-src="https://cdn.tgdd.vn/Products/Images/42/239747/reno6-z-5g-31.jpg"
                                    class="lazyload" title="OPPO Reno6 Z 5G - Hỗ trợ sạc nhanh 30 W"></a></p>
                        <p>Reno6 Z 5G với thiết kế tinh tế, cụm camera với nhiều tính năng chuyên nghiệp, hiệu năng ổn định,
                            phần mềm được tối ưu hoá thông minh. Đây không chỉ là một sản phẩm mà nó còn là người bạn đồng
                            hành lâu dài, hỗ trợ bạn tạo ra những cảm xúc thăng hoa trong những khoảnh khắc đáng nhớ.</p>
                    </div>
                    <div class="bg-article"></div>
                    <a href="javascript:showBlockTabArticle()" class="btn-detail jsArticle">
                        <span>Xem thêm</span>
                    </a>
                </div> --}}
                <div class="box-border">
                    <div class="rating">
                        <p class="rating__title">Đánh giá Điện thoại OPPO Reno6 Z 5G</p>
                        <div class="rating-star left">
                            <div class="rating-left">
                                <div class="rating-top">
                                    <p class="point">5.0</p>
                                    <div class="list-star">
                                        <i class="icondetail-ratestar"></i>
                                        <i class="icondetail-ratestar"></i>
                                        <i class="icondetail-ratestar"></i>
                                        <i class="icondetail-ratestar"></i>
                                        <i class="icondetail-ratestar"></i>
                                    </div>
                                    <a href="/dtdd/oppo-reno6-z-5g/danh-gia" class="rating-total">1 đánh giá</a>

                                </div>
                                <ul class="rating-list">
                                    <li>
                                        <div class="number-star">
                                            5
                                            <i class="icondetail-blackstar"></i>
                                        </div>
                                        <div class="timeline-star">
                                            <p class="timing" style="width: 100%"></p>
                                        </div>
                                        <a href="/dtdd/oppo-reno6-z-5g/danh-gia?s=5&amp;p=1"
                                            class="number-percent">100%</a>
                                    </li>
                                    <li>
                                        <div class="number-star">
                                            4
                                            <i class="icondetail-blackstar"></i>
                                        </div>
                                        <div class="timeline-star">
                                            <p class="timing" style="width: 0%"></p>
                                        </div>
                                        <a href="/dtdd/oppo-reno6-z-5g/danh-gia?s=4&amp;p=1" class="number-percent">0%</a>
                                    </li>
                                    <li>
                                        <div class="number-star">
                                            3
                                            <i class="icondetail-blackstar"></i>
                                        </div>
                                        <div class="timeline-star">
                                            <p class="timing" style="width: 0%"></p>
                                        </div>
                                        <a href="/dtdd/oppo-reno6-z-5g/danh-gia?s=3&amp;p=1" class="number-percent">0%</a>
                                    </li>
                                    <li>
                                        <div class="number-star">
                                            2
                                            <i class="icondetail-blackstar"></i>
                                        </div>
                                        <div class="timeline-star">
                                            <p class="timing" style="width: 0%"></p>
                                        </div>
                                        <a href="/dtdd/oppo-reno6-z-5g/danh-gia?s=2&amp;p=1" class="number-percent">0%</a>
                                    </li>
                                    <li>
                                        <div class="number-star">
                                            1
                                            <i class="icondetail-blackstar"></i>
                                        </div>
                                        <div class="timeline-star">
                                            <p class="timing" style="width: 0%"></p>
                                        </div>
                                        <a href="/dtdd/oppo-reno6-z-5g/danh-gia?s=1&amp;p=1" class="number-percent">0%</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="comment comment--all ratingLst">
                        <div class="comment-item par" id="khach1">
                            <div class="item-top">
                                <p class="txtname">Khách 1</p>
                            </div>
                            <div class="item-rate">
                                <div class="comment-star">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </div>
                            </div>
                            <div class="comment-content">
                                <p class="cmt-txt">Sản phẩm này sử dụng rất tốt</p>
                            </div>
                            <div class="item-click">
                                <a href="javascript:showRatingCmtChild('khach1')" class="click-cmt">
                                    <i class="icondetail-comment"></i>
                                    <span class="cmtr">1 Thảo luận</span>
                                </a>
                                <div class="khach1 reply hide">
                                    <input placeholder="Nhập thảo luận của bạn">
                                    <a href="javascript:ratingRelply();" class="rrSend">GỬI</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-item khach1 childC-item hide">
                            <div class="item-top">
                                <p class="txtname">Võ Trần Minh Trí</p>
                                <span class="qtv">QTV</span>
                            </div>
                            <div class="item-rate">
                            </div>
                            <div class="comment-content">
                                <p class="cmt-txt">Dạ em chào anh.<br>Cảm ơn anh đã mua hàng tại T&T
                                    Mobile.&nbsp;<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="comment-btn">
                        <a href="/reviewlist" class="comment-btn-item right-arrow"><span>Xem tất cả đánh
                                giá</span></a>
                    </div>
                </div>
            </div>
            <div class='box-main-right'>
                {{-- <form action="{{ route('addCart') }}" method='get'> --}}
                <div class="scrolling_inner" style="margin-bottom: 10px">
                    <h4 style="margin-bottom: 10px">Lựa chọn phiên bản:</h4>
                    <select name="idChiTiet" class="select-phien-ban" onchange="layGia(value);" id="phienBan">
                        @foreach ($danhSachChiTiet as $tp)
                            <option value="{{ $tp->id }}">{{ $tp->ram }}/{{ $tp->bo_nho_trong }} -
                                {{ $tp->ten_mau_sac }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="box04 box-normal">
                    <div class="price-one">
                        <div class="box-price">
                            <div class="listproduct" style="display: block;margin-bottom: 10px;">
                                @if ($danhSachChiTiet[0]->phan_tram_giam == 0)
                                    <strong class="price" style="font-size: 20px">Giá:
                                        {{ number_format($danhSachChiTiet[0]->gia, 0) }}₫</strong>
                                @else
                                    <div class="box-p">
                                        <p class="price-old black" style="text-decoration: none;">Giá chưa giảm:
                                            {{ number_format($danhSachChiTiet[0]->gia, 0) }}₫</p>
                                        <span
                                            class="percent">-{{ $danhSachChiTiet[0]->phan_tram_giam * 100 }}%</span>
                                    </div>
                                    <strong class="price" style="font-size: 20px; color:red">Giá giảm:
                                        {{ number_format($danhSachChiTiet[0]->gia - $danhSachChiTiet[0]->gia * $danhSachChiTiet[0]->phan_tram_giam, 0) }}₫
                                    </strong>
                                @endif
                            </div>
                            <span class="label label--black">Trả góp 0%</span>
                        </div>
                    </div>
                </div>
                <div class="block block-price1">
                    <div class="block-button normal">
                        <button type="button" onclick="addCart()" class="btn-buynow jsBuy"
                            style="border: none;width: 350px;cursor: pointer;">THÊM SẢN PHẨM VÀO GIỎ
                        </button>
                    </div>
                </div>
                {{-- </form> --}}
                <p class="parameter-title">Cấu hình Điện thoại {{ $dienThoai->ten_san_pham }}</p>
                <div class="parameter">
                    <ul class="parameter-list 239747 active">
                        <li data-index="0" data-prop="0">
                            <p class="lileft">Màn hình:</p>
                            <div class="liright">
                                <span class="comma">{{ $thongSoKyThuat->cong_nghe_man_hinh }}</span>
                                <span class="comma">{{ $thongSoKyThuat->man_hinh_rong }}</span>
                                <span class="">{{ $thongSoKyThuat->do_phan_giai }}</span>
                            </div>
                        </li>
                        <li data-index="0" data-prop="0">
                            <p class="lileft">Hệ điều hành:</p>
                            <div class="liright">
                                <span class="">{{ $thongSoKyThuat->he_dieu_hanh }}</span>
                            </div>
                        </li>
                        <li data-index="0" data-prop="0">
                            <p class="lileft">Camera sau:</p>
                            <div class="liright">
                                <span class="">{{ $thongSoKyThuat->sau_phan_giai }}</span>
                            </div>
                        </li>
                        <li data-index="0" data-prop="0">
                            <p class="lileft">Camera trước:</p>
                            <div class="liright">
                                <span class="">{{ $thongSoKyThuat->truoc_phan_giai }}</span>
                            </div>
                        </li>
                        <li data-index="0" data-prop="0">
                            <p class="lileft">Chip:</p>
                            <div class="liright">
                                <span class="">{{ $thongSoKyThuat->chip_xu_ly }}</span>
                            </div>
                        </li>
                        <li data-index="0" data-prop="0">
                            <p class="lileft">RAM:</p>
                            <div class="liright">
                                <span class="">{{ $thongSoKyThuat->ram }}</span>
                            </div>
                        </li>
                        <li data-index="0" data-prop="0">
                            <p class="lileft">Bộ nhớ trong:</p>
                            <div class="liright">
                                <span class="">{{ $thongSoKyThuat->bo_nho_trong }}</span>
                            </div>
                        </li>
                        <li data-index="0" data-prop="0">
                            <p class="lileft">SIM:</p>
                            <div class="liright">
                                <span class="comma">{{ $thongSoKyThuat->sim }}</span>
                                <span class="">{{ $thongSoKyThuat->mang_di_dong }}</span>
                            </div>
                        </li>
                        <li data-index="0" data-prop="0">
                            <p class="lileft">Pin, Sạc:</p>
                            <div class="liright">
                                <span class="comma">{{ $thongSoKyThuat->dung_luong_pin }}</span>
                                <span class="">{{ $thongSoKyThuat->ho_tro_sac_toi_da }}</span>
                            </div>
                        </li>
                    </ul>
                    <a href="javascript:showBlockTabSpecification()"><span class="btn-detail btn-short-spec ">
                            <span>Xem thêm cấu hình chi tiết</span>
                        </span></a>
                </div>
            </div>
            <div class='related'>
                <p class="related-ttl">Xem thêm điện thoại khác</p>
                <div class="box-scroll p-slide">
                    <div class="listproduct owl-carousel owl-loaded owl-drag">
                        <div class="owl-stage-outer" data-box-id='boxscroll'>
                            <div class="owl-stage"
                                style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2640px;">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="owl-item active" style="width: 240px;">
                                        <div class="item" data-id="239747">
                                            <a href="/dtdd/oppo-reno6-z-5g?src=osp&amp;itm_source=detail&amp;itm_medium=product_card&amp;itm_campaign=viewed"
                                                data-s="Nomal" data-site="1" data-pro="3" data-cache="True">
                                                <div class="item-label">
                                                    <span class="lb-tragop">Trả góp 0%</span>
                                                </div>
                                                <div class="item-img 12321312312">
                                                    <img class=" ls-is-cached lazyloaded" alt="Điện thoại OPPO Reno6 Z 5G"
                                                        src="{{ asset('assets/user/images/oppo-reno6-z-5g-aurora.jpg') }}">
                                                </div>
                                                <h3 title="Điện thoại OPPO Reno6 Z 5G">
                                                    OPPO Reno6 Z 5G
                                                </h3>
                                                <strong class="price">9.490.000₫</strong>
                                                <div class="item-rating">
                                                    <p>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                    </p>
                                                    <p class="item-rating-total">1</p>
                                                </div>
                                            </a>
                                            <div class="item-bottom">
                                                <a href="#" class="shiping"></a>
                                            </div>
                                            <a href="javascript:void(0)" class="item-ss">
                                                <i></i>
                                                So sánh
                                            </a>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"
                                data-prev-id='btnboxscroll'><span aria-label="Previous">‹</span></button>
                            <button type="button" role="presentation" class="owl-next"
                                data-next-id='btnboxscroll'><span aria-label="Next">›</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="loadingcover" style="display: none;" id="loading">
        <p class="csslder">
            <span class="csswrap">
                <span class="cssdot"></span>
                <span class="cssdot"></span>
                <span class="cssdot"></span>
            </span>
        </p>
    </div>
    <script src="{{ asset('assets/user/js/product-detail.js') }}"></script>
    <script>
        const loading = document.getElementsByClassName("loadingcover");

        function fadeOutEffect() {
            var fadeTarget = document.getElementById("loading");
            var fadeEffect = setInterval(function() {
                if (!fadeTarget.style.opacity) {
                    fadeTarget.style.opacity = 1;
                }
                if (fadeTarget.style.opacity > 0) {
                    fadeTarget.style.opacity -= 0.1;
                } else {
                    clearInterval(fadeEffect);
                    loading[0].style = "display:none";
                }
            }, 50);
        }

        function layGia($idChiTiet) {
            $.ajax({
                type: 'get',
                url: '{{ URL::to('layGia') }}',
                data: {
                    'idChiTiet': $idChiTiet,
                },
                success: function(data) {
                    $('.listproduct').html(data);
                }
            });
            loading[0].style = "display:block";
            setTimeout(fadeOutEffect, 500);
        }

        function addCart() {
            var select = document.getElementById("phienBan");
            var idChiTiet = select.value;
            $.ajax({
                type: 'get',
                url: '{{ URL::to('addCart') }}',
                data: {
                    'idChiTiet': idChiTiet,
                },
                success: function(data) {
                    $('.nav-bar-cart').html(data);
                    if (!$('.nav-bar-cart').hasClass('active')) {
                        $('.nav-bar-cart').removeClass("active");
                        $('.nav-bar-cart').addClass("active");
                    }
                    alertify.success('Thêm sản phẩm vào giỏ thành công');
                },
                error: function(request, status, error) {
                    alertify.error('Thêm sản phẩm vào giỏ không thành công');
                }
            });
            loading[0].style = "display:block";
            setTimeout(fadeOutEffect, 500);
        }
    </script>
@endsection
