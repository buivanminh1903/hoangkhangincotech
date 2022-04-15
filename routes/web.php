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





Route::post('/auth/save', [MainController::class, 'save'])->name ('auth.save');
Route::post('/auth/check', [MainController::class, 'check'])->name ('auth.check');
Route::get('auth/logout',[MainController::class, 'logout'])->name('auth.logout');




Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/auth/login', [MainController::class, 'login'])->name ('auth.login');
    Route::get('/auth/register', [MainController::class, 'register'])->name ('auth.register');
    
    Route::get('/admin/dashboard',[MainController::class,'dashboard']);


//     /*-----------Backend------------*/




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

    /* Contact us */

    // Edit Contactus
    Route::get('/contactus/edit/{id}', [\App\Http\Controllers\Backend\ContactusController::class, 'edit_contactus']);
    Route::put('/contactus/update/{id}', [\App\Http\Controllers\Backend\ContactusController::class, 'update']);

    // Delete Contactus
    Route::delete('/contactus/delete/{id}', [\App\Http\Controllers\Backend\ContactusController::class, 'delete']);

    //Add Contactus
    Route::get('/contactus', [\App\Http\Controllers\Backend\ContactusController::class, 'index']);
    Route::get('/contactus/add', [\App\Http\Controllers\Backend\ContactusController::class, 'add']);
    Route::post('/contactus/add', [\App\Http\Controllers\Backend\ContactusController::class, 'postAdd']);

    //Form contactus
    Route::post('/contactus/submit', [\App\Http\Controllers\Backend\ContactusController::class, 'submit']);
    Route::get('/post/create', [\App\Http\Controllers\Backend\PostController::class, 'create']);
    Route::get('/post/create', [\App\Http\Controllers\Backend\PostController::class, 'create']);
    //Reviews
    Route::get('/reviews', [\App\Http\Controllers\Backend\ReviewsController::class, 'index']);

    Route::get('/reviews/add', [\App\Http\Controllers\Backend\ReviewsController::class, 'add']);

    Route::post('/reviews/add', [\App\Http\Controllers\Backend\ReviewsController::class, 'postAdd']);

    // Edit Reviews
    Route::get('/reviews/edit/{id}', [\App\Http\Controllers\Backend\ReviewsController::class, 'edit_reviews']);
    Route::put('/reviews/update/{id}', [\App\Http\Controllers\Backend\ReviewsController::class, 'update']);
    Route::delete('/reviews/delete/{id}', [\App\Http\Controllers\Backend\ReviewsController::class, 'delete']);


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

   
});




