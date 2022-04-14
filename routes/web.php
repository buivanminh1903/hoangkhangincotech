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
//Route::get('bai-viet/tim-kiem', [\App\Http\Controllers\Backend\PostController::class, 'search']);
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
Route::get('backend/post/detail/{id}', [\App\Http\Controllers\Backend\PostController::class, 'backend_detail']);
Route::get('backend/post/search', [\App\Http\Controllers\Backend\PostController::class, 'backend_search']);

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

/* Create Post */

Route::get('backend/post/create', [\App\Http\Controllers\Backend\PostController::class, 'create']);


//Reviews
Route::get('backend/Review/reviews', [\App\Http\Controllers\Backend\ReviewsController::class, 'index']);

Route::get('backend/Review/reviews-add', [\App\Http\Controllers\Backend\ReviewsController::class, 'add']);

Route::post('backend/Review/reviews-add', [\App\Http\Controllers\Backend\ReviewsController::class, 'postAdd']);

// Edit Reviews
Route::get('backend/Review/reviews-edit/{id}', [\App\Http\Controllers\Backend\ReviewsController::class, 'edit_reviews']);
Route::put('backend/Review/reviews-update/{id}', [\App\Http\Controllers\Backend\ReviewsController::class, 'update']);
Route::delete('backend/Review/reviews-delete/{id}', [\App\Http\Controllers\Backend\ReviewsController::class, 'delete']);

Route::get('backend/Contactus/contactus', [\App\Http\Controllers\Backend\ContactusController::class, 'index']);

Route::get('backend/Contactus/contactus-add', [\App\Http\Controllers\Backend\ContactusController::class, 'add']);

Route::post('backend/Contactus/contactus-add', [\App\Http\Controllers\Backend\ContactusController::class, 'postAdd']);

// Edit Contactus
Route::get('backend/Contactus/contactus-edit/{id}', [\App\Http\Controllers\Backend\ContactusController::class, 'edit_contactus']);
Route::put('backend/Contactus/contactus-update/{id}', [\App\Http\Controllers\Backend\ContactusController::class, 'update']);

// Delete Contactus
Route::delete('backend/Contactus/contactus-delete/{id}', [\App\Http\Controllers\Backend\ContactusController::class, 'delete']);

//Form contactus
Route::post('backend/Contactus/contactus-submit', [\App\Http\Controllers\Backend\ContactusController::class, 'submit']);
Route::get('backend/Contactus/post-create', [\App\Http\Controllers\Backend\PostController::class, 'create']);

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
Route::get('backend/NewLetter/newletter', [\App\Http\Controllers\Backend\NewlettersController::class, 'index']);
/* Create  */
Route::get('backend/NewLetter/newletter-create', [\App\Http\Controllers\Backend\NewlettersController::class, 'create']);
Route::POST('backend/NewLetter/newletter-create', [\App\Http\Controllers\Backend\NewlettersController::class, 'newletter_Create']);

Route::post('/bai-viet', [\App\Http\Controllers\Backend\NewlettersController::class, 'emailadd']);

// Subscribe Our Newsletter
Route::post('/', [\App\Http\Controllers\Backend\NewlettersController::class, 'subscribe']);

/* Edit  */
Route::get('backend/NewLetter/newletter-edit/{id}', [\App\Http\Controllers\Backend\NewlettersController::class, 'edit']);
Route::put('backend/NewLetter/newletter-update/{id}', [\App\Http\Controllers\Backend\NewlettersController::class, 'update']);

/* Delete  */
Route::delete('backend/NewLetter/newletter-delete/{id}', [\App\Http\Controllers\Backend\NewlettersController::class, 'delete']);

/* End New Letter */




/* Photo */
Route::get('backend/Photo/photo', [\App\Http\Controllers\Backend\PhotoController::class, 'index']);
/* Create  */
Route::get('backend/Photo/photo-create', [\App\Http\Controllers\Backend\PhotoController::class, 'create']);
Route::POST('backend/Photo/photo-create', [\App\Http\Controllers\Backend\PhotoController::class, 'photo_Create']);

// Route::get('bai-viet', [\App\Http\Controllers\Backend\PhotoController::class, 'photoshow']);
/* Edit  */
Route::get('backend/Photo/photo-edit/{id}', [\App\Http\Controllers\Backend\PhotoController::class, 'edit']);
Route::put('backend/Photo/photo-update/{id}', [\App\Http\Controllers\Backend\PhotoController::class, 'update']);
/* Delete  */
Route::delete('backend/Photo/photo-delete/{id}', [\App\Http\Controllers\Backend\PhotoController::class, 'delete']);
/* End Photo */











