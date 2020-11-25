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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('inicio', 'HomeController@index')->name('inicio');

// Specialty

Route::get('especialidades', 'SpecialtyController@index');
Route::get('especialidades/create', 'SpecialtyController@create');
Route::get('especialidades/{specialty}/edit', 'SpecialtyController@edit');
Route::post('especialidades', 'SpecialtyController@store');
Route::put('especialidades/{specialty}', 'SpecialtyController@update');
Route::delete('especialidades/{specialty}', 'SpecialtyController@destroy');

// Doctors
Route::resource('doctores', 'DoctorController');

// Patients
