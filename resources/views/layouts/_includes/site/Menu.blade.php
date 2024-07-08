  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
          <div class="contact-info d-flex align-items-center">
              <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@sgb.com</a>
              <i class="bi bi-phone-fill phone-icon"></i> +244 999 000 000
          </div>
          <div class="social-links d-none d-md-block">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
          </div>
      </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
      <div class="container d-flex align-items-center">

          <div class="logo me-auto">
              {{-- <h1><a href="{{url('/')}}">SGB</a></h1> --}}
              <!-- Uncomment below if you prefer to use an image logo -->
              <a href="{{ url('/') }}"><img src="{{ asset('site/assets/img/logo.webp') }}" alt=""
                      class="img-fluid" style="width: 220px;"></a>
          </div>

          <nav id="navbar" class="navbar">
              <ul>
                  <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                  <li><a class="nav-link scrollto" href="#about">Sobre</a></li>
                  <li><a class="nav-link scrollto" href="#services">Livros</a></li>
                  @if (Route::has('login'))


                      @auth

                          @if ((isset(Auth::user()->perfil) && Auth::user()->perfil == 'Administrador') || Auth::user()->perfil == 'Bibliotecário')
                              <li class="nav-item"><a class="nav-link" href="{{ url('admin/') }}">Painel</a></li>
                          @endif
                      @else
                          <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Entrar</a></li>
                      @endauth


                  @endif
                  <li class="nav-item search-item">
                    <a class="nav-link" href="#" id="search-icon"><i class="bi bi-search"></i></a>
                    <form id="search-form" action="{{ route('site.livros.pesquisar') }}" method="GET" class="d-none">
                      @csrf
                        <input type="text" name="q" placeholder="Pesquisar por livros..." value="{{$q??''}}">
                        <button type="submit">Pesquisar</button>
                    </form>
                </li>
                  {{-- <li><a class="nav-link scrollto" href="#contact">Contactos</a></li> --}}
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

      </div>
  </header><!-- End Header -->
