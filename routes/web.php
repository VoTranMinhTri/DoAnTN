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
Route::get('/admin', function () {
    return view('admin/index');
});

Route::get('/chart', function () {
    return view('admin/chart');
});

Route::get('/table', function () {
    return view('admin/table');
});

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


Route::get('auth/facebook', [FbController::class, 'redirectToFacebook']);

Route::get('auth/facebook/callback', [FbController::class, 'facebookSignin']);
