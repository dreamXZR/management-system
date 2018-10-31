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


//登陆、注册、权限、找回密码
// Route::get('/signup','UsersController@create')->name('signup');
Route::resource('users', 'UsersController');

Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');


Route::middleware(['auth'])->group(function(){
	Route::get('/', 'IndexController@index')->name('index');       //首页
	Route::resource('tags','TagsController');                      //标签
	Route::resource('letter_proofs', 'LetterProofsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);          //证明信
	Route::resource('drath_proofs', 'DrathProofsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);          //死亡证明
});




