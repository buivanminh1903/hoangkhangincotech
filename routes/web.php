<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

/*Chi Tiết Dịch vụ*/
Route::get('dich-vu/{id}-{slug}', [\App\Http\Controllers\Backend\ServiceController::class, 'detail']);

/*Đối tác*/
Route::get('doi-tac', [\App\Http\Controllers\PartnerController::class, 'index']);

/*Chi Tiết Bài Viết*/
Route::get('bai-viet/{id}-{slug}', [\App\Http\Controllers\Backend\PostController::class, 'detail']);

/*Liên hệ*/
Route::get('lien-he', [\App\Http\Controllers\ContactController::class, 'index']);
/*Liên hệ - Get in touch*/
Route::post('admin/contactus/submit', [\App\Http\Controllers\Backend\ContactusController::class, 'submit']);

/*Bài viết*/
Route::get('bai-viet', [\App\Http\Controllers\Backend\PostController::class, 'show']);

/* Tìm kiếm bài viết */
Route::get('bai-viet/search', [\App\Http\Controllers\Backend\PostController::class, 'search']);

// Front end Newletter
Route::post('/bai-viet', [\App\Http\Controllers\Backend\NewlettersController::class, 'emailadd']);

// Subscribe Our Newsletter
Route::post('/', [\App\Http\Controllers\Backend\NewlettersController::class, 'subscribe']);

/* Auth */
Route::post('/auth/save', [MainController::class, 'save'])->name('auth.save');
Route::post('/auth/check', [MainController::class, 'check'])->name('auth.check');
Route::get('auth/logout', [MainController::class, 'logout'])->name('auth.logout');

/* Auth */
Route::group(['middleware' => ['AuthCheck']], function () {
    Route::get('/admin/login', [MainController::class, 'login'])->name('auth.login');
    Route::get('/admin/register', [MainController::class, 'register'])->name('auth.register');

    /* Admin */
    Route::prefix('admin')->group(function () {
        /* Dashboard */
        Route::get('/', [MainController::class, 'dashboard']);

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

        /* Categories */
        Route::get('/categories', [\App\Http\Controllers\Backend\CategoryController::class, 'index']);
        // Add
        Route::post('/category/add', [\App\Http\Controllers\Backend\CategoryController::class, 'store']);
        // Update
        Route::get('/category/edit/{id}', [\App\Http\Controllers\Backend\CategoryController::class, 'edit']);
        Route::put('/category/update/{id}', [\App\Http\Controllers\Backend\CategoryController::class, 'update']);
        // Delete
        Route::delete('/category/delete/{id}', [\App\Http\Controllers\Backend\CategoryController::class, 'destroy']);

        /* Sevice */
        Route::get('/service', [\App\Http\Controllers\Backend\ServiceController::class, 'index']);
        // Detail
        Route::get('/service/detail/{id}', [\App\Http\Controllers\Backend\ServiceController::class, 'backend_detail']);
        // Add
        Route::post('/service/add', [\App\Http\Controllers\Backend\ServiceController::class, 'store']);
        // Update
        Route::get('/service/edit/{id}', [\App\Http\Controllers\Backend\ServiceController::class, 'edit']);
        Route::put('/service/update/{id}', [\App\Http\Controllers\Backend\ServiceController::class, 'update']);
        // Delete
        Route::delete('/service/delete/{id}', [\App\Http\Controllers\Backend\ServiceController::class, 'destroy']);

        /* Contact us */
        Route::get('/contactus', [\App\Http\Controllers\Backend\ContactusController::class, 'index']);
        // Edit
        Route::get('/contactus/edit/{id}', [\App\Http\Controllers\Backend\ContactusController::class, 'edit_contactus']);
        Route::put('/contactus/update/{id}', [\App\Http\Controllers\Backend\ContactusController::class, 'update']);
        // Delete
        Route::delete('/contactus/delete/{id}', [\App\Http\Controllers\Backend\ContactusController::class, 'delete']);
        //Add
        Route::get('/contactus/add', [\App\Http\Controllers\Backend\ContactusController::class, 'add']);
        Route::post('/contactus/add', [\App\Http\Controllers\Backend\ContactusController::class, 'postAdd']);

        // Reviews
        Route::get('/reviews', [\App\Http\Controllers\Backend\ReviewsController::class, 'index']);
        Route::get('/reviews/add', [\App\Http\Controllers\Backend\ReviewsController::class, 'add']);
        Route::post('/reviews/add', [\App\Http\Controllers\Backend\ReviewsController::class, 'postAdd']);
        // Edit Reviews
        Route::get('/reviews/edit/{id}', [\App\Http\Controllers\Backend\ReviewsController::class, 'edit_reviews']);
        Route::put('/reviews/update/{id}', [\App\Http\Controllers\Backend\ReviewsController::class, 'update']);
        Route::delete('/reviews/delete/{id}', [\App\Http\Controllers\Backend\ReviewsController::class, 'delete']);

        /* New Letter */
        Route::get('/newletter', [\App\Http\Controllers\Backend\NewlettersController::class, 'index']);
        // Create
        Route::get('/newletter/create', [\App\Http\Controllers\Backend\NewlettersController::class, 'create']);
        Route::POST('/newletter/create', [\App\Http\Controllers\Backend\NewlettersController::class, 'newletter_Create']);
        // Edit
        Route::get('/newletter/edit/{id}', [\App\Http\Controllers\Backend\NewlettersController::class, 'edit']);
        Route::put('/newletter/update/{id}', [\App\Http\Controllers\Backend\NewlettersController::class, 'update']);
        // Delete
        Route::delete('/newletter/delete/{id}', [\App\Http\Controllers\Backend\NewlettersController::class, 'delete']);

        /* Photo */
        Route::get('/photo', [\App\Http\Controllers\Backend\PhotoController::class, 'index']);
        // Create
        Route::get('/photo/create', [\App\Http\Controllers\Backend\PhotoController::class, 'create']);
        Route::POST('/photo/create', [\App\Http\Controllers\Backend\PhotoController::class, 'photo_Create']);
        Route::get('bai-viet', [\App\Http\Controllers\Backend\PhotoController::class, 'photoshow']);
        // Edit
        Route::get('/photo/edit/{id}', [\App\Http\Controllers\Backend\PhotoController::class, 'edit']);
        Route::put('/photo/update/{id}', [\App\Http\Controllers\Backend\PhotoController::class, 'update']);
        // Delete
        Route::delete('/photo/delete/{id}', [\App\Http\Controllers\Backend\PhotoController::class, 'delete']);

    });
    /* Our Project index By Tran Quan */
    Route::get('admin/ourproject', [\App\Http\Controllers\Backend\ProjectController::class, 'index']);
    // creare insert
    Route::get('admin/insert_project', [\App\Http\Controllers\Backend\ProjectController::class, 'create']);
    // them our project
    Route::post('input', [\App\Http\Controllers\Backend\ProjectController::class, 'store']);
    //delete project
    Route::delete('delete-project/{id}', [\App\Http\Controllers\Backend\ProjectController::class, 'destroy']);
    // edit project
    Route::get('admin/edit_project/{id}', [\App\Http\Controllers\Backend\ProjectController::class, 'edit']);
    //update project
    Route::put('update-project/{id}', [\App\Http\Controllers\Backend\ProjectController::class, 'update']);
    /* End  Our Project index By Tran Quan */
});




