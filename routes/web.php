<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WasteSubmissionController;
use App\Http\Controllers\UserController;
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

// Route untuk form register dan login
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('users', UserController::class);
Route::get('users/{user}/edit-password', [UserController::class, 'editPassword'])->name('users.edit-password');
Route::put('users/{user}/update-password', [UserController::class, 'updatePassword'])->name('users.update-password');
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::resource('article', ArticlesController::class);
Route::resource('waste-submission', WasteSubmissionController::class)->names([
    'index' => 'waste-submission.index',
    'create' => 'waste-submission.setor',
    'store' => 'waste-submission.store',
    'show' => 'waste-submission.show',
    'edit' => 'waste-submission.edit',
    'update' => 'waste-submission.update',
    'destroy' => 'waste-submission.destroy',
]);
