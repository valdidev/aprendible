<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController
{
    // controladores invocables, son para una sola acción
    // public function __invoke() 
    public function index() 
    {
        $posts = DB::table('posts')->get();

        return view('blog', ['posts' => $posts]);

    }

}