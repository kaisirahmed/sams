<?php

namespace App\Http\Controllers;

use App\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use App\Department;
use File;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informations = Information::all()->sortBy('account_no');
        return view('informations.index', compact('informations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        try{
            $nationalityJson = File::get(public_path('nationality.json'));
            if(($nationalityJson)) {
                $nationalities = json_decode($nationalityJson, true);
            } else {
                abort('404');
            }
            $departments = Department::all();
            return view('informations.create', compact('nationalities','departments')); 
        } catch(Throwable $exception) {
            return abort('404');
        }        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Information $information)
    { 
        $validator = Validator::make($request->all(),[
            'department_id' => ['required','numeric'],
            'account_no' => ['required','numeric','unique:information,account_no'],
            'name' => ['required','string','max:255'],
            'gender' => ['required','string'],
            'nationality' => ['required','string'],
            'office_tel' => ['nullable','numeric'],
            'photo' => ['nullable','string'],
            'title' => ['nullable','string','max:255'],
            'dob' => ['nullable','date','date_format:Y-m-d'],
            'employment_date' => ['required','date','date_format:Y-m-d'],
            'card_number' => ['nullable','numeric','unique:information,card_number'],
            'mobile_number' => ['required','numeric'],
            'address' => ['nullable','string']
        ],
        [
            'department_id.required' => 'Department name is required.'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else { 
            $information->department_id = $request->department_id;
            $information->account_no = $request->account_no;
            $information->name = $request->name;
            $information->gender = $request->gender;
            $information->nationality = $request->nationality;
            $information->office_tel = $request->office_tel;

            if ($request->photo)
            {
                $image_string1      =   explode(";", $request->photo);
                $image_string2      =   explode(",", $image_string1[1]);
                $image              =   base64_decode($image_string2[1]);
 
                $image_name         =   time().'.jpg';
                $destination_image_path   =   public_path('infoimage/');

                $image_url          =   "info_image_".$image_name;
                Image::make($image)->encode()->save($destination_image_path.$image_url);
                $information->photo  = $request->photo;
            }

            $information->title = $request->title;
            $information->dob = $request->dob;
            $information->employment_date = $request->employment_date;
            $information->card_number = $request->card_number;
            $information->mobile_number = $request->mobile_number;
            $information->address = $request->address;

            if($information->save()) {
                $request->session()->flash('success','Information has been saved successfully!');
                return redirect()->route('informations.index');
            } else {
                $request->session()->flash('error','Some error is happened when creating information!');
                return redirect()->back();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(information $information)
    {
        return view('informations.show', compact('information'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit(information $information)
    {
        $nationalityJson = File::get(public_path('nationality.json'));
        if(($nationalityJson)) {
            $nationalities = json_decode($nationalityJson, true);
        } else {
            abort('404');
        }
        $departments = Department::all();
        return view('informations.edit', compact('information','departments','nationalities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, information $information)
    {
        $validator = Validator::make($request->all(),[
            'department_id' => ['required','numeric'],
            //'account_no' => ['required','numeric'],
            'name' => ['required','string','max:255'],
            'gender' => ['required','string'],
            'nationality' => ['required','string'],
            'office_tel' => ['nullable','numeric'],
            'photo' => ['nullable','string'],
            'title' => ['nullable','string','max:255'],
            'dob' => ['nullable','date','date_format:Y-m-d'],
            'employment_date' => ['required','date','date_format:Y-m-d'],
            //'card_number' => ['required','numeric'],
            'mobile_number' => ['required','numeric'],
            'address' => ['nullable','string']
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else { 
            $information->department_id = $request->department_id;
            //$information->account_no = $request->account_no;
            $information->name = $request->name;
            $information->gender = $request->gender;
            $information->nationality = $request->nationality;
            $information->office_tel = $request->office_tel;

            if ($request->photo) 
            { 
                $image_string1      =   explode(";", $request->photo);
                $image_string2      =   explode(",", $image_string1[1]);
                $image              =   base64_decode($image_string2[1]);
 
                $image_name         =   time().'.jpg';
                $destination_image_path   =   public_path('infoimage/');

                $image_url          =   "info_image_".$image_name;
                Image::make($image)->encode()->save($destination_image_path.$image_url);
                $information->photo  = $request->photo;
            }

            $information->title = $request->title;
            $information->dob = $request->dob;
            $information->employment_date = $request->employment_date;
            //$information->card_number = $request->card_number;
            $information->mobile_number = $request->mobile_number;
            $information->address = $request->address;

            if($information->save()) {
                $request->session()->flash('success','Information has been updated successfully!');
                return redirect()->route('informations.index');
            } else {
                $request->session()->flash('error','Some error is happened when updating information!');
                return redirect()->back();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, information $information)
    {
        if($information->delete()) {
            $request->session()->flash('success','তথ্য সফলভাবে মোছা হয়েছে!');
        } else {
            $request->session()->flash('error','তথ্য মুছে ফেলার সময় কিছু ত্রুটি ঘটে!');
        }
        return redirect()->route('taxpayee.index');
    }
}
