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
use App\Http\Controllers\GioHangController;
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

    //Trang chủ của admin
    Route::get('/admin', function () {
        return view('admin/index');
    });
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

Route::middleware('checkuser')->group(function () {
    Route::get('/signin', function () {
        return view('user/signin');
    });
});


//Đăng nhập
Route::post('/login', [TaiKhoanController::class, 'authenticate']);

//Đăng xuất
Route::get('/logout', [TaiKhoanController::class, 'logout']);

//Get
Route::get('/chart', function () {
    return view('admin/management-page/chart');
});

//User
Route::get('/', [TrangChuController::class, 'index'])->name('homeuser');
Route::get('/signup', function () {
    return view('user/signup');
});
Route::get('/cart', function () {
    return view('user/cart');
});
Route::get('/forgotpassword', function () {
    return view('user/forgotpassword');
});
Route::get('/reviewlist', function () {
    return view('user/review-list');
});

Route::get('/ordermanagement', function () {
    return view('user/order-management');
});

Route::get('/accountinformation', function () {
    return view('user/account-information');
});

Route::get('/orderdetail', function () {
    return view('user/order-detail');
});

Route::get('/pay', function () {
    return view('user/pay');
});

//Lọc sản phẩm theo thương hiệu
Route::get('/filterProduct', [TrangChuController::class, 'filterProduct']);
//Lọc sản phẩm theo giá
Route::get('/filterProductByPrice', [TrangChuController::class, 'filterProductByPrice']);

//Chi tiết điện thoại
Route::get('/productDetail/{sanPhamId}', [ChiTietDienThoaiController::class, 'productDetail'])->name('productDetail');

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
//Xác nhận địa chỉ nhận hàng
Route::get('/confirm', [GioHangController::class, 'confirmOrderAddress']);
Route::get('/xacNhanThongTin', [GioHangController::class, 'xacNhanThongTin']);
//Thanh toán
Route::get('/thanhToan', [GioHangController::class, 'thanhToan']);
//Kiểm tra số lượng
Route::get('/kiemTraSoLuong', [GioHangController::class, 'kiemTraSoLuong']);
//Thanh toán VNPay
Route::post('/vnpay_payment', [GioHangController::class, 'vnpay_payment'])->name('vnpay_payment');
// Route::get('/checkVNPay', [GioHangController::class, 'checkVNPay'])->name('checkVNPay');

// Google login
Route::get('login/google', [SocialController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [SocialController::class, 'handleGoogleCallback']);

// Facebook login
Route::get('login/facebook', [SocialController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [SocialController::class, 'handleFacebookCallback']);

// Zalo login
Route::get('login/zalo', [SocialController::class, 'redirectToZalo'])->name('login.zalo');
Route::get('login/zalo/callback', [SocialController::class, 'handleZaloCallback']);
