<x-layout>

    <x-header>{{$category->name}}</x-header>
    
    <main class="container">
        <div class="row justify-content-center">
            @forelse ($category->items as $item)
            <div class="col-12 item col-md-6 col-lg-3 my-4">
                <a href="{{route('item.show', compact('item'))}}" class="text-white text-decoration-none mb-4">
                    <x-card 
                    title="{{$item->title}}"
                    price="{{$item->price}}€"
                    />
                </a>
            </div>
            @empty
            <div class="col-12">
                <div class="alert alert-warning">
                    <p>Non ci sono annunci.</p>
                </div>
            </div>
            @endforelse
        </div>
    </main>





</x-layout>