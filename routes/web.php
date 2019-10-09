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
//home
Route::get('/subjects', 'SubjectsController@index');
//subjects
Route::get('/subjects/subject', 'SubjectsController@subjindex');
Route::get('/subjects/subject/create', 'SubjectsController@create');
Route::get('/subjects/add', 'SubjectsController@store');
//teachers
Route::get('/subjects/teacher', 'TeachersController@index');
Route::get('/subjects/teacher/create', 'TeachersController@create');
Route::post('/teachers/{teachers}/edit','TeachersController@edit');
//sections
Route::get('/subjects/addsec', 'SectionController@edit');
Route::get('/subjects/sections', 'SectionController@show');
Route::post('/subjects/store', 'SectionController@store');
//strands
Route::get('/subjects/strand', 'StrandController@show');
Route::get('/subjects/strand/create', 'StrandController@create');
//subjectstrand
Route::get('/subjects/subjstrand', 'SubjStrandController@index');
Route::get('/subjects/subjstrand/create', 'SubjStrandController@create');


