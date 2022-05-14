<?php

namespace App\Http\Controllers;

use App\Rounding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoundingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rounding = Rounding::first(); 
        return view('timetable.rounding', compact('rounding'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Rounding $rounding)
    {
        $validator = Validator::make($request->all(), [
            'round_type' => ['required','string'],
            'up_checkin' => ['required','integer'],
            'up_checkout' => ['required','integer'],
            'down_checkin' => ['required','integer'],
            'down_checkout' => ['required','integer']
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $rounding->round_type = $request->round_type;
            $rounding->up_checkin = $request->up_checkin;
            $rounding->up_checkout = $request->up_checkout;
            $rounding->down_checkin = $request->down_checkin;
            $rounding->down_checkout = $request->down_checkout;
            
            if($rounding->save()) {
                return redirect()->back()->with('success','Rounding is successfully added!');
            } else {
                return redirect()->back()->with('warning','There is some error when rounding setup!');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rounding  $rounding
     * @return \Illuminate\Http\Response
     */
    public function show(Rounding $rounding)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rounding  $rounding
     * @return \Illuminate\Http\Response
     */
    public function edit(Rounding $rounding)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rounding  $rounding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rounding $rounding)
    {
        $validator = Validator::make($request->all(), [
            'round_type' => ['required','string'],
            'up_checkin' => ['required','integer'],
            'up_checkout' => ['required','integer'],
            'down_checkin' => ['required','integer'],
            'down_checkout' => ['required','integer']
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $rounding->round_type = $request->round_type;
            $rounding->up_checkin = $request->up_checkin;
            $rounding->up_checkout = $request->up_checkout;
            $rounding->down_checkin = $request->down_checkin;
            $rounding->down_checkout = $request->down_checkout;
            
            if($rounding->save()) {
                return redirect()->back()->with('success','Rounding is successfully updated!');
            } else {
                return redirect()->back()->with('warning','There is some error when rounding setup!');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rounding  $rounding
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rounding $rounding)
    {
        //
    }
}
