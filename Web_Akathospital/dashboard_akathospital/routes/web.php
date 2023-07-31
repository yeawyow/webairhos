<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardAdminController;
use App\Http\Controllers\testCRUDAdminController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [dashboardAdminController::class, 'index'])->name('dashboard');

Route::get('/testCRUD', [testCRUDAdminController::class, 'index'])->name('testCRUD');
Route::post('/store', [testCRUDAdminController::class, 'store'])->name('store');
Route::get('/fetchall', [testCRUDAdminController::class, 'fetchAll'])->name('fetchAll');
Route::get('/edit', [testCRUDAdminController::class, 'edit'])->name('edit');
Route::post('/update', [testCRUDAdminController::class, 'update'])->name('update');
Route::delete('/delete', [testCRUDAdminController::class, 'delete'])->name('delete');

