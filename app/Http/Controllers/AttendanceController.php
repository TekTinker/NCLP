<?php

namespace NCLP\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use NCLP\Models\Attendance;
use Illuminate\Http\Request;
use NCLP\Models\Cl;
use Illuminate\Support\Facades\Gate;
use NCLP\Models\Present;
use NCLP\Models\Student;

class AttendanceController extends Controller
{

	public function approved()
	{
		if (Gate::allows('login')) {
			$user = Auth::user();
			$attendances = null;

			if ($user->hasRole('VT')) {
				$stc_ids = array();
				$stcs = $user->getSTCs();
				foreach ($stcs as $stc) {
					array_push($stc_ids, $stc->id);
				}
				$attendances = Attendance::whereIn('stc_id', $stc_ids)->where('VT', true)->get();
			} elseif ($user->hasRole('PM')) {
				$attendances = Attendance::where('PM', true)->get();
			} elseif ($user->hasRole('PD')) {
				$attendances = Attendance::where('PD', true)->get();
			}  elseif ($user->hasRole('Teacher')) {
				$attendances = Attendance::where('user_id', $user->id)->get();
			}

			return view('pages.attendance.attendance_approved', ['attendances' => $attendances]);
		} else return redirect()->back()->with('info-error', 'Permission denied!');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		if (Gate::allows('login')) {
			$user = Auth::user();
			$attendances = null;

			if ($user->hasRole('VT')) {
				$stc_ids = array();
				$stcs = $user->getSTCs();
				foreach ($stcs as $stc) {
					array_push($stc_ids, $stc->id);
				}
				$attendances = Attendance::whereIn('stc_id', $stc_ids)
					->where('VT', false)->get();
			} elseif ($user->hasRole('PM')) {
				$attendances = Attendance::where('PM', false)->get();
			} elseif ($user->hasRole('PD')) {
				$attendances = Attendance::where('PD', false)->get();
			}  elseif ($user->hasRole('Teacher')) {
				$attendances = Attendance::where('user_id', $user->id)->get();
			}

			return view('pages.attendance.attendance', ['attendances' => $attendances]);
		} else return redirect()->back()->with('info-error', 'Permission denied!');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
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
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \NCLP\Models\Attendance $attendance
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		if (Gate::allows('login')) {
			$user = Auth::user();
			$data = Attendance::find($id);
			$attendances = null;

			$present = Present::where('attendance_id', $data->id)->get();

			$i = 0;
			foreach ($present as $p){
				$student = Student::find($p->student_id);
				$attendances[$i]['name'] = $student->name;
				$attendances[$i]['present'] = $p->present;
				$i++;
			}

			return view('pages.attendance.attendance_view', ['attendances' => $attendances, 'data' => $data]);
		} else return redirect()->back()->with('info-error', 'Permission denied!');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \NCLP\Models\Attendance $attendance
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Attendance $attendance)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \NCLP\Models\Attendance $attendance
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request)
	{
		$this->validate($request, [
			'id' => 'required',
		]);

		if (Gate::allows('login')) {

			$attendance = Attendance::find($request->id);

			$user = Auth::user();

			if($user->hasRole('VT')){
				$attendance->VT = true;
			} elseif ($user->hasRole('PM')){
				$attendance->PM = true;
			} elseif($user->hasRole('PD')){
				$attendance->PD = true;
			}
			$attendance->save();

			return redirect()->route('attendances.index')->with('info-success', 'Successfully Added!');
		}
		else return redirect()->back()->with('info-error','Permission denied!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \NCLP\Models\Attendance $attendance
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Attendance $attendance)
	{
		//
	}
}
