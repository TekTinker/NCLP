<?php

namespace NCLP\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use NCLP\Models\Cl;
use NCLP\Models\STC;

class APIClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		if (Gate::allows('login')) {

			$stcs = auth()->user()->getSTCs();

			$stc_ids = array();

			foreach ($stcs as &$stc){
				array_push($stc_ids, $stc->id);
			}
			$cls = Cl::whereIn('stc_id', $stc_ids)->get();

			$cls->stc_name = array();

			foreach ($cls as &$cl){
				$cl->stc_name = STC::where('id', $cl->stc_id)->value('name');
			}

			return response()->json([
				'status' => 'Success',
				'msg' => 'Success',
				'cls' => $cls
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
