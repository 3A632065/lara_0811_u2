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
    //return view('welcome');         //設定 Route 回傳字串

    //return view('welcome');          //設定 Route 回傳 view

    return redirect('welcome');     //設定 Route 跳轉頁面

});

//修改 Route 接受參數
Route::get('hello/{name}', function($name) {
    return 'Hello, '.$name;
});

//修改參數成選擇性
//Route::get('hello/{name?}', function($name='Everybody') {

//將 Route 取名為 hello.index
Route::get('hello/{name?}', ['as' => 'hello.index', function($name='Everybody') {
    return 'Hello, '.$name;

});

//新增一個Route
Route::get('welcome/{name?}', function($name='Everybody') {
    return 'Welcome, '.$name;
});
