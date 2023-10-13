@extends('layouts.merge.painel')
@section('titulo', 'Lista de Emprestimos')
@section('conteudo')
    <!-- row -->
    <div class="container-fluid">
        <div class="text-end mb-3">
            @if (Auth::user()->perfil == 'Administrador')
                <a href="{{ route('admin.emprestimo.create') }}" class="btn btn-primary btn-rounded add-staff">Cadastrar</a>
            @endif
        </div>
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Emprestimos</a></li>
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
                                        <th>PROFESSOR</th>
                                        <th>LIVRO(S)</th>
                                        <th>DATA DE LEVANTAMENTO</th>
                                        <th>DATA DE ENTREGA</th>
                                        <th>ESTADO</th>
                                        <th>ACÇÕES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($emprestimos))
                                        @foreach ($emprestimos as $emprestimo)
                                            <tr>
                                                @if (Auth::user()->perfil == 'Administrador')
                                                    <td>{{ $emprestimo->id }}</td>
                                                @endif
                                                <td>{{ $emprestimo->primeiro_nome . ' ' . $emprestimo->sobrenome }}</td>
                                                <td>
                                                    @foreach ($emprestimo->livro_emprestimos as $key => $livro)
                                                        @if ($key != 0)
                                                            ||
                                                        @endif
                                                        {{ $livro->titulo }}
                                                    @endforeach
                                                </td>
                                                <td>{{ date('d-m-Y', strtotime($emprestimo->data_levantamento)) }}</td>
                                                <td>{{ date('d-m-Y', strtotime($emprestimo->data_entrega)) }}</td>



                                                <td class="estado">

                                                    <select id="{{ 'dest' . $emprestimo->id }}" name="estado"
                                                        class="form-control border-2" required>

                                                        @if ($emprestimo->estado == 0)
                                                            <option value="0" class="" selected>Não Entregue
                                                            </option>
                                                            <option value="1" class="">Entregue
                                                            </option>
                                                        @elseif($emprestimo->estado == 1)
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
                                                                href="{{ route('admin.emprestimo.imprimir.ficha', $emprestimo->id) }}" target="_blank"><i
                                                                    class="fa fa-print" aria-hidden="true"></i>
                                                                Imprimir Ficha</a>

                                                            <a class="dropdown-item"
                                                                href="{{ route('admin.emprestimo.edit', $emprestimo->id) }}"><i
                                                                    class="fa fa-pencil" aria-hidden="true"></i>
                                                                Editar</a>

                                                            @if (Auth::user()->perfil == 'Administrador')
                                                                <a class="dropdown-item destroy"
                                                                    href="{{ route('admin.emprestimo.destroy', $emprestimo->id) }}"><i
                                                                        class="fa fa-trash" aria-hidden="true"></i>
                                                                    Eliminar</a>



                                                                <a class="dropdown-item purge"
                                                                    href="{{ route('admin.emprestimo.purge', $emprestimo->id) }}"><i
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









    {{-- emprestimo --}}
    @if (session('emprestimo.destroy.success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Empréstimo Eliminado Com Sucesso!',
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

    @if (session('emprestimo.destroy.error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Erro ao Eliminar Empréstimo!',
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


    @if (session('emprestimo.purge.success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Empréstimo Purgado Com Sucesso!',
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

    @if (session('emprestimo.purge.error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Erro ao Purgar Empréstimo!',
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
                    url: url + '/admin/emprestimo/update/estado/' + id + '/' + estado,
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



    @if (session('emprestimo.imprimir.ficha.false'))
        <script>
            Swal.fire(
                'Erro ao imprimir a Ficha de Empréstimo.',
                '',
                'error'
            )
        </script>
    @endif



    @if (session('emprestimo.imprimir.ficha3.false'))
        <script>
            Swal.fire(
                'Houve algum erro, tente novamente em breve!',
                '',
                'error'
            )
        </script>
    @endif

@endsection
