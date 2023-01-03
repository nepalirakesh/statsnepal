@extends('postlayout.master')
@section('title','Create Post')

@section('content')
<h3 class="text-center mt-5">Create post</h3>
      <form class="container w-50" action="{{route('store')}}" method="POST">
        @csrf
        <div class="form-group" >

            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="title" name="title">
          </div>
          <span style="color: red">@error('title'){{$message}} @enderror</span>




        <div class="form-group">
            <label for="exampleFormControlTextarea1">Content</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="enter you post" rows="3" name="content"></textarea>
          </div>
          <span style="color: red">@error('content'){{$message}} @enderror</span>

          <div class="container">
            <button type="submit" class="btn btn-primary">Submit</button>

          </div>
      </form>

@endsection
