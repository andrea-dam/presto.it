<x-layout>
<x-header>Accedi</x-header>

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
                @if(session()->has('login'))
                <div class="alert alert-danger text-center p-2">
                    {{session('login')}}
                </div>
                @endif  
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="form-label">Indirizzo Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-4 form-check">
                        <label for="remember" class="form-check-label">Ricordami</label>
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <button type="submit" class="btn btn-success p-3 me-3">Accedi</button>
                        <a href="{{route('homepage')}}" role="button" class="btn btn-secondary p-3">Torna alla Home</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
</x-layout>