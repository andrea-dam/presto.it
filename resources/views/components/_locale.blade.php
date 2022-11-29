<form action="{{ route('set_language_locale', $lang)  }}" method="POST">
    @csrf
    <x-flag-country-gb class="nav-item" 
    role="button" type='submit'
    />

               
</form>
