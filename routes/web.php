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

Route::get('/home', function ()
{
    $regions = DB::table('Regions')->get();
    $towns = DB::table('Towns')->get();
    return view('home', compact('regions'), compact('towns'));

    //return view('home', compact('regions'));
});

//Route::get('/posts', 'HomeController@show');

Route::get('/posts', function ()
{
    $regions = DB::table('Regions')->get();
    $towns = DB::table('Towns')->where('region', request()->idRegion)->value('name');
    return view('home', compact('regions'), compact('towns'));

    //echo DB::table('Towns')->where('region', request()->idRegion)->value('name');
    //echo request()->idRegion;
    //$id = request()->idRegion
    //return view('home', ['id'=>request()->id]);
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
