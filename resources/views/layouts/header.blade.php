<div class="container">
    <div class="row justify-content-center pt-4 pb-2 mb-2" >
        <img src="{{asset("storage/LOA.png")}}" height="100px" alt="icon">
    </div>
    <div class="row justify-content-center pb-2">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link text-dark mx-1" href="{{ url('/') }}">Home</a>
            </li>
            <li>
                <a class="nav-link text-dark mx-1" href="{{ url('catalog') }}">Catalog</a>
            </li>
            <!-- Authentication Links -->
            @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="btn btn-primary mx-1" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="btn btn-light mx-1" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li>
        @endguest
        </ul>
    </div>
</div>