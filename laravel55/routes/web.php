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


Route::get('foo', function () {
    return view('me/phone');
});

Route::group([ 'namespace'=>'Web'], function () {
    Route::get('/', 'IndexController@index');
    Route::get('about', 'IndexController@about');
    Route::get('cases', 'IndexController@cases');
    Route::get('contact', 'IndexController@contact');
    Route::get('facebook', 'IndexController@facebook');
    Route::get('fbpage', 'IndexController@fbpage');
    Route::get('google', 'IndexController@google');
    Route::get('ig', 'IndexController@ig');
    Route::get('youtube', 'IndexController@youtube');
    Route::get('news/{id}', 'IndexController@news');
    Route::get('cases/{id}', 'IndexController@cases2');
    Route::get('sendEmail', 'IndexController@sendEmail')->name('sendEmail');
});

Auth::routes();
Route::group(['middleware' => ['auth']],function(){
    Route::get('admin/', 'HomeController@index')->name('home');
});
Route::group(['middleware' => ['auth'],'prefix'=>'admin'],function(){
    Route::get('/user', 'User\UserController@index')->name('user');
	Route::get('/user/add', 'User\UserController@add')->name('user_add');
	Route::post('/user/addff', 'User\UserController@addff')->name('user_add_addff');
	Route::get('/user/delete', 'User\UserController@delete')->name('user_delete');
	Route::get('/user/edit', 'User\UserController@edit')->name('user_edit');
	Route::post('/user/deitff', 'User\UserController@editff')->name('user_edit_editff');
});

Route::group(['middleware' => ['auth'],'prefix'=>'admin','namespace'=>'Total'],function(){
    Route::get('/news7', 'TotalController@jiangzuo')->name('news7');
    Route::get('/news6', 'TotalController@huodong')->name('news6');
    Route::get('/add', 'TotalController@add')->name('new_add');
    Route::post('/add', 'TotalController@addPost')->name('addPost');
    Route::get('/case', 'TotalController@anli')->name('case');
    Route::get('/caseAdd', 'TotalController@caseAdd')->name('caseAdd');
    Route::post('/caseAdd', 'TotalController@caseAddff')->name('caseAddff');
    Route::get('/caseDel', 'TotalController@caseDel')->name('caseDel');
    Route::get('/newsDel', 'TotalController@newsDel')->name('newsDel');
    Route::get('/ad', 'TotalController@ad')->name('ad');
});

