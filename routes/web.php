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
    return view('main');
});

Route::get('/appeals', function () {
    return view('appeals');
});

Route::get('/contacts', function () {
    return view('contacts');
});


Route::get('/question', 'QuestionController@findall');


//Route::post('/',['uses'=>'MailController@sendform', 'as'=>'send-mail']);

Route::post('/sendmail', 'MailController@sendform');
Route::post('/sendquestion', 'MailController@sendquestion');