<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

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
Route::get('/login', [homeController::class, 'login'])->name('login');
Route::post('/loginAct', [homeController::class, 'dologin'])->name('do');

Route::get('/', [homeController::class, 'dashboard'])->name('dash');
Route::get('/user', [homeController::class, 'index'])->name('index');

Route::get('/create', [homeController::class, 'create'])->name('create');
Route::post('/store', [homeController::class, 'store'])->name('store');

Route::get('/edit/{id}', [homeController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [homeController::class, 'update'])->name('update');

Route::delete('/delete/{id}', [homeController::class, 'delete'])->name('delete');
