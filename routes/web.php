<?php

use App\Http\Controllers\AdminPanel\AdminProductController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\ProductController;
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

//********************************** MENU *************************************
    Route::prefix('menu')->name('menu.')->controller(HomeController::class)->group(function (){
Route::get('/',[HomeController::class,'menu'])->name('menu');
Route::get('/5','hotdrinks')->name('hotdrinks');
Route::get('/6','colddrinks')->name('colddrinks');
Route::get('/8','frontcolds')->name('frontcolds');
Route::get('/9','mainfoods')->name('mainfoods');
Route::get('/11','deserts')->name('deserts');
Route::get('/21','drills')->name('drills');
Route::get('/22','juicydishes')->name('juicydishes');
});


// **************************** ADMİN PANEL *********************************
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');

    // **************************** ADMİN CATEGORY ******************************
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });
    // **************************** ADMİN PRODUCT ******************************
    Route::prefix('/product')->name('prodcut.')->controller(ProductController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });
    // **************************** ADMİN PRODUCT IMAGE GALLERY ******************************
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{pid}','index')->name('index');
        Route::get('/create/{pid}','create')->name('create');
        Route::post('/store/{pid}','store')->name('store');
        Route::get('/destroy/{pid}/{id}', 'destroy')->name('destroy');
    });
});
