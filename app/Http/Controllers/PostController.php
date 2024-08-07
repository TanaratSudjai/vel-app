<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    public function getPost(){
        $postlist = DB::table('post')->get();

        return view('post', compact('postlist'));
    }

    public function getPostById($id){
        $post = DB::table('post')->where('id', $id)->first();

        return view('post', compact('post'));
    }

    public function InsertPost(Request $request){

        $title = $request->input('title');
        $body = $request->input('body');

        $newpost = DB::table('post')->insertGetId([
            'title' => $title,
            'body' => $body,
        ]);

        return redirect()->route('showDataPost');

    }
}
