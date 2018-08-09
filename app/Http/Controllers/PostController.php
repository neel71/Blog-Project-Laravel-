<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Post;
use Session;
class PostController extends Controller
{
    //
    
    public function Index(){
    //     $posts = Post::orderBy('id','desc')->simplePaginate(5);
         $posts = Post::orderBy('id','desc')->get();
         //dd($posts->all());
         return view('posts.index')->withPosts($posts); 
    }
    public function Create(){
        return view('posts.create');
    }
    public function Store(Request $request){
        $this->validate($request,[
            'title' => 'required|max:255',
            'body' => 'required',      
            'slug' => 'required|alpha_dash|max:255|min:5|unique:posts,slug'        
        ]);
//        dd($request->all());
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = $request->slug;
        $post->save();
        Session::flash('success','The Blog Post Saved susccessfully');
        return view('posts.index',['posts'=>$post]);
        
    }
    public function Show($id){
        $post =Post::find($id);
        return view('posts.show',['posts'=>$post]);
    }
    public function Edit($id){
       $post = Post::find($id);
        return view('posts.edit',['posts'=>$post]);
    }
     public function update(Request $request)
    {
        
        $this->validate($request,[
            'title' => 'required|max:255',
            'body' => 'required',
            'slug' => 'required|alpha_dash|max:255|min:5' 
        ]);
 //       dd($request->all());
        $posts = Post::find($request->postId);
        $posts->title = $request->title;
        $posts->body = $request->body;
        $posts->slug = $request->slug;
        $posts->save();
        Session::flash('success','The Blog Post Updated susccessfully');
       // return redirect()->route('posts.show',$post->id);
        //return view('posts.show',['posts'=>$posts]);
        return redirect('posts/show',['posts'=>$posts]);
    }
    public function Delete($id){
        $post = Post::find($id);
        $post->delete();
        Session::flash('success','The Blog Post Deleted susccessfully');
         return redirect('posts/');
    }
}
