@extends('layouts.app')
@section('content')
<div class='banner'>
    <section>
        <div class="slider-banner carousel theme">
            <div class="stage-outer">
                <div class="stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 5600px;">
                    <div class="banner-item" style="width: 800px;">
                        <div class="item">
                            <a aria-label="slide" href="#">
                                <img width="800" height="200" src="{{ asset('assets/images/banner-1.png') }}"/>
                            </a>
                        </div>
                    </div>
                    <div class="banner-item" style="width: 800px;">
                        <div class="item">
                            <a aria-label="slide" href="#">
                                <img width="800" height="200" src="{{ asset('assets/images/banner-2.png') }}"/>
                            </a>
                        </div>
                    </div>
                    <div class="banner-item" style="width: 800px;">
                        <div class="item">
                            <a aria-label="slide" href="#">
                                <img width="800" height="200" src="{{ asset('assets/images/banner-3.png') }}"/>
                            </a>
                        </div>
                    </div>
                    <div class="banner-item" style="width: 800px;">
                        <div class="item">
                            <a aria-label="slide" href="#">
                                <img width="800" height="200" src="{{ asset('assets/images/banner-4.png') }}"/>
                            </a>
                        </div>
                    </div>
                    <div class="banner-item" style="width: 800px;">
                        <div class="item">
                            <a aria-label="slide" href="#">
                                <img width="800" height="200" src="{{ asset('assets/images/banner-5.png') }}"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav">
                <button type="button" role="presentation" class="btn-prev" id="prev">
                    <span aria-label="Previous">
                        "<"
                    </span>
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
@endsection
