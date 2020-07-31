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

Route::get('/adminlogin', 'Admin\PageController@index')->name('adminlogin');

Route::get('/', 'Student\PageController@index')->name('studentlogin');

Route::post('/', 'Auth\UserController@adminlogin')->name('login');

Route::get('/logout', 'Auth\UserController@logout')->name('logout');


Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'before' => 'admin'], function () {

    Route::get('/dashboard', 'Admin\PageController@dashboard')->name('admindashboard');


    Route::get('/department', 'Admin\PageController@department')->name('admindepartment');

    Route::get('/departmental-student/{id}', 'Admin\PageController@deptstudent')->name('deptstudent');

    Route::post('/save-department', 'Department\PageController@savedepartment')->name('savedepartment');


    Route::get('/course', 'Admin\PageController@course')->name('admincourse');

    Route::get('/departmental-courses/{id}', 'Admin\PageController@coursedetails')->name('coursedetails');

    Route::post('/save-course', 'Course\PageController@savecourse')->name('savecourse');

    Route::post('/update-course/{id}', 'Course\PageController@updatecourse')->name('updatecourse');

    Route::get('/delete-course/{id}', 'Course\PageController@deletecourse')->name('deletecourse');


    Route::get('/course-topic', 'Admin\PageController@coursetopic')->name('admincoursetopic');

    Route::post('/save-course-topic', 'Course\PageController@savecoursetopic')->name('savecoursetopic');

    Route::get('/course-assignment', 'Admin\PageController@courseassignment')->name('admincourseassignment');

    Route::post('/save-course-assignment', 'Course\PageController@saveassignment')->name('saveassignment');


    Route::get('/enrolled-students', 'Admin\PageController@member')->name('adminmember');

    Route::post('/enrol-student', 'Member\PageController@enrolstudent')->name('enrolstudent');


    Route::get('/all-lecturers', 'Admin\PageController@lecturer')->name('adminlecturer');

    Route::post('/savestaff', 'Auth\UserController@savestaff')->name('savestaff');
    


    Route::get('/all-students', 'Admin\PageController@student')->name('adminstudent');

    Route::get('/all-archived-students', 'Admin\PageController@studentarchived')->name('adminstudentarchived');

    Route::post('/savestudent', 'Auth\UserController@savestudent')->name('savestudent');

    Route::get('/activate-student-login/{id}', 'Auth\UserController@activatestudent')->name('activatestudent');

    Route::get('/deactivate-student-login/{id}', 'Auth\UserController@deactivatestudent')->name('deactivatestudent');

    Route::get('/archive-student/{id}', 'Admin\PageController@archivestudent')->name('archivestudent');

    Route::get('/unarchive-student/{id}', 'Admin\PageController@unarchivestudent')->name('unarchivestudent');


});

Route::group(['middleware' => 'auth', 'prefix' => 'student', 'before' => 'student'], function () {

    Route::get('/dashboard', 'Student\PageController@dashboard')->name('studentdashboard');

    Route::get('/biodata', 'Student\PageController@biodata')->name('studentbiodata');

    Route::get('/courses', 'Student\PageController@courses')->name('studentcourses');

    Route::get('/course-topics/{id}', 'Student\PageController@topics')->name('studentcoursetopics');

    Route::get('/course-announcement', 'Student\PageController@announcement')->name('studentannouncement');

});