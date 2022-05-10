<?php

namespace NCLP\Http\Controllers;

use Illuminate\Http\Request;
use NCLP\Models\PMTalukaVisit;
use NCLP\Models\PMTalukaVisitZ24;
use Validator;
use JWTFactory;
use JWTAuth;
use Illuminate\Support\Facades\Gate;

class PMController extends Controller
{

    public function getPMVisitReportA2(){
        if (Gate::allows('login')) {

            $reports = PMTalukaVisit::paginate(100);

            return view('pages.reports.pm_visit_a2', ['reports' => $reports]);
        }
        else return redirect()->back()->with('info-error','Permission denied!');
    }

    public function getPMVisitReportZ24(){
        if (Gate::allows('login')) {

            $reports = PMTalukaVisitZ24::paginate(100);

            return view('pages.reports.pm_visit_z24', ['reports' => $reports]);
        }
        else return redirect()->back()->with('info-error','Permission denied!');
    }

    public function postPMVisitReportA2(Request $request){
        $validator = Validator::make($request->all(), [
            'uid' => 'required|exists:s_t_cs,uid',
            'work' => 'required',
            'information' => 'required',
            'remark' => 'required',
        ]);



        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = auth()->user();

        if(1){
            $pmVisitReportA2 = new PMTalukaVisit();

            $now = new \DateTime('now');

            $pmVisitReportA2->user_id = $user->id;
            $pmVisitReportA2->user_name = $user->name;
            $pmVisitReportA2->stc_uid = $request->uid;
            $pmVisitReportA2->month = $now->format('M Y');
            $pmVisitReportA2->work = $request->work;
            $pmVisitReportA2->information = $request->information;
            $pmVisitReportA2->remark = $request->remark;
            $pmVisitReportA2->date = today();

            $pmVisitReportA2->save();

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

    public function postPMVisitReportZ24(Request $request){
        $validator = Validator::make($request->all(), [
            'uid' => 'required|exists:s_t_cs,uid',
            'remark' => 'required',
        ]);



        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = auth()->user();

        if(1){
            $pmVisitReportZ24 = new PMTalukaVisitZ24();

            $pmVisitReportZ24->user_id = $user->id;
            $pmVisitReportZ24->user_name = $user->name;
            $pmVisitReportZ24->stc_uid = $request->uid;
            $pmVisitReportZ24->remark = $request->remark;
            $pmVisitReportZ24->date = date('Y-m-d');

            $pmVisitReportZ24->save();

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
