<div class="container mb-5">
  <div class="row align-items-center">
    <div class="p-5 col-12 col-md-6 d-flex flex-column align-items-center">
      <h2 class="text-center">{{__('ui.preview')}}</h2>
      {{-- logica per determinare cosa viene visto sulla card --}}
      @if ($errors->has('title') && $errors->has('price'))
      <x-card 
      title="{{null}}"
      price="{{null}}"
      />
      @elseif ($errors->has('title') && strlen($price) < 1)
      <x-card 
      title="{{null}}"
      price="{{$price}}"
      />
      @elseif($errors->has('title') && !strlen($price) < 1)
      <x-card 
      title="{{null}}"
      price="{{$price}}€"
      />
      @elseif($errors->has('price'))
      <x-card 
      title="{{$title}}"
      price="{{null}}"
      />
      @elseif(strlen($price) < 1)
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
    <div class="col-12 col-md-6">
      <form wire:submit.prevent="store" id="shadow">
        @if(session()->has('itemCreated'))
        <div class="alert alert-success p-2">
          {{session('itemCreated')}}
        </div>
        @endif
        @csrf
        <div class="mb-3">
          <div class="row justify-content-between">
            <span class="fst-italic text-muted">{{__('ui.requiredFields')}}</span>
            <label for="title" class="form-label">{{__('ui.nameArticle')}}</label>
          </div>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" wire:model.lazy="title">
          @error('title')<span class="text-danger fst-italic small">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
          <label for="category" class="form-label">{{__('ui.category')}}</label>
          <select class="form-select @error('category') is-invalid @enderror" wire:model.lazy="category">
            <option value="{{null}}" selected>{{__('ui.chooseCategory')}}</option>
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
          </select>
          @error('category')<span class="text-danger fst-italic small">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
          <label for="image" class="mb-2">{{__('ui.selectImage')}}</label>
          <input type="file" wire:model="temporary_images" name="images" id="image" multiple class="form-control @error('temporary_images.*') is-invalid @enderror">
          @error('temporary_images.*')<span class="text-danger fst-italic small">{{$message}}</span>@enderror
        </div>
        @if ($images)
        <div class="row">
          <div class="col-12">
            <p>{{__('ui.preview')}}:</p>
            <div class="row">
              <div class="container text-center">
                <div class="row row-cols-4">
                  @foreach ($images as $key => $image)
                  <div class="col">
                    <div class="d-flex flex-column justify-content-between h-100">
                      <img class="img-fluid" src="{{$image->temporaryUrl()}}" alt="">
                      <button type="button" class="btn btn-danger my-3" wire:click="removeImage({{$key}})">{{__('ui.clear')}}</button>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
        @endif
        <div class="mb-3">
          <label for="description" class="form-label">{{__('ui.describe')}}</label>
          <textarea wire:model.lazy="description" type="text" class="form-control @error('description') is-invalid @enderror" id="description" rows="5"></textarea>
          @error('description')<span class="text-danger fst-italic small">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">{{__('ui.price')}}</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" value="{{$price}}€" wire:model.debounce.100ms="price">
            <span class="input-group-text">€</span>
          </div>
          @error('price')<span class="text-danger fst-italic small">{{$message}}</span>@enderror
        </div>
        <div class="d-flex justify-content-between">
          <button type="submit" class="btn-register-login text-white btn p-3 shadow">{{__('ui.post')}}</button>
          <a href="{{route('homepage')}}" class="btn-home text-white btn p-3 shadow">{{__('ui.backToHome')}}</a>
        </div>
      </form>
    </div>
  </div>
</div>
