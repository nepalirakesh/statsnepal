<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Posts</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('posts')}}">Posthub</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>




          </div>
        </div>
      </nav>
@if(Session::has('success'))
      <div class="container mt-2 w-50">
        <div class="alert alert-primary" role="alert">
            {{Session::get('success')}}

          </div>
      </div>
@endif
@if(Session::has('delete'))
<div class="container mt-2 w-50">
    <div class="alert alert-danger" role="alert">
        {{Session::get('delete')}}

      </div>
  </div>
  @endif
  @if(Session::has('update'))
<div class="container mt-2 w-50">
    <div class="alert alert-success" role="alert">
        {{Session::get('update')}}

      </div>
  </div>
  @endif



    <div class="container">
      <table class="table container table-bordered w-75 text-center" style="table-layout: fixed" >
        <h3 class="text-center mt-5">Posts</h3>

        <thead class="thead-dark">
          <tr class="text-center">
            <th scope="col" width="5%">ID</th>
            <th scope="col"  width="10%">Title</th>
            <th scope="col"width="60%">Content</th>
            <th scope="col" width="15%" colspan="3"> Manage</th>


          </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr class="text-center">
                <td>{{$post->id}}</td>
                <td>{{Str::limit($post->title,10)}}</td>
                <td>{{Str::limit($post->content,25)}}</td>

                 <td>
                <form action="{{route('show',$post)}}" method ="GET">
                    @csrf
                    <button class="btn btn-primary btn-sm" type="submit"><i class="fa-solid fa-eye"></i></button>
                    </form>
            </td>
                <td>
                    <form action="{{route('edit',$post)}}" method ="GET">
                        @csrf
                        <button class="btn btn-primary btn-sm" type="submit"><i class="fa-solid fa-pen-to-square"></i></button>
                        </form>
                </td>
               <td>
                    <form action="{{route('delete',$post)}}" method="Post">
                        @csrf
                        @method('DELETE')
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




      <script src="https://kit.fontawesome.com/a90819630b.js" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>



