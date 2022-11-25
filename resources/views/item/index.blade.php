<x-layout>
    
    <x-header>Tutti gli Annunci</x-header>
    
    <main class="container my-5">
        <div class="row justify-content-center">
            @foreach ($items as $item)
            <div class="col-12 col-md-12 col-lg-3 border-0">
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
                    <div class="card text-bg-dark my-2 border border-none shadow">
                        <img src="https://picsum.photos/3000/3500" class="card-img" alt="...">
                        <div class="item p-0 rounded">
                            <div class="item-info">
                                <h3 class="card-title text-center">{{$item->title}}</h3>
                                <div class="mt-2 d-flex justify-content-center">
                                    <a href="{{route('item.show', compact('item'))}}" class="btn detail-button border-0 text-white  mb-4">Scopri di più</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- </div>  --}}
                </div>
                @endforeach
            </div>
        </main>
        
    </x-layout>