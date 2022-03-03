<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactUsController;

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

// Route::get('/', function () {
//     return view('home');
// });

// Auth::routes();
// Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman Home
route::get('/', [HomePageController::class, 'index']);

// Halaman Product
route::prefix('category')->group(function(){
    route::get('/marbel-edu-games', [ProductController::class, 'eduGame']);
    route::get('/marbel-and-friends-kids-games', [ProductController::class, 'kidsGame']);
});

// Halaman News
route::get('news/{judul?}', [NewsController::class, 'news']);

// Halaman Program
route::prefix('program')->group(function(){
    route::get('/karir', [ProgramController::class, 'program1']);
    route::get('/magang', [ProgramController::class, 'program2']);
    route::get('/kunjungan-industri', [ProgramController::class, 'program3']);
});

// Halaman About Us
route::get('/about-us', [AboutController::class, 'about']);

// Halaman Contact Us
route::resource('/contact-us', ContactUSController::class, [
    'only' => ['index', 'create', 'store']
]);