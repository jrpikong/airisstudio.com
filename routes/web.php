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

Route::get('/', 'HomeController@index')->name('home');

Route::get('catalog','CatalogController@index')->name('catalog');
Route::get('catalog/category/{category}','CatalogController@byCategory')->name('catalog-by-category');
Route::get('catalog/{slug}','CatalogController@catalogDetail')->name('catalog-detail');

Route::get('article', 'ArticleController@index')->name('article');
Route::get('article/{slug}', 'ArticleController@articleDetail')->name('article-deetail');

Route::get('contact-us', 'ContactUsController@index')->name('contact-us');
Route::post('contact-us', 'ContactUsController@store')->name('contact-uss');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});