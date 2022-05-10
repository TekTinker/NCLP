<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware(['jwt.auth'])->group(function () {

	Route::get('/user', function(Request $request) {
		return auth()->user();
	});

	Route::apiResource('cls', 'APIClassController');

	Route::apiResource('attendances', 'APIAttendanceController');

	Route::get('/class/{id}/students', 'APIStudentController@index');

    Route::post('/pm/visit_report', 'PMController@postPMVisitReportZ24');

    Route::post('/pm/visit_report_a2', 'PMController@postPMVisitReportA2');

    Route::post('/stc/visitor', 'InstructorController@postSTCVisitors');
});


Route::post('/login', 'APIAuthController@login');