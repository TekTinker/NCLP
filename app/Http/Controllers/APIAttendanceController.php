<?php

namespace NCLP\Http\Controllers;

use Illuminate\Http\Request;
use NCLP\Models\Attendance;
use NCLP\Models\Cl;
use NCLP\Models\Present;
use NCLP\User;
use Validator;
use JWTFactory;
use JWTAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Response;

class APIAttendanceController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'location' => 'required',
			'lon' => 'required',
			'lat' => 'required',
			'students' => 'required',
			'class_id' => 'required',
		]);

		if ($validator->fails()) {
			return response()->json($validator->errors());
		}
		$user = auth()->user();

		if (Gate::allows('login')) {
			try {
			$data = json_decode($request->getContent(),true);
			$cl = Cl::find($data['class_id']);
			$stc = $cl->stc()->first();
			$attendance = Attendance::create([
				'stc_id' => $stc->id,
				'stc' => $stc->name,
				'cl_id' => $data['class_id'],
				'class' => $cl->name,
				'user_id' => $user->id,
				'user' => $user->name,
				'lon' => $data['lon'],
				'lat' => $data['lat'],
				'location' => $data['location']
			]);
				foreach ($data['students'] as $student) {
					Present::create([
						'attendance_id' => $attendance->id,
						'student_id' => $student['id'],
						'present' => $student['present']
					]);
				}
			} catch (\Exception $exception) {
				return response()->json(['error', $exception->getMessage()], 300);
			}

			return response()->json([
				'status' => 'Success',
				'msg' => 'Added'
			]);
		}


		return response()->json([
			'status' => 'Error',
			'msg' => 'Access Denied!'
		]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
