{{-- <span style="text:red">@error('title'){{$message}}
    @enderror</span>
<span style="text:red">@error('title'){{$message}}
        @enderror</span> --}}


{{-- @if(@error('title'))
   <span style="text:red"> {{$message}}</span>
@endif

@if(@error('content'))
<span style="text:red">{{$message}}</span>
@endif --}}

@if($errors->has('title'))
<span style="color:red">@error('title'){{$message}}@enderror</span>
@endif


@if($errors->has('content'))
<span style="color:red">@error('content'){{$message}}@enderror</span>

@endif
