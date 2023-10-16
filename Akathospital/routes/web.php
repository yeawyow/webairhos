<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\showsController;
use App\Http\Controllers\offsiteActivitiesController;
use App\Http\Controllers\offsiteActivitiesDashboardController;
use App\Http\Controllers\sliderJssorDashboardController;
use App\Http\Controllers\testController;
use App\Http\Controllers\EmployeeController;

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
    // OffsiteActivitiesDashboard Start
        Route::get('/offsiteActivitiesDashboard', [offsiteActivitiesDashboardController::class, 'index'])->name('offsiteActivitiesDashboard');
        Route::get('/fetchAllOffsiteActivitiesDashboard', [offsiteActivitiesDashboardController::class, 'fetchAll'])->name('fetchAllOffsiteActivitiesDashboard');
        Route::post('/storeOffsiteActivitiesDashboard', [offsiteActivitiesDashboardController::class, 'store'])->name('storeOffsiteActivitiesDashboard');
    // OffsiteActivitiesDashboard End

    // SliderJssorDashboard Start
        Route::get('/sliderJssorDashboard', [sliderJssorDashboardController::class, 'index'])->name('sliderJssorDashboard');
        Route::get('/fetchAllSliderJssorDashboard', [sliderJssorDashboardController::class, 'fetchAll'])->name('fetchAllSliderJssorDashboard');
        Route::post('/storeSliderJssorDashboard', [sliderJssorDashboardController::class, 'store'])->name('storeSliderJssorDashboard');
    // SliderJssorDashboard End

// test Start
Route::get('/test', [testController::class, 'index']);
// test End

Route::get('/', [EmployeeController::class, 'index']);
Route::post('/store', [EmployeeController::class, 'store'])->name('store');
Route::get('/fetchall', [EmployeeController::class, 'fetchAll'])->name('fetchAll');
Route::delete('/delete', [EmployeeController::class, 'delete'])->name('delete');
Route::get('/edit', [EmployeeController::class, 'edit'])->name('edit');
Route::post('/update', [EmployeeController::class, 'update'])->name('update');