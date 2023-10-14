<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- {{-- <title>Document</title> --}} -->

</head>

<body> 
    <img class="logo-abbr" src="xhtml/images/logo.webp"  width="200" style="position: absolute; top: 100; left: 100;">
    <div class="text-center">
        <p>
           
            <br>
            <strong>SISTEMA DE GESTÃO BIBLIOTECÁRIA</strong><br>

          
        </p>
    </div>
    @php
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('Africa/Luanda');
    @endphp
    <h3>
        <div class="text-center">RELTÓRIO DE ACTIVIDADE</div>
    </h3>
    <br><br>
    <div id="dados">
        @if (isset($user) && $user != null)
            <p class="text-left" style="line-height: 10px;"><span style="font-weight: bold;">Utilizador:</span> <span
                    style="text-transform: capitalize;"> {{ $user->name }}</span></p>
            <p class="text-left" style="line-height: 10px;"><span style="font-weight: bold;">Perfil:</span> <span
                    style="text-transform: capitalize;"> {{ $user->perfil }}</span></p>
        @endif
        @if (isset($day))
            <p class="text-left" style="line-height: 10px;"><span style="font-weight: bold;">Registros de: </span>
                <span> {{ date('d-m-Y', strtotime($day)) }}</span>
            </p>
        @elseif(isset($month))
            <p class="text-left" style="line-height: 10px;"><span style="font-weight: bold;">Registros de: </span>
                <span> {{ strftime('%B de %Y', strtotime($month)) }}</span>
            </p>
        @elseif(isset($year))
            <p class="text-left" style="line-height: 10px;"><span style="font-weight: bold;">Registros de: </span>
                <span> {{ strftime('%Y', strtotime($year)) }}</span>
            </p>
        @elseif(isset($date))
            <p class="text-left" style="line-height: 10px;"><span style="font-weight: bold;">Registros de: </span>
                <span> {{ strftime('%d de %B de %Y', strtotime($date)) }}</span>
            </p>
        @elseif(isset($intervalo1) && isset($intervalo2))
            @if (date('Y', strtotime($intervalo1)) == date('Y', strtotime($intervalo2)))
                <p class="text-left" style="line-height: 10px;"><span style="font-weight: bold;">Registros de: </span>
                    <span> {{ strftime('%d de %B', strtotime($intervalo1)) }} à
                        {{ strftime('%d de %B de %Y', strtotime($intervalo2)) }}</span>
                </p>
            @else
                <p class="text-left" style="line-height: 10px;"><span style="font-weight: bold;">Registros de: </span>
                    <span> {{ strftime('%d de %B de %Y', strtotime($intervalo1)) }} à
                        {{ strftime('%d de %B de %Y', strtotime($intervalo2)) }}</span>
                </p>
            @endif
        @endif

    </div>
    <br><br>
    <table class="table datatables table-hover table-bordered" id="datatable-ajax-crud">
        <thead class="thead-dark">
            <tr class="text-center">

                <th style="text-transform: uppercase;">ID</th>
                @if (!isset($user))
                    <th style="text-transform: uppercase;">UTILIZADOR</th>
                @endif
                <th style="text-transform: uppercase;">ACTIVIDADE</th>
                {{--         <th style="text-transform: uppercase;">ENDEREÇO</th>
                <th style="text-transform: uppercase;">DISPOSITIVO</th> --}}
                <th style="text-transform: uppercase;">DATA & HORA</th>
            </tr>
        </thead>
        <tbody class="bg-white">

            @foreach ($logs as $log)
                <tr class="text-center">

                    <td>{{ $log->id }}</td>
                    @if (!isset($user))
                        <td>{{ $log->name }}</td>
                    @endif
                    <td>{{ $log->desc }}</td>
                    {{--     <td>{{ $log->endereco}}</td>
    <td>{{ $log->dispositivo }} </td> --}}
                    <td>{{ date('d-m-Y H:i:s', strtotime($log->created_at)) }}</td>

                </tr>
            @endforeach




        </tbody>
    </table>






</body>

</html>
