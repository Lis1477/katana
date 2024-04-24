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

Route::get('/', 'MainPageController@index');

Route::get('/produktsiya', 'ProductsPageController@index');
Route::get('/produktsiya/{id}/{slug?}', 'CategoryController@index');
Route::get('/{cat_slug}/{id}/{item_slug?}', 'ItemController@index');

Route::get('/o-kompanii', 'AboutCompanyPageController@index');

Route::get('/service', 'ServicePageController@index');

Route::get('/gde-kupit', 'ShopsPageController@index');

Route::get('/stat-partniorom', 'PartnerPageController@index');

Route::get('/kontakty', 'ContactPageController@index');

Route::get('/videoobzory', 'VideoPageController@index');

Route::post('/feedback', 'FeedbackController@postIndex');

