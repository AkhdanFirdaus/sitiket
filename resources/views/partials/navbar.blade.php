<!-- <nav class="navbar navbar-expanded-lg navbar-light bg-light">
<div class="container">
    <a href="{{route('welcome')}}" class="navbar-brand">siTiket</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarSupportedContent" aria-control="navbarSupportedContent" aria-expanded="false" aria-label="Toggle Navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    @if (Auth::guest())
        <a href="{{ route('login') }}" class="nav-link">Login</a>
        <a href="{{ route('register') }}" class="nav-link">Register</a>        
    @else
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="" class="nav-link">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu">
                    <a href="{{ route('logout') }}" class="dropdown-list" 
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li>
        </ul>
    </div>
    @endif
</div>
</nav>
 -->

 <nav class="navbar navbar-expanded-lg navbar-light">
     <div class="container">
        <a href="{{ route('welcome') }}" class="nav-link navbar-brand">G<span style="font-size: 2em;">O</span>W Ticketing</a>
         <ul class="navbar-nav">
            @if(Auth::guest())
             <li class="nav-item">
                 <a href="{{ route('login') }}" class="nav-link">Login</a>
             </li>
             @else
             <li class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu">
                    <a href="{{ route('logout') }}" class="dropdown-list" 
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
 </nav>