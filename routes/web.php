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

Route::get('/students', 'StudentController@index'); // 学生一覧表示
Route::get('/students/create', 'StudentController@create'); // 学生登録フォーム
Route::post('/students', 'StudentController@store'); // 学生登録処理
Route::get('/students/{id}/edit', 'StudentController@edit'); // 編集フォーム
Route::post('/students/{id}', 'StudentController@update'); // 更新処理
Route::post('/students/{id}/delete', 'StudentController@destroy'); // 削除処理