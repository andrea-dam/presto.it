<x-layout>
    
    <x-header>{{__('ui.allAnnouncement')}}</x-header>
    
    <main class="container my-5 min-vh-100">
        <div class="row justify-content-center">
            @forelse ($items as $item)
            <div class="col-12 item col-md-6 col-lg-3 mt-4">
                <a href="{{route('item.show', compact('item'))}}" class="text-white text-decoration-none mb-4">
                    <x-card 
                    title="{{$item->title}}"
                    price="{{$item->price}}€"
                    :coverImg="$item->images()->get() ? $item->images->first() : 'https://picsum.photos/900/1200'"
                    />
                </a>
            </div>
            @empty
            <div class="col-12">
                <div class="alert alert-warning">
                    <p>{{__('ui.notFound')}}</p>
                </div>
            </div>
            @endforelse
        </div>
    </main>
    
</x-layout>