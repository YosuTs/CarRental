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

Route::get('/', [
  'uses' => 'HomeController@index',
  'as' => 'home.index'
]);

Route::post('/home', [
  'uses' => 'HomeController@show_categories',
  'as' => 'home.show_categories'
]);

Route::post('/categories', [
  'uses' => 'CategoriesController@index',
  'as' => 'categories.index'
]);

Route::get('/categories/', 'CategoriesController@index');

//Route::get('/cars/create/', 'CarsController@create');

//Route::post('/cars', 'CarsController@store');

Route::get('/cars/show/', 'CarsController@show');

Route::get('/cars/create', [
  'uses' => 'CarsController@create',
  'as' => 'cars.create'
]);

Route::post('/cars',[
  'uses' => 'CarsController@store',
  'as' => 'cars.store'
]);

Route::get('/cars/show', [
  'uses' => 'CarsController@show',
  'as' => 'cars.show'
]);
