<x-layout>
    
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
            
            <div class="col-12 col-md-7">
                <form class="form-user p-5 rounded" method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="position-relative">
                        <a href="{{route('homepage')}}" role="button" class="btn position-absolute top-50 end-0 translate-middle-y p-3 text-light"><i class="fa-solid fa-house"></i></a>
                    </div>
                    <div class="mb-4 mt-4">
                        <label for="name" class="form-label">Nome Utente</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Indirizzo Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <div class="position-relative">
                            <button class="eye position-absolute top-50 end-0 translate-middle-y" type="button" onclick="showPwd()" ><i class="fa-solid fa-eye"></i></button>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="password_confirmation" class="form-label">Conferma password</label>
                        <div class="position-relative">
                            <button class="eye position-absolute top-50 end-0 translate-middle-y" type="button" onclick="showPwd()" ></button>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        </div>
                    </div>
                        <button type="submit" class="btn3 border-light btn text-light">Registrati</button>
                </form>
            </div>
        </div>
    </main>


<script>
   function showPwd() {
    var input = document.getElementById('password');
    if (input.type === "password") {
      input.type = "text";
    } else {
      input.type = "password";
    }
  }
</script>
</x-layout>