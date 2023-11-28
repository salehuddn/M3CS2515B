<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/students', 'App\Http\Controllers\StudentController@index')->name('students.index');
Route::get('/students/create', 'App\Http\Controllers\StudentController@create')->name('students.create');
Route::post('/students', 'App\Http\Controllers\StudentController@store')->name('students.store');
Route::get('/students/{id}', 'App\Http\Controllers\StudentController@show')->name('students.show');
Route::get('/students/{id}/edit', 'App\Http\Controllers\StudentController@edit')->name('students.edit');
Route::patch('/students/{id}', 'App\Http\Controllers\StudentController@update')->name('students.update');
Route::delete('/students/{student}', 'App\Http\Controllers\StudentController@destroy')->name('students.destroy');




Route::resource('/subjects', SubjectController::class);

Route::resource('/halls', App\Http\Controllers\HallController::class);

Route::resource('/timetables', App\Http\Controllers\TimetableController::class);

Route::resource('/groups', App\Http\Controllers\GroupController::class);