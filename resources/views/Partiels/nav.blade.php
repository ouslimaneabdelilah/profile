<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href={{route('HomePage')}}>Accueil</a>
        </li>
        @guest
        <li class="nav-item">
          <a class="nav-link" href={{route('login.show')}}>Se Connecte</a>
        </li>
        @endguest
        <li class="nav-item">
          <a class="nav-link" href={{route('profiles.index')}}>Tout Profiles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{route('profiles.create')}}>Ajoute Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{route('settings.index')}}>Mes informations</a>
        </li>
        @auth
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{auth()->user()->email}}
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('logaut')}}">Déconnexion</a></li>
          </ul>
        </div>
      @endauth
      </ul>
    </div>
  </nav>
