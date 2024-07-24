<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReportController;

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
    return view('pages.auth.login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('home', [UserController::class, 'dashboard']);
    Route::resource('user',UserController::class);
    Route::resource('product', \App\Http\Controllers\ProductController::class);
    Route::resource('order', \App\Http\Controllers\OrderController::class);


});

// Route::get('/login', function () {
//     return view('pages.auth.login');
// })->name('login');

// Route::get('/register', function () {
//     return view('pages.auth.register');
// })->name('register');

// Route::get('/users', function () {
//     return view('pages.users.index');
// });

    // Route::get('/report', [ReportController::class, 'index'])->name('report.index');
    // Route::get('/report/filter', [ReportController::class, 'filter'])->name('report.filter');
    // Route::get('/report/download', [ReportController::class, 'download'])->name('report.download');
