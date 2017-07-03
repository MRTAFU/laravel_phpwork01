<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Books;
use Illuminate\Http\Request;

//本のダッシュボード表示処理
Route::get('/','BooksController@index');

//本の登録処理
Route::post('/books','BooksController@store');

//更新画面
Route::post('/booksedit/{books}','BooksController@edit');

//更新処理
Route::post('/books/update','BooksController@update');

//削除処理 
Route::delete('/books/{book}','BooksController@destroy');