<?php

use Illuminate\Support\Facades\Route;


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

//Route::get('/', function () {
   // return view('welcome');
//});
Route::get('/','makeController@index')->name('home');
Route::prefix('admin')->group(function(){
	
Route::get('/dashboard','makeController@dashboard')->name('admin.dashboard');
Route::get('55/main','mainpagesController@index')->name('admin.main');
Route::put('/main','mainpagesController@update')->name('admin.main.update');
Route::get('/services/create','servicepagesController@create')->name('admin.services.create');
Route::post('/services/create','servicepagesController@store')->name('admin.services.store');
Route::get('/services/list','servicepagesController@list')->name('admin.services.list');
Route::get('/services/edit/{id}','servicepagesController@edit')->name('admin.services.edit');
Route::post('/services/update/{id}','servicepagesController@update')->name('admin.services.update');
Route::get('/services/delete/{id}','servicepagesController@delete')->name('admin.services.delete');
//protfolio 
Route::get('/protfolios/create','protfoliopagesController@create')->name('admin.protfolios.create');
Route::put('/protfolios/create','protfoliopagesController@store')->name('admin.protfolios.store');
Route::get('/protfolios/list','protfoliopagesController@list')->name('admin.protfolios.list');
Route::get('/protfolios/edit/{id}','protfoliopagesController@edit')->name('admin.protfolios.edit');
Route::post('/protfolios/update/{id}','protfoliopagesController@update')->name('admin.protfolios.update');
Route::get('/protfolios/delete/{id}','protfoliopagesController@delete')->name('admin.protfolios.delete');

//about
Route::get('/abouts/create','aboutpagesController@create')->name('admin.abouts.create');
Route::put('/abouts/create','aboutpagesController@store')->name('admin.abouts.store');
Route::get('/abouts/list','aboutpagesController@list')->name('admin.abouts.list');
Route::get('/abouts/edit/{id}','aboutpagesController@edit')->name('admin.abouts.edit');
Route::post('/abouts/update/{id}','aboutpagesController@update')->name('admin.abouts.update');
Route::get('/abouts/delete/{id}','aboutpagesController@delete')->name('admin.abouts.delete');
});

Route::post('/contact','contactFromController@store')->name('contact.store');


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
