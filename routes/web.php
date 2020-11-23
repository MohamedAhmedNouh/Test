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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile',[App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/profile/{id}',[App\Http\Controllers\ProfileController::class, 'show'])->name('profile');
Route::get('/profile/update/{id}',[App\Http\Controllers\ProfileController::class, 'update'])->name('update');


Route::get('/employees', 'App\Http\Controllers\EmployeeController@index')->name('Employees.index');
Route::get('/employees/{id}', 'App\Http\Controllers\EmployeeController@show')->name('Employees.show');
Route::get('/employees/{id}/edit','App\Http\Controllers\EmployeeController@edit')->name('Employees.edit');
Route::get('/employees/{id}/delete','App\Http\Controllers\EmployeeController@destroy')->name('Employees.destroy');
Route::get('/create','App\Http\Controllers\EmployeeController@create')->name('Employees.create');
Route::post('/create','App\Http\Controllers\EmployeeController@store')->name('Employees.store');
Route::post('/employee/update','App\Http\Controllers\EmployeeController@update')->name('Employees.update');

