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
    return view('frontend.pages.home');
})->name('index');



Route::get('/central-committee',function (){
    return view('frontend.pages.centralCommittee');
});


//Localization
Route::get('lang/{locale}',function ($locale){
   Session::put('locale',$locale);
   return redirect()->back();
})->name('lang');



Route::name('backend.')
    ->namespace('Backend')
    ->prefix('admin')
//    ->middleware('role:admin')
    ->group(function () {

        Route::get('/', 'DashboardController@index')->name('dashboard');

        Route::get('/designation','DesignationController@index' )->name('designation.index');
        Route::post('/designation','DesignationController@store' )->name('designation.store');

        Route::get('/central-committee','CentralCommitteeController@index' )->name('cCommittee.index');

        Route::get('general-member','CentralCommitteeController@generalCommittee' )->name('member.list');


    });



Route::name('frontend.')
    ->namespace('Frontend')
    ->group(function (){
        Route::get('/','IndexController@index' )->name('index');
        Route::get('/general-form', 'CentralCommitteController@index')->name('generalMember.form');
        Route::post('/central-form', 'GeneralMemberController@store')->name('generalMember.store');

    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
