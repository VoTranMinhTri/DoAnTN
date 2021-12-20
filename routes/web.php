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

Route::get('/', function () {
    return view('Index');
});
Route::get('/signin', function () {
    return view('signin');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/forgotpassword', function () {
    return view('forgotpassword');
});
Route::get('auth/facebook', [FbController::class, 'redirectToFacebook']);

Route::get('auth/facebook/callback', [FbController::class, 'facebookSignin']);
