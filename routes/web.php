<?php

use App\Http\Controllers\Admin\IndexController;
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
    Route::get('/', [\App\Http\Controllers\Main\IndexController::class, 'index']);
    Route::get('/post/{id}',[\App\Http\Controllers\Main\IndexController::class, 'showPost']);
    Route::get('/vpn', [\App\Http\Controllers\Main\IndexController::class, 'vpnShow']);

    Route::middleware("auth")->group(function () {
        Route::get('/plans', [\App\Http\Controllers\Stripe\PlanController::class, 'index']);
        Route::get('/plans/{plan}', [\App\Http\Controllers\Stripe\PlanController::class, 'show'])->name("plans.show");
        Route::post('/subscription', [\App\Http\Controllers\Stripe\PlanController::class, 'subscription'])->name("subscription.create");

    });
});
Route::group(['namespace'=>'Main','prefix' => 'admin'], function(){
    Route::get('/login', [\App\Http\Controllers\Auth\AdminLoginController::class, 'login'])->name('admin.auth.login');
    Route::post('/login', [\App\Http\Controllers\Auth\AdminLoginController::class, 'loginAdmin'])->name('admin.auth.loginAdmin');
    Route::post('/logout', [\App\Http\Controllers\Auth\AdminLoginController::class, 'logout'])->name('admin.auth.logout');


    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/add', [IndexController::class, 'createPostPage']);
        Route::get('/', [IndexController::class, 'index'])->name('admin.main.index');
        Route::post('/',[IndexController::class, 'createPost'])->name('admin.post.create');
        Route::get('/{post}/edit',[IndexController::class, 'editPostPage'])->name('admin.post.edit-post');
        Route::post('/update/{post}',[IndexController::class, 'updatePost'])->name('admin.post.update');
        Route::post('/{post}',[IndexController::class, 'deletePost'])->name('admin.post.delete');
    });
});



Auth::routes();
Route::group(['middleware' => 'auth'], function (){
    Route::get('/stripe', [StripeController::class,'index']);
    Route::post('/stripe/create-charge', [StripeController::class,'createCharge'])->name('stripe.create-charge');
});
Route::post('/webhook', [StripeController::class, 'webhook']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

