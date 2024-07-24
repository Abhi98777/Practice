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

Route::get('/first',function()
{
    echo"first route created  using url";
});

Route::get('/second',function()
{
    echo"second route created  using url";
});


Route::get('/third',function()
{
    echo"third route created  using url";
});