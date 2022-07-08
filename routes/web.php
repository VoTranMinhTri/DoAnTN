<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MauSacController;
use App\Http\Controllers\ManHinhController;
use App\Http\Controllers\CameraSauController;
use App\Http\Controllers\CameraTruocController;
use App\Http\Controllers\HeDieuHanhCPUController;
use App\Http\Controllers\BoNhoLuuTruController;
use App\Http\Controllers\KetNoiController;
use App\Http\Controllers\PinSacController;
use App\Http\Controllers\TienIchController;
use App\Http\Controllers\ThongTinChungController;
use App\Http\Controllers\ThuongHieuController;
use App\Http\Controllers\DienThoaiController;
use App\Http\Controllers\ChiTietDienThoaiController;
use App\Http\Controllers\HinhAnhChungCuaDienThoaiController;
use App\Http\Controllers\HinhAnhMauSacCuaDienThoaiController;
use App\Http\Controllers\PhieuGiamGiaController;
use App\Http\Controllers\KhuyenMaiController;
use App\Http\Controllers\ChiTietKhuyenMaiController;
use App\Http\Controllers\BacTaiKhoanController;
use App\Http\Controllers\LoaiTaiKhoanController;
use App\Http\Controllers\TaiKhoanController;
use App\Http\Controllers\ChucVuController;
use App\Http\Controllers\HeSoLuongController;
use App\Http\Controllers\ThuongController;
use App\Http\Controllers\PhuCapController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\CuaHangController;
use App\Http\Controllers\KhoController;
use App\Http\Controllers\ChiTietKhoController;
use App\Http\Controllers\SanPhamPhanBoController;
use App\Http\Controllers\ChamCongController;
use App\Http\Controllers\DanhGiaController;
use App\Http\Controllers\PhanHoiDanhGiaController;
use App\Http\Controllers\GioHangController;
use App\Http\Controllers\DonHangController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\TrangChuController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('checklogout')->group(function () {
    Route::middleware('checkstaff')->group(function () {
        //Admin
        Route::resource('mauSac', MauSacController::class);
        Route::resource('manHinh', ManHinhController::class);
        Route::resource('cameraSau', CameraSauController::class);
        Route::resource('cameraTruoc', CameraTruocController::class);
        Route::resource('heDieuHanh_CPU', HeDieuHanhCPUController::class);
        Route::resource('boNho_LuuTru', BoNhoLuuTruController::class);
        Route::resource('ketNoi', KetNoiController::class);
        Route::resource('pin_Sac', PinSacController::class);
        Route::resource('tienIch', TienIchController::class);
        Route::resource('thongTinChung', ThongTinChungController::class);
        Route::resource('thuongHieu', ThuongHieuController::class);
        Route::resource('dienThoai', DienThoaiController::class);
        Route::resource('chiTietDienThoai', ChiTietDienThoaiController::class);
        Route::resource('hinhAnhChungCuaDienThoai', HinhAnhChungCuaDienThoaiController::class);
        Route::resource('hinhAnhMauSacCuaDienThoai', HinhAnhMauSacCuaDienThoaiController::class);
        Route::resource('donHang', DonHangController::class);

        //Trang chủ của admin
        Route::get('/admin', [TrangChuController::class, 'indexAdmin']);
        //Lấy doanh thu theo năm
        Route::post('/layDoanhThu', [TrangChuController::class, 'layDoanhThu']);
        //Xuất file Excel
        Route::post('/export-csv', [TrangChuController::class, 'export_csv']);
        //Đổi mật khẩu
        Route::get('/change-pass', function () {
            return view('admin/management-page/change-pass');
        });
        Route::post('/change-pass', [TaiKhoanController::class, 'changepassword']);
        //Hình ảnh màu sắc của sản phẩm
        Route::get('/hinhAnhMauSac/{sanPhamId}', [HinhAnhMauSacCuaDienThoaiController::class, 'indexHinhAnhMauSac'])->name('hinhAnhMauSac');
        //Hình ảnh nổi bật của sản phẩm
        Route::get('/hinhAnhNoiBat/{sanPhamId}', [HinhAnhChungCuaDienThoaiController::class, 'indexHinhAnhNoiBat'])->name('hinhAnhNoiBat');
        //Thêm hình ảnh nổi bật
        Route::post('/themHinhAnhNoiBat', [HinhAnhChungCuaDienThoaiController::class, 'storeHinhAnhNoiBat'])->name('themHinhAnhNoiBat');
        //Hình ảnh 360 của sản phẩm
        Route::get('/hinhAnh360/{sanPhamId}', [HinhAnhChungCuaDienThoaiController::class, 'indexHinhAnh360'])->name('hinhAnh360');
        //Thêm hình ảnh 360
        Route::post('/themHinhAnh360', [HinhAnhChungCuaDienThoaiController::class, 'storeHinhAnh360'])->name('themHinhAnh360');
        //Thêm chi tiết sản phẩm
        Route::get('/themChiTietSanPham', [ChiTietDienThoaiController::class, 'createChiTietSanPham'])->name('themChiTietSanPham');
        //Thay đổi trạng thái điện thoại
        Route::post('/thayDoiTrangThai/{sanPhamId}', [DienThoaiController::class, 'thayDoiTrangThai'])->name('thayDoiTrangThai');
        //Khách hàng
        Route::get('/khachHang', [TaiKhoanController::class, 'indexKhachHang'])->name('khachHang');
        //Thay đổi trạng thái khách hàng
        Route::post('/thayDoiTrangThaiTaiKhoan/{taiKhoanId}', [TaiKhoanController::class, 'thayDoiTrangThaiTaiKhoan'])->name('thayDoiTrangThaiTaiKhoan');
        //Đơn hàng
        Route::get('/indexDonHang/{token}', [DonHangController::class, 'indexDonHang'])->name('indexDonHang');
        Route::get('/showDonHang/{maDonHang}', [DonHangController::class, 'showDonHang'])->name('showDonHang');
        Route::post('/capNhatTrangThaiDH/{maDonHang}', [DonHangController::class, 'capNhatTrangThaiDH'])->name('capNhatTrangThaiDH');
        //Đánh giá
        Route::get('/indexDanhGiaAdmin/{dienThoaiId}', [DanhGiaController::class, 'indexDanhGiaAdmin'])->name('indexDanhGiaAdmin');
        //Thay đổi trạng thái đánh giá
        Route::post('/thayDoiTrangThaiDanhGia/{danhGiaId}', [DanhGiaController::class, 'thayDoiTrangThaiDanhGia'])->name('thayDoiTrangThaiDanhGia');
        //Phản hồi đánh giá
        Route::get('/indexPHDanhGia/{danhGiaId}', [PhanHoiDanhGiaController::class, 'indexPHDanhGia'])->name('indexPHDanhGia');
        //Thay đổi trạng thái phản hồi đánh giá
        Route::post('/thayDoiTrangThaiPHDanhGia/{pHDanhGiaId}', [PhanHoiDanhGiaController::class, 'thayDoiTrangThaiPHDanhGia'])->name('thayDoiTrangThaiPHDanhGia');
        //Thêm phản hồi đánh giá
        Route::post('/storePHDanhGia', [PhanHoiDanhGiaController::class, 'storePHDanhGia'])->name('storePHDanhGia');

        //Quyền truy cập kho
        Route::middleware('checkpermissionstorehouse')->group(function () {
            Route::resource('kho', KhoController::class);
            //Kho
            Route::get('/indexKho/{token}', [KhoController::class, 'indexKho'])->name('indexKho');
            Route::resource('chiTietKho', ChiTietKhoController::class);
            //Phân bố sản phẩm
            Route::resource('sanPhamPhanBo', SanPhamPhanBoController::class);
            Route::get('/phanBoSanPham/{chiTietDienThoaiId}', [KhoController::class, 'phanBoSanPham'])->name('phanBoSanPham');
        });

        //Quyền truy cập cửa hàng
        Route::middleware('checkpermissionstore')->group(function () {
            Route::resource('cuaHang', CuaHangController::class);
            //Cửa hàng
            Route::get('/indexCuaHang/{token}', [CuaHangController::class, 'indexCuaHang'])->name('indexCuaHang');
        });

        //Quyền truy cập dành riêng cho admin
        Route::middleware('checkpermissionadmin')->group(function () {
            Route::resource('taiKhoan', TaiKhoanController::class);
            Route::resource('nhanVien', NhanVienController::class);
            Route::resource('chucVu', ChucVuController::class);
            Route::resource('heSoLuong', HeSoLuongController::class);
            Route::resource('thuong', ThuongController::class);
            Route::resource('phuCap', PhuCapController::class);
            Route::resource('loaiTaiKhoan', LoaiTaiKhoanController::class);
            Route::resource('phieuGiamGia', PhieuGiamGiaController::class);
            Route::resource('khuyenMai', KhuyenMaiController::class);
            Route::resource('chiTietKhuyenMai', ChiTietKhuyenMaiController::class);
            Route::resource('bacTaiKhoan', BacTaiKhoanController::class);
        });

        //Quyền quản lý
        Route::middleware('checkpermissionmanage')->group(function () {
            //Tài khoản nhân viên
            Route::get('/indexTaiKhoanNhanVien/{token}', [TaiKhoanController::class, 'indexTaiKhoanNhanVien'])->name('indexTaiKhoanNhanVien');
            //Thêm nhân viên
            Route::get('/createTaiKhoanNhanVien/{token}', [TaiKhoanController::class, 'createTaiKhoanNhanVien'])->name('createTaiKhoanNhanVien');
            //Nhân viên
            Route::get('/indexNhanVien/{token}', [NhanVienController::class, 'indexNhanVien'])->name('indexNhanVien');
            //Thêm nhân viên
            Route::get('/createNhanVien/{token}', [NhanVienController::class, 'createNhanVien'])->name('createNhanVien');
            //Cập nhật nhân viên
            Route::get('/editNhanVien/{token}/{nhanVienId}', [NhanVienController::class, 'editNhanVien'])->name('editNhanVien');
            //Xóa Nhân viên
            Route::get('/destroyNhanVien/{nhanVienId}', [NhanVienController::class, 'destroyNhanVien'])->name('destroyNhanVien');
            //Chấm công
            Route::get('/chamCongNhanVien/{nhanVienId}', [ChamCongController::class, 'chamCongNhanVien'])->name('chamCongNhanVien');
            //Nhân viên
            Route::get('/indexQuanLyLuong/{token}', [ChamCongController::class, 'indexQuanLyLuong'])->name('indexQuanLyLuong');
        });
    });

    Route::middleware('checkcustomer')->group(function () {
        //Đơn hàng
        Route::get('/ordermanagement', [DonHangController::class, 'indexDonHangKH']);
        Route::get('/showDonHangKH/{maDonHang}', [DonHangController::class, 'showDonHangKH'])->name('showDonHangKH');
        Route::post('/huyDonHang/{maDonHang}', [DonHangController::class, 'huyDonHang'])->name('huyDonHang');

        //Thông tin khách hàng
        Route::get('/accountinformation', [TaiKhoanController::class, 'thongTinTaiKhoanKH']);
        Route::get('/capNhatThongTin', [TaiKhoanController::class, 'capNhatThongTin']);
        Route::get('/thayDoiMatKhau', [TaiKhoanController::class, 'thayDoiMatKhau']);
        Route::get('/doiMatKhau', [TaiKhoanController::class, 'doiMatKhau']);

        //Đánh giá
        Route::get('/review', [DanhGiaController::class, 'indexDanhGiaKH']);

        //Xác nhận địa chỉ nhận hàng
        Route::get('/confirm', [GioHangController::class, 'confirmOrderAddress']);
        Route::get('/xacNhanThongTin', [GioHangController::class, 'xacNhanThongTin']);
    });
});

