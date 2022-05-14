<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();
        return view('departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Department $department)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required','string','max:255','unique:departments,name']
        ]);

        if($validator->fails()) {
            return redirect()->back()->with($validator->errors())->withInput();
        }

        $department->name = $request->name;

        if($department->save()) {
            $request->session()->flash('success','Department created successfully!');
        } else {
            $request->session()->flash('error','Some error is happened when creating Department!');
        } 
        
        return redirect()->route('departments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        return view('departments.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required','string','max:255']
        ]);

        if($validator->fails()) {
            return redirect()->back()->with($validator->errors());
        }

        $department->name = $request->name;

        if($department->save()) {
            $request->session()->flash('success','Department updated successfully!');
        } else {
            $request->session()->flash('error','Some error is happened when updating department!');
        } 
        
        return redirect()->route('departments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Department $department)
    {
        if($department->delete()) {
            $request->session()->flash('success','Department Deleted successfully!');
        } else {
            $request->session()->flash('error','Some error is happened when deleting department!');
        }
        return redirect()->route('departments.index');
    }
}
