<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    Route::get('/', function () 
    {
   return view('welcome');
});
Route::group([],function()
{
    Route::get('/first',function()
    {
    echo "first route";
    });
    Route::get('/second',function()
    {
    echo "second route";
    });
    Route::get('/third',function()
    {
    echo "third route";
    });
});
Route::group(['prefix'=>'tranings'],function()
{
    Route::get('/larval',function()
    {
        echo "larval traning";
    });
    Route::get('/git',function()
    {
        echo "git traning";
    });
    Route::get('java',function()
    {
        echo "java traning";
    });
});










   



























?>