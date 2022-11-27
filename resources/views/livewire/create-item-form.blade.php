<div class="container mb-5">
  <div class="row align-items-center">
    <div class="p-5 col-6 d-flex flex-column align-items-center">
      <h2 class="text-center">Anteprima</h2>
      {{-- <div class="card @error('title','category', 'description') d-none @enderror" style="width: 30rem;"> --}}

        @if(!$price || session('price'))
        <x-card 
                title="{{$title}}"
                price="{{$price}}"
                />
        @else
        <x-card 
                title="{{$title}}"
                price="{{$price}}€"
                />
        @endif
      
    </div>
    <div class="col-6">
      <form wire:submit.prevent="store" id="shadow">
        @if(session()->has('itemCreated'))
        <div class="alert alert-success p-2">
          {{session('itemCreated')}}
        </div>
        @endif
        @csrf
        <div class="mb-3">
          <div class="d-flex justify-content-between">
          <label for="title" class="form-label">Nome articolo *</label><span class="fst-italic text-muted">I campi contrassegnati con * sono obbligatori</span>
          </div>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" wire:model.lazy="title">
          @error('title')<span class="text-danger fst-italic small">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
          <label for="category" class="form-label">Categoria *</label>
          <select class="form-select @error('category') is-invalid @enderror" wire:model.lazy="category">
            <option selected>Scegli la categoria dell'annuncio</option>
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
          </select>
          @error('category')<span class="text-danger fst-italic small">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Descrivi il tuo articolo *</label>
          <textarea wire:model="description" type="text" class="form-control @error('description') is-invalid @enderror" id="description" rows="5"></textarea>
          @error('description')<span class="text-danger fst-italic small">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Prezzo *</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" value="{{$price}}€" wire:model="price">
            <span class="input-group-text">€</span>
            @error('price')<span class="text-danger fst-italic small">{{$message}}</span>@enderror
          </div>
        </div>
        <div class="d-flex justify-content-between">
          <button type="submit" class="btn-register-login text-white btn p-3 shadow">Pubblica Annuncio</button>
          <a href="{{route('homepage')}}" class="btn-home text-white btn p-3 shadow">Torna alla Home</a>
        </div>
      </form>
    </div>
  </div>
</div>
