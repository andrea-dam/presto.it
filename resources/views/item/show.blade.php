<x-layout>
  {{-- <x-header></x-header> --}}
  <div class="container my-5">
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
          @foreach ($item->images as $key => $image)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$key}}" class="@if($loop->first) active @endif" aria-current="true" aria-label="slide {{$key+1}}"></button>
            @endforeach
          </div>
          <div class="carousel-inner">
            @if($item->images)
            @foreach ($item->images as $image)
            <div class="carousel-item @if($loop->first) active @endif">
              <img src="{{$image->getUrl(1200, 900)}}" class="d-block w-100" alt="...">
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
            
      <div class="col-12 col-md-6 mt-5 mt-md-0">
        <h2 class="text-start">{{$item->title}} ({{$item->category->name}})</h2>
        <h2 class="text-start text-danger">{{$item->price}} €</h2>
        <h5 class="text-start">{{$item->description}}</h5>
        {{-- <div class="px-5 mt-4">
          <div class="card p-3">
            <i class="fa-solid fa-truck-fast mb-2"></i>
            <h5 class="card-title"> {{__('ui.fastShipping')}}</h5>
            <p class="card-text">{{__('ui.freeTrial')}}</p>
          </div>
          <div class="card p-3 mt-3">
            <i class="fa-solid fa-truck mb-2"></i>
            <h5 class="card-title">{{__('ui.shipping')}}</h5>
            <p class="card-text">Gratis</p>
          </div>
        </div> --}}
        
        {{-- <div class="d-flex mb-3 mt-3">
          <h5 class="me-auto p-3">{{__('ui.reviews')}}</h5>
          <div class="c4l-rating p-2">
            <input name="c4l-rating" type="radio" id="c4l-rate1" value="1" />
            <label for="c4l-rate1"></label>
            <input name="c4l-rating" type="radio" id="c4l-rate2" value="2" />
            <label for="c4l-rate2"></label>
            <input name="c4l-rating" type="radio" id="c4l-rate3" value="3" />
            <label for="c4l-rate3"></label>
            <input name="c4l-rating" type="radio" id="c4l-rate4" value="4" />
            <label for="c4l-rate4"></label>
            <input name="c4l-rating" type="radio" id="c4l-rate5" value="5" checked />
            <label for="c4l-rate5"></label>
          </div>
        </div> --}}

        
      <div class="card p-3 mt-3">
        <section>
          <details>
            <summary>
              <div class="fa-stack">
                <i class="text-light fa-solid fa-circle fa-stack-2x"></i>
                <i class="text-success fa-brands fa-envira fa-stack-1x fa-inverse"></i>
              </div>
              {{__('ui.packaging')}}
            </summary>
            <p>
              {{__('ui.shippings')}}
            </p>
          </details>
        </section>
        </div>
        <div class="card p-3">
          <section>
            <details>
              <summary>
                <div class="fa-stack">
                  <i class="text-light fa-solid fa-circle fa-stack-2x"></i>
                  <i class="text-secondary fa-solid fa-box-open fa-stack-1x fa-inverse"></i>
                </div>
                {{__('ui.simpleReturns')}}
              </summary>
              <p>
                {{__('ui.goods')}}
              </p>
            </details>
          </section>
          </div>
          <div class="card p-3">
            <section>
              <details>
                <summary>
                  <div class="fa-stack">
                    <i class="text-light fa-solid fa-circle fa-stack-2x"></i>
                    <i class="text-warning fa-solid fa-lock fa-stack-1x fa-inverse"></i>
                  </div>
                  {{__('ui.securePayments')}}
                </summary>
                <p>
                  {{__('ui.payments')}}
                </p>
              </details>
            </section>
            </div>

        <button class="btn5 mt-5 ms-3"> {{__('ui.buyNow')}}<i class="fa-sharp fa-solid fa-bag-shopping ms-2"></i></button>
        <button class="btn5 ms-2">{{__('ui.addToCart')}} <i class="fa-solid fa-cart-plus"></i></button>
      </div>

     
    
        <div class="mt-5 d-flex justify-content-start">
          <a class="btn btn-register-login mt-3 w-30 p-3 " href="{{route('item.index')}}">{{__('ui.allAnnouncement')}}</a>
          <a class="btn btn-home mt-3 w-30 p-3" href="{{route('homepage')}}">{{__('ui.backToHome')}}</a>
        </div>

  </div>
</div>

</x-layout> 

