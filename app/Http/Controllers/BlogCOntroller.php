<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class BlogCOntroller extends Controller
{
    //
    public function getSingle($slug){
        $post = Post::where('slug','=',$slug)->first();
        return view('blog.single',['post'=>$post]);
    }
    public function getIndex(){
         $post = Post::orderBy('id','desc')->get();
         return view('blog.index',['post'=>$post]);
    }
}
