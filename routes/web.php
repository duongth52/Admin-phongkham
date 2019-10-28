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

// Example Routes
// Route::view('/', 'landing');
// Route::view('/', 'signin');?

// Route::view('/', 'signin');
// Route::match(['get', 'post'], '/dashboard', function(){
//     return view('dashboard');
// });

Route::view('/', 'signin');
Route::get('/signin', ['as' => 'getLogin', 'uses' => 'AdminLoginController@getLogin']);
Route::post('/signin', ['as' => 'postLogin', 'uses' => 'AdminLoginController@postLogin']);
Route::any('/logout', ['as' => 'postlogout', 'uses' => 'AdminLoginController@logout']);
Route::get('/getadd', ['as' => 'getadd', 'uses' => 'AdminLoginController@getadd']);
Route::post('/posttadd', ['as' => 'posttadd', 'uses' => 'AdminLoginController@posttadd']);

Route::group([
    'namespace' => 'Admin',
    'as' => 'admin.',
 //   'prefix' => 'admin',
    'middleware' => 'checklogin',
], function(){
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});


Route::view('/examples/plugin-helper', 'examples.plugin_helper');
Route::view('/examples/plugin-init', 'examples.plugin_init');
Route::view('/examples/blank', 'examples.blank');

//  Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

