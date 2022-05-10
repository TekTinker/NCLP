<?php

namespace NCLP\Http\Controllers;

use Illuminate\Http\Request;
use NCLP\Models\STCVisitor;
use Validator;
use JWTFactory;
use JWTAuth;
use Illuminate\Support\Facades\Gate;

class InstructorController extends Controller
{
    public function getSTCVisitors(){
        if (Gate::allows('login')) {

            $reports = STCVisitor::paginate(100);

            return view('pages.reports.stc_visitors', ['reports' => $reports]);
        }
        else return redirect()->back()->with('info-error','Permission denied!');
    }

    public function postSTCVisitors(Request $request){
        $validator = Validator::make($request->all(), [
            'uid' => 'required|exists:s_t_cs,uid',
            'visitor_name' => 'required',
            'visitor_designation' => 'required',
            'remark' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = auth()->user();

        if(1){
            $now = new \DateTime('now');
            $stcVisitor = new STCVisitor();

            $stcVisitor->stc_uid = $request->uid;
            $stcVisitor->date = today();
            $stcVisitor->month = $now->format('M Y');
            $stcVisitor->visitor_name = $request->visitor_name;
            $stcVisitor->visitor_designation = $request->visitor_designation;
            $stcVisitor->remark = $request->remark;

            $stcVisitor->save();


            return response()->json([
                'status' => 'Success',
                'msg' => 'Success'
            ]);
        } else {
            return response()->json([
                'status' => 'Error',
                'msg' => 'Permission denied'
            ]);
        }

    }
}
