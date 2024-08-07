<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function ShowData()
    {
        echo "hello Showdata";
    }


    //middleware 


    public function homepage()
    {
        return view("home");
    }

    public function noaccess()
    {
        return view("noaccess");
    }

    public function user()
    {
        return view("user");
    }
}
