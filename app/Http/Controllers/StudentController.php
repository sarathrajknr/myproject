<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;


// use DB;

class StudentController extends Controller
{

    public function create()
    {
        return view('students.create'); 
    }

    public function store(Request $request)

    {
        
         \App\Models\Student::create(
        [
            'name' =>$request->name,
            'class' => $request->class,
            'address' =>$request->address,
            'concession' => $request->concession,
            'status' => $request->status,
            'fee' => $request->fee,
            'phone' => $request->phone,
            
        ] );
        return redirect()->route('students.index');
    }


    //Edit and Update

    public function edit($id)
    {
        // Find the student by id and pass it to the edit view

        $student = Student::findOrFail($id);

        return view('students.update', compact('student'));
    }


    // Update student
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id); // Find the student by id
        $student->update([
            'name' => $request->name,
            'class' => $request->class,
            'address' => $request->address,
            'concession' => $request->concession,
            'status' => $request->status,
            'fee' => $request->fee,
            'phone' => $request->phone,
        ]);


        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }

// Delete Function

public function destroy($id)
{
    // Find the student by id and delete it
    $student = Student::findOrFail($id);
    $student->delete();

    // Redirect back with a success message
    return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
}


    

    

    // Index function (listing and filtering)

    public function index(Request $request) {
        
        // return \App\Models\Student::get();
        // $students = \App\Models\Student::where('name',$request->name)->get();
        // DB::enableQueryLog();

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

        //  $query = DB::getQueryLog();
        //     dd($query);

        return view('students.index',['data'=>$students]);



    }
}