<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('posts')}}">Posthub</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="navbar-nav ms-auto">
        <!-- Authentication Links -->
        @guest
            @if (Route::has('show_login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{route('show_login')}}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('show_registration'))
                <li class="nav-item">
                    <a class="nav-link" href="{{route('show_registration')}}">{{ __('Register') }}</a>
                </li>
            @endif
        @else

                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>


                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('custom_logout') }}">Logout</a>
                    </li>



        @endguest
    </ul>




      </div>
    </div>
  </nav>
