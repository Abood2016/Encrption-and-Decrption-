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


Route::group(['namespace' => 'BackEnd','prefix' => 'admin'],function (){
	Route::group(['middleware' => ['auth:admin']], function () {

	Route::get('/home', 'HomeController@index')->name('dashboard.index');
	Route::resource('/categories', 'CategoryController');
	Route::resource('/admins', 'AdminController');
	Route::get('/all', 'AdminController@index')->name('admins.index');
	Route::get('/getdata', 'PostController@getdata');
	Route::resource('/posts', 'PostController');
		Route::resource('/colors', 'ColorController');
		Route::resource('/brands', 'BrandController');
		Route::resource('/products', 'ProductController');
		Route::resource('messages', 'MessageController');

	Route::middleware('auth')->group(function(){
	Route::get('/profile/{id}/{slug?}', 'AdminController@profile')->name('profile.index');
	Route::put('/profile/update/', 'AdminController@Updateprofile')->name('profile.update');
});


	Route::get('logout','LoginController@logout')->name('logout');
});
	//login routes
	Route::get('/login','LoginController@login')->name('admin.login');
	Route::post('login','LoginController@store')->name('login.store'); 

});
  
  
 


 Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
