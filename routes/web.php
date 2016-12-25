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


    return view('homepage');
})->name('home');

Route::group(['prefix' => 'profile'], function () {

	Route::group(['prefix' => 'alamat'], function () {
		Route::get('/','AlamatController@create');
		
		Route::post('/store','AlamatController@store');
		Route::get('/change','AlamatController@index');
	});
	Route::get('/{id}', 'userController@show')->name('profile');

	Route::get('/edit/{id}','userController@edit');

	Route::post('/update/{id}', 'userController@update');

});

Route::group(['prefix' => 'admin'], function(){
	route::get('/',function(){
		return view('layout/adminTemplate');
	});
	route::get('/about','AboutController@index');
	route::get('/contact','ContactController@index');
	route::post('/contact/store','ContactController@store');
	route::get('/logotemplate','LogoTemplateController@index');
	route::post('/logotemplate/store','LogoTemplateController@store');
});

Route::post('/register', 'userController@store')->name('register');

Route::get('/logout', function(){
	Auth::logout();
	return redirect()->route('home');	
})->name('logout');

Route::post('/login', 'userController@trlogin')->name('login');
Route::get('/test', 'AboutController@index');
Route::post('/test/store', 'AboutController@store');