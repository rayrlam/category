<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController; 

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

Route::get('/', [CategoryController::class, 'welcome'])->name('welcome');

Route::match(['get', 'post'], '/categories', [CategoryController::class,'categories'])->name('categories');

Route::get('/category/{id}', [CategoryController::class, 'category']);

Route::get('/breadcrumb', [CategoryController::class, 'breadcrumb'])->name('breadcrumb');

Route::post('/breadcrumbs', [CategoryController::class, 'breadcrumbs'])->name('breadcrumbs');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
