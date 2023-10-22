@extends('layouts.merge.painel')
@section('titulo', 'Lista de registros de Leitura')
@section('conteudo')
    <!-- row -->
    <div class="container-fluid">
        <div class="text-end mb-3">
            @if (Auth::user()->perfil == 'Administrador' || Auth::user()->perfil == 'Bibliotecário')
                <a href="{{ route('admin.leitura.create') }}" class="btn btn-primary btn-rounded add-staff">Cadastrar</a>
            @endif
        </div>
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">registros de Leitura</a></li>
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
                                        @if (Auth::user()->perfil == 'Administrador' || Auth::user()->perfil == 'Bibliotecário')
                                            <th>ID</th>
                                        @endif
                                        <th>NOME DO LEITOR</th>
                                        <th>BI DO LEITOR</th>
                                        <th>LIVRO</th>
                                        <th>DATA</th>
                                        <th>ESTADO</th>
                                        <th>ACÇÕES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($leituras))
                                        @foreach ($leituras as $leitura)
                                            <tr>
                                                @if (Auth::user()->perfil == 'Administrador' || Auth::user()->perfil == 'Bibliotecário')
                                                    <td>{{ $leitura->id }}</td>
                                                @endif
                                                <td>{{ $leitura->nome}}</td>
                                                <td>{{ $leitura->bi}}</td>
                                                <td>
                                                    {{ $leitura->titulo}}
                                                </td>
                                                <td>{{ date('d-m-Y', strtotime($leitura->data)) }}</td>
                                               



                                                <td class="estado">

                                                    <select id="{{ 'dest' . $leitura->id }}" name="estado"
                                                        class="form-control border-2" required>

                                                        @if ($leitura->estado == 0)
                                                            <option value="0" class="" selected>Não Entregue
                                                            </option>
                                                            <option value="1" class="">Entregue
                                                            </option>
                                                        @elseif($leitura->estado == 1)
                                                            <option value="1" class="" selected>Entregue
                                                            <option value="0" class="">Não Entregue</option>
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
                                                                href="{{ route('admin.leitura.imprimir.ficha', $leitura->id) }}" target="_blank"><i
                                                                    class="fa fa-print" aria-hidden="true"></i>
                                                                Imprimir Ficha</a>

                                                            <a class="dropdown-item"
                                                                href="{{ route('admin.leitura.edit', $leitura->id) }}"><i
                                                                    class="fa fa-pencil" aria-hidden="true"></i>
                                                                Editar</a>

                                                            @if (Auth::user()->perfil == 'Administrador' )
                                                                <a class="dropdown-item destroy"
                                                                    href="{{ route('admin.leitura.destroy', $leitura->id) }}"><i
                                                                        class="fa fa-trash" aria-hidden="true"></i>
                                                                    Eliminar</a>



                                                                <a class="dropdown-item purge"
                                                                    href="{{ route('admin.leitura.purge', $leitura->id) }}"><i
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









    {{-- leitura --}}
    @if (session('leitura.destroy.success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Registro de Leitura Eliminado Com Sucesso!',
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

    @if (session('leitura.destroy.error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Erro ao Eliminar Registro de Leitura!',
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


    @if (session('leitura.purge.success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Registro de Leitura Purgado Com Sucesso!',
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

    @if (session('leitura.purge.error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Erro ao Purgar Registro de Leitura!',
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
        $('.estado').on('click', function() {
            var id = $(this).find('select').attr('id');

            console.log('ID:', id);

            if ($('#' + id + ' > option').length === 1) {
                console.log('Inside if condition');

                $('#' + id)[0].innerHTML +=
                    '<option value="0">Não Entregue</option><option value="1">Entregue</option>';
            }


            $('#' + id).change(function() {
                //console.log('ola');
                var estado = $('#' + id).val();
                let url = "{{ url('/') }}";
                //console.log(estado)

                $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: url + '/admin/leitura/update/estado/' + id + '/' + estado,
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



    @if (session('leitura.imprimir.ficha.false'))
        <script>
            Swal.fire(
                'Erro ao imprimir a Ficha de Registro de Leitura.',
                '',
                'error'
            )
        </script>
    @endif



    @if (session('leitura.imprimir.ficha3.false'))
        <script>
            Swal.fire(
                'Houve algum erro, tente novamente em breve!',
                '',
                'error'
            )
        </script>
    @endif

@endsection
