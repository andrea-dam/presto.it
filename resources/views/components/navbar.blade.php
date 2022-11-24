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
                @endauth
                <li class="nav-item">
                    <a class="nav-link" href="{{route('item.index')}}">Tutti gli Annunci</a>
                </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
                @if (Auth::user()->is_revisor)
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Area Revisore</a>
                </li>
                @endif
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Accedi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">Registrati</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="">Benvenuto, {{Auth::user()->name}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" onclick="event.preventDefault(); document.querySelector('#logout-form').submit();">Logout</a>
                    <form action="{{route('logout')}}" class="d-none" id="logout-form" method="POST">@csrf</form>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>