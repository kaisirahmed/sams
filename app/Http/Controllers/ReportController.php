<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShemrockZktecoAttendance;
use Illuminate\Support\Facades\Validator;
use App\Department;
use App\TimeTable;
use App\Information;
use PDF;
use DB;

ini_set('memory_limit', -1);
ini_set("pcre.backtrack_limit", "5000000");

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function daily()
    {
        $departments = Department::all();
        return view('report.daily', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function custom()
    {
        $departments = Department::all();
        return view('report.custom', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function customreport(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'department_id' => ['required'],
            'start_date' => ['required','date','date_format:Y-m-d'],
            'end_date' => ['required','date','date_format:Y-m-d']
        ],
        [
            'department_id.required' => 'Department name is required.'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {

            $attendances = ShemrockZktecoAttendance::select('account_no')
                            ->addSelect(DB::raw('DATE(access_time) as datetime'))
                            ->addSelect(DB::raw('MIN(TIME(access_time)) as in_time'))
                            ->addSelect(DB::raw('MAX(TIME(access_time)) as out_time'))
                            ->whereBetween(DB::raw('DATE(access_time)'), [$request->start_date,$request->end_date])
                            ->whereHas('information', function($query) use($request) {
                                $query->where('department_id',$request->department_id);
                            })
                            ->groupBy('account_no','datetime')
                            ->get();

            $report_name = "Custom Report";
            $department = Department::find($request->department_id);

            $search_date_range = date('d M, Y',strtotime($request->start_date))." to ".date('d M, Y',strtotime($request->end_date));
         
            $pdf = PDF::loadView('report.report', compact('attendances','search_date_range','department','report_name'));

            $pdf->SetProtection(['print'], '', config('app.name'));
            return $pdf->stream($report_name.'_'.str_replace(' ', '_', $search_date_range).'.pdf');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dailyreport(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'department_id' => ['required'],
            'report_date' => ['required','date','date_format:Y-m-d'],
        ],
        [
            'department_id.required' => 'Department name is required.'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {

            $attendances = ShemrockZktecoAttendance::select('account_no')
                            ->addSelect(DB::raw('DATE(access_time) as present_date'))
                            ->addSelect(DB::raw('MIN(TIME(access_time)) as in_time'))
                            ->addSelect(DB::raw('MAX(TIME(access_time)) as out_time'))
                            ->whereDate(DB::raw('DATE(access_time)'), $request->report_date)
                            ->whereHas('information', function($query) use($request) {
                                $query->where('department_id',$request->department_id);
                            })
                            ->groupBy('account_no','present_date')
                            ->get();
             
            $report_name = "Daily Report";

            $department = Department::find($request->department_id);

            $search_date_range = date('d F, Y',strtotime($request->report_date));
         
            $pdf = PDF::loadView('report.dailyreport', compact('attendances','search_date_range','report_name','department'));

            $pdf->SetProtection(['print'], '', config('app.name'));
            return $pdf->stream($report_name.'_'.str_replace(' ', '_', $search_date_range).'.pdf');
        }
    }

    /**
     * Show the form for earlyoutreport the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function earlyoutreport()
    {
        return view('report.earlyout');
    }

    /**
     * absence the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function absence()
    {
        $departments = Department::all();
        return view('report.absence', compact('departments'));
    }

    /**
     * absence the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function absencereport(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'department_id' => ['required'],
            'start_date' => ['required','date','date_format:Y-m-d'],
            'end_date' => ['required','date','date_format:Y-m-d']
        ],
        [
            'department_id.required' => 'Department name is required.'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
                
            // Date Looping...................##########
                // $begin = new \DateTime($request->start_date);
                // $end = new \DateTime($request->end_date);
                // $end = $end->modify( '+1 day' );

                // $daterange = new \DatePeriod($begin, new \DateInterval('P1D'), $end);

                // foreach($daterange as $date){
                //     echo $date->format("Y-m-d") . "<br>";
                //     $allDates[] = $date->format("Y-m-d");
                // }

             
          $attendances = ShemrockZktecoAttendance::select('i.account_no as account_no', 'd.dt as absent_date')
                            ->from(function ($query) use ($request) {
                                $query->select(DB::raw('DATE(t.access_time) as dt'))
                                ->from('shemrock_zkteco_attendances as t')
                                ->where(DB::raw('t.access_time'), DB::raw('>='), DB::raw($request->start_date))
                                //->where(DB::raw('t.access_time'), DB::raw('<'), DB::raw('DATE_ADD("'.$request->end_date.'", INTERVAL 1 DAY)'))
                                ->groupBy(DB::raw('DATE(t.access_time)'))
                                ->orderBy(DB::raw('DATE(t.access_time)'));
                            },'d')
                            ->crossJoin('information as i', function($query) use($request) {
                                $query->where('i.department_id', $request->department_id);
                            })
                            ->leftJoin('shemrock_zkteco_attendances as p', function($query) {
                                $query->on(DB::raw('p.access_time'), DB::raw('>='), DB::raw('d.dt'));
                                $query->on(DB::raw('p.access_time'), DB::raw('<'), DB::raw('d.dt + INTERVAL 1 DAY'));
                                $query->on(DB::raw('p.account_no'), DB::raw('='), DB::raw('i.account_no'));
                            })->where(DB::raw('p.account_no'))
                           
                            ->orderBy('i.account_no')
                            ->orderBy('d.dt')
                            ->get();
 
                            
            if(count($attendances)) {
                $report_name = "Absence Report";

                $department = Department::find($request->department_id);

                $search_date_range = date('d M, Y',strtotime($request->start_date))." to ".date('d M, Y',strtotime($request->end_date));

                $pdf = PDF::loadView('report.absencepdf', compact('attendances','search_date_range','department','report_name'));

                $pdf->SetProtection(['print'], '', config('app.name'));
                return $pdf->stream($report_name.'_'.str_replace(' ', '_', $search_date_range).'.pdf');             
            } else {
                return redirect()->back()->with('info','There is no data available for this requirement.');
            }
        } 
    }
}
