@extends('layouts.merge.painel')
@section('titulo', 'Cadastro de Registros de Leitura')
@section('conteudo')

    <div class="container-fluid">
        <div class="text-end mb-3">
            <button class="btn btn-primary" onclick="window.history.go(-1)">
                <strong class="text-light text-white">Voltar</strong>
            </button>
        </div>
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Registros de Leitura</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Cadastrar</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.leitura.store') }}" method="post" enctype="multipart/form-data">

                            @csrf
                            @include('forms._formLeitura.index')
                            <button type="submit" class="btn btn-primary">Salvar</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>






    @if (session('leitura.create.success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Registro de Leitura Cadastrado Com Sucesso!',
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

    @if (session('leitura.create.error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Erro ao Cadastrar Registro de Leitura!',
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

    @if (session('leitura.create.error.disponibilidade'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Impossível Realizar esta Operação!',
            text: "{{session('leitura.create.error.disponibilidade')}}",
            timer: 6e3,
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