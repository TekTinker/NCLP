<?php

namespace NCLP\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use NCLP\Models\Cl;
use NCLP\Models\Student;

class APIStudentController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index($cl_id)
	{
		if (Gate::allows('login')) {

			$students = Student::where('cl_id', $cl_id)->get();

			return response()->json([
				'status' => 'Success',
				'msg' => 'Success',
				'students' => $students
			]);
		} else return response()->json([
			'status' => 'Error',
			'msg' => 'Permission Denied'
		]);
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
