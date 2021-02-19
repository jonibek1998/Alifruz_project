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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/news/{slug}', 'HomeController@show')->name('new.show');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/service', 'ServicesController@index')->name('services');
Route::get('/service/{slug}', 'ServicesController@view')->name('service.view');
Route::get('/faq', 'FaqController@index')->name('faq');
Route::get('/pricing', 'PricingController@index')->name('pricing');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@store')->name('contact.form');
Route::post('/subscriber', 'SubscribeController@create')->name('subscription');
Route::get('/login', 'AuthController@index');
Route::post('/login', 'AuthController@login')->name('login');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function(){
    Route::get('/', 'DashboardController@index');
    Route::resource('/freights', 'FreightController');
    Route::resource('/providers', 'ProviderController');
    Route::resource('/teams', 'TeamController');
    Route::resource('/news', 'NewController');
    Route::resource('/services', 'ServiceController');
    Route::resource('/pricing', 'PriceController');
    Route::resource('/subscribers', 'SubscribersController');
    Route::resource('/users', 'UsersController');
    Route::resource('/contact', 'ContactController');
});
