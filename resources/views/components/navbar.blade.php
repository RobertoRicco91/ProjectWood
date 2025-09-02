<!-- inizio navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <!-- icona navbar -->
    <a class="navbar-brand" href="{{route('homepage')}}">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- sezione Authorized -->
        @auth
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('index.article')}}">Tutti gli articoli</a>
        </li>
        <!-- dropdown categories -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach ($categories as $category)
              <li><a class="dropdown-item categoryStyle" href="{{route('byCategory', ['category' => $category])}}">{{$category->name}}</a></li>
              @if (!$loop->last)
              <hr class="dropdown-divider">
              @endif
            @endforeach
          </ul>
        </li>
        <!-- dropdown authorized -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao, {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item bg-danger rounded fw-semibold" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
            </li>
            <form action="{{route('logout')}}" method="POST" id="form-logout">@csrf</form>
            @if (Auth::user()->is_revisor)
              <li >
                <a class="dropdown-item position-relative" href="{{route('revisor.index')}}">Dashboard
                <span class="position-absolute translate-middle badge rounded-pill bg-danger notificaRevisor">{{\App\Models\Article::toBeRevisedCount()}}</span>
                </a>
              </li>
            @endif
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="{{route('create.article')}}">Crea articolo</a></li>
          </ul>
        </li>
        @endauth
        <!-- fine sezione Authorized -->
        <!-- sezione Guest -->
        @guest
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Accedi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Registrati</a>
        </li>
        <!-- dropdown categories -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach ($categories as $category)
              <li><a class="dropdown-item categoryStyle" href="{{route('byCategory', ['category' => $category])}}">{{$category->name}}</a></li>
              @if (!$loop->last)
              <hr class="dropdown-divider">
              @endif
            @endforeach
          </ul>
        </li>
      </ul>
      @endguest
      <!-- fine sezione Guest -->
    </div>
    <form class="d-flex" role="search" action="{{route('article.search')}}" method="GET">
      <input class="form-control me-2" type="search" placeholder="Cerca" aria-label="Search" name="query">
      <button class="btnSearch" type="submit">Cerca</button>
    </form>
  </div>
</nav>
<!-- fine navbar -->
