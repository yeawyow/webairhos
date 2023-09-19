<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\showsController;
use App\Http\Controllers\offsiteActivitiesController;
use App\Http\Controllers\offsiteActivitiesDashboardController;

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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [indexController::class, 'index'])->name('Akathospital');
Route::get('/shows', [showsController::class, 'index'])->name('shows');
Route::get('/offsiteActivities', [offsiteActivitiesController::class, 'index'])->name('offsiteActivities');

//Route for normal user
Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

//Route for admin
Route::group(['prefix' => 'admin'], function() {
    Route::group(['middleware' => ['admin']], function() {
        Route::get('/admin', [adminController::class, 'index'])->name('admin');
    });
});

// Dashboard 
Route::get('/offsiteActivitiesDashboard', [offsiteActivitiesDashboardController::class, 'index'])->name('offsiteActivitiesDashboard');
Route::get('/fetchAllOffsiteActivitiesDashboard', [offsiteActivitiesDashboardController::class, 'fetchAll'])->name('fetchAllOffsiteActivitiesDashboard');

Route::get('/testCRUD', [testCRUDAdminController::class, 'index'])->name('testCRUD');
Route::post('/store', [testCRUDAdminController::class, 'store'])->name('store');
Route::get('/fetchall', [testCRUDAdminController::class, 'fetchAll'])->name('fetchAll');
Route::get('/edit', [testCRUDAdminController::class, 'edit'])->name('edit');
Route::post('/update', [testCRUDAdminController::class, 'update'])->name('update');
Route::delete('/delete', [testCRUDAdminController::class, 'delete'])->name('delete');