<?php

use App\Product;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::post('/login','LoginController@Login');
Route::get('/product','ProductController@index')->name('sanpham');
Route::get('/user',function () {
    return view('nhanvien');
})->name('nhanvien');
Route::get('/history',function () {
    return view('lichsugd');
})->name('lichsu');
Route::get('/order',function () {
    return view('hoadon');
})->name('hoadon');
Route::get('add-product',function(){
    return view('product.formadd');
})->name('addproduct');
Route::post('/product','ProductController@insert')->name('addproduct1');

Route::get('/product/{id}/edit','ProductController@edit')->name('editproduct');
Route::post('/product/{id}/edit','ProductController@postedit')->name('posteditproduct');
Route::get('/product/{id}/delete','ProductController@delete')->name('postdeleteproduct');


