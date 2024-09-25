<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        // return \App\Models\Student::get();
        return view('students',['data'=>\App\Models\Student::get()]);
    }
}
