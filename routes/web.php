<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\gudangController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/dologin', [LoginController::class, 'dologin'])->name('dologin');
Route::get('/', [homeController::class, 'landing'])->name('landing');

Route::group(['prefix' => 'admin','middleware' => ['auth'], 'as' => 'admin.'], function(){

    Route::get('/index', [homeController::class, 'index'])->name('index');
    Route::get('/create', [homeController::class, 'create'])->name('create');
    Route::post('/store', [homeController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [homeController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [homeController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [homeController::class, 'delete'])->name('delete');
    
    Route::get('/gudang', [gudangController::class, 'gudang'])->name('gudang');
    Route::get('/gudang/create', [gudangController::class, 'create'])->name('gudang.create');
    Route::post('/gudang/store', [gudangController::class, 'store'])->name('gudang.store');
    Route::get('/gudang/edit/{id}', [gudangController::class, 'edit'])->name('gudang.edit');
    Route::put('/gudang/update/{id}', [gudangController::class, 'update'])->name('gudang.update');
    Route::delete('/gudang/delete/{id}', [gudangController::class, 'delete'])->name('gudang.delete');
});





