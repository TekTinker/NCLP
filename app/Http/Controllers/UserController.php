<?php

namespace NCLP\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use NCLP\Models\STC;
use NCLP\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{


	public function assignSTCTeacher(Request $request, $user_id)
	{
		$this->validate($request, [
			'stc' => 'required',
		]);
		if(Gate::allows('stc_assign')){
			$stc = STC::find($request->stc);
			$user = User::find($user_id);

			$user_stcs = $user->stcs()->get();

			foreach ($user_stcs as $user_stc){
				$user->stcs()->detach($user_stc);
			}
			$user->stcs()->attach($stc);

			return redirect()->route('user.teacher.assign_stc', ['user' => $user->id])->with('info-success', 'Assigned!');
		}
		return redirect()->back()->with('info-error', 'Permission Denied!');
	}


	public function assignSTC(Request $request, $user_id)
	{
		$this->validate($request, [
			'stc' => 'required',
		]);
		if(Gate::allows('stc_assign')){
			$stc = STC::find($request->stc);
			$user = User::find($user_id);

			$user_stcs = $user->stcs()->get();

			foreach ($user_stcs as $user_stc){
				if($user_stc->id == $stc->id){
					return redirect()->back()->with('info-success', 'Already Added!');
				}
			}
			$user->stcs()->attach($stc);

			return redirect()->route('user.vt.assign_stc', ['user' => $user->id])->with('info-success', 'Assigned!');
		}
		return redirect()->back()->with('info-error', 'Permission Denied!');
	}


	public function removeSTC($user_id, $stc_id)
	{
		if (Gate::allows('stc_admin')){
			$stc = STC::find($stc_id);
			$user = User::find($user_id);

			$user->stcs()->detach($stc);

			return redirect()->route('user.vt.assign_stc', ['user' => $user->id])->with('info-success', 'Removed!');
		}
		return redirect()->back()->with('info-error', 'Permission Denied!');
	}


	public function getAssignSTC($id)
	{
		if (Gate::allows('stc_admin')){
			$all_stcs = STC::all();
			$user = User::find($id);
			$stcs = $user->stcs()->get();
			return view('pages.vts.assign_stc', ['user' => $user, 'all_stcs' => $all_stcs, 'stcs' =>$stcs]);
		}
		return redirect()->back()->with('info-error', 'Permission Denied!');
	}

	public function getAssignSTCTeacher($id)
	{
		if (Gate::allows('stc_admin')){
			$all_stcs = STC::all();
			$user = User::find($id);
			$stcs = $user->stcs()->get();
			return view('pages.teachers.assign_stc', ['user' => $user, 'all_stcs' => $all_stcs, 'stcs' =>$stcs]);
		}
		return redirect()->back()->with('info-error', 'Permission Denied!');
	}

	public function getVTList()
	{
		if (Gate::allows('stc_admin')){
			$users = User::role('VT')->paginate(50);
			return view('pages.vts.vts', ['users' => $users]);
		}
		return redirect()->back()->with('info-error', 'Permission Denied!');
	}

	public function getTeacherList()
	{
		if (Gate::allows('stc_admin')){
			$users = User::role('Teacher')->paginate(50);
			return view('pages.teachers.teachers', ['users' => $users]);
		}
		return redirect()->back()->with('info-error', 'Permission Denied!');
	}

	public function getUserProfile($id)
	{
		if (Gate::allows('stc_admin')){
			$user = User::find($id);
			return view('pages.user.view_profile', ['user' => $user]);
		}
		return redirect()->back()->with('info-error', 'Permission Denied!');
	}



	public function userApprovals()
	{
		if (Gate::allows('stc_admin')){

			$users = User::role('User')->paginate(50);

			return view('pages.Staff.approvals', ['users' => $users]);
		}
		return redirect()->back()->with('info-error', 'Permission Denied!');
	}

	public function userApprove(Request $request, $id)
	{
		if (Gate::allows('stc_admin')){

			$user = User::find($id);
			$user->syncRoles($request->role);
			$user->syncPermissions('login');

			return redirect()->route('user.approval')->with('info-success', 'User Approved!');
		}
		return redirect()->back()->with('info-error', 'Permission Denied!');
	}


	public function userApprovePage($id)
	{
		return view('pages.Staff.approve', ['user' => User::find($id), 'roles' => Role::all()]);
	}


	public function viewProfile()
	{
		return view('pages.user.profile', ['user' => Auth::user()]);
	}

	public function editProfile()
	{
		return view('pages.user.profile_edit', ['user' => Auth::user()]);
	}

	public function updateProfile(Request $request)
	{
		$user = Auth::user();

		$this->validate($request, [
			'email' => 'required|email|unique:users,email,'.$user->id,
			'name' => 'required',
			'mobile' => 'nullable|size:10',
			'dob' => 'nullable|date_format:Y-m-d',
			'aadhar' => 'nullable|numeric',
		]);

		$user->name = $request->name;
		$user->email = $request->email;
		$user->education = $request->education;
		$user->dob = $request->dob;
		$user->gender = $request->gender;
		$user->address = $request->address;
		$user->ward = $request->ward;
		$user->taluka = $request->taluka;
		$user->district = $request->district;
		$user->state = $request->state;
		$user->mobile = $request->mobile;
		$user->pan = $request->pan;
		$user->aadhar = $request->aadhar;
		$user->category = $request->category;
		$user->cast = $request->cast;

		$user->save();

		return redirect()->route('profile.view')->with('info-success', 'Saved');
	}
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
		User::find($id)->delete();
		return redirect()->route('user.approval')->with('info-success','User Deleted!');
    }
}
