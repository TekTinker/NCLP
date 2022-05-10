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

Route::get('/', 'GuestController@home')->name('welcome');


Auth::routes();


Route::middleware(['auth', 'permission:login'])->group(function () {


    Route::get('/stc/visitors', 'InstructorController@getSTCVisitors')->name('stc.visitors');

    Route::get('/pm/visit_report_z24', 'PMController@getPMVisitReportZ24')->name('pm.visit_report.z24');

    Route::get('/pm/visit_report_a2', 'PMController@getPMVisitReportA2')->name('pm.visit_report.a2');

    Route::get('/gallery/circular/{id}/show', 'GalleryController@showCircular')->name('gallery.circular.show');

    Route::post('/gallery/circular/store', 'GalleryController@storeCircular')->name('gallery.circular.store');

    Route::post('/gallery/circular/{id}/delete', 'GalleryController@destroyCircular')->name('gallery.circular.delete');

    Route::post('/gallery/store', 'GalleryController@store')->name('gallery.store');

    Route::post('/gallery/{id}/delete', 'GalleryController@destroy')->name('gallery.delete');

    Route::get('/gallery/banner/add', 'GalleryController@addBanner')->name('gallery.banner.create');

    Route::get('/gallery/circular/add', 'GalleryController@addCircular')->name('gallery.circular.create');

    Route::get('/gallery/stripe/add', 'GalleryController@addStripe')->name('gallery.stripe.create');

    Route::get('/gallery/banner', 'GalleryController@indexBanner')->name('gallery.banner.index');

    Route::get('/gallery/circular', 'GalleryController@indexCircular')->name('gallery.circular.index');

    Route::get('/gallery/stripe', 'GalleryController@indexStripe')->name('gallery.stripe.index');

	Route::post('/teacher/{id}/assign_stc', 'UserController@assignSTCTeacher')->name('user.teacher.assign_stc');

	Route::get('/teacher/{id}/assign_stc', 'UserController@getAssignSTCTeacher')->name('user.teacher.assign_stc');

	Route::get('/teachers', 'UserController@getteacherList')->name('teacher.list');


	Route::post('/vt/{id}/assign_stc', 'UserController@assignSTC')->name('user.vt.assign_stc');

	Route::post('/vt/{id}/remove_stc/{stc_id}', 'UserController@removeSTC')->name('user.vt.remove_stc');

	Route::get('/vt/{id}/assign_stc', 'UserController@getAssignSTC')->name('user.vt.assign_stc');

	Route::get('/view_profile/{id}', 'UserController@getUserProfile')->name('user.view');

	Route::get('/vts', 'UserController@getVTList')->name('vt.list');

	Route::get('/user_approvals', 'UserController@userApprovals')->name('user.approval');

	Route::post('/user_approve/{id}', 'UserController@userApprove')->name('user.approve');

	Route::get('/user_approve/{id}', 'UserController@userApprovePage')->name('user.approve');

	Route::post('/user_destroy/{id}', 'UserController@destroy')->name('user.destroy');

	Route::get('/profile', 'UserController@viewProfile')->name('profile.view');

	Route::get('/profile_edit', 'UserController@editProfile')->name('profile.edit');

	Route::post('/profile_edit', 'UserController@updateProfile')->name('profile.update');

	Route::resource('stcs', 'STCController');

	Route::resource('cls', 'ClassController');


	Route::post('/attendances/approve','AttendanceController@update')->name('attendances.approve');

	Route::get('/attendances','AttendanceController@index')->name('attendances.index');

	Route::get('/attendances/{id}/view','AttendanceController@show')->name('attendances.show');

	Route::get('/attendances/approved','AttendanceController@approved')->name('attendances.approved');

	Route::get('/class/{id}/add_student', 'StudentController@create')->name('students.create');

	Route::get('/class/{id}/view_students', 'StudentController@index')->name('students.index');

	Route::post('/class/add_student', 'StudentController@store')->name('students.store');

	Route::get('/home', 'HomeController@index')->name('home');

});


