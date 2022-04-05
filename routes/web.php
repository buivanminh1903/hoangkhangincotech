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

/*-----------Backend------------*/

/* Trang chủ */
Route::get('/backend', [\App\Http\Controllers\Backend\HomeController::class, 'index']);

/* Post */
Route::get('backend/post', [\App\Http\Controllers\Backend\PostController::class, 'index']);

/* Create Post */
Route::get('backend/post/create', [\App\Http\Controllers\Backend\PostController::class, 'create']);

/* Contactus add */
Route::get('backend/contactus', [\App\Http\Controllers\Backend\ContactusController::class, 'index']);

Route::get('backend/contactus-add', [\App\Http\Controllers\Backend\ContactusController::class, 'add']);

Route::post('backend/contactus-add', [\App\Http\Controllers\Backend\ContactusController::class, 'postAdd']);

// Edit Contactus
Route::get('backend/contactus-edit/{id}', [\App\Http\Controllers\Backend\ContactusController::class, 'edit_contactus']);
Route::put('backend/contactus-update/{id}', [\App\Http\Controllers\Backend\ContactusController::class, 'update']);

// Delete Contactus
Route::delete('backend/contactus-delete/{id}', [\App\Http\Controllers\Backend\ContactusController::class, 'delete']);

//Form contactus
Route::post('backend/contactus-submit', [\App\Http\Controllers\Backend\ContactusController::class, 'submit']);
