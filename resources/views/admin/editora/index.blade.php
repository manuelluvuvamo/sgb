@extends('layouts.merge.painel')
@section('titulo', 'Lista de Editoras')
@section('conteudo')
    <!-- row -->
    <div class="container-fluid">
        <div class="text-end mb-3">
            @if (Auth::user()->perfil == 'Administrador')
                <a href="{{ route('admin.editora.create') }}" class="btn btn-primary btn-rounded add-staff">Cadastrar</a>
            @endif
        </div>
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Editoras</a></li>
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
                                        <th>NOME</th>
                                        <th>PAÍS</th>
                                        <th>CÓDIGO</th>
                                        @if(Auth::user()->perfil=='Administrador')
                                        <th>ACÇÕES</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($editoras))
                                        @foreach ($editoras as $editora)
                                            <tr>
                                                @if (Auth::user()->perfil == 'Administrador')
                                                    <td>{{ $editora->id }}</td>
                                                @endif
                                                <td>{{ $editora->nome }}</td>
                                                <td>{{ $editora->pais }}</td>
                                                <td>{{ $editora->codigo }}</td>
                                                @if(Auth::user()->perfil=='Administrador')
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
                                                            href="{{ route('admin.editora.edit', $editora->id) }}"><i
                                                                class="fa fa-pencil" aria-hidden="true"></i>
                                                            Editar</a>

                                                        @if (Auth::user()->perfil == 'Administrador')
                                                            <a class="dropdown-item destroy"
                                                                href="{{ route('admin.editora.destroy', $editora->id) }}"><i
                                                                    class="fa fa-trash" aria-hidden="true"></i>
                                                                Eliminar</a>
                                                         @endif

                                                         @if (Auth::user()->perfil == 'Administrador')
                                                            <a class="dropdown-item purge"
                                                                href="{{ route('admin.editora.purge', $editora->id) }}"><i
                                                                    class="fa fa-trash" aria-hidden="true"></i>
                                                                Purgar</a>
                                                        @endif
                                                        </ul>
                                                    </div>





                                                </td>
                                                @endif
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









    {{-- editora --}}
    @if (session('editora.destroy.success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Editora Eliminada Com Sucesso!',
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

    @if (session('editora.destroy.error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Erro ao Eliminar Editora!',
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


    @if (session('editora.purge.success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Editora Purgada Com Sucesso!',
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

    @if (session('editora.purge.error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Erro ao Purgar Editora!',
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

@endsection
