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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.home');
})->name('index');

Route::get('/central-form',function (){
    return view('frontend.pages.centralform');
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

        Route::get('/', 'DashboardController@index')->name('dashboard');

        //  notice route
        Route::get('/notice', 'NoticeController@index')->name('notice.list');
        Route::get('/notice-add', 'NoticeController@create')->name('notice.add');
        Route::get('/notice-edit/{id}', 'NoticeController@show')->name('notice.edit');

        // for slug generation
        Route::get('/check_slug', 'NoticeController@check_slug')->name('notice.slug');

        // notice create
        Route::post('/notice-create', 'NoticeController@store')->name('notice.create');
        Route::post('/notice-update', 'NoticeController@update')->name('notice.update');
        Route::post('/notice-destroy', 'NoticeController@destroy')->name('notice.destroy');

    });



Route::name('frontend.')
    ->namespace('Frontend')
    ->group(function (){
        Route::get('/','IndexController@index' )->name('index');

    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
