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

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::resource('guardians', 'GuardianController')->middleware('auth');
Route::resource('students', 'StudentController')->middleware('auth');
Route::resource('teachers', 'TeacherController')->middleware('auth');
Route::resource('classes', 'ClassController')->middleware('auth');
Route::resource('stages', 'StageController')->middleware('auth');
Route::resource('supervisors', 'SupervisorController')->middleware('auth');
Route::resource('kcoachs', 'KcoachController')->middleware('auth');
Route::resource('admins', 'AdminController')->middleware('auth');
Route::get('students-without-section','StudentController@WithoutClass')->middleware('auth');
////////////////////////////Demo Links///////////////////////////////////////
Route::get('/demo/imports-teachers', function () { return view('demo/imports-teachers'); });
Route::get('/demo/teacher_detail', function () { return view('demo/teacher_detail'); });
Route::get('/demo/workload_report', function () { return view('demo/workload_report'); });
Route::get('/demo/overall_school_schedule', function () { return view('demo/overall_school_schedule'); });


Route::get('/demo/total-students-numbers-in-school', function () { return view('demo/total-students-numbers-in-school'); });
Route::get('/demo/imports-noor', function () { return view('demo/imports-noor'); });
Route::get('/demo/excel-imports', function () { return view('demo/excel-imports'); });
Route::get('/demo/advanced-students-list', function () { return view('demo/advanced-students-list'); });
Route::get('/demo/imports-users-status', function () { return view('demo/imports-users-status'); });
Route::get('/demo/imports-contacts', function () { return view('demo/imports-contacts'); });
Route::get('/demo/registration-approval', function () { return view('demo/registration-approval'); });
Route::get('/demo/import-profile-pic', function () { return view('demo/import-profile-pic'); });
Route::get('/demo/detailed-student-area-report', function () { return view('demo/detailed-student-area-report'); });

Route::get('/demo/profile', function () { return view('demo/profile'); });