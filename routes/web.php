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

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Student Routes
 */
Route::get('/student', 'StudentsController@index');
Route::post('/student', 'StudentsController@store');

/**
 * Course Routes
 */
Route::get('/course',function (){
    return view('courses');
});
Route::post('/course', 'CoursesController@store');

/**
 * Route For PDF Certificate
 */
Route::get('pdfview',array('as'=>'pdfview','uses'=>'PDFController@pdfview'));

/**
 * Route for the chart
 */
Route::get('chartjs', 'StatisticsController@appReceived');


