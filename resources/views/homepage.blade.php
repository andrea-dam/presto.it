<x-layout>
    @if (session('revisor-denied'))
    <div class="alert m-0 alert-danger">
        {{ session('revisor-denied') }}
    </div>
    @endif
    <div class="sfondo text-center container-fluid align-items-center d-flex justify-content-center min-vh-100">
        <div class="row">
            <div class="col">
                <h1 id="homepage-title" class="">Presto.it</h1>
            </div>
        </div>
    </div>
    
    {{-- Sezione Categorie --}}
    <section class="container text-center my-5">
        <h2 class="display-3 mb-5">Tutte le Categorie</h2>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5 justify-content-center">
            <div class="col mb-4">
                <div class=" rounded d-flex justify-content-center bg-due h-100 p-3 pt-0">
                    <a class="text-decoration-none" href="{{route('category.index', ['id' => 1])}}">
                        <span class="fa-stack fa-3x top-0 start-50 translate-middle " style="vertical-align: top;">
                            <i class="icon fa-solid fa-circle fa-stack-2x"></i>
                            <i class="icon2 fa-solid fa-shirt fa-stack-1x fa-inverse"></i>
                        </span>
                        <div>
                            <h4 class="text-light text-center">Abbigliamento</h4>
                        </div>
                    </a>    
                </div>
            </div>
            
            <div class="col mb-4">
                <div class=" rounded d-flex justify-content-center bg-due h-100 p-3 pt-0">
                    <a class="text-decoration-none" href="{{route('category.index', ['id' => 2])}}">
                        <span class="fa-stack fa-3x top-0 start-50 translate-middle" style="vertical-align: top;">
                            <i class="icon fa-solid fa-circle fa-stack-2x"></i>
                            <i class="icon2 fa-solid fa-couch fa-stack-1x fa-inverse"></i>
                        </span>
                        <div>
                            <h4 class="text-light text-center">Arredamento</h4>
                        </div>
                    </a>
                </div>
            </div>
           
            <div class="col mb-4">
                <div class="rounded d-flex justify-content-center bg-due h-100 p-3 pt-0">
                    <a class="text-decoration-none" href="{{route('category.index', ['id' => 3])}}">
                        <span class="fa-stack fa-3x top-0 start-50 translate-middle " style="vertical-align: top;">
                            <i class="icon fa-solid fa-circle fa-stack-2x"></i>
                            <i class="icon2 fa-solid fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <div>
                            <h4 class="text-light text-center">Elettronica</h4>
                        </div>
                    </a>
                </div>
            </div>
         
            <div class="col mb-4">
                <div class=" rounded d-flex justify-content-center bg-due h-100 p-3 pt-0">
                    <a class="text-decoration-none" href="{{route('category.index', ['id' => 4])}}">
                        <span class="fa-stack fa-3x top-0 start-50 translate-middle " style="vertical-align: top;">
                            <i class="icon fa-solid fa-circle fa-stack-2x"></i>
                            <i class="icon2 fa-solid fa-film fa-stack-1x fa-inverse"></i>
                        </span>
                        <div>
                            <h4 class="text-light text-center">Film</h4>
                        </div>
                    </a>
                </div>
            </div>
          
            
            <div class="col mb-4">
                <div class=" rounded d-flex justify-content-center bg-due h-100 p-3 pt-0">
                    <a class="text-decoration-none" href="{{route('category.index', ['id' => 5])}}">
                        <span class="fa-stack fa-3x top-0 start-50 translate-middle " style="vertical-align: top;">
                            <i class="icon fa-solid fa-circle fa-stack-2x"></i>
                            <i class="icon2 fa-solid fa-dumbbell fa-stack-1x fa-inverse"></i>
                        </span>
                        <div>
                            <h4 class="text-light text-center">Fitness</h4>
                        </div>
                    </a>
                </div>
            </div>
           
            <div class="col mb-4">
                <div class=" rounded d-flex justify-content-center bg-due h-100 p-3 pt-0">
                    <a class="text-decoration-none" href="{{route('category.index', ['id' => 6])}}">
                        <span class="fa-stack fa-3x top-0 start-50 translate-middle " style="vertical-align: top;">
                            <i class="icon fa-solid fa-circle fa-stack-2x"></i>
                            <i class="icon2 fa-solid fa-tree fa-stack-1x fa-inverse"></i>
                        </span>
                        <div>
                            <h4 class="text-light text-center">Giardinaggio</h4>
                        </div>
                    </a>
                </div>
            </div>
        
            <div class="col mb-4">
                <div class=" rounded d-flex justify-content-center bg-due h-100 p-3 pt-0">
                    <a class="text-decoration-none" href="{{route('category.index', ['id' => 7])}}">
                        <span class="fa-stack fa-3x top-0 start-50 translate-middle " style="vertical-align: top;">
                            <i class="icon fa-solid fa-circle fa-stack-2x"></i>
                            <i class="icon2 fa-solid fa-gamepad fa-stack-1x fa-inverse"></i>
                        </span>
                        <div>
                            <h4 class="text-light text-center">Giochi</h4>
                        </div>
                    </a>
                </div>
            </div>
           
            
            <div class="col mb-4">
                <div class=" rounded d-flex justify-content-center bg-due h-100 p-3 pt-0">
                    <a class="text-decoration-none" href="{{route('category.index', ['id' => 8])}}">
                        <span class="fa-stack fa-3x top-0 start-50 translate-middle " style="vertical-align: top;">
                            <i class="icon fa-solid fa-circle fa-stack-2x"></i>
                            <i class="icon2 fa-solid fa-book-open fa-stack-1x fa-inverse"></i>
                        </span>
                        <div>
                            <h4 class="text-light text-center">Libri</h4>
                        </div>
                    </a>
                </div>
            </div>
           
            
            <div class="col mb-4">
                <div class=" rounded d-flex justify-content-center bg-due h-100 p-3 pt-0">
                    <a class="text-decoration-none" href="{{route('category.index', ['id' => 9])}}">
                        <span class="fa-stack fa-3x top-0 start-50 translate-middle " style="vertical-align: top;">
                            <i class="icon fa-solid fa-circle fa-stack-2x"></i>
                            <i class="icon2 fa-solid fa-car fa-stack-1x fa-inverse"></i>
                        </span>
                        <div>
                            <h4 class="text-light text-center">Motori</h4>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="col mb-4">
                <div class=" rounded d-flex justify-content-center bg-due h-100 p-3 pt-0">
                    <a class="text-decoration-none" href="{{route('category.index', ['id' => 10])}}">
                        <span class="fa-stack fa-3x top-0 start-50 translate-middle " style="vertical-align: top;">
                            <i class="icon fa-solid fa-circle fa-stack-2x"></i>
                            <i class="icon2 fa-solid fa-music fa-stack-1x fa-inverse"></i>
                        </span>
                        <div>
                            <h4 class="text-light text-center">Musica</h4>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </section>
    
    {{-- Sezione annunci --}}
    <main class="container-fluid text-center mb-5">
        <div class="row bg-due p-4 justify-content-center">
            <h2 class="col-12 fs-3 text-light text-start">Ultimi Articoli</h2>
            @if (count($items) > 0)
            @foreach ($items as $item)
            <div class="col border-0">
                <div id="card" class="card my-2 text-dark" style="min-height: 450px">
                    <img src="https://picsum.photos/2000/2000" class="card-img-top" alt="...">
                    <div class="card-body bg-due">
                        <h3 class="card-title text-light text-start fs-5">{{$item->title}}</h3>
                        <h5 class="card-title text-light text-start fs-5">{{$item->category->name}}</h5>
                        {{-- <p class="col-8 card-text text-start  text-truncate">{{$item->description}}</p> --}}
                        <p class="card-text text-light text-start fs-3">{{$item->price}}€</p>
                    </div>
                    <div class="d-flex justify-content-center bg-due">
                        <a href="{{route('item.show', compact('item'))}}" class="btn detail-button border-0 text-white  mb-4">Scopri di più</a>
                    </div>
                </div> 
            </div>
            @endforeach
            @endif
        </div>
    </main>   
</x-layout>