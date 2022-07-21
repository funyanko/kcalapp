<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::resource('/home/testapp', 'TestappController');
// 一覧画面の表示
Route::get('/home/kcalapp', 'KcalappController@index')->name('kcalapp.index');
// 登録画面の表示
Route::get('/home/kcalapp/create', 'KcalappController@create')->name('kcalapp.create');
// 登録処理
Route::post('/home/kcalapp/store', 'KcalappController@store')->name('kcalapp.store');
// 詳細
Route::get('/home/kcalapp/show/{id}', 'KcalappController@show')->name('kcalapp.show');
// 編集画面
Route::get('/home/kcalapp/edit/{id}', 'KcalappController@edit')->name('kcalapp.edit');
// 更新処理
Route::post('/home/kcalapp/update/{id}', 'KcalappController@update')->name('kcalapp.update');
// 削除
Route::post('/home/kcalapp/destroy{id}', 'KcalappController@destroy')->name('kcalapp.destroy');

//全て
Route::get('/home/kcalapp/all', 'AllController@all')->name('kcalapp.all');
