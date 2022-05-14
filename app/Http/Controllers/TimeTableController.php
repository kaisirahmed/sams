<?php

namespace App\Http\Controllers;

use App\ShemrockZktecoAttendance;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Department;
use App\TimeTable;
use DB;

class TimeTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timetables = TimeTable::with('department')
                                ->whereHas('department', function($query) {
                                    $query->orderBy('department_id','asc');
                                })->get();  
        return view('timetable.index', compact('timetables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::whereDoesntHave('timetable', function($query) {
                                    $query->where('id','!=','department_id');
                                    $query->orderBy('department_id','asc');
                                })->get();
        return view('timetable.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, TimeTable $timetable)
    {
        $validator = Validator::make($request->all(), [
            'department_id' => ['required'],
            'name' => ['required','string'],
            'type' => ['required','string'],
            'checkin' => ['required'],
            'checkout' => ['required']
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $timetable->department_id = $request->department_id;
            $timetable->name = $request->name;
            $timetable->type = $request->type;
            $timetable->checkin = str_replace([' AM', ' PM'], "", $request->checkin);
            $timetable->checkout = str_replace([' AM', ' PM'], "", $request->checkout);
            
            if($timetable->save()) {
                $request->session()->flash('success','Time table set successfully.');
                return redirect()->route('timetable.index');
            } else {
                $request->session()->flash('warning','Time table not set. Something is happening error!');
                return redirect()->route('timetable.index');
            }
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
    public function edit(TimeTable $timetable)
    {
        $departments = Department::all();
        return view('timetable.edit', compact('timetable','departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TimeTable $timetable)
    {
        $validator = Validator::make($request->all(), [
            'department_id' => ['required'],
            'name' => ['required','string'],
            'type' => ['required','string'],
            'checkin' => ['required'],
            'checkout' => ['required']
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $timetable->department_id = $request->department_id;
            $timetable->name = $request->name;
            $timetable->type = $request->type;
            $timetable->checkin = str_replace([' AM', ' PM'], "", $request->checkin);
            $timetable->checkout = str_replace([' AM', ' PM'], "", $request->checkout);

            if($timetable->save()) {
                $request->session()->flash('success','Time table updated successfully.');
                return redirect()->route('timetable.index');
            } else {
                $request->session()->flash('warning','Time table not updated. Something is happening error!');
                return redirect()->route('timetable.index');
            }
        }  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, TimeTable $timetable)
    {
        if($timetable->delete()) {
            $request->session()->flash('success','Timetable Deleted successfully!');
        } else {
            $request->session()->flash('error','Some error is happened when deleting timetable!');
        }
        return redirect()->route('timetable.index');
    }
}
