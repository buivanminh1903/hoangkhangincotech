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
/* Our Project index By Tran Quan */
Route::get('backend/ourproject',[\App\Http\Controllers\Backend\ProjectController::class,'index']);
// creare insert
Route::get('backend/insert_project',[\App\Http\Controllers\Backend\ProjectController::class,'create']);
// them our project
Route::post('input',[\App\Http\Controllers\Backend\ProjectController::class,'store']);
//delete project
Route::delete('delete-project/{id}', [\App\Http\Controllers\Backend\ProjectController::class, 'destroy']);
// edit project
Route::get('backend/edit_project/{id}',[\App\Http\Controllers\Backend\ProjectController::class,'edit']);
//update project
Route::put('update-project/{id}',[\App\Http\Controllers\Backend\ProjectController::class,'update']);
/* End  Our Project index By Tran Quan */
Route::get('backend/post-create', [\App\Http\Controllers\Backend\PostController::class, 'create']);




/* New Letter */
Route::get('backend/newletter', [\App\Http\Controllers\Backend\NewlettersController::class, 'index']);
/* Create  */
Route::get('backend/newletter-create', [\App\Http\Controllers\Backend\NewlettersController::class, 'create']);
Route::POST('backend/newletter-create', [\App\Http\Controllers\Backend\NewlettersController::class, 'newletter_Create']);

Route::post('backend/email-submit', [\App\Http\Controllers\Backend\NewlettersController::class, 'emailadd']);
/* Edit  */
Route::get('backend/newletter-edit/{id}', [\App\Http\Controllers\Backend\NewlettersController::class, 'edit']);
Route::put('backend/newletter-update/{id}', [\App\Http\Controllers\Backend\NewlettersController::class, 'update']);
/* Delete  */
Route::delete('backend/newletter-delete/{id}', [\App\Http\Controllers\Backend\NewlettersController::class, 'delete']);
/* End New Letter */




/* Photo */
Route::get('backend/photo', [\App\Http\Controllers\Backend\PhotoController::class, 'index']);
/* Create  */
Route::get('backend/photo-create', [\App\Http\Controllers\Backend\PhotoController::class, 'create']);
Route::POST('backend/photo-create', [\App\Http\Controllers\Backend\PhotoController::class, 'photo_Create']);
/* Edit  */
Route::get('backend/photo-edit/{id}', [\App\Http\Controllers\Backend\PhotoController::class, 'edit']);
Route::put('backend/photo-update/{id}', [\App\Http\Controllers\Backend\PhotoController::class, 'update']);
/* Delete  */
Route::delete('backend/photo-delete/{id}', [\App\Http\Controllers\Backend\PhotoController::class, 'delete']);
/* End Photo */








