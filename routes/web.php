<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\loginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\postController;
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

Route::middleware('auth')->group(function () {

    Route::get('/gallery', function () {
        return view('pages.gallery', [
            "title" => "Akun"
        ]);
    });
    Route::get('/singlepage', function () {
        return view('pages.singlepage', [
            "title" => "Singlepage"
        ]);
    });

    Route::get('/home', function () {
        return view('pages.home', [
            "title" => "Home"
        ]);
    });
    Route::get('/show', function () {
        return view('pages.show', [
            "title" => "showpages"
        ]);
    });
    
});



Route::get('/register', [registerController::class, 'index'])->middleware('guest');
Route::post('/register', [registerController::class, 'store']);
Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'authenticate'])->name('proseslogin');
Route::post('/logout', [loginController::class, 'logout']);

Route::get('/gallery/{id}', [galleryController::class, 'index'])->name('galleryid');
Route::get('/show/{id}', [galleryController::class, 'show'])->name('galleryshow');

Route::get('/edit/{id}', [galleryController::class, 'showedit'])->name('galleryedit');
Route::post('/proses-update/{id}', [galleryController::class, 'update'])->name('edit');

Route::get('/delete/{id}', [galleryController::class, 'destroy'])->name('gallerydelete');

Route::resource('/post', postController::class);

Route::get('/profile', [profileController::class, 'index'])->name('profile')->middleware('auth');

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard')->middleware('auth');
