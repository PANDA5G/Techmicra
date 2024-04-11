<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\FormController@showForm')->name('show-Form');

Route::post('/submit-form', 'App\Http\Controllers\FormController@submitForm')->name('submit-form');

Route::get('/login', 'App\Http\Controllers\logincontroller@login')->name('login');

Route::post('/login', 'App\Http\Controllers\logincontroller@loginshow')->name('loginshow');
