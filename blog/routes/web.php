<?php

use App\Product;
use Illuminate\Contracts\Session\Session;
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
    return view('auth.login');
});
Route::post('/login','LoginController@Login');
Route::get('/logout',function () {
    return view('auth.login');
})->name('logout');

Route::group(['prefix' => 'product'], function () {
    Route::get('/','ProductController@index')->name('product.index');
    Route::get('/create','ProductController@create')->name('product.create');
    Route::post('/store','ProductController@store')->name('product.store');
    Route::get('/edit/{id}','ProductController@edit')->name('product.edit');
    Route::post('/update/{id}','ProductController@update')->name('product.update');
    Route::get('/delete/{id}','ProductController@delete')->name('product.delete');



});
Route::group(['prefix' => 'order'], function () {
    Route::get('/','OrderController@index')->name('order.index');
    Route::get('/store','OrderController@store')->name('order.store');
    Route::get('/edit/{id}','OrderController@edit')->name('order.edit');
    Route::post('/update/{id}','OrderController@update')->name('order.update');
    Route::get('/delete/{id}','OrderController@delete')->name('order.delete');
});
Route::get('add-to-card/{id}',['as'=>'addCart','uses'=>'ProductController@getAddToCart']);
Route::get('delete-to-card/{id}',['as'=>'deleteCart','uses'=>'ProductController@getDeleteToCart']);
Route::get('/history',['as'=>'history','uses'=>'OrderController@showHistory']);
Route::get('/information',['as'=>'information','uses'=>'OrderController@showInfo']);
Route::get('/revenue',['as'=>'revenue','uses'=>'OrderController@showRevenue']);
Route::get('/nhaplieu',['as'=>'nhaplieu','uses'=>'OrderController@showNhaplieu']);


