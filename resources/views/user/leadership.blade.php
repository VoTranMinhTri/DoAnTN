@extends('user.layouts.app-introduce')
@section('content')
    <div class="tab">
        <ul class="tab-list">
            <li>
                <a href="/introduce">Giới thiệu chung</a>
            </li>
            <li class="active">
                <a href="/leadership">Người sáng lập</a>
            </li>
        </ul>
    </div>
    <div class="showtab">
        <div class="box-intro container1000">
            <div class="box-intro-list">
                <ul>
                    <li>
                        <div class="info">
                            <div class="info__img info__img--left">
                                <img src="{{ asset('assets/user/images/votranminhtri.jpg') }}">
                            </div>
                            <div class="info__txt info__txt--right">
                                <h2 class="txt-name"><b>Võ Trần Minh Trí</b></h2>
                                <p class="txt-p">Sinh viên</p>
                            </div>
                        </div>
                        <div class="content-p">
                            <p></p>
                            <p>Võ Trần Minh Trí, sinh năm 2001, sinh viên của trường cao đẳng kỹ thuật Cao Thắng ngành công
                                nghệ thông tin<span>. </span></p>
                            <p><span><br></span></p>
                            <p><span>Là thành viên của dự án T&T Mobile, có vai trò là lập trình viên</span><span>.</span>
                            </p>
                            <p></p>
                        </div>
                    </li>
                    <li>
                        <div class="info">
                            <div class="info__img info__img--left">
                                <img src="{{ asset('assets/user/images/gvhd.jpg') }}">
                            </div>
                            <div class="info__txt info__txt--right">
                                <h2 class="txt-name">Thầy <b>Nguyễn Tâm Thanh Tùng</b></h2>
                                <p class="txt-p">Giáo viên hướng dẫn</p>
                            </div>
                        </div>
                        <div class="content-p">
                            <p></p>
                            <p>
                                <font color="#444444" face="Roboto, Helvetica, Arial, Verdana, sans-serif"><span>Thầy Nguyễn
                                        Tâm Thanh Tùng, tốt nghiệp Đại học Khoa Học Tự Nhiên
                                        và lấy bằng Thạc sĩ Khoa học Máy tính.</span>
                                </font>
                            </p>
                            <p>
                                <font color="#444444" face="Roboto, Helvetica, Arial, Verdana, sans-serif"><span><br></span>
                                </font>
                            </p>
                            <p>
                                <font color="#444444" face="Roboto, Helvetica, Arial, Verdana, sans-serif"><span> </span>
                                </font>
                            </p>
                            <p>
                                <font color="#444444" face="Roboto, Helvetica, Arial, Verdana, sans-serif"><span>Là người
                                        giám sát dự án, có vai trò là giáo viên hướng dẫn.</span></font><br>
                            </p>
                            <p></p>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li>
                        <div class="info">
                            <div class="info__txt info__txt--left">
                                <h2 class="txt-name"><b>Đặng Khang Thái</b></h2>
                                <p class="txt-p">Sinh viên</p>
                            </div>
                            <div class="info__img info__img--right">
                                <img src="{{ asset('assets/user/images/dangkhangthai.png') }}">
                            </div>
                        </div>
                        <div class="content-p">
                            <p></p>
                            <p>Đặng Khang Thái, sinh năm 2001, sinh viên của trường cao đẳng kỹ thuật Cao Thắng ngành công
                                nghệ thông tin. </p>
                            <p><br></p>
                            <p>Là thành viên của dự án T&T Mobile, có vai trò là lập trình viên.<br></p>
                            <p></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
