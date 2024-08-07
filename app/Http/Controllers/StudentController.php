<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentController extends Controller
{
    public function getStudent(){
        $student = Student::all();
        return view("studentview",compact("student")) && $student;
    }
}
