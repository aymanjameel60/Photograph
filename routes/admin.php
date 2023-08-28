<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('guest:admin')->name('admin.')->group(function () {
    Route::get('/login', [LoginController::class, 'getLogin'])->name('doLogin');
    Route::post('/login', [LoginController::class, 'doLogin'])->name('login');
});
Route::middleware('auth:admin')->name('admin.')->group(function () {
    Route::get('/index', [LoginController::class, 'index'])->name('index');
    Route::resource('category', CategoryController::class);    
    Route::resource('gallery', GalleryController::class);    
    Route::resource('video', VideoController::class);    
    Route::resource('banner', BannerController::class);    
});
