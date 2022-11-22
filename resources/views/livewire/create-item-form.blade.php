<div class="p-2 container my-5 border border-black">
    <div class="row align-items-center">
        <div class="col-6 d-flex justify-content-center">
            <div class="card @error('title','category', 'description') d-none @enderror" style="width: 30rem;">
                <div class="card-body" >
                  <h3 class="card-title">titolo: {{$title}}</h3>
                  <h5 class="card-title">categoria: {{$category}}</h5>
                  <p class="card-text">descrizione: {{$description}}</p>
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
                  <label for="title" class="form-label">nome articolo *</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" wire:model.lazy="title">
                  @error('title')<span class="text-danger fst-italic small">{{$message}}</span>@enderror
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Categoria *</label>
                    <input type="text" class="form-control @error('category') is-invalid @enderror" id="category" wire:model.lazy="category">
                    @error('category')<span class="text-danger fst-italic small">{{$message}}</span>@enderror
                  </div>
                  <div class="mb-3">
                    <label for="description" class="form-label">descrivi il tuo articolo *</label>
                    <textarea wire:model="description" class="form-control @error('description') is-invalid @enderror" id="description" cols="30" rows="10"></textarea>
                    @error('description')<span class="text-danger fst-italic small">{{$message}}</span>@enderror
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
    
</div>
