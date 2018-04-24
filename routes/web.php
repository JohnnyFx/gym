<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get(
    'clients', 'ClientsController@index');
Route::post(
    'clients', 'ClientsController@store');
Route::get(
    'clients/{id}', 'ClientsController@show');
Route::delete(
    'clients/{id}', 'ClientsController@destroy');
Route::post(
     'clients/{id}', 'ClientsController@update');

Route::get(
'companies', 'CompaniesController@index');
Route::post(
'companies', 'CompaniesController@store');
Route::get(
'companies/{id}', 'CompaniesController@show');
Route::delete(
'companies/{id}', 'CompaniesController@destroy');
Route::post(
'companies/{id}', 'CompaniesController@update');
    
Route::get(
    'muscle_groups', 'MuscleGroupsController@index');
Route::post(
    'muscle_groups', 'MuscleGroupsController@store');
Route::get(
    'muscle_groups/{id}', 'MuscleGroupsController@show');
Route::delete(
    'muscle_groups/{id}', 'MuscleGroupsController@destroy');
Route::post(
    'muscle_groups/{id}', 'MuscleGroupsController@update');

Route::get(
    'users', 'UsersController@index');
Route::post(
    'users', 'UsersController@store');
Route::get(
    'users/{id}', 'UsersController@show');
Route::delete(
    'users/{id}', 'UsersController@destroy');
Route::post(
    'users/{id}', 'UsersController@update');