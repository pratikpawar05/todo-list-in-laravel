<?php
use Illuminate\Support\Facades\Route;


use App\Http\Requests;
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
Route::get('/todos', 'App\Http\Controllers\TodoController@index')->name('todo.index');
Route::get('/todos/create', 'App\Http\Controllers\TodoController@create');
Route::get('/todos/{todo}/edit', 'App\Http\Controllers\TodoController@edit');
Route::post('/todos/create','App\Http\Controllers\TodoController@store');
Route::patch('/todos/{todo}/update','App\Http\Controllers\TodoController@update')->name('todo.update');
Route::get('/', function () {
	//return env('APP_NAME');
   return view('welcome');
});
Route::get('/users', 'App\Http\Controllers\UserController@index');
Route::post('/upload','App\Http\Controllers\UserController@uploadAvatar');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
