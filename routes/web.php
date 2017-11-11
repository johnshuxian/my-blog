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
    return view('index');
});
Route::get("/",['uses'=>"IndexController@index",'as'=>"index"]);
Route::get("article",['uses'=>"IndexController@article",'as'=>"article"]);
Route::get("about",['uses'=>'IndexController@about','as'=>"about"]);