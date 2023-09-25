


 @extends('layouts.merge.painel')
@section('titulo', 'Lista de Registros de Actividades')
@section('conteudo')
    <!-- row -->
    <div class="container-fluid">
       {{--  <div class="text-end mb-3">
            @if (Auth::user()->perfil == 'Master')
                <a href="{{ route('admin.log.create') }}" class="btn btn-primary btn-rounded add-staff">Cadastrar</a>
            @endif
        </div> --}}
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Artigos</a></li>
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
                                        <th>ID</th>
                                        <th>TIPO</th>
                                        <th>DATA</th>
                                        <th>ENDEREÇO</th>
                                        <th>UTILIZADOR</th>
                                        <th>ACTIVIDADE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($logs))
                                        @foreach ($logs as $log)
                                            <tr>
                                                <td> <strong>{{ $log->id }}</strong></td>
                                                <td>
                                                    @if ($log->level == "error")
                                                        Erro
                                                    @elseif($log->level == "info")
                                                        Informação
                                                    @endif
                                                </td>
                                                <td>{{ date('d-m-Y H:i:s', strtotime($log->created_at)) }}</td>
                                                <td>{{ $log->endereco }}</td>
                                                <td>{{ $log->name }}</td>
                                                <td>

                                                    @if (Str::length($log->desc) > 25)
                                                        {{ Str::limit($log->desc, 20) }} <a href="#" class=""
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#dispo{{ $log->id }}">ver
                                                            mais</a>
                                                    @else
                                                        {{ $log->desc }}
                                                    @endif

                                                </td>


                                            </tr>
                                        @endforeach

                                    @endif
                                </tbody>
                            </table>
                            @if (isset($logs))
                                @foreach ($logs as $log)
                                    {{-- START Dispo MODAL --}}
                                    <div class="modal fade" id="dispo{{ $log->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel{{ $log->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog2  modal-xl" role="document">
                                            <div class="modal-content modal-content2">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel{{ $log->id }}">
                                                        {{ $log->name }}
                                                    </h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body table-responsive">
                                                    <section class="gallery-section container p-md-0 my-5">
                                                        <strong>Dispositivo: </strong>
                                                        <p>{{ $log->dispositivo }}</p>
                                                        <hr>
                                                        <strong>Endereço: </strong>
                                                        <p>{{ $log->endereco }}</p>
                                                        <hr>
                                                        <strong>Actividade: </strong>
                                                        <p>{{ $log->desc }}</p>

                                                    </section>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary"
                                                        data-bs-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- END Dispo MODAL --}}
                                    <!-- Modal -->
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>









   
@endsection
