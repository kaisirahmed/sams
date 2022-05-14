<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShemrockZktecoAttendance;
use App\Information;
use App\Department;
use App\TimeTable;
use App\Rounding;
use Carbon\Carbon;
use DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('search.search');
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
        if($request->search_text) {
            $search_text = $request->search_text;
            $information = Information::where('account_no',$search_text)->first();
            
            $first_day_of_the_current_month = Carbon::today()->startOfMonth();
            $last_day_of_the_current_month = $first_day_of_the_current_month->copy()->endOfMonth();

            $attendances = ShemrockZktecoAttendance::WhereHas('information', function($query) use ($search_text) {
                                $query->where('account_no',$search_text);
                            })
                            ->select('account_no')
                            ->addSelect(DB::raw('DATE(access_time) as datetime'))
                            ->addSelect(DB::raw('MIN(TIME(access_time)) as in_time'))
                            ->addSelect(DB::raw('MAX(TIME(access_time)) as out_time'))
                            ->whereBetween(DB::raw('DATE(access_time)'), [$first_day_of_the_current_month,$last_day_of_the_current_month])
                            ->groupBy('account_no','datetime')
                            ->get();

        
        $current_month_date_range = date('d/m/Y',strtotime($first_day_of_the_current_month)).'-'.date('d/m/Y',strtotime($last_day_of_the_current_month));
 
        $attendance_percentage = (count($attendances) / 30) * 100;
        $absence_percentage = 100 - $attendance_percentage;
        return view('search.search', compact('search_text','information','attendances','attendance_percentage','current_month_date_range','absence_percentage'));

        } else {
            return abort('404');
        }        
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