//Trang cập nhật mật khẩu
Route::get('/recoverpassword', function () {
    return view('user/recoverpassword');
});
Route::post('/recoverpassword', [TaiKhoanController::class, 'recoverPassword']);

Route::middleware('checkuser')->group(function () {
    Route::get('/signin', function () {
        return view('user/signin');
    })->name('signin');

    //Đăng ký
    Route::get('/signup', function () {
        return view('user/signup');
    });

    //Lấy lại mật khẩu
    Route::get('/forgotpassword', function () {
        return view('user/forgotpassword');
    });
});

Route::middleware('checkcustomer')->group(function () {
    //User
    Route::get('/', [TrangChuController::class, 'index'])->name('homeuser');
    //Giỏ hàng
    Route::get('/cart', function () {
        return view('user/cart');
    });
    //Chi tiết điện thoại
    Route::get('/productDetail/{sanPhamId}', [ChiTietDienThoaiController::class, 'productDetail'])->name('productDetail');
    //Kết quả tìm kiếm
    Route::get('/resultSearch', [TrangChuController::class, 'resultSearch'])->name('resultSearch');
    //Trang giới thiệu
    Route::get('/introduce', [TrangChuController::class, 'gioithieu'])->name('introduce');
    //Trang ban lãnh đạo
    Route::get('/leadership', function () {
        return view('user/leadership');
    })->name('leadership');
    //Trang liên hệ
    Route::get('/feedback', function () {
        return view('user/feedback');
    })->name('feedback');
    Route::get('/lienHe', [TrangChuController::class, 'lienHe'])->name('lienHe');
    //Tìm cửa hàng
    Route::get('/findstore', [TrangChuController::class, 'timCuaHang'])->name('findstore');
});


