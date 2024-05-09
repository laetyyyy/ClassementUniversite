<nav class="navbar navbar-default probootstrap-navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html" title="Classement des Université:ClassUni">ClassUni</a>
        </div>

        <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{route('acceuil')}}">Acceuil</a></li>
                <li class="{{ Request::is('universite') ? 'active' : '' }}"><a href="{{ route('universite.index') }}">Universites</a></li>
                <li class="{{ Request::is('rankings') ? 'active' : '' }}"><a href="">Classsements</a></li>

                @auth
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-link">Log Out</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li><a href="{{ route('login') }}" class="nav-link">Log in</a></li>
                @if (Route::has('register'))
                <li><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                @endif
                @endauth
            </ul>
        </div>
    </div>
</nav>
