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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




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
        Route::post('/designation-destroy', 'DesignationController@destroy')->name('designation.destroy');




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



        Route::get('/users', 'DashboardController@userList')->name('user.list');
        Route::get('/users/{id}', 'DashboardController@userShow')->name('user.show');

        //Genereal member
        Route::get('/general-member','GeneralMemberController@index' )->name('general-member.list');
        Route::get('/general-member-edit/{id}', 'GeneralMemberController@show')->name('general-member.edit');
        Route::post('/general-member-create', 'GeneralMemberController@store')->name('general-member.create');
        Route::post('/general-member-update', 'GeneralMemberController@update')->name('general-member.update');
        Route::post('/general-member-destroy', 'GeneralMemberController@destroy')->name('general-member.destroy');


        Route::get('/general-member-successful/{id}', 'GeneralMemberController@successful')->name('general-member.successful');
        Route::get('/general-member-canceled/{id}', 'GeneralMemberController@canceled')->name('general-member.canceled');

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

       // Route::get('/general-form', 'CentralCommitteController@index')->name('generalMember.form');
      //  Route::post('/central-form', 'GeneralMemberController@store')->name('generalMember.store');
        Route::get('/central-committee', 'CommitteeController@centralCommittee')->name('centralCommittee.list');

        Route::get('/district-committee', 'CommitteeController@districtCommittee')->name('districtCommittee.list');
        Route::get('/district-committee/{dist}', 'CommitteeController@districtShow')->name('districtCommittee.show');


        Route::get('/department-committee/{dpt}', 'CommitteeController@departmentShow')->name('departmentCommittee.show');


        Route::get('/general-form', 'GeneralMemberController@index')->name('generalMember.form');
        Route::post('/general-form', 'GeneralMemberController@store')->name('generalMember.store');


        Route::get('/dashboard', 'IndexController@dashboard')->name('dashboard');

    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');