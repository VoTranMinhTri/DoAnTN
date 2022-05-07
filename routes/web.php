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
use App\Http\Controllers\FbController;

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

//Admin
//Resource
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

//Get
Route::get('/admin', function () {
    return view('admin/index');
});

Route::get('/chart', function () {
    return view('admin/management-page/chart');
});

Route::get('/staff', function () {
    return view('admin/management-page/staff');
});

Route::get('/brand', function () {
    return view('admin/management-page/brand');
});

Route::get('/storehouse', function () {
    return view('admin/management-page/storehouse');
});

Route::get('/store', function () {
    return view('admin/management-page/store');
});

Route::get('/customer', function () {
    return view('admin/management-page/customer');
});

Route::get('/product', function () {
    return view('admin/management-page/product');
});

Route::get('/promotion', function () {
    return view('admin/management-page/promotion');
});

Route::get('/membershiplevel', function () {
    return view('admin/management-page/membershiplevel');
});

Route::get('/position', function () {
    return view('admin/management-page/position');
});

Route::get('/department', function () {
    return view('admin/management-page/department');
});

Route::get('/voucher', function () {
    return view('admin/management-page/voucher');
});

Route::get('/coefficientssalary', function () {
    return view('admin/management-page/coefficientssalary');
});

Route::get('/bonus', function () {
    return view('admin/management-page/bonus');
});

Route::get('/allowance', function () {
    return view('admin/management-page/allowance');
});

Route::get('/color', function () {
    return view('admin/management-page/color');
});

Route::get('/screen', function () {
    return view('admin/management-page/screen');
});

Route::get('/backcamera', function () {
    return view('admin/management-page/backcamera');
});

Route::get('/frontcamera', function () {
    return view('admin/management-page/frontcamera');
});

Route::get('/os', function () {
    return view('admin/management-page/os');
});

Route::get('/memory', function () {
    return view('admin/management-page/memory');
});

Route::get('/connect', function () {
    return view('admin/management-page/connect');
});

Route::get('/pin', function () {
    return view('admin/management-page/pin');
});

Route::get('/utilities', function () {
    return view('admin/management-page/utilities');
});

Route::get('/generalinformation', function () {
    return view('admin/management-page/generalinformation');
});

Route::get('/featuredpicture', function () {
    return view('admin/management-page/featuredpicture');
});

Route::get('/colorpicture', function () {
    return view('admin/management-page/colorpicture');
});

Route::get('/360picture', function () {
    return view('admin/management-page/360picture');
});

Route::get('/review', function () {
    return view('admin/management-page/review');
});

Route::get('/order', function () {
    return view('admin/management-page/order');
});



//Add-page
Route::get('/add-product', function () {
    return view('admin/add-page/add-product');
});
Route::get('/add-product-detail', function () {
    return view('admin/add-page/add-product-detail');
});
Route::get('/add-brand', function () {
    return view('admin/add-page/add-brand');
});
Route::get('/add-membershiplevel', function () {
    return view('admin/add-page/add-membershiplevel');
});
Route::get('/add-promotion', function () {
    return view('admin/add-page/add-promotion');
});
Route::get('/add-color', function () {
    return view('admin/add-page/add-color');
});
Route::get('/add-screen', function () {
    return view('admin/add-page/add-screen');
});
Route::get('/add-backcamera', function () {
    return view('admin/add-page/add-backcamera');
});
Route::get('/add-frontcamera', function () {
    return view('admin/add-page/add-frontcamera');
});
Route::get('/add-os', function () {
    return view('admin/add-page/add-os');
});
Route::get('/add-memory', function () {
    return view('admin/add-page/add-memory');
});
Route::get('/add-connect', function () {
    return view('admin/add-page/add-connect');
});
Route::get('/add-pin', function () {
    return view('admin/add-page/add-pin');
});
Route::get('/add-utilities', function () {
    return view('admin/add-page/add-utilities');
});
Route::get('/add-generalinformation', function () {
    return view('admin/add-page/add-generalinformation');
});
Route::get('/add-position', function () {
    return view('admin/add-page/add-position');
});
Route::get('/add-department', function () {
    return view('admin/add-page/add-department');
});
Route::get('/add-coefficientssalary', function () {
    return view('admin/add-page/add-coefficientssalary');
});
Route::get('/add-bonus', function () {
    return view('admin/add-page/add-bonus');
});
Route::get('/add-allowance', function () {
    return view('admin/add-page/add-allowance');
});
Route::get('/add-storehouse', function () {
    return view('admin/add-page/add-storehouse');
});
Route::get('/add-store', function () {
    return view('admin/add-page/add-store');
});
Route::get('/add-voucher', function () {
    return view('admin/add-page/add-voucher');
});




//Edit-page
Route::get('/edit-product', function () {
    return view('admin/edit-page/edit-product');
});
Route::get('/edit-product-detail', function () {
    return view('admin/edit-page/edit-product-detail');
});
Route::get('/edit-brand', function () {
    return view('admin/edit-page/edit-brand');
});
Route::get('/edit-membershiplevel', function () {
    return view('admin/edit-page/edit-membershiplevel');
});
Route::get('/edit-promotion', function () {
    return view('admin/edit-page/edit-promotion');
});
Route::get('/edit-color', function () {
    return view('admin/edit-page/edit-color');
});
Route::get('/edit-screen', function () {
    return view('admin/edit-page/edit-screen');
});
Route::get('/edit-backcamera', function () {
    return view('admin/edit-page/edit-backcamera');
});
Route::get('/edit-frontcamera', function () {
    return view('admin/edit-page/edit-frontcamera');
});
Route::get('/edit-os', function () {
    return view('admin/edit-page/edit-os');
});
Route::get('/edit-memory', function () {
    return view('admin/edit-page/edit-memory');
});
Route::get('/edit-connect', function () {
    return view('admin/edit-page/edit-connect');
});
Route::get('/edit-pin', function () {
    return view('admin/edit-page/edit-pin');
});
Route::get('/edit-utilities', function () {
    return view('admin/edit-page/edit-utilities');
});
Route::get('/edit-generalinformation', function () {
    return view('admin/edit-page/edit-generalinformation');
});
Route::get('/edit-position', function () {
    return view('admin/edit-page/edit-position');
});
Route::get('/edit-department', function () {
    return view('admin/edit-page/edit-department');
});
Route::get('/edit-coefficientssalary', function () {
    return view('admin/edit-page/edit-coefficientssalary');
});
Route::get('/edit-bonus', function () {
    return view('admin/edit-page/edit-bonus');
});
Route::get('/edit-allowance', function () {
    return view('admin/edit-page/edit-allowance');
});
Route::get('/edit-storehouse', function () {
    return view('admin/edit-page/edit-storehouse');
});
Route::get('/edit-store', function () {
    return view('admin/edit-page/edit-store');
});
Route::get('/edit-voucher', function () {
    return view('admin/edit-page/edit-voucher');
});


//User
Route::get('/', function () {
    return view('user/index');
});
Route::get('/signin', function () {
    return view('user/signin');
});
Route::get('/signup', function () {
    return view('user/signup');
});
Route::get('/cart', function () {
    return view('user/cart');
});
Route::get('/forgotpassword', function () {
    return view('user/forgotpassword');
});
Route::get('/productdetail', function () {
    return view('user/product-detail');
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


//Social Login
Route::get('auth/facebook', [FbController::class, 'redirectToFacebook']);

Route::get('auth/facebook/callback', [FbController::class, 'facebookSignin']);
