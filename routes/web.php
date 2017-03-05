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

Route::get('/', 'HomepageController@index')->name('home');

Route::get('/changeStatus/{id}/{user_id}', 'AlamatController@changestatus')->name('changeStatusAlamat');
Route::group(['prefix' => 'profile'], function () {

	Route::resource('alamat','AlamatController');

	Route::get('/{username}', 'userController@show')->name('profile');

	Route::get('/edit/{id}','userController@edit');

	Route::post('/update/{id}', 'userController@update');

});
Route::group(['prefix' => 'admin'], function(){
    Route::resource('kategori','KategoriController');
    Route::resource('pengiriman', 'PengirimanController');
    Route::resource('voucher','VoucherController');
    Route::resource('bank','BankController');
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
Route::resource('toko','TokoController');
Route::resource('pakaian','ProdukController');
Route::get('/logout', function(){
	Auth::logout();
    Session::flush();
	return redirect()->route('home');
})->name('logout');

Route::resource('pesan','PesanController');
Route::post('pesan','PesanController@storeOut')->name('pesan.storeOut');
Route::post('pesan','PesanController@store')->name('pesan.store');
Route::get('tests',function(){
   return view('welcome');
});

Route::post('/login', 'userController@trlogin')->name('login');

Route::get('/accepted/{id}','TokoController@accept')->name('toko.accept');
Route::get('test',function(){
   return view('registrasi');
});