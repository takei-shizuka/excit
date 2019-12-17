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
    return view('welcomeleader');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user','UserController@index');

//index(一覧表示)
Route::get('/article/index','ArticleController@index')->name('article_index');

//add.create（新規作成）
Route::get('/article/add','ArticleController@add')->name('article_add');
Route::post('/article/add','ArticleController@create')->name('article_create');

//edit.update(編集)
Route::get('/article/edit/{id}','ArticleController@edit')->name('article_edit');
Route::patch('/article/edit','ArticleController@update')->name('article_update');

//delete.remove(削除)
Route::delete('/artcle/destroy/{id}','ArticleController@destroy')->name('article_destroy');
