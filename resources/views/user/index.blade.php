@extends('user.layouts.app')
@section('content')
    <div class="big-banner">
        <script src="//embed.bannerboo.com/b769c8973a127" async></script>
    </div>
    <div class='banner'>
        <section>
            <div class="slider-banner carousel theme">
                <div class="stage-outer">
                    <div class="stage"
                        style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 5600px;">
                        <div class="banner-item" style="width: 800px;">
                            <div class="item">
                                <a aria-label="slide" href="#">
                                    <img width="800" height="200" src="{{ asset('assets/user/images/banner-1.png') }}" />
                                </a>
                            </div>
                        </div>
                        <div class="banner-item" style="width: 800px;">
                            <div class="item">
                                <a aria-label="slide" href="#">
                                    <img width="800" height="200" src="{{ asset('assets/user/images/banner-2.png') }}" />
                                </a>
                            </div>
                        </div>
                        <div class="banner-item" style="width: 800px;">
                            <div class="item">
                                <a aria-label="slide" href="#">
                                    <img width="800" height="200" src="{{ asset('assets/user/images/banner-3.png') }}" />
                                </a>
                            </div>
                        </div>
                        <div class="banner-item" style="width: 800px;">
                            <div class="item">
                                <a aria-label="slide" href="#">
                                    <img width="800" height="200" src="{{ asset('assets/user/images/banner-4.png') }}" />
                                </a>
                            </div>
                        </div>
                        <div class="banner-item" style="width: 800px;">
                            <div class="item">
                                <a aria-label="slide" href="#">
                                    <img width="800" height="200" src="{{ asset('assets/user/images/banner-5.png') }}" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav">
                    <button type="button" role="presentation" class="btn-prev" id="prev">
                        <p style="font-size: 46px;color: #999;position: relative;bottom: 3px;">‹</p>
                    </button>
                    <button type="button" role="presentation" class="btn-next" id="next"
                        style="font-size: 46px;color: #999;">
                        <p style="font-size: 46px;color: #999;position: relative;bottom: 3px;">›</p>
                    </button>
                </div>
                <div class="dots">
                    <button role="button" class="dot active" data-index="0">
                        <span></span>
                    </button>
                    <button role="button" class="dot" data-index="1">
                        <span></span>
                    </button>
                    <button role="button" class="dot" data-index="2">
                        <span></span>
                    </button>
                    <button role="button" class="dot" data-index="3">
                        <span></span>
                    </button>
                    <button role="button" class="dot" data-index="4">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="right-banner">
                <a href="#" class="right-banner-item"></a>
                <a aria-label="slide" href="#">
                    <img src="{{ asset('assets/user/images/banner-right-1.png') }}">
                </a>
                <a href="#" class="right-banner-item"></a>
                <a aria-label="slide" href="#">
                    <img src="{{ asset('assets/user/images/banner-right-2.png') }}">
                </a>
            </div>
        </section>
    </div>
    {{-- <section class="content-1">
        <div class="sticky-menu-top fixed">
            <a href="#top-deal-soc" class="scrollto2 active">Top deal sốc</a>
            <a href="#dtdd" class="scrollto2">Điện thoại</a>
        </div>
    </section> --}}
    <section class="wrapper content-2 ct-11-11 hotsale-fs">
        <div class="container product boxfs">
            <h3 class="title" id="top-deal-soc">
                <img src="{{ asset('assets/user/images/TGDD-Hotsaledesk-1200x120.png') }}">
                <img src="{{ asset('assets/user/images/topdealdesk-640x88.png') }}"
                    class="animate__animated tgdd animate__bounce" id="title-text-animation">
            </h3>
            <div class="list noall owl-list col5 pd  listproduct owl-carousel owl-theme"
                style="opacity: 1; display: block;">
                <div class="owl-wrapper-outer">
                    <div class="owl-wrapper" style="width: 9044px; left: 0px; display: block;">
                        @foreach ($danhSachDienThoai as $tp)
                            <div class="owl-item" style="width: 228px;">
                                <div class="item" data-id="">
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
                                            <strong class="price">{{ number_format($tp->gia, 0) }}₫</strong>
                                        @else
                                            <div class="box-p">
                                                <p class="price-old black">{{ number_format($tp->gia, 0) }}₫</p>
                                                <span class="percent">-{{ $tp->phan_tram_giam * 100 }}%</span>
                                            </div>
                                            <strong
                                                class="price" style="color:red">{{ number_format($tp->gia - $tp->gia * $tp->phan_tram_giam, 0) }}₫
                                            </strong>
                                        @endif
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
                        @endforeach
                    </div>
                </div>
                <div class="owl-controls clickable">
                    <div class="owl-buttons">
                        <div class="owl-prev">‹</div>
                        <div class="owl-next">›</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="title"
            style="margin-top:5px;height:120px;background-image:url('{{ asset('assets/user/images/DienThoai-NewLogo-1200x120.png') }}')"
            id="dtdd"></div>
        <section style="background: #fff;">
            <div class="box-filter" style="padding:0">
                <section>
                    <div class="box-quicklink" style="background: #fff;border-bottom: 1px solid #f3f3f3 !important;">
                        <div class="lst-quickfilter wrap" style="margin-top: 10px;margin-left: 33px;">
                            <a href="javascript:filterProduct(0);"
                                class="box-quicklink__item bd-radius quicklink-logo active" id="tatca">
                                <p style="width: 83px;text-align:center;font-weight:bold">TẤT CẢ</p>
                            </a>
                            <a href="javascript:filterProduct(1);" class="box-quicklink__item bd-radius quicklink-logo">
                                <img src="{{ asset('assets/user/images/logo-iphone.png') }}" class="no-text"
                                    width="30">
                            </a>
                            <a href="javascript:filterProduct(7);" class="box-quicklink__item bd-radius quicklink-logo">
                                <img src="{{ asset('assets/user/images/logo-samsung.png') }}" class="no-text"
                                    width="30">
                            </a>
                            <a href="javascript:filterProduct(5);" class="box-quicklink__item bd-radius quicklink-logo">
                                <img src="{{ asset('assets/user/images/logo-oppo.jpg') }}" class="no-text"
                                    width="30">
                            </a>
                            <a href="javascript:filterProduct(8);" class="box-quicklink__item bd-radius quicklink-logo">
                                <img src="{{ asset('assets/user/images/logo-vivo.jpg') }}" class="no-text"
                                    width="30">
                            </a>
                            <a href="javascript:filterProduct(9);" class="box-quicklink__item bd-radius quicklink-logo">
                                <img src="{{ asset('assets/user/images/logo-xiaomi.png') }}" class="no-text"
                                    width="30">
                            </a>
                            <a href="javascript:filterProduct(6);" class="box-quicklink__item bd-radius quicklink-logo">
                                <img src="{{ asset('assets/user/images/logo-realme.png') }}" class="no-text"
                                    width="30">
                            </a>
                            <a href="javascript:filterProduct(4);" class="box-quicklink__item bd-radius quicklink-logo">
                                <img src="{{ asset('assets/user/images/logo-nokia.jpg') }}" class="no-text"
                                    width="30">
                            </a>
                            <a href="javascript:filterProduct(2);" class="box-quicklink__item bd-radius quicklink-logo">
                                <img src="{{ asset('assets/user/images/logo-itel.jpg') }}" class="no-text"
                                    width="30">
                            </a>
                            <a href="javascript:filterProduct(3);" class="box-quicklink__item bd-radius quicklink-logo">
                                <img src="{{ asset('assets/user/images/logo-masstel.png') }}" class="no-text"
                                    width="30">
                            </a>
                        </div>
                    </div>
                </section>
            </div>
            {{-- <div class="box-sort">
                <p class="sort-total">
                    <b>10</b>
                    Điện thoại
                    <strong style="display: none;"></strong>
                </p>
                <div class="box-checkbox extend">
                    <a href="javascript:filterDiscount();" class="c-checkitem">
                        <span class="tick-checkbox"></span>
                        <p>Giảm giá</p>
                    </a>
                    <a href="javascript:filterZeroPercent();" class="c-checkitem">
                        <span class="tick-checkbox"></span>
                        <p>Góp 0%</p>
                    </a>
                    <a href="javascript:filterMonopoly();" class="c-checkitem">
                        <span class="tick-checkbox"></span>
                        <p>Độc quyền</p>
                    </a>
                    <a href="javascript:filterNew();" class="c-checkitem">
                        <span class="tick-checkbox"></span>
                        <p>Mới</p>
                    </a>
                </div>
            </div> --}}
            {{-- <div class="sort-select" id="select">
                <p class="click-sort">Xếp theo: <span class="sort-show">Nổi bật</span></p>
                <div class="sort-select-main sort " style="display: none;" id="list">
                    <p><a href="javascript:;" class="check" data-id="4"><i></i>Nổi bật</a></p>
                    <p><a href="javascript:;" class="" data-id="3"><i></i>% Giảm</a></p>
                    <p><a href="javascript:;" class="" data-id="3"><i></i>Giá cao đến thấp</a></p>
                    <p><a href="javascript:;" class="" data-id="2"><i></i>Giá thấp đến cao</a></p>
                </div>
            </div> --}}
            <div class="filter-product g3926">
                <label class="filterprice choose" id="0" onclick="filterProductByPrice(1,this.id)"><i
                        class="icontgdd-opt"></i>&nbsp;Nổi
                    bật</label>
                <label class="filterprice" id="0" onclick="filterProductByPrice(2,this.id)"><i
                        class="icontgdd-opt"></i>&nbsp;% giảm nhiều</label>
                <label class="filterprice" id="0" onclick="filterProductByPrice(3,this.id)"><i
                        class="icontgdd-opt"></i>&nbsp;Giá thấp đến cao</label>
            </div>
            <div class="product noibat" style="border-bottom: 1px solid #f3f3f3 !important;">
                <div id="group3926-priorityProduct" class="list priority ">
                    <div class="item">
                        <a href="{{ route('productDetail', ['sanPhamId' => $danhSachDienThoai[1]->id]) }}" class=" main-contain">
                            <div class="item-label">
                                <span class="lb-tragop">Trả góp 0%</span>
                            </div>
                            <div class="item-img">
                                <img src="{{ asset('storage/images/' . $danhSachDienThoai[1]->hinh_anh) }}" width="210"
                                    height="210">
                            </div>
                            <h3 style="color:#333">{{ $danhSachDienThoai[1]->ten_san_pham }}</h3>
                            @if ($danhSachDienThoai[1]->phan_tram_giam == 0)
                                <strong
                                    class="price">{{ number_format($danhSachDienThoai[1]->gia, 0) }}₫</strong>
                            @else
                                <div class="box-p">
                                    <p class="price-old black">{{ number_format($danhSachDienThoai[1]->gia, 0) }}₫</p>
                                    <span
                                        class="percent">-{{ $danhSachDienThoai[1]->phan_tram_giam * 100 }}%</span>
                                </div>
                                <strong
                                    class="price">{{ number_format($danhSachDienThoai[1]->gia - $danhSachDienThoai[1]->gia * $danhSachDienThoai[1]->phan_tram_giam, 0) }}₫
                                </strong>
                            @endif
                            <div class="item-rating">
                                <p>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </p>
                                <p class="item-rating-total">29</p>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ route('productDetail', ['sanPhamId' => $danhSachDienThoai[2]->id]) }}" class=" main-contain">
                            <div class="item-label">
                                <span class="lb-tragop">Trả góp 0%</span>
                            </div>
                            <div class="item-img">
                                <img src="{{ asset('storage/images/' . $danhSachDienThoai[2]->hinh_anh) }}" width="210"
                                    height="210">
                            </div>
                            <h3 style="color:#333">{{ $danhSachDienThoai[2]->ten_san_pham }}</h3>
                            @if ($danhSachDienThoai[0]->phan_tram_giam == 0)
                                <strong
                                    class="price">{{ number_format($danhSachDienThoai[2]->gia, 0) }}₫</strong>
                            @else
                                <div class="box-p">
                                    <p class="price-old black">{{ number_format($danhSachDienThoai[2]->gia, 0) }}₫</p>
                                    <span
                                        class="percent">-{{ $danhSachDienThoai[2]->phan_tram_giam * 100 }}%</span>
                                </div>
                                <strong
                                    class="price">{{ number_format($danhSachDienThoai[2]->gia - $danhSachDienThoai[2]->gia * $danhSachDienThoai[2]->phan_tram_giam, 0) }}₫
                                </strong>
                            @endif
                            <div class="item-rating">
                                <p>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </p>
                                <p class="item-rating-total">29</p>
                            </div>

                        </a>

                    </div>
                </div>
            </div>
            <div class="container-product">
                <ul class="listproduct all">
                    @foreach ($danhSachDienThoai as $tp)
                        <li class="item">
                            <a href="{{ route('productDetail', ['sanPhamId' => $tp->id]) }}">
                                <div class="item-label">
                                    <span class="lb-tragop">Trả góp 0%</span>
                                </div>
                                <div class="item-img item-img_42">
                                    <img class="thumb ls-is-cached lazyloaded" alt=""
                                        src="{{ asset('storage/images/' . $tp->hinh_anh) }}">
                                </div>
                                <h3>
                                    {{ $tp->ten_san_pham }}
                                </h3>
                                @if ($tp->phan_tram_giam == 0)
                                    <strong class="price">{{ number_format($tp->gia, 0) }}₫</strong>
                                @else
                                    <div class="box-p">
                                        <p class="price-old black">{{ number_format($tp->gia, 0) }}₫</p>
                                        <span class="percent">-{{ $tp->phan_tram_giam * 100 }}%</span>
                                    </div>
                                    <strong
                                        class="price" style="color:red">{{ number_format($tp->gia - $tp->gia * $tp->phan_tram_giam, 0) }}₫
                                    </strong>
                                @endif
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
                            <a href="javascript:;" class="item-ss">
                                <i></i>
                                So sánh
                            </a>
                        </li>
                    @endforeach
                </ul>
                <div class="view-more ">
                    <a href="javascript:loadMore();" id="load-more">Xem thêm <span class="remain">5</span> Điện
                        thoại</a>
                </div>
            </div>
        </section>
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
    <script src="{{ asset('assets/user/js/home.js') }}"></script>
    <script>
        //Lọc sản phẩm
        const btnFilterBoxBrand = document.querySelectorAll(".box-quicklink__item.bd-radius.quicklink-logo");
        const loading = document.getElementsByClassName("loadingcover");
        const filterTheoGia = document.querySelectorAll(".filterprice");
        const productNoiBat = document.getElementsByClassName("product noibat");

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

        [...btnFilterBoxBrand].forEach((item) => item.addEventListener("click", function(i) {
            if (item.id == 'tatca') {
                productNoiBat[0].style = 'display:block';
            } else {
                productNoiBat[0].style = 'display:none';
            }

            [...btnFilterBoxBrand].forEach(itemlist => itemlist.classList.remove("active"));
            if (item.className != "box-quicklink__item bd-radius quicklink-logo active") {
                item.className += " active";
            }
            loading[0].style = "display:block";
            setTimeout(fadeOutEffect, 500);
        }));

        function filterProduct($value) {
            for (var i = 0; i < filterTheoGia.length; i++) {
                filterTheoGia[i].id = $value;
            }

            $.ajax({
                type: 'get',
                url: '{{ URL::to('filterProduct') }}',
                data: {
                    'idBrand': $value
                },
                success: function(data) {
                    $('.listproduct.all').html(data);
                }
            });
        }

        function filterProductByPrice($value, $idBrand) {
            $.ajax({
                type: 'get',
                url: '{{ URL::to('filterProductByPrice') }}',
                data: {
                    'idBrand': $idBrand,
                    'type': $value
                },
                success: function(data) {
                    $('.listproduct.all').html(data);
                }
            });
        }

        [...filterTheoGia].forEach((item) => item.addEventListener("click", function(i) {
            [...filterTheoGia].forEach(itemlist => itemlist.classList.remove("choose"));
            if (item.className != "filterprice choose") {
                item.className += " choose";
            }
            loading[0].style = "display:block";
            setTimeout(fadeOutEffect, 500);
        }));
    </script>
@endsection