//Phương thức
//Đăng nhập
Route::post('/login', [TaiKhoanController::class, 'authenticate']);

//Đăng xuất
Route::get('/logout', [TaiKhoanController::class, 'logout']);

Route::post('/signup', [TaiKhoanController::class, 'storeTaiKhoanKhachHang']);

Route::post('/forgotpassword', [TaiKhoanController::class, 'getPassword']);

Route::post('/storeDanhGia', [DanhGiaController::class, 'storeDanhGia'])->name('storeDanhGia');
//Thêm phản hồi đánh giá
Route::get('/storePHDanhGiaKH', [PhanHoiDanhGiaController::class, 'storePHDanhGiaKH']);
//Tất cả đánh giá
Route::get('/reviewlist/{dienThoaiId}', [DanhGiaController::class, 'listDanhGiaKH'])->name('reviewlist');
//Lọc đánh giá
Route::get('/filterReview', [DanhGiaController::class, 'filterReview']);
//Tìm kiếm
Route::get('/suggestSearch', [TrangChuController::class, 'suggestSearch']);

Route::get('/filterProductByPriceResultSearch', [TrangChuController::class, 'filterProductByPriceResultSearch']);
Route::get('/createBill/{maDonHang}', [DonHangController::class, 'createBill'])->name('createBill');

