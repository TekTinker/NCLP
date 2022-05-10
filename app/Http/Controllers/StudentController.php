<?php

namespace NCLP\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use NCLP\Models\Cl;
use NCLP\Models\Student;

class StudentController extends Controller
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

			return view('pages.students.students', ['students' => $students]);
		}
		else return redirect()->back()->with('info-error','Permission denied!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($cl_id)
    {
		if (Gate::allows('login')) {
			return view('pages.students.student_add', ['cl_id' => $cl_id]);
		}
		else return redirect()->back()->with('info-error','Permission denied!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$this->validate($request, [
			'emp_id' => 'required|unique:students',
			'punch_id' => 'required|unique:students',
			'name' => 'required',
			'dob' => 'nullable|date_format:Y-m-d',
			'doj' => 'nullable|date_format:Y-m-d',
			'mobile' => 'nullable|size:10',
		]);
		if (Gate::allows('login')) {
			$student = new Student();
			$student->cl_id = $request->cl_id;
			$student->emp_id = $request->emp_id;
			$student->punch_id = $request->punch_id;
			$student->name = $request->name;
			$student->address = $request->address;
			$student->marital_status = $request->marital_status;
			$student->designation = $request->designation;
			$student->mobile = $request->mobile;
			$student->shift = $request->shift;
			$student->week_off = $request->week_off;
			$student->dob = $request->dob;
			$student->doj = $request->doj;
			$student->save();
			return redirect()->route('cls.index')->with('info-success', 'Successfully Added!');
		}
		else return redirect()->back()->with('info-error','Permission denied!');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
