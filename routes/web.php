<?php

// デフォルト
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');

# Laravelがデフォルトで用意してあるmigrationを利用したusers
//Route::get('/user', 'UserController@index');

# 画像アップロード
Route::get('/home', 'PostsController@home');
Route::post('/upload', 'PostsController@upload');

# 仮実装
//Route::get('/posts/{id}', 'PostsController@show');

