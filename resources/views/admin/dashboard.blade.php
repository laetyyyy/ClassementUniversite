<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tableau de bord de l'administrateur</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css"> <!-- Fichier CSS externe -->
  <style>
    /* Sidebar */
    #sidebar {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 250px;
        background: #464e53;
        color: #ffffff;
        transition: all 0.3s;
    }

    #sidebar .sidebar-header {
        padding: 20px;
        background: #6d7a87;
    }

    #sidebar .sidebar-header h3 {
        color: #ffffff;
        margin-bottom: 0;
    }

    #sidebar ul.components {
        padding: 20px 0;
    }

    #sidebar ul.components li {
        padding: 10px 15px;
        border-bottom: 1px solid #4e565e;
    }

    #sidebar ul.components li a {
        color: #ffffff;
    }

    #sidebar ul.components li a:hover {
        background-color: #495057;
        color: #ffffff;
        text-decoration: none;
    }

    #sidebar ul.components li ul {
        list-style-type: none;
        padding-left: 20px;
    }

    #sidebar ul.components li ul li {
        padding: 10px 0;
    }

    #sidebar ul.components li ul li a {
        color: #ffffff;
    }

    #sidebar ul.components li ul li a:hover {
        background-color: #495057;
        color: #ffffff;
        text-decoration: none;
    }

    .content {
        margin-left: 250px;
        padding: 20px;
    }

  </style>
</head>
<body>

<nav id="sidebar">
    <div class="sidebar-header">
        <h3>Dashboard</h3>
    </div>
    <ul class="list-unstyled components">
        <li>
            <a href="#universiteSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Université</a>
            <ul class="collapse list-unstyled" id="universiteSubmenu">
                <li>
                    <a href="{{route('universite.create')}}">Créer une Université</a>
                </li>
                <li>
                    <a href="{{route('admin.liste')}}">Liste d'université</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#criteresSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Critères</a>
            <ul class="collapse list-unstyled" id="criteresSubmenu">
                <li>
                    <a href="{{route('criteres.create')}}">Créer un critère</a>
                </li>
                <li>
                    <a href="{{route('criteres.index')}}">Liste des critères</a>
                </li>
            </ul>
        </li>
        {{-- <li>
            <a href="#">Autre lien</a>
        </li>
        <li>
            <a href="#">Autre lien</a>
        </li> --}}
    </ul>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <button type="button" id="sidebarCollapse" class="btn btn-dark">
            <i class="fas fa-align-left"></i>
            <span>ClassementUni</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    @auth
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Log Out</button>
                            </form>
                        </div>
                    </li>
                    @else
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Log in</a></li>
                    @if (Route::has('register'))
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                    @endif
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Contenu de la page ici -->
<div class="content">
    <!-- Votre contenu de page ici -->
    @yield('content')
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
