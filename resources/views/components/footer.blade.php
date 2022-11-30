<!-- Footer -->
<footer  class="text-center text-lg-start text-white">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom ">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>{{__('ui.social')}}</span>
    </div>
    <!-- Left -->
    
    <!-- Right -->
    <div>
      <a href="" class="me-4 text-decoration-none text-light">
        <i class="fa-brands fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-decoration-none text-light">
        <i class="fa-brands fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-decoration-none text-light">
        <i class="fa-brands fa-google"></i>
      </a>
      <a href="" class="me-4 text-decoration-none text-light">
        <i class="fa-brands fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-decoration-none text-light">
        <i class="fa-brands fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-decoration-none text-light">
        <i class="fa-brands fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->
  
  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 id="logo-navbar" class="mb-4 logo-navbar">Presto.it</h6>
        </div>
        <!-- Grid column -->
        
        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->
        
        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            {{__('ui.changeLanguage')}}
          </h6>
          <p>
            <form class="bg-transparent" action="{{route('set_language_locale',['lang' => 'it'])}}" method="POST">
              @csrf
              <button class="flag p-0 border-0 bg-transparent" type="submit"><img class="p-0 border-0 m-0" src="{{asset('vendor/blade-flags/language-it.svg')}}" width="32" height="34" alt=""></button>
            </form>
          </p>
          <p>
            <form class="bg-transparent" action="{{route('set_language_locale',['lang' => 'en'])}}" method="POST">
              @csrf
              <button class="flag p-0 border-0 bg-transparent" type="submit"><img class="p-0 border-0 m-0" src="{{asset('vendor/blade-flags/language-en.svg')}}" width="32" height="34" alt=""></button>
            </form>
          </p>
          <p>
              <form class="bg-transparent" action="{{route('set_language_locale',['lang' => 'pl'])}}" method="POST">
                @csrf
                <button class="flag p-0 border-0 bg-transparent" type="submit"><img class="p-0 border-0 m-0" src="{{asset('vendor/blade-flags/language-pl.svg')}}" width="32" height="34" alt=""></button>
              </form>
          </p>
        </div>
        <!-- Grid column -->
        
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">{{__('ui.contacts')}}</h6>
          <!-- Button trigger modal -->
          <i class="fa-solid fa-toolbox"></i>
          <button type="button" class="btn text-light mb-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            {{__('ui.becomeRevisor')}}
          </button>
          
          <!-- Modal -->
          <div class=" modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class=" modal-dialog">
              <div class="modal-revisor modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 text-light" id="staticBackdropLabel">{{__('ui.warning')}}</h1>
                  <button type="button" class="bg-light btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-light">
                  {{__('ui.message')}}
                </div>
                <div class="modal-footer">
                  <a href="{{route('become.revisor')}}" class="text-white me-2 btn-register-login btn shadow"> {{__('ui.continue')}}</a>
                  <button type="button" class="text-white btn-home btn shadow" data-bs-dismiss="modal">{{__('ui.cancel')}}</button>
                </div>
              </div>
            </div>
          </div>
          <p><i  class="fas fa-envelope me-3 text-secondary text-light"></i>
            info@presto.it
          </p>
          <p><i  class="fas fa-phone me-3 text-secondary text-light"></i> + 01 234 567 88</p>
          <p><i  class="fas fa-print me-3 text-secondary text-light"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->
  
  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    © 2022 Copyright:
    <a class="text-reset " href="#">$this->Bladers[ ]</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->