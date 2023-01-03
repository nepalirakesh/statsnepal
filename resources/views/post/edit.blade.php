@extends('postlayout.master')
@section('title','Edit Post')
@section('content')


<form action="{{route('update',$post)}}" class="container w-50" method="POST">

        <h3 class="text-center mt-5">Edit Post</h3>

        <div class="form-group" >

            <label for="title">Title</label>
            <input type="text" class="form-control" id="title"  value ="{{$post->title}}" name="title">

        </div>

        <span style="color:red">@error('title'){{$message}}@enderror</span>

        <div class="form-group">
            <label for="textarea">Content</label>
            <textarea class="form-control" id="textarea"  rows="3" name="content">{{$post->content}}</textarea>
          </div>

          <span style="color:red">@error('content'){{$message}}@enderror</span>

          @csrf
          @method('PUT')
          <div class="container">
            <button type="submit" class="btn btn-primary btn-sm">Edit</i></button>

          </div>

      </form>

@endsection
