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


Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');
Route::get('/test','UsersController@test');

//导出

Route::get('export_pdf','ExportController@export_pdf')->name('export');
Route::post('batch_export','ExportController@batch_export')->name('batch_export');
//


Route::middleware(['auth'])->group(function(){
	Route::get('/', 'IndexController@index')->name('index');       //首页
	
	Route::resource('tags','TagsController');                      //标签
	
	Route::resource('users', 'UsersController');                   //用户
	
	Route::resource('letter_proofs', 'LetterProofsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);          //证明信
	
	Route::resource('drath_proofs', 'DrathProofsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);          //死亡证明
	
	Route::resource('register_tables', 'RegisterTablesController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);      //来访登记
	Route::put('register_finished','RegisterTablesController@finished')->name('register_tables.finished');
	
	Route::resource('informations', 'InformationsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);      //信息卡
	
	Route::get('getInformation/{information_id}','InformationsController@getInformation')->name('getInformation');  //信息卡全部信息

	Route::resource('handicappeds', 'HandicappedsController', ['only' => ['destroy']]);     //残疾人士

	Route::resource('residents', 'ResidentsController', ['only' => ['destroy','index']]);     //居民

	Route::resource('worker_proofs', 'WorkerProofsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);    //就业证明

	Route::resource('above_tables', 'AboveTablesController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);          //来访登记
	Route::put('above_finished','AboveTablesController@finished')->name('above_tables.finished');

	Route::resource('problem_tables', 'ProblemTablesController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);    //问题汇总
	Route::put('problem_finished','ProblemTablesController@finished')->name('problem_tables.finished');

	//图片相关
	Route::get('images','ImagesController@index')->name('images.index');
	Route::post('images','ImagesController@destroy')->name('images.destroy');
	Route::any('images_save','ImagesController@save')->name('images.save');
	//导出相关
	Route::post('excel_export','ResidentsController@export')->name('residents.export');

	//未完成
	Route::get('unfinish','IndexController@unfinish')->name('unfinish');
	//替换信息
	Route::post('replace_information','InformationsController@replace_information')->name('replace_information');
	//历史记录
	Route::get('history/{information}','HistoryController@show')->name('history.show');


});








