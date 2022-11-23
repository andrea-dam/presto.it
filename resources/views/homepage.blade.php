<x-layout>
    <div class="sfondo text-center container-fluid align-items-center d-flex justify-content-center">
        <div class="row">
            <div class="col">
                <h1 id="title" class="">Presto.it</h1>
            </div>
        </div>
    </div>
    
    <main class="container text-center mb-5">
        <div class="row justify-content-center">
            <h2 class="mb-5 display-3">Gli Ultimi Annunci Inseriti</h2>
            @if (count($items) > 0)
            @foreach ($items as $item)
            <div class="col-12 col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{$item->title}}</h3>
                        <h5 class="card-title">{{$item->category->name}}</h5>
                        <p class="card-text">Descrizione: {{$item->description}}</p>
                        <p class="card-text">Prezzo: {{$item->price}}€</p>
                        <button href="#" class="btn btn-primary">Dettaglio</button>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </main>
</x-layout>