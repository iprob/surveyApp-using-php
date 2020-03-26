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

#Question Route

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/question/create','QuestionController@create');
Route::post('/question','QuestionController@store');
Route::get('/question/{question}','QuestionController@show');
Route::get('/question/{question}/edit','QuestionController@edit');

#MCQ Rute

Route::get('/question/{question}/mcq/create','McqController@create');
Route::post('/question/{question}/mcq','McqController@store');

#survey Route

Route::get('/question/{question}-{slug}', 'SurveyController@show');
