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


use App\Notifications\SubcriptionRenewalFailed;
use App\User;

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('welcome', function (){
    return view('index');
});

//GENERAL

/*Route::get('/', function (){
    $user = User::find(3);
    $user->notify(new SubcriptionRenewalFailed());
    return 'done';
});*/

Route::get('/', ['as' => '/', 'uses' => 'PagesController@home']);

Route::get('/about', ['as' => 'about', 'uses' => 'PagesController@about']);

Route::get('/contact', ['as' => 'contact', 'uses' => 'PagesController@contact']);



// PROJECTS

Route::resource('projects', 'ProjectsController');


//TASKS

Route::resource('tasks', 'ProjectTasksController')->except(['store']);
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');





