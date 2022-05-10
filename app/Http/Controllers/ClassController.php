<?php

namespace NCLP\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use NCLP\Models\Cl;
use NCLP\Models\STC;

class ClassController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		if (Gate::allows('login')) {

			$stcs = Auth::user()->getSTCs();

			$stc_ids = array();

			foreach ($stcs as &$stc){
				array_push($stc_ids, $stc->id);
			}
			$cls = Cl::whereIn('stc_id', $stc_ids)->get();

			$cls->stc_name = array();

			foreach ($cls as &$cl){
				$cl->stc_name = STC::where('id', $cl->stc_id)->value('name');
			}

			return view('pages.classes.class', ['cls' => $cls]);
		} else return redirect()->back()->with('info-error', 'Permission denied!');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		if (Gate::allows('login')) {
			$stcs = Auth::user()->getSTCs();
			return view('pages.classes.cl_add', ['stcs' => $stcs]);
		} else return redirect()->back()->with('info-error', 'Permission denied!');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
			'name' => 'required',
			'stc_id' => 'required',
		]);
		if (Gate::allows('login')) {
			$cl = new Cl();
			$cl->name = $request->name;
			$cl->stc_id = $request->stc_id;
			$cl->save();
			return redirect()->route('cls.index')->with('info-success', 'Successfully Added!');
		}
		else return redirect()->back()->with('info-error','Permission denied!');
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
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
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
