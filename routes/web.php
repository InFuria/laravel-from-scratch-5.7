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


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


//GENERAL

Route::get('/', ['as' => '/', 'uses' => 'PagesController@home']);

Route::get('/about', ['as' => 'about', 'uses' => 'PagesController@about']);

Route::get('/contact', ['as' => 'contact', 'uses' => 'PagesController@contact']);



// PROJECTS

Route::resource('projects', 'ProjectsController');


//TASKS

Route::resource('tasks', 'ProjectTasksController')->except(['store']);
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');





