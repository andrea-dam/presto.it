<x-layout>
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <x-header>{{$item_to_check ? 'Annuncio da Revisionare' : 'Nessun annuncio da revisionare'}}</x-header>
    <div class="container min-vh-100"> 
        <div class="row justify-content-center mb-3">
            @if($item_to_undo && $item_to_check)
            <h1>{{$item_to_check->title}}</h1>
            <div class="col-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                    @foreach ($item_to_check->images as $key => $image)
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$key}}" class="@if($loop->first) active @endif" aria-current="true" aria-label="slide {{$key+1}}"></button>
                      @endforeach
                    </div>
                    <div class="carousel-inner">
                      @if($item_to_check->images)
                      @foreach ($item_to_check->images as $image)
                      <div class="carousel-item @if($loop->first) active @endif">
                        <img src="{{$image->getUrl(1200, 900)}}" class="d-block w-100" alt="...">
                      </div>
                      @endforeach
                      @endif
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            <div class="col-6">
                <h2 class="text-start">{{$item_to_check->category->name}}</h2>
                <h2 class="text-start text-danger">{{$item_to_check->price}} €</h2>
                <h5 class="text-start">{{$item_to_check->description}}</h5>
            </div>
            <div class="col-12 col-md-3 col-lg-3">
                <form action="{{route('revisor.reject_item', ['item' => $item_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-danger mt-3 w-100 p-3" type="submit">Rifiuta l'annuncio</button>
                </form>
            </div>
            <div class="col-12 col-md-3 col-lg-3">
                <form action="{{route('revisor.undo-item', ['item' => $item_to_undo])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-warning mt-3 w-100 p-3" type="submit">Annulla ultima modifica</button>
                </form>
            </div>
            <div class="col-12 col-md-3 col-lg-3">
                <form action="{{route('revisor.accept_item', ['item' => $item_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-success mt-3 w-100 p-3" type="submit">Accetta l'annuncio</button>
                </form>
            </div>
            @endif
            @if($item_to_check && !$item_to_undo)
            <h1>{{$item_to_check->title}}</h1>
            <div class="col-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                    @foreach ($item_to_check->images as $key => $image)
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$key}}" class="@if($loop->first) active @endif" aria-current="true" aria-label="slide {{$key+1}}"></button>
                      @endforeach
                    </div>
                    <div class="carousel-inner">
                      @if($item_to_check->images)
                      @foreach ($item_to_check->images as $image)
                      <div class="carousel-item @if($loop->first) active @endif">
                        <img src="{{$image->getUrl(1200, 900)}}" class="d-block w-100" alt="...">
                      </div>
                      @endforeach
                      @endif
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            <div class="col-6">
                <h2 class="text-start">{{$item_to_check->category->name}}</h2>
                <h2 class="text-start text-danger">{{$item_to_check->price}} €</h2>
                <h5 class="text-start">{{$item_to_check->description}}</h5>
            </div>
            <div class="col-12 col-md-3 col-lg-3">
                <form action="{{route('revisor.reject_item', ['item' => $item_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-danger mt-3 w-100 p-3" type="submit">Rifiuta l'annuncio</button>
                </form>
            </div>
            <div class="col-12 col-md-3 col-lg-3">
                <form action="{{route('revisor.accept_item', ['item' => $item_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-success mt-3 w-100 p-3" type="submit">Accetta l'annuncio</button>
                </form>
            </div>
            @endif
            @if($item_to_undo && !$item_to_check)
            <div class="col">
                <form action="{{route('revisor.undo-item', ['item' => $item_to_undo])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-warning mt-3 w-100 p-3" type="submit">Annulla ultima modifica</button>
                </form>
            </div>
            @endif
        </div>
    </div>
</x-layout>