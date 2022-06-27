@extends('user.layouts.app-introduce')
@section('content')
    <div class="tab">
        <ul class="tab-list">
            <li class="active">
                <a href="/introduce">Giới thiệu chung</a>
            </li>
            <li>
                <a href="/leadership">Người sáng lập</a>
            </li>
        </ul>
    </div>
    <div class="showtab">
        <div class="box-01">
            <p><span><b>Công ty Trí Thái (T&T Mobile)</b></span> là nhà bán lẻ số 1 về điện thoại tại Việt Nam với phương
                châm luôn luôn đảm bảo về chất lượng và trải nghiệm của khách hàng. T&T Mobile luôn lắng nghe, thấu hiểu
                những góp ý của khách
                hàng và thay đổi để mang những gì tốt nhất đến với khách hàng của T&T Mobile. Sự ân cần và chu đáo của nhân
                viên là những lời khen mà khách hàng dành tặng cho T&T Mobile. </p>
            <ul>
                <li><span><b>T&T Mobile</b></span> tập trung xây dựng dịch vụ khách hàng khác biệt với chất lượng vượt trội,
                    phù
                    hợp với văn hoá đặt khách hàng làm trung tâm trong mọi suy nghĩ và hành động của công ty.</li>
                <li><span><b>T&T Mobile</b></span> vinh dự khi liên tiếp lọt vào bảng xếp hạng TOP 100 công ty niêm yết tốt
                    nhất
                    Châu Á của tạp chí uy tín Forbes và là đại diện Việt Nam duy nhất trong Top 100 nhà bán lẻ hàng đầu Châu
                    Á – Thái Bình Dương do Tạp chí bán lẻ châu Á (Retail Asia) và Tập đoàn nghiên cứu thị trường Euromonitor
                    bình chọn.</li>
                <li><b><span>T&T Mobile</span> </b>nhiều năm liền có tên trong các bảng xếp hạng danh giá như TOP 100 nhà
                    bán lẻ
                    hàng đầu Châu Á – Thái Bình Dương (Retail Asia) và dẫn đầu TOP 100 công ty kinh doanh hiệu quả nhất Việt
                    Nam (Nhịp Cầu Đầu Tư)… Sự phát triển của T&T Mobile cũng là một điển hình tốt được nghiên cứu tại các
                    trường
                    Đại học hàng đầu như Harvard, UC Berkeley, trường kinh doanh Tuck (Mỹ).</li>
                <li>Không chỉ là một doanh nghiệp hoạt động hiệu quả được nhìn nhận bởi nhà đầu tư và các tổ chức đánh giá
                    chuyên nghiệp, <span><b>T&T Mobile</b></span> còn được người lao động tin yêu khi lần thứ 4 liên tiếp
                    được vinh
                    danh trong TOP 100 Doanh nghiệp có môi trường làm việc tốt nhất Việt Nam và là doanh nghiệp xuất sắc
                    nhất
                    tại giải thưởng Vietnam HR Awards – “Chiến lược nhân sự hiệu quả”.</li>
            </ul>
        </div>
        <div class="box-02">
            <div class="block tgdd">
                <div class="block-top">
                    <div class="main-img">
                        <img class="lazy" src="{{ asset('assets/user/images/pic_tgdd.png') }}" style="display: inline;">
                    </div>
                    <div class="main-text">
                        <div class="main-text-ct">
                            <div>
                                <span class="sitename">T&T Mobile </span>
                                <p>được thành lập từ năm 2021, là chuỗi bán lẻ <b>thiết bị di động</b> có <b>thị phần số 1
                                        Việt Nam</b> với {{ count($danhSachCuaHang) }} điểm
                                    bán thiết bị di động (bao gồm {{ count($danhSachCuaHang) }} cửa hàng T&T Mobile).<br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="block-number">
                    <li>
                        <i class="icon--store"></i>
                        <div class="li-txt">
                            <p class="txt01">{{ count($danhSachCuaHang) }}</p>
                            <p class="txt02">CỬA HÀNG TRÊN<br>TP.HỒ CHÍ MINH</p>
                        </div>
                    </li>
                    <li>
                        <i class="icon--people"></i>
                        <div class="li-txt">
                            <p class="txt01">1000</p>
                            <p class="txt02">KHÁCH ĐƯỢC<br>PHỤC VỤ MỖI NGÀY</p>
                        </div>
                    </li>
                    <li>
                        <i class="icon--time"></i>
                        <div class="li-txt">
                            <p class="txt01">08:00 - 22:00</p>
                            <p class="txt02">KỂ CẢ CHỦ NHẬT &amp;<br>NGÀY LỄ</p>
                        </div>
                    </li>
                </ul>
                <div class="block-website">
                    <a href="/" class="block-website-item" target="_blank">
                        <i class="icon-website"></i>
                        Website: <span>www.t&tmobile.com</span>
                    </a>
                </div>
            </div>
        </div>
    @endsection
