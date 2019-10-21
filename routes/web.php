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
