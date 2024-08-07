<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function getTeacher()
    {
        $teacher = DB::table("teachers")->get();

        return $teacher;
    }

    public function addTeacher()
    {
        $teacher = DB::table("teachers")->insert([
            "name"=> "Pob",
            "department"=>"Full stack",
            "email"=> "pob@gmail.com",    
        ]);

        return $teacher;

        
    }

    public function updateTeacher()
    {
        $teacher = DB::table("teachers")->where('id', 34)->update([
            "name"=> "Pobs",
            "department"=>"Full stack",
            "email"=> "pob@gmail.com",    
        ]);

        return $teacher;
    }

    public function delTeacher()
    {
        $teacher = DB::table("teachers")->where('id', 34)->delete();
        return $teacher;
    }
}
