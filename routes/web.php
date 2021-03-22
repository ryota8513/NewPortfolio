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
Route::get('index','PostController@index');

//ログイン画面表示
Route::get('Logins','UserController@login');
// Route::post('login','PostController@login');

//新規会員登録画面表示
Route::get('NewCreate','UserController@NewCreate');
//新規登録PUSH後
// Route::post('users','UserController@create');
//ログイン後トップ表示
Route::get('TopIndex','UserController@TopIndex');
//aboutについて表示
Route::get('about','UserController@showAbout');
//MyList表示
Route::get('MyList','UserController@showMyList');
//AccountEditアクセス  MyList編集
Route::post('AccountEdit','UserController@AccountEdit');
//AccountEditアクセス  MyList更新
Route::post('upAccountEdit','UserController@updateAccount');
//投稿フォーム表示, データーベース送信
Route::get('post','PostController@post');
Route::post('posts','PostController@create');
Route::get('ThanksForm','PostController@ThanksForm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
