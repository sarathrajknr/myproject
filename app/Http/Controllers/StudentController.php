<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request) {

        
        // return \App\Models\Student::get();
        // $students = \App\Models\Student::where('name',$request->name)->get();

        $students = \App\Models\Student::where(function($query) use($request){ 
            if($request->name) 
            // $query->where('name',$request->name);
            $query->where('name','LIKE','%'.$request->name.'%');
            
            if($request->phone) 
            $query->where('phone','LIKE','%'.$request->phone.'%');
           
            if($request->class) 
            $query->where('class', $request->class);

            if($request->fee) 
            $query->where('fee','LIKE','%'.$request->fee.'%');

            if($request->concession !== null) {
                $concessionValue = ($request->concession === 'Yes') ? 1 : 0; 
                $query->where('concession', $concessionValue);
            }
            

            if($request->status !== null) {
                $statusValue = ($request->status === 'Yes') ? 1 : 0; 
                $query->where('status', $statusValue);
            }
            
            
         })->get();


        return view('students',['data'=>$students]);
    }
}
