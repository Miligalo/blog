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
Route::group(['namespace'=>'Main'], function(){
    Route::get('/', [\App\Http\Controllers\Main\IndexController::class, 'index']);
    Route::get('/post/{id}',[\App\Http\Controllers\Main\IndexController::class, 'showPost']);
});
Route::group(['namespace'=>'Main','prefix' => 'admin'], function(){
    Route::get('/', [\App\Http\Controllers\Admin\IndexController::class, 'index'])->name('admin.main.index');
    Route::get('/add', [\App\Http\Controllers\Admin\IndexController::class, 'createPostPage']);
    Route::post('/',[\App\Http\Controllers\Admin\IndexController::class, 'createPost'])->name('admin.post.create');
    Route::get('/{post}/edit',[\App\Http\Controllers\Admin\IndexController::class, 'editPostPage'])->name('admin.post.edit-post');
    Route::post('/update/{post}',[\App\Http\Controllers\Admin\IndexController::class, 'updatePost'])->name('admin.post.update');
    Route::post('/{post}',[\App\Http\Controllers\Admin\IndexController::class, 'deletePost'])->name('admin.post.delete');
});


Auth::routes();
Route::group(['middleware' => 'auth'], function (){
    Route::get('/stripe', [\App\Http\Controllers\Stripe\StripeController::class,'index']);
    Route::post('/stripe/create-charge', [\App\Http\Controllers\Stripe\StripeController::class,'createCharge'])->name('stripe.create-charge');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

