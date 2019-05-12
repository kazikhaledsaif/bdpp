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
        Route::get('/central-committee', 'CentralCommitteController@centralCommittee')->name('centralCommittee.list');

        Route::get('/district-committee', 'CommitteeController@districtCommittee')->name('districtCommittee.list');
        Route::get('/district-committee/{dist}', 'CommitteeController@districtShow')->name('districtCommittee.show');

        Route::get('/division-committee', 'CommitteeController@division')->name('divisionCommittee.list');
        Route::get('/division-committee/{div}', 'CommitteeController@divisionShow')->name('divisionCommittee.show');



    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
