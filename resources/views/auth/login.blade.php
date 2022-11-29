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
            
            <div class="col-12 col-md-8 col-lg-6">
                @if(session()->has('login'))
                <div class="alert alert-danger text-center p-2">
                    {{session('login')}}
                </div>
                @endif  
                <form class="form-user p-5 rounded my-5" method="POST" action="{{route('login')}}">
                    @csrf
                    {{-- <h2>Accedi:</h2> --}}
                    <div class="d-flex justify-content-between align-items-center">
                        <h3>Accedi</h3>
                        <a href="{{route('homepage')}}" role="button" class="btn text-light"><i class="fa-solid fa-house"></i></a>
                    </div>
                    <div class="mb-4 mt-4">
                        <label for="email" class="form-label">{{__('ui.emailAddress')}}</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">{{__('ui.password')}}</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password">
                            <span class="input-group-text">
                                <i id="icona" class="fa-solid fa-eye eye" role="button" onclick="showPwd()">
                                    {{-- <button class="" type="button" onclick="showPwd()"></button> --}}
                                </i>
                            </span>
                        </div>
                    </div>
                    <div class="mb-4 form-check d-flex flex-column flex-md-row justify-content-between align-items-center">
                        <div>
                            <input id="detail-button" type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label for="remember" class="form-check-label">{{__('ui.remember')}}</label>
                        </div>
                        <div>
                            <a href="{{route('register')}}" class="text-decoration-none text-light">{{__('ui.noAccount')}}</a>
                        </div>
                    </div>
                    <button type="submit" class="btn3 btn border w-100 py-3">{{__('ui.login')}}</button>
                </form>
            </div>
        </div>
    </main>
    
    <script>
        function showPwd() {
            let isClicked = false;
            // Campo di input
            var input = document.getElementById('password');
            // Icona
            let icon = document.querySelector('#icona');
            
            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = "password";
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>
</x-layout>