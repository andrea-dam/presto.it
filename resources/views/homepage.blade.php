<x-layout>
    <div class="sfondo text-center container-fluid align-items-center d-flex justify-content-center">
        <div class="row">
            <div class="col">
                <h1 id="homepage-title" class="">Presto.it</h1>
            </div>
        </div>
    </div>
    
    <main class="container text-center mb-5">
        <h2 class="mb-5 display-3">Gli Ultimi Annunci Inseriti</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 justify-content-center">
            @if (count($items) > 0)
            @foreach ($items as $item)
            <div class="col">
                <div class="card my-2 bg-due text-light" style="min-height: 450px">
                    <img src="https://picsum.photos/4000/2000" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">{{$item->title}}</h3>
                        <h5 class="card-title">{{$item->category->name}}</h5>
                        <p class="card-text">Descrizione: {{$item->description}}</p>
                        <p class="card-text">Prezzo: {{$item->price}}€</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="{{route('item.show', compact('item'))}}" class="btn border-0 btn-outline-light mb-4">Dettaglio</a>
                    </div>
                </div> 
            </div>
            @endforeach
            @endif
        </div>
    </main>
    <section class="container text-center my-5">
        <h2 class="display-3 mb-5">Tutte le Categorie</h2>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5 justify-content-center">
            <div class="col mb-3">
                <a class="text-decoration-none" href="{{route('category.index', ['id' => 1])}}">
                    <div class="card border-0 category-icons shadow">
                        <i class="fa-solid fa-shirt fa-3x card-img-top p-4"></i>
                        <div class="card-body">
                            <h4 class="card-title text-center">Abbigliamento</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col mb-3">
                <a class="text-decoration-none" href="{{route('category.index', ['id' => 2])}}">
                    <div class="card border-0 category-icons">
                        <i class="fa-solid fa-couch fa-3x card-img-top p-4"></i>
                        <div class="card-body">
                            <h4 class="card-title text-center">Arredamento</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col mb-3">
                <a class="text-decoration-none" href="{{route('category.index', ['id' => 3])}}">
                    <div class="card border-0 category-icons">
                        <i class="fa-solid fa-laptop fa-3x card-img-top p-4"></i>
                        <div class="card-body">
                            <h4 class="card-title text-center">Elettronica</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col mb-3">
                <a class="text-decoration-none" href="{{route('category.index', ['id' => 4])}}">
                    <div class="card border-0 category-icons">
                        <i class="fa-solid fa-film fa-3x card-img-top p-4"></i>
                        <div class="card-body">
                            <h4 class="card-title text-center">Film</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col mb-3">
                <a class="text-decoration-none" href="{{route('category.index', ['id' => 5])}}">
                    <div class="card border-0 category-icons">
                        <i class="fa-solid fa-dumbbell fa-3x card-img-top p-4"></i>
                        <div class="card-body">
                            <h4 class="card-title text-center">Fitness</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col mb-3">
                <a class="text-decoration-none" href="{{route('category.index', ['id' => 6])}}">
                    <div class="card border-0 category-icons">
                        <i class="fa-solid fa-tree fa-3x card-img-top p-4"></i>
                        <div class="card-body">
                            <h4 class="card-title text-center">Giardinaggio</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col mb-3">
                <a class="text-decoration-none" href="{{route('category.index', ['id' => 7])}}">
                    <div class="card border-0 category-icons">
                        <i class="fa-solid fa-gamepad fa-3x card-img-top p-4"></i>
                        <div class="card-body">
                            <h4 class="card-title text-center">Giochi</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col mb-3">
                <a class="text-decoration-none" href="{{route('category.index', ['id' => 8])}}">
                    <div class="card border-0 category-icons">
                        <i class="fa-solid fa-book-open fa-3x card-img-top p-4"></i>
                        <div class="card-body">
                            <h4 class="card-title text-center">Libri</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col mb-3">
                <a class="text-decoration-none" href="{{route('category.index', ['id' => 9])}}">
                    <div class="card border-0 category-icons">
                        <i class="fa-solid fa-car fa-3x card-img-top p-4"></i>
                        <div class="card-body">
                            <h4 class="card-title text-center">Motori</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col mb-3">
                <a class="text-decoration-none" href="{{route('category.index', ['id' => 10])}}">
                    <div class="card border-0 category-icons">
                        <i class="fa-solid fa-music fa-3x card-img-top p-4"></i>
                        <div class="card-body">
                            <h4 class="card-title text-center">Musica</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
</x-layout>