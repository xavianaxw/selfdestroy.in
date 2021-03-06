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

Route::get('/', function(){
  return View::make('index'); // public/views/index.php
});

Route::get('/m/{code}', function($code){
  return View::make('message')->with('code', $code);
});
