<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
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
/* ................................Admin Routes...................................... */

Route::prefix('admin')->group(function(){
    Route::get('/login',[AdminController::class,'loginForm'])->name('admin-login-form');
    Route::post('/login',[AdminController::class,'login'])->name('admin-login');
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin-dashboard')->middleware('admin');
    Route::get('/logout',[AdminController::class,'logout'])->name('admin-logout')->middleware('admin');
    Route::get('/registration',[AdminController::class,'registrationForm'])->name('admin-registration-form');
    Route::post('/registration',[AdminController::class,'registration'])->name('admin-registration');

});


/* ................................End Admin Routes.................................. */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
