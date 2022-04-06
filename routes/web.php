<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AdminController;
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
//     return view('welcome');
// });

Route::get('/login', [UserController::class, "v_login"])->name('login');
Route::post('/masuk', [UserController::class, "login"]);


// Guest Client Page

Route::get('/', [GuestController::class, "home"])->name('home');
Route::get('/kamar', function () {
    return view('guest/kamar');
});

Route::get('/kamar/detail', function () {
    return view('guest/detailkamar');
});


Route::get('/book/form/{id}', [AdminController::class, "kamarCreate"]);


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/kamar/index', [AdminController::class, "kamarIndex"])->name('kamarIndex');
    Route::get('/admin/kamar/create', [AdminController::class, "kamarCreate"]);
    Route::post('/admin/kamar/store', [AdminController::class, "kamarStore"]);
    Route::get('/admin/kamar/edit/{id}', [AdminController::class, "kamarEdit"]);
    Route::post('/admin/kamar/update/{id}', [AdminController::class, "kamarUpdate"]);
    Route::get('/admin/kamar/delete/{id}', [AdminController::class, "kamarDestroy"]);



    Route::post('/logout', [UserController::class, 'logout']);

    Route::get('/admin/dashboard', [AdminController::class, "dashboard"])->name('dashboard');




});


