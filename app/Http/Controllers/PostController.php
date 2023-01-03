<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostFormRequest;
// use App\Http\Requests;

class PostController extends Controller
{
    public function index(){

     $posts=Post::all();

    return view('post.index',compact("posts"));

    }


    public function create(){
        return view('post.create');
    }

    public function store(PostFormRequest $request){


        $validate=$request->validated();
        Post::create($request->all());
        return redirect()->route('posts')->with('success','post created successfully');


    }


    public function delete(Post $post){

        $post->delete();
       return redirect()->route('posts')->with('delete','post deleted successfully');
    }




    public function edit(Post $post){

        return view('post.edit',compact("post"));
    }




    public function update(PostFormRequest $request, Post $post,){

        $validate=$request->validated();
        $post->update($request->all());
        return redirect()->route('posts')->with('update','post updated successfully');




    }

    public function show(Post $post){
        return view('post.show',compact('post'));
    }

}


