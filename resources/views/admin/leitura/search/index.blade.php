@extends('layouts.merge.painel')
@section('titulo', 'Pesquisa de registros de Leituura')
@section('conteudo')

    <div class="container-fluid">
        <div class="text-end mb-3">
            <button class="btn btn-primary" onclick="window.history.go(-1)">
                <strong class="text-light text-white">Voltar</strong>
            </button>
        </div>
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">registros de Leituura</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Pesquisar</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.leitura.index') }}" method="get" enctype="multipart/form-data" class="row">
                            @csrf
                            

                           

                            <div class="form-group col-md-4">
                                <label for="id_livro" class="form-label">Livro</label>
                                <select name="id_livro" id="id_livro" class="form-control js-example-basic-single">
                                    <option value=All>Todos</option>

                                    @foreach ($livros as $livro)
                                        <option value="{{ $livro->id }}">
                                            {{ $livro->titulo }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group col-md-4">
                                <label for="filter" class="form-label">Filtro - Data de Cadastro</label>
                                <select name="filter" id="filter" onchange="mudar()" class="form-control">
                                    <option value="All">Todos</option>
                                    <option value="day">Hoje</option>
                                    <option value="date">Data específica</option>
                                    <option value="month">Mês</option>
                                    <option value="year">Ano</option>
                                    <option value="intervalo">Intervalo</option>

                                </select>

                            </div>

                            <div class="form-group col-md-4">
                                <label for="periodo" class="form-label">Periodo</label>
                                <input type="date" class="form-control" name="date" id="date"hidden>
                                <input type="month" class="form-control" name="month" id="month"hidden>
                                <input type="number" class="form-control" name="year" id="year"hidden>
                                <input type="date" class="form-control" name="intervalo1" id="intervalo1"hidden>
                                <input type="date" class="form-control" name="intervalo2" id="intervalo2"hidden>

                            </div>
                            <div class="form-group col-md-4">
                                <button type="submit" class="btn btn-primary">Pesquisar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <script>
        function mudar() {
            var estado = $('#filter').val();
            if (estado == "date") {
                document.getElementById("date").removeAttribute('hidden');
                document.getElementById("date").setAttribute('required', 'required');
                document.getElementById("month").setAttribute('hidden', 'hidden');
                document.getElementById("year").setAttribute('hidden', 'hidden');
                document.getElementById("month").removeAttribute('required');
                document.getElementById("year").removeAttribute('required');

                document.getElementById("intervalo1").setAttribute('hidden', 'hidden');
                document.getElementById("intervalo2").setAttribute('hidden', 'hidden');

                document.getElementById("intervalo1").removeAttribute('required');
                document.getElementById("intervalo2").removeAttribute('required');
            } else if (estado == "month") {
                document.getElementById("month").removeAttribute('hidden');
                document.getElementById("month").setAttribute('required', 'required');
                document.getElementById("date").setAttribute('hidden', 'hidden');
                document.getElementById("year").setAttribute('hidden', 'hidden');
                document.getElementById("date").removeAttribute('required');
                document.getElementById("year").removeAttribute('required');

                document.getElementById("intervalo1").setAttribute('hidden', 'hidden');
                document.getElementById("intervalo2").setAttribute('hidden', 'hidden');

                document.getElementById("intervalo1").removeAttribute('required');
                document.getElementById("intervalo2").removeAttribute('required');
            } else if (estado == "year") {
                document.getElementById("year").removeAttribute('hidden');
                document.getElementById("year").setAttribute('required', 'required');
                document.getElementById("date").setAttribute('hidden', 'hidden');
                document.getElementById("month").setAttribute('hidden', 'hidden');
                document.getElementById("date").removeAttribute('required');
                document.getElementById("month").removeAttribute('required');

                document.getElementById("intervalo1").setAttribute('hidden', 'hidden');
                document.getElementById("intervalo2").setAttribute('hidden', 'hidden');

                document.getElementById("intervalo1").removeAttribute('required');
                document.getElementById("intervalo2").removeAttribute('required');
            } else if (estado == "intervalo") {
                document.getElementById("intervalo1").removeAttribute('hidden');
                document.getElementById("intervalo1").setAttribute('required', 'required');
                document.getElementById("intervalo2").removeAttribute('hidden');
                document.getElementById("intervalo2").setAttribute('required', 'required');

                document.getElementById("date").setAttribute('hidden', 'hidden');
                document.getElementById("month").setAttribute('hidden', 'hidden');
                document.getElementById("year").setAttribute('hidden', 'hidden');



                document.getElementById("date").removeAttribute('required');
                document.getElementById("month").removeAttribute('required');
                document.getElementById("year").removeAttribute('required');


            }
        }
    </script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2({
                placeholder: "Seleccione...",


            });



        });
    </script>



@endsection
