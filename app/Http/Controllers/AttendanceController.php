<?php

namespace App\Http\Controllers;

use App\ShemrockZktecoAttendance;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Information;
use App\Department;
use App\TimeTable;
use App\Rounding;
use DB;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rounding = Rounding::first();
        $attendances = ShemrockZktecoAttendance::select('account_no')
                                ->addSelect(DB::raw('DATE(access_time) as datetime'))
                                ->addSelect(DB::raw('MIN(TIME(access_time)) as in_time'))
                                ->addSelect(DB::raw('MAX(TIME(access_time)) as out_time'))
                                ->groupBy('account_no','datetime')
                                ->get();

        $timetable = TimeTable::first();


//         $newatt = ShemrockZktecoAttendance::select('i.account_no as account_no', 'attendance.attendance_date','a.access_time')
//                         ->from(function ($query) {
//                             $query->select(DB::raw('@curDate := Date_Add(@curDate, interval 1 day) as attendance_date'))
//                             ->from('shemrock_zkteco_attendances', function($query) {
//                                 $query->select(DB::raw('@curDate := 2020-01-01'));
//                                 $query->whereBetween(DB::raw('DATE(access_time)'),[DB::raw('@curDate'), "2020-01-31"]);
//                             });
//                         },'attendance')
//                         ->crossJoin('information as i', function($query) {
//                             $query->groupBy('i.account_no')
//                                 ->orderBy('i.account_no');
//                         })
//                         ->leftJoin('shemrock_zkteco_attendances as a', function($query) {
//                             $query->on(DB::raw('attendance.attendance_date'), DB::raw('='), DB::raw('DATE(access_time)'))
//                             ->groupBy('attendance.attendance_date');
//                         }) 
                        
//                         ->orderBy('attendance.attendance_date')   ->limit(20) 
//                         ->get();
// dd($newatt);

        return view('attendances.index', compact('attendances','timetable','rounding'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function absence($account_no, $department_id)
    {
        $information = Information::where('account_no',$account_no)->first();
        $attendances = ShemrockZktecoAttendance::select('i.account_no as account_no', 'd.dt as absent_date')
                        ->from(function ($query) {
                            $query->select(DB::raw('DATE(t.access_time) as dt'))
                            ->from('shemrock_zkteco_attendances as t')
                            ->groupBy(DB::raw('DATE(t.access_time)'))
                            ->orderBy(DB::raw('DATE(t.access_time)'));
                        },'d')
                        ->crossJoin('information as i', function($query) use ($department_id, $account_no) {
                            $query->where('i.department_id', $department_id);
                            $query->where('i.account_no', $account_no);
                        })
                        ->leftJoin('shemrock_zkteco_attendances as p', function($query) {
                            $query->on(DB::raw('p.access_time'), DB::raw('>='), DB::raw('d.dt'));
                            $query->on(DB::raw('p.access_time'), DB::raw('<'), DB::raw('d.dt + INTERVAL 1 DAY'));
                            $query->on(DB::raw('p.account_no'), DB::raw('='), DB::raw('i.account_no'));
                        })->where(DB::raw('p.account_no'))
                        
                        ->orderBy('i.account_no')
                        ->orderBy('d.dt')
                        ->get();

        return view('attendances.absence',compact('attendances','information'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function timetableCreate()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function timeTableStore(Request $request)
    { 
        // 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($account_no)
    {
        $rounding = Rounding::first();
        $information = Information::where('account_no',$account_no)->first();
        $attendances = ShemrockZktecoAttendance::WhereHas('information', function($query) use ($account_no) {
                                    $query->where('account_no',$account_no);
                                })
                                ->select('account_no')
                                ->addSelect(DB::raw('DATE(access_time) as datetime'))
                                ->addSelect(DB::raw('MIN(TIME(access_time)) as in_time'))
                                ->addSelect(DB::raw('MAX(TIME(access_time)) as out_time'))
                                ->groupBy('account_no','datetime')
                                ->get();

        return view('attendances.show',compact('attendances','information','rounding'));
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function timetableedit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function timetableupdate(Request $request, $id)
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
