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
Route::get('/subjects/add', 'SubjectsController@store');
//teachers
Route::get('/subjects/teacher', 'TeachersController@index');
Route::post('/teachers/{teachers}/edit','TeachersController@edit');
//sections
Route::get('/subjects/addsec', 'SectionController@edit');
Route::get('/subjects/sections', 'SectionController@show');
Route::post('/subjects/store', 'SectionController@store');
//strands
Route::get('/subjects/strand', 'StrandController@show');
Route::get('/subjects/strand/store', 'StrandController@store');
//subjectstrand
Route::get('/subjects/subjstrand', 'SubjStrandController@index');

