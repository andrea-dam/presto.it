<x-layout>

    <main class="container my-5">
        <div class="row justify-content-center">  
            {{-- Se uno o più dati non sono stati inseriti correttamente --}}
            @if ($errors->any())
            <div  class="col-12 col-md-8 alert alert-danger">
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
                <form class="form-user p-5 rounded" method="POST" action="{{route('login')}}">
                    @csrf
                    <h2>Accedi:</h2>
                    <div class="mb-4 mt-4">
                        <label for="email" class="form-label">Indirizzo Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-4 form-check">
                        <label for="remember" class="form-check-label">Ricordami</label>
                        <input id="detail-button" type="checkbox" class="form-check-input" id="remember" name="remember">
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <button type="submit" class="btn-register-login btn btn-success p-3 me-3">Accedi</button>
                        <a href="{{route('homepage')}}" role="button" class="btn-register-login btn btn-secondary p-3">Torna alla Home</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
</x-layout>