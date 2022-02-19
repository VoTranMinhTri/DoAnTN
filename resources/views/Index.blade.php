@extends('layouts.app')
@section('content')
    <div class='banner'>
        <section>
            <div class="slider-banner carousel theme">
                <div class="stage-outer">
                    <div class="stage"
                        style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 5600px;">
                        <div class="banner-item" style="width: 800px;">
                            <div class="item">
                                <a aria-label="slide" href="#">
                                    <img width="800" height="200" src="{{ asset('assets/images/banner-1.png') }}" />
                                </a>
                            </div>
                        </div>
                        <div class="banner-item" style="width: 800px;">
                            <div class="item">
                                <a aria-label="slide" href="#">
                                    <img width="800" height="200" src="{{ asset('assets/images/banner-2.png') }}" />
                                </a>
                            </div>
                        </div>
                        <div class="banner-item" style="width: 800px;">
                            <div class="item">
                                <a aria-label="slide" href="#">
                                    <img width="800" height="200" src="{{ asset('assets/images/banner-3.png') }}" />
                                </a>
                            </div>
                        </div>
                        <div class="banner-item" style="width: 800px;">
                            <div class="item">
                                <a aria-label="slide" href="#">
                                    <img width="800" height="200" src="{{ asset('assets/images/banner-4.png') }}" />
                                </a>
                            </div>
                        </div>
                        <div class="banner-item" style="width: 800px;">
                            <div class="item">
                                <a aria-label="slide" href="#">
                                    <img width="800" height="200" src="{{ asset('assets/images/banner-5.png') }}" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav">
                    <button type="button" role="presentation" class="btn-prev" id="prev">
                        <span aria-label="Previous">
                            "<" </span>
                    </button>
                    <button type="button" role="presentation" class="btn-next" id="next">
                        <span aria-label="Next">
                            ">"
                        </span>
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
                    <img src="{{ asset('assets/images/banner-right-1.png') }}">
                </a>
                <a href="#" class="right-banner-item"></a>
                <a aria-label="slide" href="#">
                    <img src="{{ asset('assets/images/banner-right-2.png') }}">
                </a>
            </div>
        </section>
        <script src="{{ asset('assets/js/banner.js') }}"></script>
    </div>
    <div class="box-filter">
        <section>
            <div class="box-quicklink">
                <div class="lst-quickfilter wrap">
                    <a href="#" class="box-quicklink__item bd-radius quicklink-logo">
                        <img src="{{ asset('assets/images/logo-iphone.png') }}" class="no-text" width="30">
                    </a>
                    <a href="#" class="box-quicklink__item bd-radius quicklink-logo">
                        <img src="{{ asset('assets/images/logo-samsung.png') }}" class="no-text" width="30">
                    </a>
                    <a href="#" class="box-quicklink__item bd-radius quicklink-logo">
                        <img src="{{ asset('assets/images/logo-oppo.jpg') }}" class="no-text" width="30">
                    </a>
                    <a href="#" class="box-quicklink__item bd-radius quicklink-logo">
                        <img src="{{ asset('assets/images/logo-vivo.jpg') }}" class="no-text" width="30">
                    </a>
                    <a href="#" class="box-quicklink__item bd-radius quicklink-logo">
                        <img src="{{ asset('assets/images/logo-xiaomi.png') }}" class="no-text" width="30">
                    </a>
                    <a href="#" class="box-quicklink__item bd-radius quicklink-logo">
                        <img src="{{ asset('assets/images/logo-realme.png') }}" class="no-text" width="30">
                    </a>
                    <a href="#" class="box-quicklink__item bd-radius quicklink-logo">
                        <img src="{{ asset('assets/images/logo-nokia.jpg') }}" class="no-text" width="30">
                    </a>
                    <a href="#" class="box-quicklink__item bd-radius quicklink-logo">
                        <img src="{{ asset('assets/images/logo-mobell.jpg') }}" class="no-text" width="30">
                    </a>
                    <a href="#" class="box-quicklink__item bd-radius quicklink-logo">
                        <img src="{{ asset('assets/images/logo-itel.jpg') }}" class="no-text" width="30">
                    </a>
                    <a href="#" class="box-quicklink__item bd-radius quicklink-logo">
                        <img src="{{ asset('assets/images/logo-masstel.png') }}" class="no-text" width="30">
                    </a>
                    <a href="#" class="box-quicklink__item bd-radius quicklink-logo">
                        <img src="{{ asset('assets/images/logo-energizer.jpg') }}" class="no-text" width="30">
                    </a>
                </div>
            </div>
        </section>
    </div>
    <section>
        <div class="box-sort">
            <p class="sort-total" style="color: #fff;">
                <b>10</b>
                Điện thoại
                <strong style="display: none;"></strong>
            </p>
            <div class="box-checkbox extend">
                <a href="javascript:filterDiscount();" class="c-checkitem">
                    <span class="tick-checkbox"></span>
                    <p style="color: #fff;">Giảm giá</p>
                </a>
                <a href="javascript:filterZeroPercent();" class="c-checkitem">
                    <span class="tick-checkbox"></span>
                    <p style="color: #fff;">Góp 0%</p>
                </a>
                <a href="javascript:filterMonopoly();" class="c-checkitem">
                    <span class="tick-checkbox"></span>
                    <p style="color: #fff;">Độc quyền</p>
                </a>
                <a href="javascript:filterNew();" class="c-checkitem">
                    <span class="tick-checkbox"></span>
                    <p style="color: #fff;">Mới</p>
                </a>
            </div>
        </div>
        <script src="{{ asset('assets/js/box-checkbox.js') }}"></script>
        <div class="sort-select" id="select">
            <p class="click-sort">Xếp theo: <span class="sort-show">Nổi bật</span></p>
            <div class="sort-select-main sort " style="display: none;" id="list">
                <p><a href="javascript:;" class="check" data-id="4"><i></i>Nổi bật</a></p>
                <p><a href="javascript:;" class="" data-id="3"><i></i>% Giảm</a></p>
                <p><a href="javascript:;" class="" data-id="3"><i></i>Giá cao đến thấp</a></p>
                <p><a href="javascript:;" class="" data-id="2"><i></i>Giá thấp đến cao</a></p>
            </div>
        </div>
        <script src="{{ asset('assets/js/sort-select.js') }}"></script>
        <div class="container-product">
            <ul class="listproduct">
                <li class="item">
                    <a href="/productdetail">
                        <div class="item-label">
                            <span class="lb-tragop">Trả góp 0%</span>
                        </div>
                        <div class="item-img item-img_42">
                            <img class="thumb ls-is-cached lazyloaded" alt="OPPO Reno6 Z 5G"
                                src="{{ asset('assets/images/oppo-reno6-z-5g-aurora.jpg') }}">
                        </div>
                        <h3>
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
                    <a href="javascript:;" class="item-ss">
                        <i></i>
                        So sánh
                    </a>
                </li>
                <li class="item">
                    <a href="#">
                        <div class="item-label">
                            <span class="lb-tragop">Trả góp 0%</span>
                        </div>
                        <div class="item-img item-img_42">
                            <img class="thumb ls-is-cached lazyloaded" alt="OPPO Reno6 Z 5G"
                                src="{{ asset('assets/images/oppo-reno6-z-5g-aurora.jpg') }}">
                        </div>
                        <h3>
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
                    <a href="javascript:;" class="item-ss">
                        <i></i>
                        So sánh
                    </a>
                </li>
                <li class="item">
                    <a href="#">
                        <div class="item-label">
                            <span class="lb-tragop">Trả góp 0%</span>
                        </div>
                        <div class="item-img item-img_42">
                            <img class="thumb ls-is-cached lazyloaded" alt="OPPO Reno6 Z 5G"
                                src="{{ asset('assets/images/oppo-reno6-z-5g-aurora.jpg') }}">
                        </div>
                        <h3>
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
                    <a href="javascript:;" class="item-ss">
                        <i></i>
                        So sánh
                    </a>
                </li>
                <li class="item">
                    <a href="#">
                        <div class="item-label">
                            <span class="lb-tragop">Trả góp 0%</span>
                        </div>
                        <div class="item-img item-img_42">
                            <img class="thumb ls-is-cached lazyloaded" alt="OPPO Reno6 Z 5G"
                                src="{{ asset('assets/images/oppo-reno6-z-5g-aurora.jpg') }}">
                        </div>
                        <h3>
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
                    <a href="javascript:;" class="item-ss">
                        <i></i>
                        So sánh
                    </a>
                </li>
                <li class="item">
                    <a href="#">
                        <div class="item-label">
                            <span class="lb-tragop">Trả góp 0%</span>
                        </div>
                        <div class="item-img item-img_42">
                            <img class="thumb ls-is-cached lazyloaded" alt="OPPO Reno6 Z 5G"
                                src="{{ asset('assets/images/oppo-reno6-z-5g-aurora.jpg') }}">
                        </div>
                        <h3>
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
                    <a href="javascript:;" class="item-ss">
                        <i></i>
                        So sánh
                    </a>
                </li>
                <li class="item">
                    <a href="#">
                        <div class="item-label">
                            <span class="lb-tragop">Trả góp 0%</span>
                        </div>
                        <div class="item-img item-img_42">
                            <img class="thumb ls-is-cached lazyloaded" alt="OPPO Reno6 Z 5G"
                                src="{{ asset('assets/images/oppo-reno6-z-5g-aurora.jpg') }}">
                        </div>
                        <h3>
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
                    <a href="javascript:;" class="item-ss">
                        <i></i>
                        So sánh
                    </a>
                </li>
                <li class="item">
                    <a href="#">
                        <div class="item-label">
                            <span class="lb-tragop">Trả góp 0%</span>
                        </div>
                        <div class="item-img item-img_42">
                            <img class="thumb ls-is-cached lazyloaded" alt="OPPO Reno6 Z 5G"
                                src="{{ asset('assets/images/oppo-reno6-z-5g-aurora.jpg') }}">
                        </div>
                        <h3>
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
                    <a href="javascript:;" class="item-ss">
                        <i></i>
                        So sánh
                    </a>
                </li>
                <li class="item">
                    <a href="#">
                        <div class="item-label">
                            <span class="lb-tragop">Trả góp 0%</span>
                        </div>
                        <div class="item-img item-img_42">
                            <img class="thumb ls-is-cached lazyloaded" alt="OPPO Reno6 Z 5G"
                                src="{{ asset('assets/images/oppo-reno6-z-5g-aurora.jpg') }}">
                        </div>
                        <h3>
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
                    <a href="javascript:;" class="item-ss">
                        <i></i>
                        So sánh
                    </a>
                </li>
                <li class="item">
                    <a href="#">
                        <div class="item-label">
                            <span class="lb-tragop">Trả góp 0%</span>
                        </div>
                        <div class="item-img item-img_42">
                            <img class="thumb ls-is-cached lazyloaded" alt="OPPO Reno6 Z 5G"
                                src="{{ asset('assets/images/oppo-reno6-z-5g-aurora.jpg') }}">
                        </div>
                        <h3>
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
                    <a href="javascript:;" class="item-ss">
                        <i></i>
                        So sánh
                    </a>
                </li>
                <li class="item">
                    <a href="#">
                        <div class="item-label">
                            <span class="lb-tragop">Trả góp 0%</span>
                        </div>
                        <div class="item-img item-img_42">
                            <img class="thumb ls-is-cached lazyloaded" alt="OPPO Reno6 Z 5G"
                                src="{{ asset('assets/images/oppo-reno6-z-5g-aurora.jpg') }}">
                        </div>
                        <h3>
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
                    <a href="javascript:;" class="item-ss">
                        <i></i>
                        So sánh
                    </a>
                </li>
            </ul>
        </div>
    </section>
@endsection
