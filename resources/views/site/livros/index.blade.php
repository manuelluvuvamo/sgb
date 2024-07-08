@extends('layouts.merge.site')
@section('titulo', 'Sistema da Gestão Bibliotecária')
@section('style')

@endsection
@section('conteudo')

    <!-- ======= Hero Section ======= -->
    
      <div class="px-4 py-5 text-center" style="background-color: #c3c3c3; margin-top: 0; padding: 150px 0!important;">
        {{-- <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
        <h1 class="display-5 fw-bold">
          @if (isset($q) && !is_null($q))
              Resultados da Pesquisa por: {{$q}}
          @else
            Livros Disponíveis
          @endif
        </h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4"></p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
           {{--  <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button> --}}
          </div>
        </div>
      </div>
 

    <main id="main">

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
                                <p class="mt-3 description"
                                    style="background-color: #c3c3c3; font-weight: bold; display: inline-block; padding: 10px;">
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

    </main><!-- End #main -->

@section('script')
   
@endsection
@endsection
