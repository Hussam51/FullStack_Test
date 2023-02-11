<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
define('PAGINATION_COUNT',2);
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
    return view('index');
});

Route::get('/shop', [ProductController::class, 'index'])->name('shop');

Route::get('/home', [ProductController::class, 'home'])->name('home');
Route::group(
    ['prefix' => 'products'],
    function () {
        Route::get('/create', [ProductController::class, 'create'])->name('create');
        Route::post('/store', [ProductController::class, 'store'])->name('store');
        Route::get('/{products}/edit', [ProductController::class, 'edit'])->name('edit');
        Route::put('/{products}/update', [ProductController::class, 'update'])->name('update');
    }
);
