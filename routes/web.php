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

Route::get('/front',function (){
    return view('frontend.pages.home');
});


//Localization
Route::get('lang/{locale}',function ($locale){
   Session::put('locale',$locale);
   return redirect()->back();
})->name('lang');



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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
