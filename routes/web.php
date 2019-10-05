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
//subjects
Route::get('/subjects', 'SubjectsController@index');
Route::get('/subjects/add', 'SubjectsController@store');
//teachers
Route::get('/subjects/teacher', 'TeachersController@show');
Route::post('/teachers/{teachers}/edit','TeachersController@edit');
//sections
Route::get('/subjects/addsec', 'SectionController@edit');
Route::get('/subjects/sections', 'SectionController@show');
Route::post('/subjects/store', 'SectionController@store');
