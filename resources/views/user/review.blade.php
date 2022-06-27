@extends('user.layouts.app-other')
@section('content')
    <section class="cate">
        <div class="container">
            <div class="left">
                <a href="/ordermanagement" class="">Danh sách đơn hàng</a>
                <a href="/accountinformation" class="">Thông tin cá nhân</a>
                <a href="/review" class="active">Đánh giá sản phẩm</a>
                @if (Auth::user()->loai_tai_khoan_id == 5)
                    <a href="/thayDoiMatKhau" class="">Đổi mật khẩu</a>
                @endif

            </div>
            <div class="right">
                <div class="user">
                    Chào
                    @if ($thongTinTaiKhoan->gioi_tinh == 1)
                        anh
                    @else
                        chị
                    @endif
                    <b>{{ $thongTinTaiKhoan->ho_ten }}</b>
                </div>
                <div class="list">
                    <b style="margin-bottom: 10px;">Danh sách sản phẩm đã mua</b>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th style="color:#3e5569;font-weight:bold">STT</th>
                                    <th style="color:#3e5569;font-weight:bold">Tên sản phẩm</th>
                                    <th style="color:#3e5569;font-weight:bold">Thương hiệu</th>
                                    <th style="color:#3e5569;font-weight:bold" class='thNormal'>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                @foreach ($danhSachSanPham as $tp)
                                    <tr>
                                        <td style="font-size: 15px;color:#3e5569"><?php echo ++$i; ?></td>
                                        <td style="font-size: 15px;color:#3e5569">Điện thoại {{ $tp->ten_san_pham }}</td>
                                        <td style="font-size: 15px;color:#3e5569">{{ $tp->ten_thuong_hieu }}</td>
                                        <td>
                                            <a href="#"><button type="button" class="btn btn-outline-secondary"
                                                    style="height: 25px;width: 45px;" title="Đánh giá"
                                                    onclick="edit({{ $tp->so_sao }},'{{ $tp->noi_dung }}','{{ $tp->ten_san_pham }}',{{ $tp->id }})"><i
                                                        class="fas fa-star"></i></button></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th style="color:#3e5569;font-weight:bold">STT</th>
                                    <th style="color:#3e5569;font-weight:bold">Tên sản phẩm</th>
                                    <th style="color:#3e5569;font-weight:bold">Thương hiệu</th>
                                    <th style="color:#3e5569;font-weight:bold" class='thNormal'>Chức năng</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="popup danhgia">
        <div class="bg-popup"></div>
        <div class="form-popup">
            <div class="row-popup">
                <strong style="font-size: 18px">Đánh giá sản phẩm</strong>
                <button>Đóng</button>
            </div>
            <form action="javascript:confirm()" method="post" accept-charset="utf-8" id="formdanhgia">
                @csrf
                <div class="col-sm-12">
                    <div class="form-group row">
                        <label for="" class="col-sm-12" id="name-product">Số sao dành cho sản phẩm</label>
                        <div class="col-sm-12">
                            <div class="rate" id='rate-star'>
                                <input type="radio" id="star5" name="rate" value="5" onclick="rateStar()">
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="rate" value="4" onclick="rateStar()">
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="rate" value="3" onclick="rateStar()">
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="rate" value="2" onclick="rateStar()">
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="rate" value="1" onclick="rateStar()">
                                <label for="star1" title="text">1 star</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-12">Nội dung:</label>
                        <div class="col-sm-12">
                            <textarea class="form-control" placeholder="Nội dung đánh giá" id="noidung"
                                style="height: 150px; border: 1px solid gray;resize: none;" required max="300"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="text-align: center; margin-top:10px">
                        <button type="submit" class="btn btn-primary" style="width:50%" id="btn-danhgia">Đánh
                            giá</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- Xác nhận đánh giá --}}
    <div class="popup xacnhan">
        <div class="bg-popup"></div>
        <div class="form-popup" style="width: auto">
            <div class="row-popup">
                <h2 style="color: blueviolet;text-align: center;">Xác nhận đánh giá</h3>
            </div>
            <form method="post" action="{{ route('storeDanhGia') }}" id="formdelete">
                @csrf
                <h3 style="display:block">Bạn có muốn đánh giá đơn hàng này không
                    ?</h4>
                    <p style="margin-top: 10px;margin-bottom: 10px; text-align: center; display:flex">
                        <button type="submit" class="btn btn-outline-danger"
                            style="width: 175px;height: 40px;margin-right: 14px;margin-left: 21px;">Có</button>
                        <button type="button" class="btn btn-outline-secondary formclose"
                            style="width: 175px;height: 40px;">Không</button>
                    </p>
                    <input type='hidden' name='sosao' value='0' id='sosao'>
                    <input type='hidden' name="noidung" id='ghichu'>
                    <input type='hidden' name='dienthoaiid' id='dienthoaiid'>
            </form>
        </div>
    </div>

    @if (Session::has('thongbao'))
        <div class="popup active ketqua">
            <div class="bg-popup"></div>
            <div class="form-popup" style="width: auto">
                <div class="row-popup" style="text-align: center;">
                    <h3 style="color:green; font-size:25px">Thông báo</h3>
                </div>
                <h4 style="display:block;text-align: center; font-size:18px">{{ Session::get('thongbao') }}</h4>
                <p style="margin-top: 10px; text-align: center">
                    <button type="button" style="height:35px; width: 150px" class="btn btn-outline-secondary"
                        onclick="closepopup()">Ok</button>
                </p>
            </div>
        </div>
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
    <script>
        const body = this.document.querySelector('body');
        const loading = document.getElementsByClassName("loadingcover");
        const popupxacnhan = this.document.querySelector('.popup.xacnhan');
        const btnclose = this.document.querySelector('.formclose');
        const popupdanhgia = this.document.querySelector('.popup.danhgia');
        const btnclosedanhgia = this.document.querySelector('.popup.danhgia .form-popup .row-popup button');

        //Hiển thị
        function confirm() {
            popupxacnhan.className += " active";
            body.style = "overflow: hidden;";
            popupdanhgia.className = popupdanhgia.className.replace(" active", "");
            document.getElementById('ghichu').value = document.getElementById('noidung').value;
        };
        //Đóng
        btnclose.onclick = function() {
            popupxacnhan.className = popupxacnhan.className.replace(" active", "");
            popupdanhgia.className += " active";
        };

        function closepopup() {
            const popup = this.document.querySelector('.popup.active.ketqua');
            popup.className = popup.className.replace(" active", "");
            body.style = "overflow: auto;";
        }

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

        function rateStar() {
            var sosao = document.querySelector('input[name="rate"]:checked').value;
            document.getElementById("sosao").value = sosao;
        }


        //Hiển thị
        function edit($sosao, $noidung, $tensanpham, $dienthoaiid) {
            document.getElementById("name-product").innerText = "Số sao dành cho điện thoại " + $tensanpham;
            document.getElementById('dienthoaiid').value = $dienthoaiid;
            popupdanhgia.className += " active";
            body.style = "overflow: hidden;";
            if ($noidung != '') {
                if ($sosao == 1) {
                    document.getElementById('star1').checked = true;
                } else if ($sosao == 2) {
                    document.getElementById('star2').checked = true;
                } else if ($sosao == 3) {
                    document.getElementById('star3').checked = true;
                } else if ($sosao == 4) {
                    document.getElementById('star4').checked = true;
                } else if ($sosao == 5) {
                    document.getElementById('star5').checked = true;
                }
                document.getElementById('noidung').value = $noidung;
                document.getElementById('noidung').disabled = true;
                document.getElementById("star1").disabled = true;
                document.getElementById("star2").disabled = true;
                document.getElementById("star3").disabled = true;
                document.getElementById("star4").disabled = true;
                document.getElementById("star5").disabled = true;
                document.getElementById("rate-star").style = 'pointer-events: none';
                document.getElementById("btn-danhgia").style = 'display: none';
            }else{
                document.getElementById('star1').checked = false;
                document.getElementById('star2').checked = false;
                document.getElementById('star3').checked = false;
                document.getElementById('star4').checked = false;
                document.getElementById('star5').checked = false;
                document.getElementById('noidung').value = $noidung;
                document.getElementById('noidung').disabled = false;
                document.getElementById("star1").disabled = false;
                document.getElementById("star2").disabled = false;
                document.getElementById("star3").disabled = false;
                document.getElementById("star4").disabled = false;
                document.getElementById("star5").disabled = false;
                document.getElementById("rate-star").style = '';
                document.getElementById("btn-danhgia").style = 'text-align: center; margin-top:10px';
            }
        };

        //Đóng
        btnclosedanhgia.onclick = function() {
            popupdanhgia.className = popupdanhgia.className.replace(" active", "");
            body.style = "overflow: auto;";
        };
    </script>
@endsection
