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


/*
Route::get('/hello', function () {
    //return view('welcome');
    return '<h1>Hello World</h1>';
});

Route::get('/users/{id}/{name}' , function($id, $name){
    return 'this is user ' .$name. ' with an id of ' .$id;
});

*/

Route::get('/', 'PagesController@index');
//Route::get('/about', 'PagesController@about');
//Route::get('/services', 'PagesController@services');
Route::get('/business', 'PagesController@business');
Route::get('/thriller', 'PagesController@thriller');
Route::get('/romance', 'PagesController@romance');
Route::get('/single', 'PagesController@single');
//Route::resource('posts', 'PostsController');
Route::resource('bookCategory', 'BooksController');