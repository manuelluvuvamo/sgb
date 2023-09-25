@extends('layouts.merge.painel')
@section('titulo', 'Lista de Utilizadores')
@section('conteudo')
    <!-- row -->
    <div class="container-fluid">
        <div class="text-end mb-3">
            @if (Auth::user()->perfil == 'Administrador')
                <a href="{{ route('admin.user.create') }}" class="btn btn-primary btn-rounded add-staff">Cadastrar</a>
            @endif
        </div>
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Utilizadores</a></li>
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
                                        <th>NOME DE USUÁRIO</th>
                                        <th>NOME COMPLETO</th>
                                        <th>EMAIL</th>
                                        {{-- <th>GÊNERO</th> --}}
                                        <th>TELEFONE</th>
                                        <th>NIVEL</th>
                                        <th>FOTO</th>
                                        <th>ACÇÕES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($users))
                                        @foreach ($users as $user)
                                            <tr>
                                                @if (Auth::user()->perfil == 'Administrador')
                                                    <td>{{ $user->id }}</td>
                                                @endif
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->primeiro_nome . ' ' . $user->sobrenome }}</td>
                                                <td>{{ $user->email }}</td>
                                                {{-- <td>{{ $user->genero }}</td> --}}
                                                <td>{{ $user->telefone }}</td>
                                                <td>{{ $user->perfil }}</td>


                                                <td>
                                                    <a class="fresco" href="{{ asset($user->profile_photo_path) }}"
                                                        data-fresco-group="projects">
                                                        <img src="{{ asset($user->profile_photo_path) }}" class="img-fluid "
                                                            width="50" alt=""> </a>

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
                                                            href="{{ route('admin.user.edit', $user->id) }}"><i
                                                                class="fa fa-pencil" aria-hidden="true"></i>
                                                            Editar</a>

                                                        @if (Auth::user()->perfil == 'Administrador')
                                                            <a class="dropdown-item destroy"
                                                                href="{{ route('admin.user.destroy', $user->id) }}"><i
                                                                    class="fa fa-trash" aria-hidden="true"></i>
                                                                Eliminar</a>
                                                         @endif

                                                         @if (Auth::user()->perfil == 'Administrador')
                                                            <a class="dropdown-item purge"
                                                                href="{{ route('admin.user.purge', $user->id) }}"><i
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









    {{-- user --}}
    @if (session('user.destroy.success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Utilizador Eliminado Com Sucesso!',
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

    @if (session('user.destroy.error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Erro ao Eliminar Utilizador!',
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


    @if (session('user.purge.success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Utilizador Purgado Com Sucesso!',
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

    @if (session('user.purge.error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Erro ao Purgar Utilizador!',
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
