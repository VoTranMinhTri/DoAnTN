<?php

use Illuminate\Support\Facades\Route;
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
