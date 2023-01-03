

@extends('postlayout.master')
@section('title','Show Post')
@section('content')
      <div class="container w-50 mt-5 border border-dark">
          <h5>{{$post->title}}</h5>
          <hr>
          <p>{{$post->content}}</p>
        </div>

<div class="container w-50 mt-2">
    <form action="{{route('delete',$post)}}" method="POST">
        @csrf
        @method('DELETE')


        <a href="{{route('posts')}}" class="btn btn-primary btn-sm">Home</a>
      <a href="{{route('edit',$post)}}" class="btn btn-secondary btn-sm">Edit</a>
     <a class="btn btn-danger btn-sm" type="submit">Delete</a>

</form>
</div>
@endsection












