<x-layout>
    @if (session('revisor-denied'))
    <div class="alert m-0 alert-danger">
        {{ session('revisor-denied') }}
    </div>
    @endif
    <div class="sfondo text-center container-fluid align-items-center d-flex justify-content-center">
        <div class="row">
            <div class="col">
                <h1 id="homepage-title" class="">Presto.it</h1>
                <h2 id="homepage-subtitle">{{__('ui.slogan')}}</h2>
            </div>
        </div>
    </div>
    
    {{-- Sezione Categorie --}}
    <section class="container text-center my-5">
        <h2 id="tutte-le-categorie" class="">{{__('ui.allCategories')}}</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 justify-content-center">
            <div class="col distanza-categorie anim-cat">
                <a class="text-decoration-none" href="{{route('category.index', ['id' => 1])}}">
                    <div class="rounded sfondo-categorie p-3 pt-0 position-relative h-100 d-flex flex-column justify-content-around shadow">
                        <div class="fa-stack fa-3x position-absolute top-0 start-50 translate-middle">
                            <i class="icon fa-solid fa-circle fa-stack-2x"></i>
                            <i class="icon2 fa-solid fa-shirt fa-stack-1x fa-inverse"></i>
                        </div>
                        <div class="testo-categorie">
                            <h4 class="icon">{{__('ui.clothing')}}</h4>
                        </div>
                    </div>
                </a>  
            </div>
            
            <div class="col distanza-categorie anim-cat">
                <a class="text-decoration-none" href="{{route('category.index', ['id' => 2])}}">
                    <div class="rounded sfondo-categorie p-3 pt-0 position-relative h-100 d-flex flex-column justify-content-around shadow">
                        <span class="fa-stack fa-3x position-absolute top-0 start-50 translate-middle">
                            <i class="icon fa-solid fa-circle fa-stack-2x"></i>
                            <i class="icon2 fa-solid fa-couch fa-stack-1x fa-inverse"></i>
                        </span>
                        <div class="testo-categorie">
                            <h4 class="icon">{{__('ui.furniture')}}</h4>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col distanza-categorie anim-cat">
                <a class="text-decoration-none" href="{{route('category.index', ['id' => 3])}}">
                    <div class="rounded sfondo-categorie p-3 pt-0 position-relative h-100 d-flex flex-column justify-content-around shadow">
                        <span class="fa-stack fa-3x top-0 position-absolute start-50 translate-middle">
                            <i class="icon fa-solid fa-circle fa-stack-2x"></i>
                            <i class="icon2 fa-solid fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <div class="testo-categorie">
                            <h4 class="icon">{{__('ui.electronics')}}</h4>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col distanza-categorie anim-cat">
                <a class="text-decoration-none" href="{{route('category.index', ['id' => 4])}}">
                    <div class="rounded sfondo-categorie p-3 pt-0 position-relative h-100 d-flex flex-column justify-content-around shadow">
                        <span class="fa-stack fa-3x top-0 position-absolute start-50 translate-middle">
                            <i class="icon fa-solid fa-circle fa-stack-2x"></i>
                            <i class="icon2 fa-solid fa-film fa-stack-1x fa-inverse"></i>
                        </span>
                        <div class="testo-categorie">
                            <h4 class="icon">{{__('ui.film')}}</h4>
                        </div>
                    </div>
                </a>
            </div>
            
            
            <div class="col distanza-categorie anim-cat">
                <a class="text-decoration-none" href="{{route('category.index', ['id' => 5])}}">
                    <div class="rounded sfondo-categorie p-3 pt-0 position-relative h-100 d-flex flex-column justify-content-around shadow">
                        <span class="fa-stack fa-3x top-0 position-absolute start-50 translate-middle">
                            <i class="icon fa-solid fa-circle fa-stack-2x"></i>
                            <i class="icon2 fa-solid fa-dumbbell fa-stack-1x fa-inverse"></i>
                        </span>
                        <div class="testo-categorie">
                            <h4 class="icon">{{__('ui.fitness')}}</h4>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col distanza-categorie anim-cat">
                <a class="text-decoration-none" href="{{route('category.index', ['id' => 6])}}">
                    <div class="rounded sfondo-categorie p-3 pt-0 position-relative h-100 d-flex flex-column justify-content-around shadow">
                        <span class="fa-stack fa-3x top-0 position-absolute start-50 translate-middle">
                            <i class="icon fa-solid fa-circle fa-stack-2x"></i>
                            <i class="icon2 fa-solid fa-tree fa-stack-1x fa-inverse"></i>
                        </span>
                        <div class="testo-categorie">
                            <h4 class="icon">{{__('ui.gardening')}}</h4>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col distanza-categorie anim-cat">
                <a class="text-decoration-none" href="{{route('category.index', ['id' => 7])}}">
                    <div class="rounded sfondo-categorie p-3 pt-0 position-relative h-100 d-flex flex-column justify-content-around shadow">
                        <span class="fa-stack fa-3x position-absolute top-0 start-50 translate-middle">
                            <i class="icon fa-solid fa-circle fa-stack-2x"></i>
                            <i class="icon2 fa-solid fa-gamepad fa-stack-1x fa-inverse"></i>
                        </span>
                        <div class="testo-categorie">
                            <h4 class="icon">{{__('ui.games')}}</h4>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col distanza-categorie anim-cat">
                <a class="text-decoration-none" href="{{route('category.index', ['id' => 8])}}">
                    <div class="rounded sfondo-categorie p-3 pt-0 position-relative h-100 d-flex flex-column justify-content-around shadow">
                        <span class="fa-stack fa-3x position-absolute top-0 start-50 translate-middle">
                            <i class="icon fa-solid fa-circle fa-stack-2x"></i>
                            <i class="icon2 fa-solid fa-book-open fa-stack-1x fa-inverse"></i>
                        </span>
                        <div class="testo-categorie">
                            <h4 class="icon">{{__('ui.books')}}</h4>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col distanza-categorie anim-cat">
                <a class="text-decoration-none" href="{{route('category.index', ['id' => 9])}}">
                    <div class="rounded sfondo-categorie p-3 pt-0 position-relative h-100 d-flex flex-column justify-content-around shadow">
                        <span class="fa-stack fa-3x position-absolute top-0 start-50 translate-middle">
                            <i class="icon fa-solid fa-circle fa-stack-2x"></i>
                            <i class="icon2 fa-solid fa-car fa-stack-1x fa-inverse"></i>
                        </span>
                        <div class="testo-categorie">
                            <h4 class="icon">{{__('ui.engines')}}</h4>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col distanza-categorie anim-cat">
                <a class="text-decoration-none" href="{{route('category.index', ['id' => 10])}}">
                    <div class="rounded sfondo-categorie p-3 pt-0 position-relative h-100 d-flex flex-column justify-content-around shadow">
                        <span class="fa-stack fa-3x position-absolute top-0 start-50 translate-middle">
                            <i class="icon fa-solid fa-circle fa-stack-2x"></i>
                            <i class="icon2 fa-solid fa-music fa-stack-1x fa-inverse"></i>
                        </span>
                        <div class="testo-categorie">
                            <h4 class="icon">{{__('ui.music')}}</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    
    {{-- Sezione annunci --}}
    <main class="container-fluid text-center mb-5">
        <div class="row bg-due p-4 justify-content-center">
            <h2 class="col-12 fs-5 text-light text-start">{{__('ui.latestArticles')}}</h2>
            @forelse ($items as $item)
            <div class="col-12 item col-md-12 col-lg-3 border-0 my-4">
                <a href="{{route('item.show', compact('item'))}}">
                    <x-card 
                    title="{{$item->title}}"
                    price="{{$item->price}}€"
                    />
                </a>
            </div>
            @endforeach
        </div>
    </main>   

    <a href="#" role="button" class="btn-register-login btn" style='position: fixed; bottom:20px;right:20px; z-index: 3;'>
        <i class="fa-sharp fa-solid fa-arrow-up fa-2x"></i>
    </a>
</x-layout>