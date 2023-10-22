@extends('layouts.merge.painel')
@section('titulo', 'Painel')
@section('conteudo')

    <!-- row -->
    <div class="container-fluid">
        <div class="form-head d-flex mb-3 mb-md-4 align-items-start">
            <div class="me-auto d-none d-lg-block">
                <h3 class="text-black font-w600">Bem-vindo ao Sistema de Gestão Bibliotecária!</h3>
                <p class="mb-0 fs-18"></p>
            </div>

            <div class="input-group search-area ms-auto d-inline-flex">
                <input type="text" class="form-control" placeholder="Search here">
                <div class="input-group-append">
                    <button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
                </div>
            </div>
            <a href="javascript:void(0);" class="settings-icon  ms-3"><i class="flaticon-381-settings-2 me-0"></i></a>
        </div>
       

        <div class="row">

            @if (Auth::user()->perfil == 'Administrador')
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card  text-white bg-danger rounded">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <p class="mb-1">Utilizadorees</p>
                                    <div class="d-flex flex-wrap">
                                        <h2 class="fs-40 font-w600 text-white mb-0 me-3">
                                            {{ isset($ttl_utilizadores) ? $ttl_utilizadores : 0 }}</h2>
                                        <div>

                                            <div class="fs-14"></div>
                                        </div>
                                    </div>
                                </div>
                                <span class="border rounded-circle p-4">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card  text-white bg-danger rounded">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <p class="mb-1">Autores</p>
                                    <div class="d-flex flex-wrap">
                                        <h2 class="fs-40 font-w600 text-white mb-0 me-3">
                                            {{ isset($ttl_autores) ? $ttl_autores : 0 }}</h2>
                                        <div>

                                            <div class="fs-14">{{-- +4% --}}</div>
                                        </div>
                                    </div>
                                </div>
                                <span class="border rounded-circle p-4">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card  text-white bg-danger rounded">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <p class="mb-1">Editoras</p>
                                    <div class="d-flex flex-wrap">
                                        <h2 class="fs-40 font-w600 text-white mb-0 me-3">
                                            {{ isset($ttl_editoras) ? $ttl_editoras : 0 }}</h2>
                                        <div>

                                            <div class="fs-14">{{-- +4% --}}</div>
                                        </div>
                                    </div>
                                </div>
                                <span class="border rounded-circle p-4">
                                    <i class="fas fa-building" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card  text-white bg-danger rounded">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <p class="mb-1">Professores</p>
                                    <div class="d-flex flex-wrap">
                                        <h2 class="fs-40 font-w600 text-white mb-0 me-3">
                                            {{ isset($ttl_professores) ? $ttl_professores : 0 }}</h2>
                                        <div>

                                            <div class="fs-14">{{-- +4% --}}</div>
                                        </div>
                                    </div>
                                </div>
                                <span class="border rounded-circle p-4">
                                    <i class="fas fa-dice-d6" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card  text-white bg-danger rounded">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <p class="mb-1">Livros</p>
                                    <div class="d-flex flex-wrap">
                                        <h2 class="fs-40 font-w600 text-white mb-0 me-3">
                                            {{ isset($ttl_livros) ? $ttl_livros : 0 }}</h2>
                                        <div>

                                            <div class="fs-14">{{-- +4% --}}</div>
                                        </div>
                                    </div>
                                </div>
                                <span class="border rounded-circle p-4">
                                    <i class="fas fa-book" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card  text-white bg-danger rounded">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <p class="mb-1">Empréstimos</p>
                                    <div class="d-flex flex-wrap">
                                        <h2 class="fs-40 font-w600 text-white mb-0 me-3">
                                            {{ isset($ttl_emprestimos) ? $ttl_emprestimos : 0 }}</h2>
                                        <div>

                                            <div class="fs-14">{{-- +4% --}}</div>
                                        </div>
                                    </div>
                                </div>
                                <span class="border rounded-circle p-4">
                                    <i class="fas fa-handshake" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card  text-white bg-danger rounded">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <p class="mb-1">Leituras</p>
                                    <div class="d-flex flex-wrap">
                                        <h2 class="fs-40 font-w600 text-white mb-0 me-3">
                                            {{ isset($ttl_leituras) ? $ttl_leituras : 0 }}</h2>
                                        <div>

                                            <div class="fs-14">{{-- +4% --}}</div>
                                        </div>
                                    </div>
                                </div>
                                <span class="border rounded-circle p-4">
                                    <i class="fas fa-book" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

               {{--  <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card  text-white bg-danger rounded">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <p class="mb-1">Livro mais emprestado</p>
                                    <div class="d-flex flex-wrap">
                                        <h2 class="fs-40 font-w600 text-white mb-0 me-3">
                                            {{ isset($ttl_livro_mais_emprestado) ? $ttl_livro_mais_emprestado : 0 }}</h2>
                                        <div>

                                            <div class="fs-14"></div>
                                        </div>
                                    </div>
                                </div>
                                <span class="border rounded-circle p-4">
                                    <i class="fas fa-book" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
 --}}
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card  text-white bg-danger rounded">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <p class="mb-1">Livro mais lido</p>
                                    <p class="mb-1">
                                        {{ isset($livro_mais_lido) ? $livro_mais_lido->titulo." volume ".$livro_mais_lido->volume : '' }} 
                                    </p>
                                    <div class="d-flex flex-wrap">
                                        <h2 class="fs-40 font-w600 text-white mb-0 me-3">
                                           {{ isset($livro_mais_lido_valor) ? $livro_mais_lido_valor : 0 }}</h2>
                                        <div>

                                            <div class="fs-14">{{-- +4% --}}</div>
                                        </div>
                                    </div>
                                </div>
                                <span class="border rounded-circle p-4">
                                    <i class="fas fa-book" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
          
             
            @else
             
            
            <div class="col-xl-3 col-xxl-3 col-sm-6">
                <div class="card  text-white bg-danger rounded">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <p class="mb-1">Autores</p>
                                <div class="d-flex flex-wrap">
                                    <h2 class="fs-40 font-w600 text-white mb-0 me-3">
                                        {{ isset($ttl_autores) ? $ttl_autores : 0 }}</h2>
                                    <div>

                                        <div class="fs-14">{{-- +4% --}}</div>
                                    </div>
                                </div>
                            </div>
                            <span class="border rounded-circle p-4">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-xxl-3 col-sm-6">
                <div class="card  text-white bg-danger rounded">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <p class="mb-1">Editoras</p>
                                <div class="d-flex flex-wrap">
                                    <h2 class="fs-40 font-w600 text-white mb-0 me-3">
                                        {{ isset($ttl_editoras) ? $ttl_editoras : 0 }}</h2>
                                    <div>

                                        <div class="fs-14">{{-- +4% --}}</div>
                                    </div>
                                </div>
                            </div>
                            <span class="border rounded-circle p-4">
                                <i class="fas fa-building" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-xxl-3 col-sm-6">
                <div class="card  text-white bg-danger rounded">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <p class="mb-1">Professores</p>
                                <div class="d-flex flex-wrap">
                                    <h2 class="fs-40 font-w600 text-white mb-0 me-3">
                                        {{ isset($ttl_professores) ? $ttl_professores : 0 }}</h2>
                                    <div>

                                        <div class="fs-14">{{-- +4% --}}</div>
                                    </div>
                                </div>
                            </div>
                            <span class="border rounded-circle p-4">
                                <i class="fas fa-dice-d6" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-xl-3 col-xxl-3 col-sm-6">
                <div class="card  text-white bg-danger rounded">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <p class="mb-1">Livros</p>
                                <div class="d-flex flex-wrap">
                                    <h2 class="fs-40 font-w600 text-white mb-0 me-3">
                                        {{ isset($ttl_livros) ? $ttl_livros : 0 }}</h2>
                                    <div>

                                        <div class="fs-14">{{-- +4% --}}</div>
                                    </div>
                                </div>
                            </div>
                            <span class="border rounded-circle p-4">
                                <i class="fas fa-book" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-xxl-3 col-sm-6">
                <div class="card  text-white bg-danger rounded">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <p class="mb-1">Empréstimos</p>
                                <div class="d-flex flex-wrap">
                                    <h2 class="fs-40 font-w600 text-white mb-0 me-3">
                                        {{ isset($ttl_emprestimos) ? $ttl_emprestimos : 0 }}</h2>
                                    <div>

                                        <div class="fs-14">{{-- +4% --}}</div>
                                    </div>
                                </div>
                            </div>
                            <span class="border rounded-circle p-4">
                                <i class="fas fa-handshake" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-xxl-3 col-sm-6">
                <div class="card  text-white bg-danger rounded">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <p class="mb-1">Leituras</p>
                                <div class="d-flex flex-wrap">
                                    <h2 class="fs-40 font-w600 text-white mb-0 me-3">
                                        {{ isset($ttl_leituras) ? $ttl_leituras : 0 }}</h2>
                                    <div>

                                        <div class="fs-14">{{-- +4% --}}</div>
                                    </div>
                                </div>
                            </div>
                            <span class="border rounded-circle p-4">
                                <i class="fas fa-book" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

           {{--  <div class="col-xl-3 col-xxl-3 col-sm-6">
                <div class="card  text-white bg-danger rounded">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <p class="mb-1">Livro mais emprestado</p>
                                <div class="d-flex flex-wrap">
                                    <h2 class="fs-40 font-w600 text-white mb-0 me-3">
                                        {{ isset($ttl_livro_mais_emprestado) ? $ttl_livro_mais_emprestado : 0 }}</h2>
                                    <div>

                                        <div class="fs-14"></div>
                                    </div>
                                </div>
                            </div>
                            <span class="border rounded-circle p-4">
                                <i class="fas fa-book" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
--}}
            <div class="col-xl-3 col-xxl-3 col-sm-6">
                <div class="card  text-white bg-danger rounded">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <p class="mb-1">Livro mais lido</p>
                                <p class="mb-1">
                                    {{ isset($livro_mais_lido) ? $livro_mais_lido->titulo." volume ".$livro_mais_lido->volume : '' }} 
                                </p>
                                <div class="d-flex flex-wrap">
                                    <h2 class="fs-40 font-w600 text-white mb-0 me-3">
                                       {{ isset($livro_mais_lido_valor) ? $livro_mais_lido_valor : 0 }}</h2>
                                    <div>

                                        <div class="fs-14">{{-- +4% --}}</div>
                                    </div>
                                </div>
                            </div>
                            <span class="border rounded-circle p-4">
                                <i class="fas fa-book" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        

        </div>
        
    </div>
  
   
@endsection
