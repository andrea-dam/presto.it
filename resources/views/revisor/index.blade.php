<x-layout>
  @if (session('message'))
  <div class="alert alert-success">
    {{ session('message') }}
  </div>
  @endif
  <x-header>@if($item_to_check) {{__('ui.itemToCheck')}} @else {{__('ui.noItemToCheck')}} @endif</x-header>
  <div class="container">
    {{-- Prima condizione --}}
    <div class="row justify-content-center mb-3">
      @if($item_to_undo && $item_to_check)
      <div class="col-12 col-md-6">
        <h1>{{$item_to_check->title}}</h1>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
          <div class="carousel-indicators">
            @foreach ($item_to_check->images as $key => $image)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$key}}" class="@if($loop->first) active @endif" aria-current="true" aria-label="slide {{$key+1}}"></button>
            @endforeach
          </div>
          <div class="carousel-inner">
            @if($item_to_check->images)
            @foreach ($item_to_check->images as $image)
            <div class="carousel-item @if($loop->first) active @endif" data-bs-interval="0">
              <img src="{{$image->getUrl(1200, 900)}}" class="d-block w-100" alt="...">
              <div class="mt-3 pb-3" style="height: 21rem">
                <div class="mb-3">
                  @if ($image->labels)
                  @foreach ($image->labels as $label)
                  <p class="d-inline text-dark">#{{$label}}</p>
                  @endforeach
                  @endif
                </div>
                <p>Adulti: <span class="{{$image->adult}}"></span></p>
                <p>Satira: <span class="{{$image->spoof}}"></span></p>
                <p>Medicina: <span class="{{$image->medical}}"></span></p>
                <p>Violenza: <span class="{{$image->violence}}"></span></p>
                <p>Contenuto Ammiccante: <span class="{{$image->racy}}"></span></p>
              </div>
            </div>
            @endforeach
            @endif
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <h2 class="text-start">{{$item_to_check->category->name}}</h2>
        <h2 class="text-start text-danger">{{$item_to_check->price}} €</h2>
        <h5 class="text-start">{{$item_to_check->description}}</h5>
      </div>
      {{-- Pulsanti --}}
      <div class="row justify-content-center">
        <div class="col-12 col-md-3 col-lg-3 px-3">
          <form action="{{route('revisor.reject_item', ['item' => $item_to_check])}}" method="POST">
            @csrf
            @method('PATCH')
            <button class="btn btn-danger mt-3 w-100 p-3" type="submit">{{__('ui.rejectAd')}}</button>
          </form>
        </div>
        <div class="col-12 col-md-3 col-lg-3 px-3">
          <form action="{{route('revisor.undo-item', ['item' => $item_to_undo])}}" method="POST">
            @csrf
            @method('PATCH')
            <button class="btn btn-warning mt-3 w-100 p-3" type="submit">{{__('ui.undoChange')}}</button>
          </form>
        </div>
        <div class="col-12 col-md-3 col-lg-3 px-3">
          <form action="{{route('revisor.accept_item', ['item' => $item_to_check])}}" method="POST">
            @csrf
            @method('PATCH')
            <button class="btn btn-success mt-3 w-100 p-3" type="submit">{{__('ui.approveAd')}}</button>
          </form>
        </div>
      </div>
      @endif
    </div>
    {{-- Seconda Condizione --}}
    <div class="row justify-content-center mb-3">
      @if($item_to_check && !$item_to_undo)
      {{-- <div class="col-12 col-md-6"> --}}
        <div class="col-12 col-md-6">
          <h1>{{$item_to_check->title}}</h1>
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
              @foreach ($item_to_check->images as $key => $image)
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$key}}" class="@if($loop->first) active @endif" aria-current="true" aria-label="slide {{$key+1}}"></button>
              @endforeach
            </div>
            <div class="carousel-inner">
              @if($item_to_check->images)
              @foreach ($item_to_check->images as $image)
              <div class="carousel-item @if($loop->first) active @endif" data-bs-interval="0">
                <img src="{{$image->getUrl(1200, 900)}}" class="d-block w-100" alt="...">
                <div class="mt-3 pb-3" style="height: 21rem">
                  <div class="mb-3">
                    @if ($image->labels)
                    @foreach ($image->labels as $label)
                      <p class="d-inline text-dark">#{{$label}}</p>
                    @endforeach
                    @endif
                  </div>
                  <p>Adulti: <span class="{{$image->adult}}"></span></p>
                  <p>Satira: <span class="{{$image->spoof}}"></span></p>
                  <p>Medicina: <span class="{{$image->medical}}"></span></p>
                  <p>Violenza: <span class="{{$image->violence}}"></span></p>
                  <p>Contenuto Ammiccante: <span class="{{$image->racy}}"></span></p>
                </div>
              </div>
              @endforeach
              @endif
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <h2 class="text-start">{{$item_to_check->category->name}}</h2>
          <h2 class="text-start text-danger">{{$item_to_check->price}} €</h2>
          <h5 class="text-start">{{$item_to_check->description}}</h5>
        </div>
        {{-- Pulsanti --}}
        <div class="row justify-content-center">
          <div class="col-12 col-md-3 col-lg-3 px-3">
            <form action="{{route('revisor.reject_item', ['item' => $item_to_check])}}" method="POST">
              @csrf
              @method('PATCH')
              <button class="btn btn-danger mt-3 w-100 p-3" type="submit">{{__('ui.rejectAd')}}</button>
            </form>
          </div>
          <div class="col-12 col-md-3 col-lg-3 px-3">
            <form action="{{route('revisor.accept_item', ['item' => $item_to_check])}}" method="POST">
              @csrf
              @method('PATCH')
              <button class="btn btn-success mt-3 w-100 p-3" type="submit">{{__('ui.approveAd')}}</button>
            </form>
          </div>
        </div>
      </div>
      @endif
    </div>
    {{-- Terza Condizione --}}
    <div class="row justify-content-center min-vh-100">
      @if($item_to_undo && !$item_to_check)
      <div class="col-12 col-md-3 mb-5">
        <form action="{{route('revisor.undo-item', ['item' => $item_to_undo])}}" method="POST">
          @csrf
          @method('PATCH')
          <button class="btn btn-warning mt-3 w-100 p-3" type="submit">{{__('ui.undoChange')}}</button>
        </form>
      </div>
      @endif
      {{-- </div> --}}
    </div>
    {{-- </div> --}}
  </div>
</x-layout>