<?php

namespace App\Http\Controllers;

use App\Models\Post;
// use Illuminate\Support\Facades\DB;

class PostController
{
    // controladores invocables, son para una sola acción
    // public function __invoke() 
    public function index()
    {
        // $posts = DB::table('posts')->get();
        $posts = Post::get();

        return view('blog', ['posts' => $posts]);
    }

    /* public function show($id)
    {
        // return Post::find($id);
        // devuelve 404 si no hay recurso
        return Post::findOrFail($id);
    } */

    /*  public function show(Post $id)
    {
        return $id;
    } */

    public function show(Post $id)
    {
        return view('posts.show', ['post' => $id]);
    }
}
