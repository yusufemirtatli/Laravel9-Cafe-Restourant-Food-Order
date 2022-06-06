<?php

use App\Http\Controllers\AdminPanel\AdminProductController;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopCartController;
use App\Http\Controllers\UserController;
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

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/productdetail/{id}',[HomeController::class,'productdetail'])->name('productdetail');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//********************************** MENU *************************************
Route::prefix('menu')->name('menu.')->controller(HomeController::class)->group(function (){
    Route::get('/',[HomeController::class,'menu'])->name('menu');
    Route::get('/{id}','products')->name('products');
    Route::get('/{id}/productdetail','productdetail')->name('productdetail');


});

//**************************** HOME PAGE ROUTES ****************************
Route::post('/storemessage',[HomeController::class,'storemessage'])->name('storemessage');
Route::post('/storecomment',[HomeController::class,'storecomment'])->name('storecomment');
Route::view('/loginuser','home.login')->name('loginuser');
Route::view('/registeruser','home.register')->name('registeruser');
Route::get('/logoutuser',[HomeController::class,'logout'])->name('logoutuser');
Route::view('/loginadmin','admin.login')->name('loginadmin');
Route::post('/loginadmincheck',[HomeController::class,'loginadmincheck'])->name('loginadmincheck');


// **************************** USER AUTH *********************************
Route::middleware('auth')->group(function (){
   // Route::middleware('userpanel')->prefix('userpanel')->name('userpanel.')->group(function () {
        Route::get('/userprofile', [UserController::class, 'userprofile'])->name('userprofile');
        Route::get('/myreviews', [UserController::class, 'myreviews'])->name('myreviews');
        Route::get('/destroyreview/{id}', [UserController::class, 'destroyreview'])->name('destroyreview');

// **************************** SHOPCART  ******************************
    Route::prefix('/shopcart')->name('shopcart.')->controller(ShopCartController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });


    // **************************** ADMİN PANEL *********************************
    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('index');
        Route::get('/logoutuser',[AdminHomeController::class,'logout'])->name('logoutuser');


// **************************** ADMİN GENERAL SETTİNG ******************************
        Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
        Route::post('/setting', [AdminHomeController::class, 'settingUpdate'])->name('setting.update');

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

        // **************************** ADMİN MESSAGE ROUTES ******************************
        Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
            Route::get('/','index')->name('index');
            Route::get('/show/{id}','show')->name('show');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
        });

        // **************************** ADMİN COMMENTS ROUTES ******************************
        Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function () {
            Route::get('/','index')->name('index');
            Route::get('/show/{id}','show')->name('show');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
        });

        // **************************** ADMİN FAQ ROUTES ******************************
        Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {
            Route::get('/','index')->name('index');
            Route::get('/create','create')->name('create');
            Route::post('/store','store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
            Route::get('/show/{id}', 'show')->name('show');
        });

        // **************************** ADMİN USER ROUTES ******************************
        Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function () {
            Route::get('/','index')->name('index');
            Route::get('/edit/{id}','edit')->name('edit');
            Route::get('/show/{id}','show')->name('show');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
            Route::post('/addrole/{id}','addrole')->name('addrole');
            Route::get('/destroyrole/{uid}/{rid}', 'destroyrole')->name('destroyrole');

        });

    });
});
