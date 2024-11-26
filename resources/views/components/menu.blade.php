<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #dedede !important;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="{{asset('images/maxresdefault.jpg')}}" alt="logo" width="100"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            NOTÍCIAS
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('news.index')}}">Exibir</a></li>
            <li><a class="dropdown-item" href="{{route('news.create')}}">Cadastrar</a></li>
            <li><a class="dropdown-item" href="{{route('news.categories.index')}}">Categorias</a></li>
          </ul>
        </li>
      </ul>
      <form class="position-relative" role="search">
        <input class="form-control me-2" type="search" aria-label="Search" style="max-width: 14vw !important;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search position-absolute" viewBox="0 0 16 16" style="left: 160px; top: 50%; transform: translateY(-50%);">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
        </svg>
        {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
      </form>
    </div>
  </div>
</nav>