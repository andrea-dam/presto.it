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
      
      
      <div class="col-12 col-md-6 mt-5 mt-md-0">
        <h2 class="text-start">{{$item->title}} ({{$item->category->name}})</h2>
        <h2 class="text-start text-danger">{{$item->price}} €</h2>
        <h5 class="text-start">{{$item->description}}</h5>
        <div class="px-5 mt-4">
          <div class="card p-3">
            <i class="fa-solid fa-truck-fast mb-2"></i>
            <h5 class="card-title">Spedizione rapida</h5>
            <p class="card-text">Prova Plus gratis per 30 giorni</p>
          </div>
          <div class="card p-3 mt-3">
            <i class="fa-solid fa-truck mb-2"></i>
            <h5 class="card-title">Spedizione standard</h5>
            <p class="card-text">Gratis</p>
          </div>
        </div>
        
        <div class="d-flex mb-3 mt-3">
          <h5 class="me-auto p-3">Recensioni (0)</h5>
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
        </div>

        
      <div class="card p-3 mt-3">
        <section>
          <details>
            <summary>
              <div class="fa-stack">
                <i class="text-light fa-solid fa-circle fa-stack-2x"></i>
                <i class="text-success fa-brands fa-envira fa-stack-1x fa-inverse"></i>
              </div>
              Imballaggio sostenibile
            </summary>
            <p>
              Tutte le confezioni usate per le spedizioni sono in carta 100% riciclata e reciclabile, prive di plastica.
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
                Resi facili
              </summary>
              <p>
                Hai 14 giorni lavorativi dalla data di ricevimento della merce per esercitare diritto al recesso.
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
                  Pagamenti sicuri
                </summary>
                <p>
                  Pagamenti con carta di credito, Paypal, Bonifico bancario diretto, Scalapay e contrassegno.
                </p>
              </details>
            </section>
            </div>

        <button class="btn5 mt-5 ms-3">Acquista ora <i class="fa-sharp fa-solid fa-bag-shopping"></i></button>
        <button class="btn5 ms-2">Aggiungi al carrello <i class="fa-solid fa-cart-plus"></i></button>
      </div>

     
    
        <div class="mt-5 d-flex justify-content-start">
          <a class="btn btn-register-login mt-3 w-30 p-3 " href="{{route('item.index')}}">Tutti gli annunci</a>
          <a class="btn btn-home mt-3 w-30 p-3" href="{{route('homepage')}}">Torna alla Home</a>
        </div>

  </div>
</div>

</x-layout> 

