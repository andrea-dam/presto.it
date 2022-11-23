<x-layout>
    
    <x-header>Tutti gli Annunci</x-header>
    
    <main class="container">
        <div class="row justify-content-center">
            @foreach ($items as $item)
            <div class="col-12 col-md-3">
                <div class="card">
                    <div class="card-body" >
                        <h3 class="card-title">{{$item->title}}</h3>
                        <h5 class="card-title">{{$item->category->name}}</h5>
                        <p class="card-text">Descrizione: {{$item->description}}</p>
                        <p class="card-text">Prezzo: {{$item->price}}€</p>
                        <button href="#" class="btn btn-primary">Dettaglio</button>
                    </div>
                </div> 
            </div>
            @endforeach
        </div>
    </main>
    
</x-layout>