<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index() {

        $posts=DB::table('posts')->get();

         return view('posts/index',compact('posts'));
         //viewの引数にはviewファイルのパス名を書く
    }
}
