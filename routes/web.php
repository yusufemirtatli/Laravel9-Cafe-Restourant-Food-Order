<?php

use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
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

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/',[HomeController::class,'index']);

Route::get('/about',[HomeController::class,'about']);

Route::get('/deneme',[HomeController::class,'deneme']);

Route::get('/test.blade.php',[HomeController::class,'test']);

Route::redirect('/hakkımızda','/about');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// **************************** ADMİN PANEL *********************************

Route::get('/admin',[AdminHomeController::class,'index']);

// **************************** ADMİN category ******************************

Route::get('/admin/category',[CategoryController::class,'index'])->name('admin_category');
Route::get('/admin/category/create',[CategoryController::class,'create'])->name('admin_category_create');
Route::get('/admin/category/store',[CategoryController::class,'store'])->name('admin_category_store');
