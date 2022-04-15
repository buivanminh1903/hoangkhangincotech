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

/*Chi Tiết Bài Viết*/
Route::get('bai-viet/{id}-{slug}', [\App\Http\Controllers\Backend\PostController::class, 'detail']);

/*Liên hệ*/
Route::get('lien-he', [\App\Http\Controllers\ContactController::class, 'index']);

/*Bài viết*/
Route::get('bai-viet', [\App\Http\Controllers\Backend\PostController::class, 'show']);

/* Tìm kiếm bài viết */
Route::get('bai-viet/search', [\App\Http\Controllers\Backend\PostController::class, 'search']);

/*-----------Backend------------*/

/* Sevice */
Route::get('admin/service', [\App\Http\Controllers\Backend\ServiceController::class, 'index']);

/* Add Sevice */
Route::post('admin/service/add', [\App\Http\Controllers\Backend\ServiceController::class, 'store']);

/* Update Sevice */
Route::get('admin/service/edit/{id}', [\App\Http\Controllers\Backend\ServiceController::class, 'edit']);
Route::put('admin/service/update/{id}', [\App\Http\Controllers\Backend\ServiceController::class, 'update']);

/* Delete Sevice */
Route::delete('admin/service/delete/{id}', [\App\Http\Controllers\Backend\ServiceController::class, 'destroy']);

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
Route::get('backend/ourproject', [\App\Http\Controllers\Backend\ProjectController::class, 'index']);
// creare insert
Route::get('backend/insert_project', [\App\Http\Controllers\Backend\ProjectController::class, 'create']);
// them our project
Route::post('input', [\App\Http\Controllers\Backend\ProjectController::class, 'store']);
//delete project
Route::delete('delete-project/{id}', [\App\Http\Controllers\Backend\ProjectController::class, 'destroy']);
// edit project
Route::get('backend/edit_project/{id}', [\App\Http\Controllers\Backend\ProjectController::class, 'edit']);
//update project
Route::put('update-project/{id}', [\App\Http\Controllers\Backend\ProjectController::class, 'update']);
/* End  Our Project index By Tran Quan */
Route::get('backend/post-create', [\App\Http\Controllers\Backend\PostController::class, 'create']);


// Front end Newletter
Route::post('/bai-viet', [\App\Http\Controllers\Backend\NewlettersController::class, 'emailadd']);
    // Subscribe Our Newsletter
Route::post('/', [\App\Http\Controllers\Backend\NewlettersController::class, 'subscribe']);
// End




/* Admin */
Route::prefix('admin')->group(function () {
    /* Dashboard */
    Route::get('/', [\App\Http\Controllers\Backend\HomeController::class, 'index']);

    /* Post */
    Route::get('/post', [\App\Http\Controllers\Backend\PostController::class, 'index']);
    // Detail
    Route::get('/post/detail/{id}', [\App\Http\Controllers\Backend\PostController::class, 'backend_detail']);
    // Search
    Route::get('/post/search', [\App\Http\Controllers\Backend\PostController::class, 'backend_search']);
    // Add
    Route::post('/post/add', [\App\Http\Controllers\Backend\PostController::class, 'store']);
    // Update
    Route::get('/post/edit/{id}', [\App\Http\Controllers\Backend\PostController::class, 'edit']);
    Route::put('/post/update/{id}', [\App\Http\Controllers\Backend\PostController::class, 'update']);
    // Delete
    Route::delete('/post/delete/{id}', [\App\Http\Controllers\Backend\PostController::class, 'destroy']);


    /* New Letter */

    Route::get('/newletter', [\App\Http\Controllers\Backend\NewlettersController::class, 'index']);
    /* Create  */
    Route::get('/newletter/create', [\App\Http\Controllers\Backend\NewlettersController::class, 'create']);
    Route::POST('/newletter/create', [\App\Http\Controllers\Backend\NewlettersController::class, 'newletter_Create']);
    /* Edit  */
    Route::get('/newletter/edit/{id}', [\App\Http\Controllers\Backend\NewlettersController::class, 'edit']);
    Route::put('/newletter/update/{id}', [\App\Http\Controllers\Backend\NewlettersController::class, 'update']);
    /* Delete  */
    Route::delete('/newletter/delete/{id}', [\App\Http\Controllers\Backend\NewlettersController::class, 'delete']);

    /* End New Letter */


    /* Photo */

    Route::get('/photo', [\App\Http\Controllers\Backend\PhotoController::class, 'index']);
    /* Create  */
    Route::get('/photo/create', [\App\Http\Controllers\Backend\PhotoController::class, 'create']);
    Route::POST('/photo/create', [\App\Http\Controllers\Backend\PhotoController::class, 'photo_Create']);

    // Route::get('bai-viet', [\App\Http\Controllers\Backend\PhotoController::class, 'photoshow']);
    /* Edit  */
    Route::get('/photo/edit/{id}', [\App\Http\Controllers\Backend\PhotoController::class, 'edit']);
    Route::put('/photo/update/{id}', [\App\Http\Controllers\Backend\PhotoController::class, 'update']);
    /* Delete  */
    Route::delete('/photo/delete/{id}', [\App\Http\Controllers\Backend\PhotoController::class, 'delete']);

    /* End Photo */
});
