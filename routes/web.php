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
Route::get('dich-vu', [\App\Http\Controllers\Backend\ServiceController::class, 'show']);

/*Chi Tiết Bài Viết*/
Route::get('dich-vu/{id}-{slug}', [\App\Http\Controllers\Backend\ServiceController::class, 'detail']);

/*Đối tác*/
Route::get('doi-tac', [\App\Http\Controllers\PartnerController::class, 'index']);

//// Chi tiết dịch vụ
//Route::get('ct-dichvu', [\App\Http\Controllers\DetailsServiceController::class, 'details_serivce']);

/*Chi Tiết Bài Viết*/
Route::get('bai-viet/{id}-{slug}', [\App\Http\Controllers\Backend\PostController::class, 'detail']);

/*Liên hệ*/
Route::get('lien-he', [\App\Http\Controllers\ContactController::class, 'index']);

/*Bài viết*/
Route::get('bai-viet', [\App\Http\Controllers\Backend\PostController::class, 'show']);

/* Tìm kiếm bài viết */
Route::get('bai-viet/tim-kiem', [\App\Http\Controllers\Backend\PostController::class, 'search']);
Route::get('bai-viet/search', [\App\Http\Controllers\Backend\PostController::class, 'search']);

/*-----------Backend------------*/

/* Trang chủ */
Route::get('/backend', [\App\Http\Controllers\Backend\HomeController::class, 'index']);

/* Categories */
Route::get('backend/categories', [\App\Http\Controllers\Backend\CategoryController::class, 'index']);

/* Add Category */
Route::post('backend/add-category', [\App\Http\Controllers\Backend\CategoryController::class, 'store']);

/* Update Category */
Route::get('backend/category/edit/{id}', [\App\Http\Controllers\Backend\CategoryController::class, 'edit']);
Route::put('backend/category/update/{id}', [\App\Http\Controllers\Backend\CategoryController::class, 'update']);

/* Delete Category */
Route::delete('backend/category/delete/{id}', [\App\Http\Controllers\Backend\CategoryController::class, 'destroy']);

/* Post */
Route::get('backend/post', [\App\Http\Controllers\Backend\PostController::class, 'index']);

/* Add Post */
Route::post('backend/add-post', [\App\Http\Controllers\Backend\PostController::class, 'store']);

/* Update Post */
Route::get('backend/post/edit/{id}', [\App\Http\Controllers\Backend\PostController::class, 'edit']);
Route::put('backend/post/update/{id}', [\App\Http\Controllers\Backend\PostController::class, 'update']);

/* Delete Post */
Route::delete('backend/post/delete/{id}', [\App\Http\Controllers\Backend\PostController::class, 'destroy']);

/* Sevice */
Route::get('backend/service', [\App\Http\Controllers\Backend\ServiceController::class, 'index']);

/* Add Sevice */
Route::post('backend/add-service', [\App\Http\Controllers\Backend\ServiceController::class, 'store']);

/* Update Sevice */
Route::get('backend/service/edit/{id}', [\App\Http\Controllers\Backend\ServiceController::class, 'edit']);
Route::put('backend/service/update/{id}', [\App\Http\Controllers\Backend\ServiceController::class, 'update']);

/* Delete Sevice */
Route::delete('backend/service/delete/{id}', [\App\Http\Controllers\Backend\ServiceController::class, 'destroy']);

