<?php

use App\Http\Controllers\Front\AddressController;
use App\Http\Controllers\Front\ShipmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MapsController;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\shipment;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\ShipmentController;
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

Route::get('/', function () {
    $cats = Category::all();
    $imgs = Gallery::all();
    $videos = Video::all();
    $banner = Banner::first();
    return view('welcome', compact('cats', 'imgs', 'videos', 'banner'));
})->name('home');

Route::get('/images/{id}', function ($id) {

    $images = Gallery::with('category')->get();
    $mycat = Category::findOrFail($id);
    $cats   = Category::all();
    return view('images', compact('images', 'cats', 'mycat'));


})->name('images');
Route::get('/videos', function ( ) {

    $videos = Video::all();
    return view('videos', compact('videos'));


})->name('videos');

Auth::routes([

    // 'register' => false, // Register Routes...
  
    // 'reset' => false, // Reset Password Routes...
  
    // 'verify' => false, // Email Verification Routes...
  
]);
 
    
 