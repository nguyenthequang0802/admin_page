<?php

use App\Http\Controllers\Admin\AdminCotroller;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SeoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin/login', [LoginController::class, 'showAdminLoginForm'])->name('admin.auth.login');
Route::post('admin/login', [LoginController::class, 'adminLogin'])->name('admin.auth.login.store');

Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin']], function (){
    Route::get('/', [AdminCotroller::class, 'index'])->name('admin.homepage');
    Route::get('/register', [RegisterController::class, 'showAdminRegistrationForm'])->name('admin.auth.register');
    Route::post('/register', [RegisterController::class, 'storeAdminAccount'])->name('admin.auth.register.store');


    Route::group(['prefix' => 'menu'], function () {
        Route::get('/', [MenuController::class, 'index'])->name("admin.menu.index");
        Route::get('/add', [MenuController::class, 'create'])->name("admin.menu.add");
        Route::post('/add', [MenuController::class, 'store'])->name("admin.menu.store");
        Route::get('/edit/{id}', [MenuController::class, 'edit'])->name("admin.menu.edit");
        Route::post('/edit/{id}', [MenuController::class, 'update'])->name("admin.menu.update");
        Route::get('/delete/{id}', [MenuController::class, 'destroy'])->name("admin.menu.destroy");
    });
    Route::group(['prefix' => 'category'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name("admin.category.index");
        Route::get('/add', [CategoryController::class, 'create'])->name("admin.category.add");
        Route::post('/add', [CategoryController::class, 'store'])->name("admin.category.store");
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name("admin.category.edit");
        Route::post('/edit/{id}', [CategoryController::class, 'update'])->name("admin.category.update");
        Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name("admin.category.destroy");
    });
    Route::group(['prefix' => 'user'], function () {
        Route::get('/', [UserController::class, 'index'])->name("admin.user.index");
        Route::get('/add', [UserController::class, 'create'])->name("admin.user.add");
        Route::post('/add', [UserController::class, 'store'])->name("admin.user.store");
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name("admin.user.edit");
        Route::post('/edit/{id}', [UserController::class, 'update'])->name("admin.user.update");
        Route::get('/delete/{id}', [UserController::class, 'destroy'])->name("admin.user.destroy");
    });
    Route::group(['prefix' => 'review'], function () {
        Route::get('/', [ReviewController::class, 'index'])->name("admin.review.index");
        Route::get('/add', [ReviewController::class, 'create'])->name("admin.review.add");
        Route::post('/add', [ReviewController::class, 'store'])->name("admin.review.store");
        Route::get('/edit/{id}', [ReviewController::class, 'edit'])->name("admin.review.edit");
        Route::post('/edit/{id}', [ReviewController::class, 'update'])->name("admin.review.update");
        Route::get('/delete/{id}', [ReviewController::class, 'destroy'])->name("admin.review.destroy");
    });
    Route::group(['prefix' => 'comment'], function () {
        Route::get('/', [CommentController::class, 'index'])->name("admin.comment.index");
        Route::get('/add', [CommentController::class, 'create'])->name("admin.comment.add");
        Route::post('/add', [CommentController::class, 'store'])->name("admin.comment.store");
        Route::get('/delete/{id}', [CommentController::class, 'destroy'])->name("admin.comment.destroy");
    });
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/tinymce', function () {
    return view('tinymce');
});
//Route::get('/add', [PostController::class, 'add'])->name("post.add");
//Route::post('/add', [PostController::class, 'store'])->name("post.store");
//Route::get('/show/{id}', [PostController::class, 'show'])->name("post.show");
//Route::get('/edit/{id}', [PostController::class, 'edit'])->name("post.edit");
//Route::post('/edit/{id}', [PostController::class, 'update'])->name("post.update");


Route::get('/media', [HomeController::class, 'media']);
Route::get('/book', [HomeController::class, 'showBook']);
Route::get('/order/{id}', [HomeController::class, 'order']);


Route::group(['prefix' => 'post'], function () {
    Route::get('/', [PostController::class, 'index'])->name("post.index");
    Route::get('/add', [PostController::class, 'add'])->name("post.add");
    Route::post('/add', [PostController::class, 'store'])->name("post.store");
    Route::get('/show/{id}', [PostController::class, 'show'])->name("post.show");
    Route::get('/edit/{id}', [PostController::class, 'edit'])->name("post.edit");
    Route::post('/edit/{id}', [PostController::class, 'update'])->name("post.update");
    Route::get('/delete/{id}', [PostController::class, 'destroy'])->name("post.destroy");
});

Route::group(['prefix' => 'seo'], function () {
    Route::get('/', [SeoController::class, 'index'])->name("seo.index");
//    Route::get('/delete/{id}', [SeoController::class, 'destroy'])->name("seo.destroy");
});

