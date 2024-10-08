<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        \App\Models\Teacher::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'address' => $request->address,
                'date_of_birth' => $request->date_of_birth,
                'hire_date' => $request->hire_date,  
                'salary' => $request->salary,
                'qualification' => $request->qualification,
            ] );
            return redirect()->route('teachers.index');
    }

    public function index(Request $request){

        $teachers = \App\Models\Teacher::where(function($query) use($request){
            if($request->name){
            $query->where('name','LIKE','%'.$request->name.'%');
            }
            if($request->email){
                $query->where('email',$request->email);
                }
                if($request->phone){
                    $query->where('phone',$request->phone);
                    }
                    if($request->subject){
                        $query->where('subject','LIKE','%'.$request->subject.'%');
                        }
                        if($request->address){
                            $query->where('address','LIKE','%'.$request->address.'%');
                            }
                            if($request->date_of_birth){
                                $query->where('date_of_birth',$request->date_of_birth);
                                }
                                if($request->hire_date){
                                    $query->where('hire_date',$request->hire_date);
                                    }
                                    if($request->salary){
                                        $query->where('salary',$request->salary);
                                        }
                                        if($request->qualification){
                                            $query->where('qualification','LIKE','%'.$request->qualification.'%');
                                            }

        })->get();

        return view('teachers.index',['table'=>$teachers]);
    }
}
