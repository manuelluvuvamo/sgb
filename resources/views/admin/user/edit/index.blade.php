@extends('layouts.merge.painel')
@section('titulo', 'Edição de Utilizadores')
@section('conteudo')

    <div class="container-fluid">
        <div class="text-end mb-3">
            <button class="btn btn-primary" onclick="window.history.go(-1)">
                <strong class="text-light text-white">Voltar</strong>
            </button>
        </div>
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Utilizadores</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Editar</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.user.update', $user->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @include('forms._formUser.index')
                            <button type="submit" class="btn btn-primary">Salvar</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>








    {{-- Utilizador --}}
    @if (session('user.update.success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Utilizador Editado Com Sucesso!',
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
                t.dismiss === Swal.DismissReason.timer && console.log("I was closed by the timer");
                window.history.go(-2);


            })
        </script>
    @endif

    @if (session('user.update.error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Erro ao Editar Utilizador!',
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


    @if (Auth::user()->perfil == 'Administrador' || Auth::user()->perfil == 'Master')
        <script>
            function updatePassword() {
                var checkbox = document.getElementById('gen-info-change-password').checked

                if (checkbox == true) {

                    /* document.getElementById('currentPassword').setAttribute('required', 'required') */
                    document.getElementById('password').setAttribute('required', 'required')
                    document.getElementById('password_confirmation').setAttribute('required', 'required')


                    document.getElementById('password').removeAttribute('disabled')
                    document.getElementById('password_confirmation').removeAttribute('disabled')

                } else {
                    document.getElementById('currentPassword').setAttribute('disabled', 'disabled')
                    document.getElementById('password').setAttribute('disabled', 'disabled')
                    document.getElementById('password_confirmation').setAttribute('disabled', 'disabled')


                    document.getElementById('password').removeAttribute('required')
                    document.getElementById('password_confirmation').removeAttribute('required')
                }
            }
        </script>
    @else
        <script>
            function updatePassword() {
                var checkbox = document.getElementById('gen-info-change-password').checked

                if (checkbox == true) {

                    /* document.getElementById('currentPassword').setAttribute('required', 'required') */
                    document.getElementById('password').setAttribute('required', 'required')
                    document.getElementById('password_confirmation').setAttribute('required', 'required')

                    document.getElementById('currentPassword').removeAttribute('disabled')
                    document.getElementById('password').removeAttribute('disabled')
                    document.getElementById('password_confirmation').removeAttribute('disabled')

                } else {
                    document.getElementById('currentPassword').setAttribute('disabled', 'disabled')
                    document.getElementById('password').setAttribute('disabled', 'disabled')
                    document.getElementById('password_confirmation').setAttribute('disabled', 'disabled')

                    document.getElementById('currentPassword').removeAttribute('required')
                    document.getElementById('password').removeAttribute('required')
                    document.getElementById('password_confirmation').removeAttribute('required')
                }
            }
        </script>
    @endif
@endsection
