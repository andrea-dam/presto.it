<x-layout>
  <x-header></x-header>
  <div class="container">
    <div class="row justify-content-center mb-3">
      <div class="col-6">
        {{-- <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img class="img-fluid" src="https://picsum.photos/200/300" alt="" srcset=""></div>
            <div class="swiper-slide"><img class="img-fluid" src="https://picsum.photos/200/300" alt="" srcset=""></div>
            <div class="swiper-slide"><img class="img-fluid" src="https://picsum.photos/200/300" alt="" srcset=""></div>
          </div>
        </div> --}}
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://picsum.photos/2000/2000" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://picsum.photos/2000/2000" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://picsum.photos/2000/2000" class="d-block w-100" alt="...">
            </div>
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
      <div class="col-6">
        <h2 class=" text-start">{{$item->title}} ({{$item->category->name}})</h2>
        <h2 class="text-start">{{$item->price}} €</h2>
        <h5 class="text-start">{{$item->description}}</h5>
      </div>
      <div class="col-6">
        <a class="btn btn-dark mt-3 w-100 p-3" href="{{route('item.index')}}">Tutti gli annunci</a>
      </div>
      <div class="col-6">
        <a class="btn btn-dark mt-3 w-100 p-3" href="{{route('homepage')}}">Torna alla Home</a>
      </div>
    </div>
  </div>
</x-layout> 