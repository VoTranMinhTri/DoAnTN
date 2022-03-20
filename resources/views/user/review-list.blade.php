@extends('user.layouts.app-other')
@section('content')
    <section class="rtPage">
        <ul class="breadcrumb">
            <li>
                <a href="/">Home</a>
                <meta property="position" content="1">
            </li>
            <li>
                <span>›</span>
                <a href="/productdetail">OPPO Reno6 Z 5G</a>
                <meta property="position" content="2">
            </li>
            <li>
                <span>›</span>
                <label style="font: 14px/18px Arial,Helvetica,sans-serif">Tất cả đánh giá</label>
            </li>
        </ul>
        <div class="detail-top detail-top--allrating clearfix">
            <h1 style="font-weight: normal;font-size: 22px;">1 đánh giá OPPO Reno6 Z 5G</h1>
        </div>
        <div class="frames-detail">
            <div class="box-pdt">
                <div class="box-pdt-img">
                    <img src="https://cdn.tgdd.vn/Products/Images/42/239747/oppo-reno6-z-5g-aurora-1-600x600.jpg" alt="">
                </div>
                <div class="box-pdt-content">
                    <h3 style="font: 14px/18px Arial,Helvetica,sans-serif;">OPPO Reno6 Z 5G</h3>
                    <p class="box-pdt-price">9.490.000₫</p>

                </div>
            </div>
            <div class="rating-star rating-viewall">
                <div class="rating-left">
                    <p class="point">5.0</p>
                    <div class="list-star">
                        <i class="icondetail-ratestar"></i>
                        <i class="icondetail-ratestar"></i>
                        <i class="icondetail-ratestar"></i>
                        <i class="icondetail-ratestar"></i>
                        <i class="icondetail-ratestar"></i>
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
                                <p class="timing" style="width: 100%"></p>
                            </div>
                            <p class="number-percent" onclick="ratingCmtList(1,5)">100%</p>
                        </li>
                        <li>
                            <div class="number-star">
                                4
                                <i class="icondetail-blackstar"></i>
                            </div>
                            <div class="timeline-star">
                                <p class="timing" style="width: 0%"></p>
                            </div>
                            <p class="number-percent" onclick="ratingCmtList(1,4)">0%</p>
                        </li>
                        <li>
                            <div class="number-star">
                                3
                                <i class="icondetail-blackstar"></i>
                            </div>
                            <div class="timeline-star">
                                <p class="timing" style="width: 0%"></p>
                            </div>

                            <p class="number-percent" onclick="ratingCmtList(1,3)">0%</p>
                        </li>
                        <li>
                            <div class="number-star">
                                2
                                <i class="icondetail-blackstar"></i>
                            </div>
                            <div class="timeline-star">
                                <p class="timing" style="width: 0%"></p>
                            </div>

                            <p class="number-percent" onclick="ratingCmtList(1,2)">0%</p>
                        </li>
                        <li>
                            <div class="number-star">
                                1
                                <i class="icondetail-blackstar"></i>
                            </div>
                            <div class="timeline-star">
                                <p class="timing" style="width: 0%"></p>
                            </div>

                            <p class="number-percent" onclick="ratingCmtList(1,1)">0%</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content-wrap">
            <div class="rating-search">
                <i class="icon-search"></i>
                <input type="text" placeholder="Tìm đánh giá theo nội dung" class="cmtKey">
            </div>
            <div class="filter-choose">
                <p class="filter-choose-ttl">Lọc theo:</p>
                <a href="javascript:" class="rtF0 check-filterstar active">Tất cả</a>
                <a href="javascript:" class="rtF5 check-filterstar">5 sao</a>
                <a href="javascript:" class="rtF4 check-filterstar">4 sao</a>
                <a href="javascript:" class="rtF3 check-filterstar">3 sao</a>
                <a href="javascript:" class="rtF2 check-filterstar">2 sao</a>
                <a href="javascript:" class="rtF1 check-filterstar">1 sao</a>
            </div>
            <div class="clearfix rtFilter">
                <div class="boxsort fright" data-val="1">
                    <p class="boxsort-ttl">Sắp xếp</p>
                    <div class="boxsort-click">
                        <p class="boxsort-click-show">Mới nhất</p>
                        <ul class="boxsort-list">
                            <li data-val="1">Mới nhất</li>
                            <li data-val="2">Hữu ích</li>
                            <li data-val="3">Đánh giá cao</li>
                            <li data-val="4">Đánh giá thấp</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="comment comment--all ratingLst">
                <div class="comment-item par" id="r-49950570">
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
        </div>
    </section>
    <script src="{{ asset('assets/user/js/review-list.js') }}"></script>
@endsection
