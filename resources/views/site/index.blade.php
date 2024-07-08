@extends('layouts.merge.site')
@section('titulo', 'Sistema da Gestão Bibliotecária')
@section('style')
<style>
    /* Esconder as seções inicialmente */
    #about,
    #services {
      display: none;
    }
  </style>
@endsection
@section('conteudo')

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active"
                        style="background-image: url('site/assets/img/slide/slide-1.webp'); background-position: center; background-size: cover;">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animate__animated animate__fadeInDown">Bem-vindo ao portal da<br> bibioteca do
                                    <span>CEFOPESCAS</span></h2>
                                <p class="animate__animated animate__fadeInUp">Nossa missão é simplificar e aprimorar a
                                    gestão de bibliotecas, tornando o acesso à informação e ao conhecimento mais eficiente e
                                    agradável. Com anos de experiência no campo da biblioteconomia, desenvolvemos uma
                                    solução completa e personalizável para atender às necessidades de bibliotecas de todos
                                    os tamanhos e setores.</p>
                                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Ler
                                    Mais</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item"
                        style="background-image: url('site/assets/img/slide/slide-2.webp');background-position: center; background-size: cover;">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animate__animated animate__fadeInDown">Espaço ideal para ler e estudar</h2>
                                <p class="animate__animated animate__fadeInUp">A biblioteca é um espaço sagrado para muitos
                                    estudantes e leitores. É onde se encontram os livros, revistas e materiais de pesquisa
                                    que nos ajudam a crescer e aprender. Mas, além disso, a biblioteca é também um lugar de
                                    tranquilidade, onde podemos nos concentrar e absorver todo esse conhecimento. Aqui, você
                                    pode criar seu próprio ambiente de aprendizado, com dicas e sugestões para tornar sua
                                    experiência de leitura e estudo ainda mais produtiva.</p>
                                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Ler
                                    Mais</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item"
                        style="background-image: url('site/assets/img/slide/slide-3.webp');background-position: center; background-size: cover;">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animate__animated animate__fadeInDown">Professores, Aproveitem Nossa Coleção!
                                </h2>
                                <p class="animate__animated animate__fadeInUp">Como professor, você pode solicitar
                                    empréstimos de livros por um período estendido, permitindo que você tenha acesso a
                                    materiais relevantes para suas aulas, pesquisas e desenvolvimento profissional.</p>
                                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Ler
                                    Mais</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Sobre Nós Section ======= -->
        <section id="about" class="about esconder">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">
                    {{--  <div class="col-lg-6 video-box">
                        <img src="{{ asset('site/assets/img/campus-1.webp') }}" class="img-fluid" alt="">
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4"
                            data-vbtype="video" data-autoplay="true"></a>
                    </div> --}}

                    <div class="col-lg-12 d-flex flex-column justify-content-center about-content">

                        <div class="section-title">
                            <h2>Sobre Nós</h2>
                            <p>Seja bem-vindo à nossa plataforma de Sistema de Gestão Bibliotecária</p>
                        </div>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-bullseye"></i></div>
                            <h4 class="title"><a href="">Missão</a></h4>
                            <p class="description">Nossa missão é simplificar e aprimorar a gestão de bibliotecas, tornando
                                o acesso à informação e ao conhecimento mais eficiente e agradável. Com anos de experiência
                                no campo da biblioteconomia, desenvolvemos uma solução completa e personalizável para
                                atender às necessidades de bibliotecas de todos os tamanhos e setores.</p>
                        </div>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-gift"></i></div>
                            <h4 class="title"><a href="">Visão</a></h4>
                            <p class="description">Nossa visão é ser reconhecidos como líderes na inovação e excelência em
                                sistemas de gestão bibliotecária. Buscamos continuamente desenvolver e aprimorar nossas
                                soluções, incorporando as mais recentes tecnologias e melhores práticas do setor. Almejamos
                                ser o parceiro preferido de bibliotecas em todo o mundo, capacitando-as a oferecer serviços
                                de alta qualidade e a promover o acesso universal à informação e ao conhecimento.




                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

       
        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container">

                <div class="row">

                    <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
                        <div class="count-box">
                            <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{$ttl_leituras?$ttl_leituras:0}}" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Leitores Satisfeitos</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="count-box">
                            <i class="bi bi-document-folder" style="color: #c042ff;"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{$ttl_professores?$ttl_professores:0}}" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Professores</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
                        <div class="count-box">
                            <i class="bi bi-live-support" style="color: #46d1ff;"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{$ttl_emprestimos?$ttl_emprestimos:0}}" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Empréstimos</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
                        <div class="count-box">
                            <i class="bi bi-users-alt-5" style="color: #ffb459;"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{$ttl_livros?$ttl_livros:0}}" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Livros</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Livros Section ======= -->
        <section id="services" class="services esconder">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Livros</h2>
                </div>

                <div class="row">


                    @if (isset($livros))
                        @foreach ($livros as $livro)
                            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                                <div class="icon"><i class="bi bi-book"></i></div>
                                <h4 class="title"><a href="">{{ $livro->titulo }}</a></h4>

                                <p class="mb-0 description">Categoria: {{ $livro->categoria }}</p>
                                <p class="mb-0 description">Ano de Lançamento: {{ $livro->ano_lancamento }}</p>
                                <p class="mb-0 description">Volume: {{ $livro->volume }}</p>
                                <p class="mb-0 description">Editora: {{ $livro->editora }}</p>
                                <p class="mb-0 description">Autores: @foreach ($livro->livro_autors as $key => $autor)
                                        @if ($key != 0)
                                            ;
                                        @endif
                                        {{ $autor->nome }}
                                    @endforeach
                                </p>
                                <p class="mt-3 description" style="background-color: #c3c3c3; font-weight: bold; display: inline-block; padding: 10px;">
                                    @if ($livro->quantidade > 0 && $livro->disponibilidade == 1)
                                        Disponível
                                    @else
                                        Indisponível
                                    @endif
                                </p>
                            </div>
                        @endforeach

                        {!! $livros->links() !!}

                    @endif

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Our Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="section-title">
                    <h2>Galeria</h2>
                    <p></p>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Tudo</li>
                            <li data-filter=".filter-livros">Livros</li>
                            <li data-filter=".filter-autores">Autores</li>
                            <li data-filter=".filter-editoras">Editoras</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-livros">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('site/assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Um Livro sobre Pesca</h4>
                                <p>Livro</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('site/assets/img/portfolio/portfolio-1.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="#" title="Mais Detalhes"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-livros">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('site/assets/img/portfolio/portfolio-2.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>O Poder do Hábito</h4>
                                <p>Livro</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('site/assets/img/portfolio/portfolio-2.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="#" title="Mais Detalhes"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-livros">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('site/assets/img/portfolio/portfolio-3.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>A Arte da Guerra</h4>
                                <p>Livro</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('site/assets/img/portfolio/portfolio-3.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="#" title="Mais Detalhes"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-autores">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('site/assets/img/portfolio/portfolio-4.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Sun Tzu</h4>
                                <p>Autor</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('site/assets/img/portfolio/portfolio-4.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="#" title="Mais Detalhes"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-autores">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('site/assets/img/portfolio/portfolio-5.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Pepetela</h4>
                                <p>Autor</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('site/assets/img/portfolio/portfolio-5.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="#" title="Mais Detalhes"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-autores">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('site/assets/img/portfolio/portfolio-6.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Nelson Mandela</h4>
                                <p>Autor</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('site/assets/img/portfolio/portfolio-6.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="#" title="Mais Detalhes"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-editoras">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('site/assets/img/portfolio/portfolio-7.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Plural Editores Angola</h4>
                                <p>Editora</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('site/assets/img/portfolio/portfolio-7.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="#" title="Mais Detalhes"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-editoras">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('site/assets/img/portfolio/portfolio-8.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Editora Ideias e Letras</h4>
                                <p>Editora</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('site/assets/img/portfolio/portfolio-8.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="#" title="Mais Detalhes"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-editoras">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('site/assets/img/portfolio/portfolio-9.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>CEFOJOR</h4>
                                <p>Editora</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('site/assets/img/portfolio/portfolio-9.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="#" title="Mais Detalhes"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Our Portfolio Section -->




    </main><!-- End #main -->

@section('script')
<script>
    // Função para mostrar a seção
    function showSection(sectionId) {
      document.getElementById(sectionId).style.display = 'block';
    }

    // Adiciona evento de clique aos links do menu
    document.querySelectorAll('.nav-link.scrollto').forEach(link => {
      link.addEventListener('click', function (e) {
        e.preventDefault();
        // Esconde todas as seções
        document.querySelectorAll('section.esconder').forEach(section => {
          section.style.display = 'none';
        });
        // Mostra a seção correspondente ao link clicado
        const targetId = this.getAttribute('href').substring(1);
        showSection(targetId);
      });
    });
  </script>



@endsection
@endsection
