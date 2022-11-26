<x-layout>
    
    <x-header>Tutti gli Annunci</x-header>
    
    <main class="container my-5">
        <div class="row justify-content-center">
            @forelse ($items as $item)
            <div class="col-12 col-md-12 col-lg-3">
                {{-- <div class=" my-2 text-dark item p-0"> --}}
                    {{-- <img src="https://picsum.photos/3000/3500" class="m-0 img-fluid w-100" alt="...">
                    <div class="item-info">
                        <h3 class="card-title text-start">{{$item->title}}</h3>
                        <h5 class="card-title text-start">{{$item->category->name}}</h5>
                        <p class="col-8 card-text text-start  text-truncate">{{$item->description}}</p>
                        <p class="card-text fs-3">{{$item->price}}€</p>
                    </div> --}}
                    {{-- <div class="card-body w-30px">
                        <h3 class="card-title text-start">{{$item->title}}</h3>
                        <h5 class="card-title text-start">{{$item->category->name}}</h5>
                        <p class="col-8 card-text text-start  text-truncate">{{$item->description}}</p>
                        <p class="card-text fs-3">{{$item->price}}€</p>
                    </div> --}}
                    {{-- <div class="d-flex justify-content-center">
                        <a href="{{route('item.show', compact('item'))}}" class="btn detail-button border-0 text-white  mb-4">Scopri di più</a>
                    </div> --}}
                    <a href="{{route('item.show', compact('item'))}}" class="text-white text-decoration-none mb-4">
                        <div class="card sfondo-categorie my-2 border-0 shadow rounded text-center item">
                            <img src="https://picsum.photos/2000/1500" class="card-img" alt="...">
                            <div class="card-body">
                                <div class="p-3">
                                <h5 class="card-title text-center">{{$item->title}}</h5>
                                    <h3 class="card-text">{{$item->price}}€</h3>
                                </div>
                            </div>
                        </div> --}}
                        <div class="card text-bg-dark">
                            <img src="https://picsum.photos/2000/1500" class="card-img" alt="...">
                            <div class="card-img-overlay">
                              <h5 class="card-title">{{$item->title}}</h5>
                              <p class="card-text">{{$item->price}}€</p>
                              <p class="card-text"><small>{{$item->created_at}}</small></p>
                            </div>
                          </div>
                    </a>
                    {{-- </div>  --}}
                </div>
                @empty
                <div class="col-12">
                    <div class="alert alert-warning">
                        <p>Non ci sono Annunci.</p>
                    </div>
                </div>
                @endforelse
            </div>
        </main>
        
    </x-layout>