<?php

use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Main\CommentController;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Stripe\StripeController;
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
Route::group(['namespace'=>'Main'], function(){
    Route::get('/', [IndexController::class, 'index']);
    Route::get('/post/{id}',[IndexController::class, 'showPost']);
    Route::get('/vpn', [IndexController::class, 'vpnShow']);
    Route::post('/', [CommentController::class, 'store'])->name('store.comment');
});
Route::group(['namespace'=>'Main','prefix' => 'admin'], function(){
    Route::get('/login', [AdminLoginController::class, 'login'])->name('admin.auth.login');
    Route::post('/login', [AdminLoginController::class, 'loginAdmin'])->name('admin.auth.loginAdmin');
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin.auth.logout');


    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/posts/create', [PostController::class, 'create'])->name('admin.post.create');
        Route::get('/posts', [PostController::class, 'index'])->name('admin.main.index');
        Route::post('/posts',[PostController::class, 'store'])->name('admin.post.store');
        Route::get('/{post}/edit',[PostController::class, 'edit'])->name('admin.post.edit-post');
        Route::post('/update/{post}',[PostController::class, 'update'])->name('admin.post.update');
        Route::delete('/{post}',[PostController::class, 'destroy'])->name('admin.post.delete');

        Route::get('/coupons', [CouponController::class, 'index'])->name('admin.coupon.index');
        Route::get('/coupons/add', [CouponController::class, 'create'])->name('admin.coupon.create');
        Route::post('/coupons', [CouponController::class, 'store'])->name('admin.coupon.store');
    });

});



Auth::routes();
Route::group(['middleware' => 'auth'], function (){
    Route::get('/stripe', [StripeController::class,'index']);
    Route::post('/stripe/create-charge', [StripeController::class,'createCharge'])->name('stripe.create-charge');
});
Route::post('/webhook', [StripeController::class, 'webhook']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

