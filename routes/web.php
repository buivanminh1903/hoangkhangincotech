<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

/*Trang chủ*/
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

/*Danh sách dịch vụ*/
Route::get('dich-vu', [\App\Http\Controllers\ServiceController::class, 'index']);

/*Đối tác*/
Route::get('doi-tac', [\App\Http\Controllers\PartnerController::class, 'index']);

// Chi tiết dịch vụ 
Route::get('ct-dichvu', [\App\Http\Controllers\DetailsServiceController::class, 'details_serivce']);

/*Chi Tiết Bài Viết*/
Route::get('chi-tiet-bai-viet', [\App\Http\Controllers\BlogDetailsController::class, 'index']);

/*Liên hệ*/
Route::get('lien-he', [\App\Http\Controllers\ContactController::class, 'index']);

/*Bài viết*/
Route::get('bai-viet', [\App\Http\Controllers\BlogController::class, 'index']);

