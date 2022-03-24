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

Route::get('/', function () {
    return view('welcome');
});

/*Danh sách dịch vụ*/
Route::get('dich-vu', [\App\Http\Controllers\ServiceController::class, 'index']);

/*Đối tác*/
Route::get('doi-tac', [\App\Http\Controllers\PartnerController::class, 'index']);

/*Bài viết*/
Route::get('bai-viet', [\App\Http\Controllers\BlogController::class, 'index']);