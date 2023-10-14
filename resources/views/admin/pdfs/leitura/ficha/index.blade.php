<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- {{-- <title>Document</title> --}} -->

</head>

<body>
    <img class="logo-abbr" src="xhtml/images/logo.webp" width="200" style="position: absolute; top: 100; left: 100;">
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
        <div class="text-center">REGISTRO DE LEITURA DE LIVRO</div>
    </h3>
    <br><br>
    <div id="dados">

        <p class="text-left" style="line-height: 10px;"><span style="font-weight: bold;"><strong>Data da
                    Leitura:</span> <span style="text-transform: capitalize;">
                {{ date('d-m-Y', strtotime($leitura->data)) }}</span></p>


        <p class="text-left" style="line-height: 10px;"><span style="font-weight: bold;"><strong>Nome do
                    Leitor:</span> <span style="text-transform: capitalize;">
                {{ $leitura->nome }}</span></p>


        <p class="text-left" style="line-height: 10px;"><span style="font-weight: bold;"><strong>BI do Leitor:</span>
            <span style="text-transform: capitalize;">
                {{ date('d-m-Y', strtotime($leitura->bi)) }}</span></p>

    </div>
    <br><br>
    <table class="table datatables table-hover table-bordered" id="datatable-ajax-crud">
        <thead class="thead-dark">
            <tr class="text-center">



                <th style="text-transform: uppercase;">TÍTULO DO LIVRO</th>
                <th style="text-transform: uppercase;">EDITORA</th>
                <th style="text-transform: uppercase;">VOLUME</th>
                <th style="text-transform: uppercase;">AUTORES</th>
            </tr>
        </thead>
        <tbody class="bg-white">


            <tr class="text-center">

                <td>{{ $leitura->titulo }}</td>
                <td>{{ $leitura->editora }}</td>
                <td>{{ $leitura->volume }}</td>


                <td>
                    @php
                        $autores = getAutores($leitura->id_livro);

                        //dd($autores);

                    @endphp
                    @foreach ($autores as $key => $autor)
                        @if ($key != 0)
                            ;
                        @endif
                        {{ $autor->nome }}
                    @endforeach
                </td>

            </tr>





        </tbody>
    </table>

    {{--  <div class="" style="margin-top: 200px;">
        ______________________________<br>
        Assinatura do Bibliotecário
    </div>
 --}}



</body>

</html>
