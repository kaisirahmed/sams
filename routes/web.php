<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth','verified']], function () {
    Route::get('/',['as'=>'admin','uses'=>'AdminController@index']);
    Route::resource('/user','UsersController');
    Route::resource('/departments','DepartmentController');
    Route::resource('/informations','InformationController');

    Route::get('/attendances',['as'=>'attendance.index','uses'=>'AttendanceController@index']);
    Route::get('/attendance/{account_no}/show',['as'=>'attendance.show','uses'=>'AttendanceController@show']);
    Route::get('/attendance/{account_no}/{department}/absence',['as'=>'attendance.absence','uses'=>'AttendanceController@absence']);
    
    Route::resource('timetable/rounding','RoundingController');
    Route::resource('timetable','TimeTableController');
    

    Route::get('settings',['as'=>'settings.index','uses'=>'SettingsController@index']);
    //Route::get('search',['as'=>'search.index','uses'=>'SearchController@index']);
    Route::get('search',['as'=>'search.store','uses'=>'SearchController@store']);

    Route::get('/report/custom',['as'=>'report.custom','uses'=>'ReportController@custom']);
    Route::post('/report/custom',['as'=>'report.custom','uses'=>'ReportController@customreport']);
    Route::get('/report/daily',['as'=>'report.daily','uses'=>'ReportController@daily']);
    Route::post('/report/daily',['as'=>'report.daily','uses'=>'ReportController@dailyreport']);
    Route::get('/report/absence',['as'=>'report.absence','uses'=>'ReportController@absence']);
    Route::post('/report/absence',['as'=>'report.absence','uses'=>'ReportController@absencereport']);
    Route::get('/report/earlyout',['as'=>'report.earlyout','uses'=>'ReportController@earlyoutreport']);
    Route::get('widgets/calendar',['as'=>'widgets.calendar','uses'=>'WidgetsController@calendar']);
});
