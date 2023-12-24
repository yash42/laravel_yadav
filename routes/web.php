<?php

use App\Http\Controllers\notice;
use App\Http\Controllers\noticecontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\categorycontroller;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get ('/',[homecontroller::class, 'index'])->name('index');
Route::get ('/aboutme',[homecontroller::class, 'aboutme'])->name('about');
Route::get ('/login',[homecontroller::class, 'login'])->name('login');
Route::get ('/articles',[homecontroller::class, 'article'])->name('articles');


//Category
Route::get ('/category',[categorycontroller::class, 'index'])->name('category.index');
Route::get ('/category/create',[categorycontroller::class, 'create'])->name('category.create');
Route::post('/category/store', [categorycontroller::class, 'store'])->name('category.store');
Route::get('/category/view/{id}', [categorycontroller::class, 'show'])->name('category.show');
Route::get('/category/edit/{id}', [categorycontroller::class, 'edit'])->name('category.edit');
Route::post('/category/update/{id}', [categorycontroller::class, 'update'])->name('category.update');
Route::get('/category/delete/{id}', [categorycontroller::class, 'destroy'])->name('category.destroy');

//Notices
Route::get('/notice',[noticecontroller::class,'index'])->name('notice.index');
Route::get('/notice/create',[noticecontroller::class,'create'])->name('notice.create');
Route::post('/notice/store',[noticecontroller::class,'store'])->name('notice.store');
Route::get('/notice/show/{id}',[noticecontroller::class,'show'])->name('notice.show');
Route::get('/notice/edit/{id}',[noticecontroller::class,'edit'])->name('notice.edit');
Route::post('/notice/update/{id}',[noticecontroller::class,'update'])->name('notice.update');