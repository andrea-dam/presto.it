<x-layout>
    
    <x-header>{{$item_to_check ? 'Annuncio da Revisionare' : 'Nessun annuncio da revisionare'}}</x-header>
    @if ($item_to_check)
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/2000/2000" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/2000/2000" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/2000/2000" class="d-block w-100" alt="...">
                        </div>
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
                <h1 class="text-center">categoria</h1>
                <p class="text-center">{{$item_to_check->category->name}}</p>
                <h1 class="text-center">descrizione prodotto</h1>
                <p class="text-center">{{$item_to_check->description}}</p>
                <h1 class="text-center">prezzo</h1>
                <p class="text-center">{{$item_to_check->price}} €</p>
            </div>
            <div class="col-6">
                <form action="{{route('revisor.accept_item', ['item' => $item_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-dark mt-3 w-100 p-3" type="submit">Accetta l'annuncio</button>
                </form>
            </div>
            <div class="col-6">
                <form action="{{route('revisor.reject_item', ['item' => $item_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-dark mt-3 w-100 p-3" type="submit">Rifiuta l'annuncio</button>
                </form>
            </div>
        </div>
    </div>
    @endif
</x-layout>