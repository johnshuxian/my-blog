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

//blog 管理员平台

//Route::group(['middleware'=>'web'],function(){
    Route::get("/admin",['uses'=>"AdminController@index",'as'=>'admin']);
    Route::get("/article_list",['uses'=>"AdminController@articleList",'as'=>'article_list']);
    Route::get("/article_add",['uses'=>"AdminController@articleAdd",'as'=>'article_add']);
    Route::get("/comments",['uses'=>"AdminController@comments",'as'=>'comments']);
    Route::post('article_insert',['uses'=>"AdminController@articleInsert",'as'=>'article_insert']);
//});
