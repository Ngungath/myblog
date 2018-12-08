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



Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home',[
  'uses'=>'HomeController@index',
  'as'=>'home'
]);

Route::get('/posts/create',[
  
  'uses'=>'PostsController@create',
  'as'=>'posts.create'
]);
Route::post('/posts/store',[
  'uses'=>'PostsController@store',
  'as'=>'posts.store'
]);

// for categories
Route::get('/categories',[
  'uses'=>'categoriesController@index',
  'as'=>'categories'
]);
Route::get('/categories/edit/{id}',[
 'uses'=>'categoriesController@edit',
 'as'=>'categories.edit'

]);
Route::get('/categories/destroy/{id}',[
 'uses'=>'categoriesController@destroy',
 'as'=>'categories.destroy'
]);
Route::post('/categories/update/{id}',[
 'uses'=>'categoriesController@update',
 'as'=>'categories.update'
]);

Route::get('/categories/create',[
 'uses'=>'categoriesController@create',
 'as'=>'categories.create'

]);
Route::post('/categories/store',[
 'uses'=>'categoriesController@store',
 'as'=>'categories.store'

]);

});


