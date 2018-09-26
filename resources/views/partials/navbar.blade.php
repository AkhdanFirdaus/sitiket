<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">                
        <!-- Branding Image -->
        <a class="navbar-brand nav-link" href="{{ url('/') }}">
            {{ config('app.name', 'siTiket') }}
        </a>

        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>                    

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="nav-item">
                        <img src="/img/avatar/{{Auth::user()->avatar}}" alt="" class="img-fluid rounded-circle" width="38px">
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="navdropdown">
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navdropdown">
                            <a href="{{route('editProfile', Auth::user()->id)}}" class="dropdown-item">Profile</a>
                            <a href="{{route('dashboard')}}" class="dropdown-item">Dashboard</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>