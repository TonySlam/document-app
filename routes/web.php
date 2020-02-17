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



Auth::routes();
Route::get('User_personal_details/{id}', 'ComplexQueryController@getPersonalDetails')->name('User_personal_detail');
Route::get('/show-docs/{user_id}', 'ComplexQueryController@showDocuments')->name('docs');
Route::get('/file-manipulation', 'ComplexQueryController@getFileManipulation')->name('file_manipulation');

Route::post('/upload-doc', 'ComplexQueryController@upload')->name('upload-doc');
Route::get('/', 'ComplexQueryController@index')->name('landing_page');
Route::get('interest-documents', 'ComplexQueryController@create')->name('interest_documents');
Route::get('personal_details/{id}', 'ComplexQueryController@show')->name('personal_details');
Route::get('interest', 'ComplexQueryController@show_inters')->name('interest');
Route::get('interest_with_doc', 'ComplexQueryController@showInterestWithDocuments')->name('interest_with_doc');