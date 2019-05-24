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
///creating a hello route
// Route::get('/hello', function () {
// return "hello world";
// });
  
// Route::get('/', function () {
//     return view('welcome');
//     });

route::get('/','pageController@index');
route::get('/about','pageController@about')->name("about");
route::get('/services','pageController@services');
route::resource('post','PostController');

 

Auth::routes();

Route::get('/dashoard', 'DashBoardController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
