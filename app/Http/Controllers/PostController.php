<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
         return view('posts/index');
         //viewの引数にはviewファイルのパス名を書く
    }
}
