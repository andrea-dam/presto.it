<div class="p-2 container my-5 border border-black">
  <div class="row align-items-center">
    <div class="col-6 d-flex flex-column align-items-center">
      <h2 class="text-center">Il tuo annuncio apparirà così:</h2>
      <div class="card @error('title','category', 'description') d-none @enderror" style="width: 30rem;">
        <div class="card-body" >
          <h3 class="card-title">Titolo: {{$title}}</h3>
          <h5 class="card-title">Categoria:
            @foreach ($categories as $category)
            @if ($category->id == $this->category)
              {{$category->name}}
            @endif
            @endforeach
          </h5>
          <p class="card-text">Descrizione: {{$description}}</p>
          <button href="#" class="btn btn-primary">Go somewhere</button>
        </div>
      </div>    
    </div>
    <div class="col-6">
      <form wire:submit.prevent="store">
        @if(session()->has('itemCreated'))
        <div class="alert alert-success p-2">
          {{session('itemCreated')}}
        </div>
        @endif
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Nome articolo *</label>
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
          <textarea wire:model="description" type="text" class="form-control @error('description') is-invalid @enderror" id="description" cols="30" rows="10"></textarea>
          @error('description')<span class="text-danger fst-italic small">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo *</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="price" wire:model.lazy="price">
            @error('price')<span class="text-danger fst-italic small">{{$message}}</span>@enderror
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
  
</div>
