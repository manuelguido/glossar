@php
    if(!isset($nav_type)){
        $nav_type = 'navbar-dark bg-none';
    }
@endphp
<nav class="navbar navbar-expand-md {{$nav_type}} fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand w600 ls04 text-uppercase" href="{{ url('/') }}">Glossar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto nav-search">
                <form method="GET" action="/search">
                    @csrf
                    <div class="input-group pl-0">
                        <input class="form-control border-none btn-left-rounded pl-3" type="text" name="search_data" placeholder="Search for a glossary">
                        <div class="input-group-append bl-0">
                            <span class="input-group-text btn-right-rounded border-none bg-white1" id="basic-text1"><i class="fas fa-search text-grey"
                                aria-hidden="true"></i></span>
                        </div>
                    </div>
                </form>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu pt-2 pb-0 dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item black3 w500" href="{{ route('profile') }}">
                                <i class="fas fa-user black5 mr-3"></i>
                                Profile
                            </a>
                            <a class="dropdown-item black3 w500" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt black5 mr-3"></i>
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="display-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>