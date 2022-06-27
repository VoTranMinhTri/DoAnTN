@extends('user.layouts.app-other')
@section('content')
    <section class="rtPage">
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
            <li>
                <span>›</span>
                <label style="font: 14px/18px Arial,Helvetica,sans-serif">Tất cả đánh giá</label>
            </li>
        </ul>
        <div class="detail-top detail-top--allrating clearfix">
            <h1 style="font-weight: normal;font-size: 22px;">{{ count($danhSachDanhGia) }} Đánh giá
                {{ $dienThoai->ten_san_pham }}</h1>
        </div>
        <div class="frames-detail">
            <div class="box-pdt">
                <div class="box-pdt-img">
                    <img src="{{ asset('storage/images/' . $hinhAnhDaiDien->hinh_anh) }}" alt="">
                </div>
                <div class="box-pdt-content" style="text-align: center;">
                    <h3 style="font: 14px/18px Arial,Helvetica,sans-serif;">{{ $dienThoai->ten_san_pham }}</h3>
                </div>
            </div>
            <div class="rating-star rating-viewall">
                <div class="rating-left">
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
                </div>
                <div class="rating-right">
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
        <div class="content-wrap">
            <div class="filter-choose">
                <p class="filter-choose-ttl">Lọc theo:</p>
                <a href="javascript:filterReview(0,{{ $dienThoai->id }})" class="rtF0 check-filterstar active">Tất cả</a>
                <a href="javascript:filterReview(5,{{ $dienThoai->id }})" class="rtF5 check-filterstar">5 sao</a>
                <a href="javascript:filterReview(4,{{ $dienThoai->id }})" class="rtF4 check-filterstar">4 sao</a>
                <a href="javascript:filterReview(3,{{ $dienThoai->id }})" class="rtF3 check-filterstar">3 sao</a>
                <a href="javascript:filterReview(2,{{ $dienThoai->id }})" class="rtF2 check-filterstar">2 sao</a>
                <a href="javascript:filterReview(1,{{ $dienThoai->id }})" class="rtF1 check-filterstar">1 sao</a>
            </div>
            <div class="comment comment--all ratingLst">
                @foreach ($danhSachDanhGia as $tp)
                    <div class="comment-item par">
                        <div class="item-top">
                            <p class="txtname" style="text-transform:none;">{{ $tp->username }}</p>
                        </div>
                        <div class="item-rate">
                            <div class="comment-star">
                                @if ($tp->so_sao > 4.5)
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                @elseif($tp->so_sao > 3.5)
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-dark"></i>
                                @elseif($tp->so_sao > 2.5)
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-dark"></i>
                                    <i class="icon-star-dark"></i>
                                @elseif($tp->so_sao > 1.5)
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-dark"></i>
                                    <i class="icon-star-dark"></i>
                                    <i class="icon-star-dark"></i>
                                @elseif($tp->so_sao > 0.5)
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
                            <p class="cmt-txt">{{ $tp->noi_dung }}</p>
                        </div>

                        <div class="item-click">
                            <a href="javascript:showRatingCmtChild('{{ $tp->username }}')" class="click-cmt">
                                <i class="icondetail-comment"></i>
                                <span class="cmtr">Thảo luận</span>
                            </a>
                            <div class="{{ $tp->username }} reply hide">
                                <input placeholder="Nhập thảo luận của bạn" style="color: #3e5569;"
                                name="noidung" id='noidung'>
                                <input type='hidden' value='{{ $tp->id }}' name="danhgiaid">
                                <a href="javascript:themPhanHoi();" class="rrSend">GỬI</a>
                            </div>
                        </div>
                    </div>
                    <div class='phanhoi'>
                        @if (count($danhSachPhanHoi) > 0)
                            @foreach ($danhSachPhanHoi as $ph)
                                @if ($ph->danh_gia_id == $tp->id)
                                    <div
                                        class="comment-item {{ $tp->username }} childC-item hide">
                                        <div class="item-top">
                                            <p class="txtname" style="text-transform:none">{{ $ph->username }}</p>
                                            @if ($ph->loai_tai_khoan_id < 5)
                                                <span class="qtv">QTV</span>
                                            @endif
                                        </div>
                                        <div class="item-rate">
                                        </div>
                                        <div class="comment-content">
                                            <p class="cmt-txt">{{ $ph->noi_dung }}</p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                @endforeach

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
    <script src="{{ asset('assets/user/js/review-list.js') }}"></script>
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

        function showRatingCmtChild(id) {
            var reply1 = document.getElementsByClassName(id + ' reply hide');
            reply1[0].className = reply1[0].className.replace(" hide", "");
            var reply2 = document.querySelectorAll('.' + id + '.childC-item.hide');
            console.log(reply2);
            if (reply2.length > 0) {
                [...reply2].forEach(itemlist => itemlist.classList.remove("hide"));
            }
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
                    if(data.responseText == 0){
                        window.location = "http://localhost:8000/signin";
                    }else{
                        alertify.error(data.responseText);
                    }
                }
            });
            loading[0].style = "display:block";
            setTimeout(fadeOutEffect, 500);

        }

        function filterReview($value,$dienThoaiId){
            $.ajax({
                type: 'get',
                url: '{{ URL::to('filterReview') }}',
                data: {
                    'sosao': $value,
                    'dienThoaiId' : $dienThoaiId,
                },
                success: function(data) {
                    $('.comment--all').html(data);
                }
            });
            loading[0].style = "display:block";
            setTimeout(fadeOutEffect, 500);
        }
    </script>
@endsection
