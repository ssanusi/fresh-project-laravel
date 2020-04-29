<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function show($slug)
    {
//        $posts = [
//            'my-first-post' => 'Hello My First Post',
//            'my-second-post' => 'Hello My Second Post'
//        ];
//        $post = DB::table('posts')->where('slug', $slug)->first();

        $post = Post::where('slug', $slug)->firstOrFail();

//        if(!$post){
//            abort(404);
//        }

        return view('post', ['post' => $post]);
    }
}
