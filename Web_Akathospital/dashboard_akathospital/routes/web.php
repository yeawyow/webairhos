<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\indexShowIMGController;
use App\Http\Controllers\DashboardEditNavbarController;
use App\Http\Controllers\DashboardIndexController;

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
// Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::get('/indexShowIMG', [indexShowIMGController::class, 'index'])->name('indexShowIMG');

Auth::routes();

Route::get('/dashboardIndex', [App\Http\Controllers\DashboardIndexController::class, 'index'])->name('dashboardIndex');
Route::get('/dashboardEditNavbar', [App\Http\Controllers\DashboardEditNavbarController::class, 'index'])->name('dashboardEditNavbar');