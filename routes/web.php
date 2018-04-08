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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get( '/', 'TasksController@home');

Route::get( '/welcome', 'TasksController@welcome');
// Route::get( '/{taskid}', 'TasksController@welcome');
// Route::get( '/tasks/{task}', function ( Project $task) {
// 	return view('tasks.show')->with('task', $task );
// });


Route::get( '/apple', 'TasksController@apple');

Route::get( '/pear', 'TasksController@pear');

Route::get( '/banana', 'TasksController@banana');

