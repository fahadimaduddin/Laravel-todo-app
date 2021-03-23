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

Route::get('/', 'TasksController@index');
Route::get('tasks', 'TasksController@index');
Route::get('/tasks/create', 'TasksController@create');
Route::post('/tasks','TasksController@store');
Route::patch('/tasks/{id}','TasksController@update');
Route::delete('/tasks/{id}','TasksController@delete');

// Route::get('/',function(){
//         return view('tasks.index');
// });

// Route::get('/tasks/create',function(){
//     return view('tasks.create');
// });

