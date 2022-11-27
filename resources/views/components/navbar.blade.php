<nav class="navbar shadow navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a id="logo-navbar" class="navbar-brand" href="{{route('homepage')}}">Presto.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{route('item.create')}}">Inserisci un Annuncio</a>
                </li>
                @if (Auth::user()->is_revisor)
                <li class="nav-item">
                    <a class="nav-link" href="{{route('revisor.index')}}">Area Revisore
                        <span class="badge p-1 position-absolute translate-middle bg-danger rounded-circle">{{App\Models\Item::toBeRevisionedCount()}}</span>
                    </a>
                </li>
                @endif
                @endauth
                <li class="nav-item">
                    <a class="nav-link" href="{{route('item.index')}}">Tutti gli Annunci</a>
                </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0 me-3">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Accedi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">Registrati</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="">Benvenutə, {{Auth::user()->name}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" onclick="event.preventDefault(); document.querySelector('#logout-form').submit();">Logout</a>
                    <form action="{{route('logout')}}" class="d-none" id="logout-form" method="POST">@csrf</form>
                </li>
                @endguest
            </ul>
            <form action="{{route('items.search')}}" method="GET" class="d-flex" role="search">
                <input class="form-control me-3" name="searched" type="search" placeholder="Cerca fra gli annunci" aria-label="Search">
                <button id="btn-search" class="btn btn-outline-light rounded-circle me-3" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</nav>