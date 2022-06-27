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
                                    <img width="800" height="200"
                                        src="{{ asset('assets/user/images/banner-1.png') }}" />
                                </a>
                            </div>
                        </div>
                        <div class="banner-item" style="width: 800px;">
                            <div class="item">
                                <a aria-label="slide" href="#">
                                    <img width="800" height="200"
                                        src="{{ asset('assets/user/images/banner-2.png') }}" />
                                </a>
                            </div>
                        </div>
                        <div class="banner-item" style="width: 800px;">
                            <div class="item">
                                <a aria-label="slide" href="#">
                                    <img width="800" height="200"
                                        src="{{ asset('assets/user/images/banner-3.png') }}" />
                                </a>
                            </div>
                        </div>
                        <div class="banner-item" style="width: 800px;">
                            <div class="item">
                                <a aria-label="slide" href="#">
                                    <img width="800" height="200"
                                        src="{{ asset('assets/user/images/banner-4.png') }}" />
                                </a>
                            </div>
                        </div>
                        <div class="banner-item" style="width: 800px;">
                            <div class="item">
                                <a aria-label="slide" href="#">
                                    <img width="800" height="200"
                                        src="{{ asset('assets/user/images/banner-5.png') }}" />
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
    @if(count($danhSachDienThoai) >0)
    <section class="wrapper content-2 ct-11-11 hotsale-fs" style="margin-top: 16px;">
        <section style="background: #fff;">
            <div style="padding: 20px;">
                <h1>Kết quả tìm kiếm: {{ count($danhSachDienThoai) }} kết quả.</h1>
            </div>
            <div class="filter-product g3926">
                <label class="filterprice" onclick="filterProductByPriceResultSearch(1,'{{ $search }}')"><i
                        class="icontgdd-opt"></i>&nbsp;Nổi
                    bật</label>
                <label class="filterprice" onclick="filterProductByPriceResultSearch(2,'{{ $search }}')"><i
                        class="icontgdd-opt"></i>&nbsp;% giảm nhiều</label>
                <label class="filterprice" onclick="filterProductByPriceResultSearch(3,'{{ $search }}')"><i
                        class="icontgdd-opt"></i>&nbsp;Giá thấp đến cao</label>
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
                                    <strong class="price">{{ number_format($tp->gia, 0,',','.') }}₫</strong>
                                @else
                                    <div class="box-p">
                                        <p class="price-old black">{{ number_format($tp->gia, 0,',','.') }}₫</p>
                                        <span class="percent">-{{ $tp->phan_tram_giam * 100 }}%</span>
                                    </div>
                                    <strong
                                        class="price" style="color:red">{{ number_format($tp->gia - $tp->gia * $tp->phan_tram_giam, 0,',','.') }}₫
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
                                    </p>

                                </div>
                            </a>
                            <div class="item-bottom">
                                <a href="#" class="shiping"></a>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div class="view-more ">
                    <a href="javascript:loadMore();" id="load-more">Xem thêm điện
                        thoại</a>
                </div>
            </div>
        </section>
    </section>
    @else
    <section style="margin-top: 16px;">
        <div class="report_text">
            <h1>Rất tiếc, T&T Mobile không tìm thấy kết quả nào phù hợp với từ khóa <strong>"{{ $search }}".</strong>
            </h1>
        </div>

        <div class="noresultsuggestion" style="color: #000;">
            <img src='{{ asset('assets/user/images/data-not-found.png') }}' style="width: 180px;margin-left: 11%;">
            <h3>Để tìm được kết quả chính xác hơn, bạn vui lòng:</h3>
            <ul>
                <li>Kiểm tra lỗi chính tả của từ khóa đã nhập</li>
                <li>Thử lại bằng từ khóa khác</li>
                <li>Thử lại bằng những từ khóa tổng quát hơn</li>
                <li>Thử lại bằng những từ khóa ngắn gọn hơn</li>
            </ul>
        </div>
        <div id="preloader">
            <div id="loader"></div>
        </div>
    </section>
    @endif
    <div class="loadingcover" style="display: none;" id="loading">
        <p class="csslder">
            <span class="csswrap">
                <span class="cssdot"></span>
                <span class="cssdot"></span>
                <span class="cssdot"></span>
            </span>
        </p>
    </div>
    <script src="{{ asset('assets/user/js/result-search.js') }}"></script>
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

        function filterProductByPriceResultSearch($value, $search) {
            $.ajax({
                type: 'get',
                url: '{{ URL::to('filterProductByPriceResultSearch') }}',
                data: {
                    'search':$search,
                    'type': $value
                },
                success: function(data) {
                    $('.listproduct.all').html(data);
                    let loadMoreBtn = document.querySelector('#load-more');
                    if (document.querySelectorAll(".listproduct.all .item").length <= 10) {
                        loadMoreBtn.style.display = 'none';
                    } else {
                        loadMoreBtn.style.display = 'block';
                    }
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
