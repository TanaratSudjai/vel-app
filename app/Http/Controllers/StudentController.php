<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentController extends Controller
{
    public function getStudent()
    {
        $student = Student::all();

        //$qurey = Student::select("name","department")->where('advisor_id', 1)->orderBy('name','desc')->get();
        //return view("studentview", compact("student"));

        return $student ;
    }

    public function getStudentById($id)
    {
        $studentbyid = Student::findOrFail($id);
        //return view("studentviewid", compact("studentbyid"));
        return $studentbyid ;

    }

    public function countStudent()
    {
        $student_count = Student::count();
        return $student_count ;
    }

    public function sumAge()
    {
        $age_sumstudent = Student::sum('age');
        return $age_sumstudent ;
    }


    public function avgAge()
    {
        $age_sumstudent = Student::avg('age');
        return $age_sumstudent ;
    }

    public function maxAge()
    {
        $age_sumstudent = Student::max('age');
        //add find and new data
        $find = Student::select(Student::raw('count(*) as student_count, advisor_id'))->groupBy('advisor_id')->get();
        return $find ;
    }

}
