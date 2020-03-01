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
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', function () {
    Auth::logout();
    return view('welcome');

});
Route::get('/profile','HomeController@profile');
Route::get('/profile/{id}','HomeController@profileid');
Route::resource('/post','PostsController');
Route::resource('/comment','CommentsController');
Route::resource('/category', 'CategoriesController');
Route::get('/group', 'HomeController@group');
Route::get('/groups', 'HomeController@group');
Route::get('/group/{id}', 'HomeController@groupid');
Route::get('/chatbot','HomeController@chatbot');
Route::get('/news','HomeController@news');


