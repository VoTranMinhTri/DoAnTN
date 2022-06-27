@extends('user.layouts.app-detail')
@section('content')
    <section class='detail'>
        <ul class="breadcrumb">
            <li>
                <a href="/">Trang chủ</a>
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
                        @if ($soSaoTrungBinh > 4.5)
                            <i class="icondetail-star"></i>
                            <i class="icondetail-star"></i>
                            <i class="icondetail-star"></i>
                            <i class="icondetail-star"></i>
                            <i class="icondetail-star"></i>
                        @elseif($soSaoTrungBinh > 3.5)
                            <i class="icondetail-star"></i>
                            <i class="icondetail-star"></i>
                            <i class="icondetail-star"></i>
                            <i class="icondetail-star"></i>
                            <i class="icondetail-star-dark"></i>
                        @elseif($soSaoTrungBinh > 2.5)
                            <i class="icondetail-star"></i>
                            <i class="icondetail-star"></i>
                            <i class="icondetail-star"></i>
                            <i class="icondetail-star-dark"></i>
                            <i class="icondetail-star-dark"></i>
                        @elseif($soSaoTrungBinh > 1.5)
                            <i class="icondetail-star"></i>
                            <i class="icondetail-star"></i>
                            <i class="icondetail-star-dark"></i>
                            <i class="icondetail-star-dark"></i>
                            <i class="icondetail-star-dark"></i>
                        @elseif($soSaoTrungBinh > 0.5)
                            <i class="icondetail-star"></i>
                            <i class="icondetail-star-dark"></i>
                            <i class="icondetail-star-dark"></i>
                            <i class="icondetail-star-dark"></i>
                            <i class="icondetail-star-dark"></i>
                        @else
                            <i class="icondetail-star-dark"></i>
                            <i class="icondetail-star-dark"></i>
                            <i class="icondetail-star-dark"></i>
                            <i class="icondetail-star-dark"></i>
                            <i class="icondetail-star-dark"></i>
                        @endif
                    </p>
                    <p class="detail-rate-total">1 <span>đánh giá</span></p>
                </div>
            </div>
            <div class="box-right">
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
                                        @if (count($danhSachHinhAnhNoiBat) > 0)
                                            @foreach ($danhSachHinhAnhNoiBat as $tp)
                                                <div class='owl-item' style="width: 710px;">
                                                    <a href="#" class="slider-item ">
                                                        <img src="{{ asset('storage/images/' . $tp->hinh_anh) }}"
                                                            width="710" height="394">
                                                    </a>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class='owl-item' style="width: 710px;">
                                                <a href="#" class="slider-item ">
                                                    <img src="{{ asset('storage/images/default/default.png') }}"
                                                        width="710" height="394">
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="owl-nav">
                                    <button type="button" role="presentation" class="owl-prev disabled"
                                        data-prev-id="showtab"></button>
                                    @if (count($danhSachHinhAnhNoiBat) > 1)
                                        <button type="button" role="presentation" class="owl-next"
                                            data-next-id="showtab"></button>
                                    @else
                                        <button type="button" role="presentation" class="owl-next" style="display: none;pointer-events: none;cursor:none"
                                            data-next-id="showtab"></button>
                                    @endif
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
                                            @if (count($danhSachHinhAnhMauSac) > 0)
                                                @foreach ($danhSachHinhAnhMauSac as $ha)
                                                    @if ($ha->mau_sac_id == $tp->mau_sac_id)
                                                        <div class='owl-item' style="width: 710px;">
                                                            <a href="#" class="slider-item ">
                                                                <img src="{{ asset('storage/images/' . $ha->hinh_anh) }}"
                                                                    class='owl-lazy' style='opacity: 1;' alt=""
                                                                    width="710" height="473.33px">
                                                            </a>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @else
                                                <div class='owl-item' style="width: 710px;">
                                                    <a href="#" class="slider-item ">
                                                        <img src="{{ asset('storage/images/default/default.png') }}"
                                                            width="710" height="473.33px">
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="owl-nav">
                                        <button type="button" role="presentation" class="owl-prev disabled"
                                            data-prev-id="showtab"><?php echo count($danhSachHinhAnhMauSac)?></button>
                                        @if (count($danhSachHinhAnhMauSac) > 1)
                                            <button type="button" role="presentation" class="owl-next"
                                                data-next-id="showtab"></button>
                                        @else
                                            <button type="button" role="presentation" class="owl-next" style="display: none;pointer-events: none;cursor:none"
                                                data-next-id="showtab"></button>
                                        @endif
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
                                        <img alt="Bạc" width="41" height="41" loading="lazy"
                                            class=" lazyloaded" src="{{ asset('storage/images/' . $tp->hinh_anh) }}">
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
                            data-gallery-id="specification-gallery" data-color-id="0"
                            data-thump-name="Thông số kỹ thuật">
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
                                                    src="{{ asset('storage/images/' . $hinhAnhMoHop->hinh_anh) }}" style="height: 567px; width:1020px"
                                                    >
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
                                        <img style="cursor: move;"
                                            src="{{ asset('storage/images/' . $tp->hinh_anh) }}">
                                    @endforeach
                                </div>
                            </div>

                        </div>
                        <div class="content-t" data-tab-id="tab-specification-gallery-0"
                            data-gallery-id="specification-gallery">
                            <a class="top-flag" name="top-tskt"></a>
                            <div class="img">
                                <img src="{{ asset('storage/images/' . $hinhAnhThongSoKyThuat->hinh_anh) }}" style="height: 567px; width:800px"
                                    >
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
                                                    <span class="">{{ $thongSoKyThuat->man_hinh_rong }}</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ctLeft">
                                                    <p>Độ sáng tối đa:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <span class="">{{ $thongSoKyThuat->do_sang_toi_da }}</span>
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
                                                    <span class="">{{ $thongSoKyThuat->sau_phan_giai }}</span>
                                                </div>
                                            </li>
                                            <li data-id="31" data-group-id="1841" data-index="2">
                                                <div class="ctLeft">
                                                    <p>Quay phim:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <p class="circle">
                                                        <a href="#"
                                                            target="_blank">{{ $thongSoKyThuat->quay_phim }}</a>
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
                                                    <span class="">{{ $thongSoKyThuat->truoc_phan_giai }}</span>
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
                                                    <span class="">{{ $thongSoKyThuat->toc_do_cpu }}</span>
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
                                                    <span class="">{{ $thongSoKyThuat->bo_nho_trong }}</span>
                                                </div>
                                            </li>
                                            <li data-id="7803" data-group-id="22" data-index="3">
                                                <div class="ctLeft">
                                                    <p>Bộ nhớ còn lại (khả dụng) khoảng:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <span class="">{{ $thongSoKyThuat->bo_nho_con_lai }}</span>
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
                                                        <a href="#"
                                                            target="_blank">{{ $thongSoKyThuat->wifi }}</a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li data-id="68" data-group-id="24" data-index="8">
                                                <div class="ctLeft">
                                                    <p>GPS:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <p class="circle">
                                                        <a href="#"
                                                            target="_blank">{{ $thongSoKyThuat->gps }}</a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li data-id="69" data-group-id="24" data-index="9">
                                                <div class="ctLeft">
                                                    <p>Bluetooth:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <p class="circle">
                                                        <a href="#"
                                                            target="_blank">{{ $thongSoKyThuat->bluetooth }}</a>
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
                                                    <span class="">{{ $thongSoKyThuat->jack_tai_nghe }}</span>
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
                                                    <span class="">{{ $thongSoKyThuat->dung_luong_pin }}</span>
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
                                                    <span class="">{{ $thongSoKyThuat->ho_tro_sac_toi_da }}</span>
                                                </div>
                                            </li>
                                            <li data-id="26847" data-group-id="2122" data-index="4">
                                                <div class="ctLeft">
                                                    <p>Sạc kèm theo máy:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <span class="">{{ $thongSoKyThuat->sac_kem_theo_may }}</span>
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
                                                    <span class="">{{ $thongSoKyThuat->khang_nuoc_bui }}</span>
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
                                                        <a href="#"
                                                            target="_blank">{{ $thongSoKyThuat->xem_phim }}</a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li data-id="33" data-group-id="19" data-index="7">
                                                <div class="ctLeft">
                                                    <p>Nghe nhạc:</p>
                                                </div>
                                                <div class="ctRight">
                                                    <p class="circle">
                                                        <a href="#"
                                                            target="_blank">{{ $thongSoKyThuat->nghe_nhac }}</a>
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
                                                    <span class="">{{ $thongSoKyThuat->thoi_diem_ra_mat }}</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                        src="{{ asset('storage/images/' . $hinhAnhMoHop->hinh_anh) }}" style="height:394px">
                </div>
                <div class="box-border">
                    <div class="rating">
                        <p class="rating__title">Đánh giá Điện thoại {{ $dienThoai->ten_san_pham }}</p>
                        <div class="rating-star left" style="width: 60%;">
                            <div class="rating-left" style="width: 80%;">
                                <div class="rating-top">
                                    <p class="point">{{ $soSaoTrungBinh }}</p>
                                    <div class="list-star">
                                        @if ($soSaoTrungBinh > 4.5)
                                            <i class="icondetail-ratestar"></i>
                                            <i class="icondetail-ratestar"></i>
                                            <i class="icondetail-ratestar"></i>
                                            <i class="icondetail-ratestar"></i>
                                            <i class="icondetail-ratestar"></i>
                                        @elseif($soSaoTrungBinh > 3.5)
                                            <i class="icondetail-ratestar"></i>
                                            <i class="icondetail-ratestar"></i>
                                            <i class="icondetail-ratestar"></i>
                                            <i class="icondetail-ratestar"></i>
                                            <i class="icondetail-darkstar"></i>
                                        @elseif($soSaoTrungBinh > 2.5)
                                            <i class="icondetail-ratestar"></i>
                                            <i class="icondetail-ratestar"></i>
                                            <i class="icondetail-ratestar"></i>
                                            <i class="icondetail-darkstar"></i>
                                            <i class="icondetail-darkstar"></i>
                                        @elseif($soSaoTrungBinh > 1.5)
                                            <i class="icondetail-ratestar"></i>
                                            <i class="icondetail-ratestar"></i>
                                            <i class="icondetail-darkstar"></i>
                                            <i class="icondetail-darkstar"></i>
                                            <i class="icondetail-darkstar"></i>
                                        @elseif($soSaoTrungBinh > 0.5)
                                            <i class="icondetail-ratestar"></i>
                                            <i class="icondetail-darkstar"></i>
                                            <i class="icondetail-darkstar"></i>
                                            <i class="icondetail-darkstar"></i>
                                            <i class="icondetail-darkstar"></i>
                                        @else
                                            <i class="icondetail-darkstar"></i>
                                            <i class="icondetail-darkstar"></i>
                                            <i class="icondetail-darkstar"></i>
                                            <i class="icondetail-darkstar"></i>
                                            <i class="icondetail-darkstar"></i>
                                        @endif

                                    </div>
                                    <a href="/dtdd/oppo-reno6-z-5g/danh-gia"
                                        class="rating-total">{{ count($danhSachDanhGia) }} đánh giá</a>
                                </div>
                                <ul class="rating-list">
                                    <li>
                                        <div class="number-star">
                                            5
                                            <i class="icondetail-blackstar"></i>
                                        </div>
                                        <div class="timeline-star">
                                            <p class="timing" style="width: {{ $namsao }}%"></p>
                                        </div>
                                        <a href="/dtdd/oppo-reno6-z-5g/danh-gia?s=5&amp;p=1"
                                            class="number-percent">{{ $namsao }}%</a>
                                    </li>
                                    <li>
                                        <div class="number-star">
                                            4
                                            <i class="icondetail-blackstar"></i>
                                        </div>
                                        <div class="timeline-star">
                                            <p class="timing" style="width: {{ $bonsao }}%"></p>
                                        </div>
                                        <a href="/dtdd/oppo-reno6-z-5g/danh-gia?s=4&amp;p=1"
                                            class="number-percent">{{ $bonsao }}%</a>
                                    </li>
                                    <li>
                                        <div class="number-star">
                                            3
                                            <i class="icondetail-blackstar"></i>
                                        </div>
                                        <div class="timeline-star">
                                            <p class="timing" style="width: {{ $basao }}%"></p>
                                        </div>
                                        <a href="/dtdd/oppo-reno6-z-5g/danh-gia?s=3&amp;p=1"
                                            class="number-percent">{{ $basao }}%</a>
                                    </li>
                                    <li>
                                        <div class="number-star">
                                            2
                                            <i class="icondetail-blackstar"></i>
                                        </div>
                                        <div class="timeline-star">
                                            <p class="timing" style="width: {{ $haisao }}%"></p>
                                        </div>
                                        <a href="/dtdd/oppo-reno6-z-5g/danh-gia?s=2&amp;p=1"
                                            class="number-percent">{{ $haisao }}%</a>
                                    </li>
                                    <li>
                                        <div class="number-star">
                                            1
                                            <i class="icondetail-blackstar"></i>
                                        </div>
                                        <div class="timeline-star">
                                            <p class="timing" style="width: {{ $motsao }}%"></p>
                                        </div>
                                        <a href="/dtdd/oppo-reno6-z-5g/danh-gia?s=1&amp;p=1"
                                            class="number-percent">{{ $motsao }}%</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @if (count($danhSachDanhGia) > 0)
                        <div class="comment comment--all ratingLst">
                            <div class="comment-item par" id="khach1">
                                <div class="item-top">
                                    <p class="txtname" style="text-transform:none;">{{ $danhSachDanhGia[0]->username }}
                                    </p>
                                </div>
                                <div class="item-rate">
                                    <div class="comment-star">
                                        @if ($danhSachDanhGia[0]->so_sao > 4.5)
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        @elseif($danhSachDanhGia[0]->so_sao > 3.5)
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star-dark"></i>
                                        @elseif($danhSachDanhGia[0]->so_sao > 2.5)
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star-dark"></i>
                                            <i class="icon-star-dark"></i>
                                        @elseif($danhSachDanhGia[0]->so_sao > 1.5)
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star-dark"></i>
                                            <i class="icon-star-dark"></i>
                                            <i class="icon-star-dark"></i>
                                        @elseif($danhSachDanhGia[0]->so_sao > 0.5)
                                            <i class="icon-star"></i>
                                            <i class="icon-star-dark"></i>
                                            <i class="icon-star-dark"></i>
                                            <i class="icon-star-dark"></i>
                                            <i class="icon-star-dark"></i>
                                        @else
                                            <i class="icon-star-dark"></i>
                                            <i class="icon-star-dark"></i>
                                            <i class="icon-star-dark"></i>
                                            <i class="icon-star-dark"></i>
                                            <i class="icon-star-dark"></i>
                                        @endif
                                    </div>
                                </div>
                                <div class="comment-content">
                                    <p class="cmt-txt">{{ $danhSachDanhGia[0]->noi_dung }}</p>
                                </div>
                                <div class="item-click">
                                    <a href="javascript:showRatingCmtChild('{{ $danhSachDanhGia[0]->username }}')"
                                        class="click-cmt">
                                        <i class="icondetail-comment"></i>
                                        <span class="cmtr">Thảo luận</span>
                                    </a>
                                    <div class="{{ $danhSachDanhGia[0]->username }} reply hide">
                                        <input placeholder="Nhập thảo luận của bạn" style="color: #3e5569;"
                                            name="noidung" id='noidung'>
                                        <input type='hidden' value='{{ $danhSachDanhGia[0]->id }}' name="danhgiaid">
                                        <a href="javascript:themPhanHoi();" class="rrSend">GỬI</a>
                                    </div>
                                </div>
                            </div>
                            <div class='phanhoi'>
                                @if (count($danhSachPhanHoi) > 0)
                                    @foreach ($danhSachPhanHoi as $tp)
                                        @if ($tp->danh_gia_id == $danhSachDanhGia[0]->id)
                                            <div
                                                class="comment-item {{ $danhSachDanhGia[0]->username }} childC-item hide">
                                                <div class="item-top">
                                                    <p class="txtname" style="text-transform:none">{{ $tp->username }}
                                                    </p>
                                                    @if ($tp->loai_tai_khoan_id < 5)
                                                        <span class="qtv">QTV</span>
                                                    @endif
                                                </div>
                                                <div class="item-rate">
                                                </div>
                                                <div class="comment-content">
                                                    <p class="cmt-txt">{{ $tp->noi_dung }}</p>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="comment-btn">
                            <a href="{{ route('reviewlist', ['dienThoaiId' => $dienThoai->id]) }}"
                                class="comment-btn-item right-arrow"><span>Xem tất cả đánh
                                    giá</span></a>
                        </div>
                    @else
                        <div class="comment-btn" style="display: block">
                            <p style="font-size: 17px;text-align: center;">Chưa có đánh giá dành cho sản phẩm</p>
                        </div>
                    @endif

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
                            <div class="listproduct" style="display: block;margin-bottom: 10px;border-top:0">
                                @if ($danhSachChiTiet[0]->phan_tram_giam == 0)
                                    <strong class="price" style="font-size: 20px">Giá:
                                        {{ number_format($danhSachChiTiet[0]->gia, 0, ',', '.') }}₫</strong>
                                @else
                                    <div class="box-p">
                                        <p class="price-old black" style="text-decoration: none;">Giá chưa giảm:
                                            {{ number_format($danhSachChiTiet[0]->gia, 0, ',', '.') }}₫</p>
                                        <span class="percent">-{{ $danhSachChiTiet[0]->phan_tram_giam * 100 }}%</span>
                                    </div>
                                    <strong class="price" style="font-size: 20px; color:red">Giá giảm:
                                        {{ number_format($danhSachChiTiet[0]->gia - $danhSachChiTiet[0]->gia * $danhSachChiTiet[0]->phan_tram_giam, 0, ',', '.') }}₫
                                    </strong>
                                @endif
                            </div>
                            <span class="label label--black">Trả góp 0%</span>
                        </div>
                    </div>
                </div>
                <div class="block block-price1" style="box-shadow: none;">
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
                    <div class="listproduct owl-carousel owl-loaded owl-drag"style="border: 1px solid #e0e0e0;border-radius: 8px;padding: 15px 15px 20px;">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" data-box-id='boxscroll'
                                style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2640px;">
                                @foreach ($danhSachDienThoai as $tp)
                                    <div class="owl-item active" style="width: 240px;">
                                        <div class="item">
                                            <a href="{{ route('productDetail', ['sanPhamId' => $tp->id]) }}"
                                                data-s="Nomal" data-site="1" data-pro="3" data-cache="True">
                                                <div class="item-label">
                                                    <span class="lb-tragop">Trả góp 0%</span>
                                                </div>
                                                <div class="item-img 12321312312">
                                                    <img class=" ls-is-cached lazyloaded"
                                                        src="{{ asset('storage/images/' . $tp->hinh_anh) }}">
                                                </div>
                                                <h3>
                                                    {{ $tp->ten_san_pham }}
                                                </h3>
                                                @if ($tp->phan_tram_giam == 0)
                                                    <strong
                                                        class="price">{{ number_format($tp->gia, 0, ',', '.') }}₫</strong>
                                                @else
                                                    <div class="box-p">
                                                        <p class="price-old black">
                                                            {{ number_format($tp->gia, 0, ',', '.') }}₫</p>
                                                        <span class="percent">-{{ $tp->phan_tram_giam * 100 }}%</span>
                                                    </div>
                                                    <strong class="price"
                                                        style="color:red">{{ number_format($tp->gia - $tp->gia * $tp->phan_tram_giam, 0, ',', '.') }}₫
                                                    </strong>
                                                @endif
                                                <div class="item-rating">
                                                    <p>
                                                        @if ($tp->so_sao_trung_binh > 4.5)
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                        @elseif($tp->so_sao_trung_binh > 3.5)
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star-dark"></i>
                                                        @elseif($tp->so_sao_trung_binh > 2.5)
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star-dark"></i>
                                                            <i class="icon-star-dark"></i>
                                                        @elseif($tp->so_sao_trung_binh > 1.5)
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star-dark"></i>
                                                            <i class="icon-star-dark"></i>
                                                            <i class="icon-star-dark"></i>
                                                        @elseif($tp->so_sao_trung_binh > 0.5)
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star-dark"></i>
                                                            <i class="icon-star-dark"></i>
                                                            <i class="icon-star-dark"></i>
                                                            <i class="icon-star-dark"></i>
                                                        @else
                                                            <i class="icon-star-dark"></i>
                                                            <i class="icon-star-dark"></i>
                                                            <i class="icon-star-dark"></i>
                                                            <i class="icon-star-dark"></i>
                                                            <i class="icon-star-dark"></i>
                                                        @endif
                                                    <p class="item-rating-total">{{ $tp->so_luot_danh_gia }}</p>
                                                </div>
                                            </a>
                                            <div class="item-bottom">
                                                <a href="#" class="shiping"></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"
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

        function themPhanHoi() {
            var noiDung = $('input[name="noidung"]').val();
            var danhGiaId = $('input[name="danhgiaid"]').val();
            const inputNoiDung = document.getElementById('noidung');
            $.ajax({
                type: 'get',
                url: '{{ URL::to('storePHDanhGiaKH') }}',
                data: {
                    'noiDung': noiDung,
                    'danhGiaId': danhGiaId,
                },
                success: function(data) {
                    $('.phanhoi').html(data);
                    inputNoiDung.value = '';
                },
                error: function(data) {
                    if (data.responseText == 0) {
                        window.location = "http://localhost:8000/signin";
                    } else {
                        alertify.error(data.responseText);
                    }
                }
            });
            loading[0].style = "display:block";
            setTimeout(fadeOutEffect, 500);
        }
    </script>
@endsection
