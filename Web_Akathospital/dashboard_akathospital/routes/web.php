<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardAdminController;
use App\Http\Controllers\testCRUDAdminController;
use App\Http\Controllers\addUserController;
use App\Http\Controllers\indexController;

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
Route::get('/dashboard', [dashboardAdminController::class, 'index'])->name('dashboard');

Route::get('/testCRUD', [testCRUDAdminController::class, 'index'])->name('testCRUD');
Route::get('/addUser', [addUserController::class, 'index'])->name('addUser');

Route::post('/store', [testCRUDAdminController::class, 'store'])->name('store');
Route::get('/fetchall', [testCRUDAdminController::class, 'fetchAll'])->name('fetchAll');
Route::get('/edit', [testCRUDAdminController::class, 'edit'])->name('edit');
Route::post('/update', [testCRUDAdminController::class, 'update'])->name('update');
Route::delete('/delete', [testCRUDAdminController::class, 'delete'])->name('delete');

