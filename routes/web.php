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

Route::middleware(['auth', 'admin'])->namespace('Admin')->group(function () {
    // Specialty

    Route::get('especialidades', 'SpecialtyController@index');
    Route::get('especialidades/create', 'SpecialtyController@create');
    Route::get('especialidades/{specialty}/edit', 'SpecialtyController@edit');
    Route::post('especialidades', 'SpecialtyController@store');
    Route::put('especialidades/{specialty}', 'SpecialtyController@update');
    Route::delete('especialidades/{specialty}', 'SpecialtyController@destroy');

    // Doctors
    //Route::resource('doctores', 'DoctorController');

    Route::get('doctores', 'DoctorController@index');
    Route::get('doctores/create', 'DoctorController@create');
    Route::get('doctores/{doctor}/edit', 'DoctorController@edit');
    Route::post('doctores', 'DoctorController@store');
    Route::put('doctores/{doctor}', 'DoctorController@update');
    Route::delete('doctores/{doctor}', 'DoctorController@destroy');

    // Patients
    //Route::resource('pacientes', 'PatientController');

    Route::get('pacientes', 'PatientController@index');
    Route::get('pacientes/create', 'PatientController@create');
    Route::get('pacientes/{patient}/edit', 'PatientController@edit');
    Route::post('pacientes', 'PatientController@store');
    Route::put('pacientes/{patient}', 'PatientController@update');
    Route::delete('pacientes/{patient}', 'PatientController@destroy');
});

Route::middleware(['auth', 'doctor'])->namespace('Doctor')->group(function () {
    Route::get('horario', 'ScheduleController@edit');
    Route::post('horario', 'ScheduleController@store');
});

