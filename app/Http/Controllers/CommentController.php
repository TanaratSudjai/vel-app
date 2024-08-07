<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function getComment(){
        $commentlist = DB::table('comment')->get();

        return view('comment', compact('commentlist'));
    }
}
   