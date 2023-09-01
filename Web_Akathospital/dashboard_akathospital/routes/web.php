<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\indexShowIMGController;
use App\Http\Controllers\DashboardEditNavbarController;
use App\Http\Controllers\DashboardIndexController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [indexController::class, 'index'])->name('Akathospital');
// Route for normal user
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

// Route for admin
Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => ['admin']], function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    });
});

Route::get('/indexShowIMG', [indexShowIMGController::class, 'index'])->name('indexShowIMG');

Auth::routes();

Route::post('/store', [testCRUDAdminController::class, 'store'])->name('store');
Route::get('/fetchall', [testCRUDAdminController::class, 'fetchAll'])->name('fetchAll');
Route::get('/edit', [testCRUDAdminController::class, 'edit'])->name('edit');
Route::post('/update', [testCRUDAdminController::class, 'update'])->name('update');
Route::delete('/delete', [testCRUDAdminController::class, 'delete'])->name('delete');

