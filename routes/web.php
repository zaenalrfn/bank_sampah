<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WasteSubmissionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LandingController;
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

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/blog', [LandingController::class, 'allBlog'])->name('landing');
Route::get('/blog/{id}', [LandingController::class, 'show'])->name('landing.show');

// Route untuk form register dan login
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});



Route::middleware(['auth'])->group(function () {
    Route::middleware('role:user|admin')->group(function () {
        Route::get('/home', [HomeController::class, 'home'])->name('home');
        Route::get('users/create', [UserController::class, 'create'])->name('users.create');
        Route::post('users/store', [UserController::class, 'store'])->name('users.store');
        Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
        Route::put('users/{user}/update-password', [UserController::class, 'updatePassword'])->name('users.update-password');
    });

    Route::middleware('role:admin')->group(function () {
        Route::put('waste-submission/{waste_submission}', [WasteSubmissionController::class, 'update'])->name('waste-submission.update');
        Route::get('waste-submission', [WasteSubmissionController::class, 'index'])->name('waste-submission.index');
        Route::delete('waste-submission/{waste_submission}', [WasteSubmissionController::class, 'destroy'])->name('waste-submission.destroy');
        Route::resource('article', ArticlesController::class);
        Route::get('users', [UserController::class, 'index'])->name('users.index');
        Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    });
    Route::middleware('role:user')->group(function () {
        Route::get('waste-submission/create', [WasteSubmissionController::class, 'create'])->name('waste-submission.setor');
        Route::get('riwayat-setoran', [WasteSubmissionController::class, 'riwayat'])->name('waste-submission.riwayat');
        Route::post('waste-submission', [WasteSubmissionController::class, 'store'])->name('waste-submission.store');
        Route::post('waste-submission', [WasteSubmissionController::class, 'show'])->name('waste-submission.show');
    });
});
