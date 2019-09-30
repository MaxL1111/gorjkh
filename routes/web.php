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

Route::get('/dispatcher', function () {
    return view('dispatcher');
});

Route::get('/appeals', function () {
    return view('appeals');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/sport', function () {
    return view('sport');
});


Route::get('/question', 'QuestionController@all_question');


//Route::post('/',['uses'=>'MailController@sendform', 'as'=>'send-mail']);

Route::post('/sendmail', 'MailController@sendform');
Route::post('/sendquestion', 'MailController@sendquestion');


//добавление новой записи в таблицу questions
Route::post('/add_question_answer', 'AdminController@add_question_answer')->middleware('auth');

//удаление записи из таблицы questions
Route::post('/delete_question_answer', 'AdminController@delete_question_answer')->middleware('auth');


//скачивание пользователем файлов с сервера
Route::get('/download/{file_name}', 'DownloadController@getDownload');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/adminpanel', 'AdminController@all_question'
    // Только аутентифицированные пользователи могут зайти...
)->middleware('auth');