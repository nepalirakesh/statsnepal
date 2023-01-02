<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){

      $posts=Post::all();

    return view('post.index',compact("posts"));

    }


    public function create(){
        return view('post.create');
    }

    public function store(Request $request){

        $request->validate([
                'title'=>'required',
                'content'=>'required',
        ]);




        Post::create($request->all());
        return redirect()->route('posts');


    }


    public function delete(Post $post){



        $post->delete();
       return redirect()->route('posts')->with('post deleted successfully');




    }

}
