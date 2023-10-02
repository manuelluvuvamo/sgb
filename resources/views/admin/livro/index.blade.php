@extends('layouts.merge.painel')
@section('titulo', 'Lista de Livros')
@section('conteudo')
    <!-- row -->
    <div class="container-fluid">
        <div class="text-end mb-3">
            @if (Auth::user()->perfil == 'Administrador')
                <a href="{{ route('admin.livro.create') }}" class="btn btn-primary btn-rounded add-staff">Cadastrar</a>
            @endif
        </div>
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Livros</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Lista</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example4" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        @if (Auth::user()->perfil == 'Administrador')
                                            <th>ID</th>
                                        @endif
                                        <th>TITULO</th>
                                        <th>CATEGORIA</th>
                                        <th>ANO DE LANÇAMENTO</th>
                                        <th>VOLUME</th>
                                        <th>EDITORA</th>
                                        <th>AUTOR(ES)</th>
                                        <th>QUANTIDADE</th>
                                        <th>CADASTRADO POR</th>
                                        <th>DISPONIBILIDADE</th>
                                        <th>ACÇÕES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($livros))
                                        @foreach ($livros as $livro)
                                            <tr>
                                                @if (Auth::user()->perfil == 'Administrador')
                                                    <td>{{ $livro->id }}</td>
                                                @endif
                                                <td>{!! $livro->titulo !!}</td>
                                              
                                                <td>{{ $livro->categoria }}</td>
                                                <td>{{ $livro->ano_lancamento }}</td>
                                                <td>{{ $livro->volume }}</td>
                                                <td>{{ $livro->editora }}</td>
                                                <td>
                                                    @foreach ($livro->livro_autors as $key => $autor)
                                                    @if ($key != 0)
                                                    ||
                                                    @endif
                                                        {{$autor->nome}}
                                                    @endforeach
                                                </td>
                                                <td>{{ $livro->quantidade }}</td>
                                                <td>{{ $livro->user }}</td>
                                                
                                              
                                                <td class="disponibilidade">

                                                    <select id="{{ 'dest' . $livro->id }}" name="disponibilidade"
                                                        class="form-control border-2" required>

                                                        @if ($livro->disponibilidade == 0)
                                                            <option value="0" class="" selected>Não</option>
                                                            <option value="1" class="">Sim
                                                            </option>
                                                        @elseif($livro->disponibilidade == 1)
                                                            <option value="1" class="" selected>Sim
                                                            <option value="0" class="">Não</option>
                                                            </option>
                                                        @endif
                                                    </select>

                                                </td>

                                                @csrf
                                                @method('delete')
                                                <td>

                                                    <div class="dropdown">

                                                        <button class="btn btn-dark btn-sm dropdown-toggle" type="button"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">

                                                            <a class="dropdown-item"
                                                                href="{{ route('admin.livro.edit', $livro->id) }}"><i
                                                                    class="fa fa-pencil" aria-hidden="true"></i>
                                                                Editar</a>

                                                                @if (Auth::user()->perfil == 'Administrador')
                                                                <a class="dropdown-item destroy"
                                                                    href="{{ route('admin.livro.destroy', $livro->id) }}"><i
                                                                        class="fa fa-trash" aria-hidden="true"></i>
                                                                    Eliminar</a>



                                                                <a class="dropdown-item purge"
                                                                    href="{{ route('admin.livro.purge', $livro->id) }}"><i
                                                                        class="fa fa-trash" aria-hidden="true"></i>
                                                                    Purgar</a>
                                                                    @endif

                                                        </ul>
                                                    </div>





                                                </td>
                                            </tr>
                                        @endforeach

                                    @endif
                                </tbody>
                            </table>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>









    {{-- livro --}}
    @if (session('livro.destroy.success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Livro Eliminado Com Sucesso!',
                text: '',
                timer: 4e3,
                timerProgressBar: !0,
                didOpen: function() {
                    Swal.showLoading(), t = setInterval(function() {
                        var t, e = Swal.getHtmlContainer();
                        !e || (t = e.querySelector("b")) && (t.textContent = Swal.getTimerLeft())
                    }, 100)
                },
                onClose: function() {
                    clearInterval(t)
                }
            }).then(function(t) {
                t.dismiss === Swal.DismissReason.timer && console.log("I was closed by the timer")
            })

            /* .then((result) => {
                if (result.value) {
                            location.href = "";
                }
            }) */
        </script>
    @endif

    @if (session('livro.destroy.error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Erro ao Eliminar Livro!',
                text: '',
                timer: 4e3,
                timerProgressBar: !0,
                didOpen: function() {
                    Swal.showLoading(), t = setInterval(function() {
                        var t, e = Swal.getHtmlContainer();
                        !e || (t = e.querySelector("b")) && (t.textContent = Swal.getTimerLeft())
                    }, 100)
                },
                onClose: function() {
                    clearInterval(t)
                }
            }).then(function(t) {
                t.dismiss === Swal.DismissReason.timer && console.log("I was closed by the timer")
            })
        </script>
    @endif


    @if (session('livro.purge.success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Livro Purgado Com Sucesso!',
                text: '',
                timer: 4e3,
                timerProgressBar: !0,
                didOpen: function() {
                    Swal.showLoading(), t = setInterval(function() {
                        var t, e = Swal.getHtmlContainer();
                        !e || (t = e.querySelector("b")) && (t.textContent = Swal.getTimerLeft())
                    }, 100)
                },
                onClose: function() {
                    clearInterval(t)
                }
            }).then(function(t) {
                t.dismiss === Swal.DismissReason.timer && console.log("I was closed by the timer")
            })

            /* .then((result) => {
                if (result.value) {
                            location.href = "";
                }
            }) */
        </script>
    @endif

    @if (session('livro.purge.error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Erro ao Purgar Livro!',
                text: '',
                timer: 4e3,
                timerProgressBar: !0,
                didOpen: function() {
                    Swal.showLoading(), t = setInterval(function() {
                        var t, e = Swal.getHtmlContainer();
                        !e || (t = e.querySelector("b")) && (t.textContent = Swal.getTimerLeft())
                    }, 100)
                },
                onClose: function() {
                    clearInterval(t)
                }
            }).then(function(t) {
                t.dismiss === Swal.DismissReason.timer && console.log("I was closed by the timer")
            })
        </script>
    @endif

    <script>
        $('.disponibilidade').on('click', function() {
            var id = $(this).find('select').attr('id');

            console.log('ID:', id);

            if ($('#' + id + ' > option').length === 1) {
                console.log('Inside if condition');

                $('#' + id)[0].innerHTML += '<option value="0">Não</option><option value="1">Sim</option>';
            }


            $('#' + id).change(function() {
                //console.log('ola');
                var disponibilidade = $('#' + id).val();
                let url = "{{ url('/') }}";
                //console.log(disponibilidade)

                $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: url + '/admin/livro/update/disponibilidade/' + id + '/' + disponibilidade,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },

                    async: false,
                    success: function(response) {


                        console.log(response)

                        Swal.fire({
                            icon: 'success',
                            title: 'Dados Actualizados com Sucesso!',
                            text: '',
                            timer: 4e3,
                            timerProgressBar: !0,
                            didOpen: function() {
                                Swal.showLoading(), t = setInterval(function() {
                                    var t, e = Swal.getHtmlContainer();
                                    !e || (t = e.querySelector("b")) && (t
                                        .textContent = Swal
                                        .getTimerLeft())
                                }, 100)
                            },
                            onClose: function() {
                                clearInterval(t)
                            }
                        }).then(function(t) {
                            t.dismiss === Swal.DismissReason.timer && console.log(
                                "I was closed by the timer")
                        })



                    }



                })
            });

        });
    </script>



@endsection
