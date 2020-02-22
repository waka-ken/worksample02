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
    return view('top');
})->name('top');

// Route::get('index', function () {
//     return view('index');
// })->name('index');

// Route::get('content/create', function () {
//     return view('content.create');
// })->name('create');

// Route::get('content/edit', function () {
//     return view('content.edit');
// })->name('edit');

// Route::get('content/detail', function () {
//     return view('content.detail');
// })->name('detail');

// Route::get('content/delete', function () {
//     return view('content.delete');
// })->name('delete');

Route::post('users/create', 'RecipesController@add');


Route::resource('users', 'UserController');

Route::get('terms', function () {
    return view('terms');
})->name('terms');

Route::get('privacy', function () {
    return view('privacy');
})->name('privacy');

Route::resource('recipes', 'RecipesController')->middleware('auth');

// リダイレクト処理
Route::get('/login/{provider}', 'Auth\LoginController@redirectToProvider')->name('login.twitter');
//　認証結果の受け取り
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

// snsリンク用サンプルコード{provider}の部分を任意のsnsに変えるだけでそのsnsへのページ遷移を行う
// // リダイレクト処理
// Route::get('/login/{provider}', 'Auth\LoginController@redirectToProvider');
// //　認証結果の受け取り
// Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

/**
 * プロフィールページ
 */
Route::get('/user/{userId}', 'UserController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
