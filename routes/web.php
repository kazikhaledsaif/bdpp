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



Route::get('/central-committee',function (){
    return view('frontend.pages.centralCommittee');
});

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

        Route::get('/designation','DesignationController@index' )->name('designation.index');
        Route::post('/designation','DesignationController@store' )->name('designation.store');


        //central committee
        Route::get('/central-committee','CentralCommitteeController@index' )->name('central-committee.list');
        Route::get('/central-committee-add', 'CentralCommitteeController@create')->name('central-committee.add');
        Route::get('/central-committee-edit/{id}', 'CentralCommitteeController@show')->name('central-committee.edit');
        Route::post('/central-committee-create', 'CentralCommitteeController@store')->name('central-committee.create');
        Route::post('/central-committee-update', 'CentralCommitteeController@update')->name('central-committee.update');
        Route::post('/central-committee-destroy', 'CentralCommitteeController@destroy')->name('central-committee.destroy');



        //district committee
        Route::get('/district-committee','DistrictCommitteeController@index' )->name('district-committee.list');
        Route::get('/district-committee-add', 'DistrictCommitteeController@create')->name('district-committee.add');
        Route::get('/district-committee-edit/{id}', 'DistrictCommitteeController@show')->name('district-committee.edit');
        Route::post('/district-committee-create', 'DistrictCommitteeController@store')->name('district-committee.create');
        Route::post('/district-committee-update', 'DistrictCommitteeController@update')->name('district-committee.update');
        Route::post('/district-committee-destroy', 'DistrictCommitteeController@destroy')->name('district-committee.destroy');


        //district committee
        Route::get('/department-committee','DepartmentCommitteeController@index' )->name('department-committee.list');
        Route::get('/department-committee-add', 'DepartmentCommitteeController@create')->name('department-committee.add');
        Route::get('/department-committee-edit/{id}', 'DepartmentCommitteeController@show')->name('department-committee.edit');
        Route::post('/department-committee-create', 'DepartmentCommitteeController@store')->name('department-committee.create');
        Route::post('/department-committee-update', 'DepartmentCommitteeController@update')->name('department-committee.update');
        Route::post('/department-committee-destroy', 'DepartmentCommitteeController@destroy')->name('department-committee.destroy');





        Route::get('/general-member','CentralCommitteeController@generalCommittee' )->name('member.list');



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
        Route::get('/general-form', 'CentralCommitteController@index')->name('generalMember.form');
        Route::post('/general-form', 'GeneralMemberController@store')->name('generalMember.store');

    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
