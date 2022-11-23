<x-layout>

    <x-header>{{$category->name}}</x-header>
    
    <main class="container">
        <div class="row justify-content-center">
            @foreach ($category->items as $item)
            <div class="col-12 col-md-3">
                <div class="card my-2" style="min-height: 450px">
                    <img src="https://picsum.photos/4000/2000" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">{{$item->title}}</h3>
                        <h5 class="card-title">{{$item->category->name}}</h5>
                        <p class="card-text">Descrizione: {{$item->description}}</p>
                        <p class="card-text">Prezzo: {{$item->price}}€</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="{{route('item.show', compact('item'))}}" class="btn btn-primary mb-4">Dettaglio</a>
                    </div>
                </div> 
            </div>
            @endforeach
        </div>
    </main>





</x-layout>