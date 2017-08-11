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
    return view('SurveyAfrica');
});

//Route::get('/form/', function () {
//    return view('the_form');
//});

Route::get('/sampleForm/', function () {
    return view('stepper_form');
});

Route::get('/thankyou/', function () {
    return view('thank');
});


Route::post('/formSubmit/', 'formSubmitController@submit');


Route::post('/stepper_form/', 'formSubmitController@submit');


Auth::routes();

Route::get('/home', 'HomeController@index');
