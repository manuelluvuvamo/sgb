 <!-- Navigation-->
 <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
     <div class="container px-5">
         <a class="navbar-brand" href="#">{{-- <span class="fw-bolder text-primary">Start Bootstrap</span> --}} <img src="{{ asset('site/assets/logo.webp') }}"
                 alt="" width="250"></a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                 class="navbar-toggler-icon"></span></button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                 <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                 <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
                 <li class="nav-item"><a class="nav-link" href="#livros">Livros</a></li>


                 @if (Route::has('login'))


                     @auth

                         @if ((isset(Auth::user()->perfil) && Auth::user()->perfil == 'Administrador') || Auth::user()->perfil == 'Bibliotecário')
                             <li class="nav-item"><a class="nav-link" href="{{ url('admin/') }}">Painel</a></li>
                         @endif
                     @else
                         <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Entrar</a></li>
                     @endauth


                 @endif


                 {{-- <li class="nav-item"><a class="nav-link" href="#">Contact</a></li> --}}
             </ul>
         </div>
     </div>
 </nav>
