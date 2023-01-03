@extends('postlayout.master')
@section('title','All Posts')

@section('content')

@include('postlayout.crudmessage')




    <div class="container">
      <table class="table container table-bordered w-75 text-center" style="table-layout: fixed" >
        <h3 class="text-center mt-5">Posts</h3>

        <thead class="thead-dark">
          <tr class="text-center">
            <th scope="col" width="5%">ID</th>
            <th scope="col"  width="10%">Title</th>
            <th scope="col"width="60%">Content</th>
            <th scope="col" width="15%"> Manage</th>


          </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr class="text-center">
                <td>{{$post->id}}</td>
                <td>{{Str::limit($post->title,10)}}</td>
                <td>{{Str::limit($post->content,25)}}</td>


                <td>
                    <form action="{{route('delete',$post)}}" class="form-group" method="Post">
                        @csrf
                        @method('DELETE')
                        <a class="btn btn-primary btn-sm" href="{{route('show',$post)}}"><i class="fa-solid fa-eye"></i></a>
                        <a class="btn btn-secondary btn-sm" href="{{route('edit',$post)}}"><i class="fa-solid fa-pen-to-square"></i></a>

                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa-sharp fa-solid fa-trash"></i></button>
                    </form>
                </td>




            </tr>
            @endforeach

        </tbody>
      </table>
      <div class="container text-center w-75">
      <button class="btn btn-primary btn-sm"><a class="nav-link active" aria-current="page"  color="white" href="{{route('create')}}">Create Post</a></button>
    </div>




@endsection



