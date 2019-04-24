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


//Localization
Route::get('locale/{locale}',function ($locale){
   Session::put('locale',$locale);
   return redirect()->back();
});



Route::name('backend.')
    ->namespace('Backend')
    ->prefix('admin')
    ->middleware('role:admin')
    ->group(function () {



    });



Route::name('frontend.')
    ->namespace('Frontend')
    ->group(function (){

    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
