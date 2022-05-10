<?php

namespace NCLP\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use NCLP\Models\STC;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class STCController extends Controller
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

			return view('pages.stc.stc', ['stcs' => $stcs]);
		}
		else return redirect()->back()->with('info-error','Permission denied!');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		if (Gate::allows('login')) {
			return view('pages.stc.stc_add');
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
			'uid' => 'required|unique:s_t_cs',
			'name' => 'required',
			'address' => 'required',
			'taluka' => 'required',
			'district' => 'required',
			'state' => 'required',
		]);
		if (Gate::allows('login')) {
			$sTC = new STC();
			$sTC->uid = $request->uid;
			$sTC->name = $request->name;
			$sTC->address = $request->address;
			$sTC->taluka = $request->taluka;
			$sTC->district = $request->district;
			$sTC->state = $request->state;
			$sTC->save();
			return redirect()->route('stcs.index')->with('info-success', 'Successfully Added!');
		}
		else return redirect()->back()->with('info-error','Permission denied!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \NCLP\Models\STC  $sTC
     * @return \Illuminate\Http\Response
     */
    public function show($sTC)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \NCLP\Models\STC  $sTC
     * @return \Illuminate\Http\Response
     */
    public function edit($sTC)
    {
		$sTC = STC::find($sTC);
		if (Gate::allows('login', $sTC)) {
			return view('pages.stc.stc_edit', ['stc' => $sTC]);
		}
		else return redirect()->back()->with('info-error','Permission denied!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \NCLP\Models\STC  $sTC
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sTC)
    {
		$sTC = STC::find($sTC);

		$this->validate($request, [
			'uid' => 'required|unique:s_t_cs,uid,'.$sTC->id,
			'name' => 'required',
			'address' => 'required',
			'taluka' => 'required',
			'district' => 'required',
			'state' => 'required',
		]);


		if (Gate::allows('login', $sTC)) {
			$sTC->uid = $request->uid;
			$sTC->name = $request->name;
			$sTC->address = $request->address;
			$sTC->taluka = $request->taluka;
			$sTC->district = $request->district;
			$sTC->state = $request->state;

			$sTC->save();
			return redirect()->route('stcs.index')->with('info-success', 'Successfully Updated!');
		}
		else return redirect()->back()->with('info-error','Permission denied!');
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \NCLP\Models\STC  $sTC
     * @return \Illuminate\Http\Response
     */
    public function destroy($sTC)
    {
		$sTC = STC::find($sTC);
		if (Gate::allows('login', $sTC)) {
			$sTC->delete();
			return redirect()->back()->with('info-success','Successfully Deleted!');
		}
		else return redirect()->back()->with('info-error','Permission denied!');
    }
}
