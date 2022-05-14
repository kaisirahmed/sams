<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ShemrockZktecoAttendance;

class ShemrockZktecoController extends Controller
{
    public function index(Request $request) {
        $attendanceJsonArrays = $request->all();
    	$count = 0;
    	try{
        	foreach($attendanceJsonArrays  as $data) {
        	    try{
        	    	if(!ShemrockZktecoAttendance::where("access_time", $data["access_time"])->exists()) {
        	            
        		      	$setAttendance = ShemrockZktecoAttendance::create([
            	       		    'ac_no' => $data["ac_no"],
                             	'access_time'   => $data["access_time"],
                             	'in_out' => 0,
                             	'device_no' => '1'
            	       		]);
        	       		if($setAttendance) {
        	       		    $count++;
        	       		}
        	        } 
        	        
        	    } catch(Throwable $exception) {
        	        
        	    }
            }
            return $count;
    	} catch(Throwable $exception) {
    	    return $exception;
    	}
    }
}