//Lọc sản phẩm theo thương hiệu
Route::get('/filterProduct', [TrangChuController::class, 'filterProduct']);
//Lọc sản phẩm theo giá
Route::get('/filterProductByPrice', [TrangChuController::class, 'filterProductByPrice']);

//================================================//
//Lấy giá
Route::get('/layGia', [ChiTietDienThoaiController::class, 'layGia']);
//Thêm sản phẩm vào giỏ
Route::get('addCart', [GioHangController::class, 'addCart'])->name('addCart');
//Xóa sản phẩm khỏi giỏ
Route::get('deleteItemCart', [GioHangController::class, 'deleteItemCart'])->name('deleteItemCart');
//Tăng số lượng 1 sản phẩm
Route::get('plusItemCart', [GioHangController::class, 'plusItemCart'])->name('plusItemCart');
//Giảm số lượng 1 sản phẩm
Route::get('minusItemCart', [GioHangController::class, 'minusItemCart'])->name('minusItemCart');
//Kiểm tra phiếu giảm giá
Route::get('checkVoucher', [GioHangController::class, 'checkVoucher'])->name('checkVoucher');
//Thanh toán
Route::get('/thanhToan', [GioHangController::class, 'thanhToan']);
//Kiểm tra số lượng
Route::get('/kiemTraSoLuong', [GioHangController::class, 'kiemTraSoLuong']);
//Thanh toán VNPay
Route::post('/vnpay_payment', [GioHangController::class, 'vnpay_payment'])->name('vnpay_payment');
//Thanh toán Momo
Route::post('/momo_payment', [GioHangController::class, 'momo_payment'])->name('momo_payment');

//================================================//
// Google login
Route::get('login/google', [SocialController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [SocialController::class, 'handleGoogleCallback']);

// Facebook login
Route::get('login/facebook', [SocialController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [SocialController::class, 'handleFacebookCallback']);

// Zalo login
Route::get('login/zalo', [SocialController::class, 'redirectToZalo'])->name('login.zalo');
Route::get('login/zalo/callback', [SocialController::class, 'handleZaloCallback']);

//Get
// Route::get('/chart', function () {
//     return view('admin/management-page/chart');
// });
