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
//ログイン前トップ表示
Route::get('/Auth/index','UserController@index');

//ログイン画面表示
Route::get('/Auth/login','UserController@login');
// Route::post('users','UserController@TopIndex');

//新規会員登録画面表示
Route::get('/Auth/register','UserController@register');

//新規登録PUSH後
Route::post('users','UserController@create');

//ログイン後トップ表示
Route::get('TopIndex','UserController@TopIndex');

Auth::routes();

//ログインして名前があればTopIndexをviewする
Route::get('/TopIndex', 'UserController@TopIndex')->name('TopIndex');
