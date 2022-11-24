<x-layout>

    <x-header>Registrati</x-header>
    <main class="container my-5">
        <div class="row justify-content-center">
            
            {{-- Se uno o più dati non sono stati inseriti correttamente --}}
            @if ($errors->any())
            <div class="col-12 col-md-8 alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            <div class="col-12 col-md-5">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="form-label">Nome Utente</label>
                        <input type="text"" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Indirizzo Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-4">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <button type="submit" class="btn btn-success p-3 me-3">Registrati</button>
                        <a href="{{route('homepage')}}" role="button" class="btn btn-secondary p-3">Torna alla Home</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
</x-layout>