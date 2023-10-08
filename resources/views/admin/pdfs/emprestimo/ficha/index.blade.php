<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibo de Empréstimo de Livros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .receipt {
            width: 80%;
            margin: 0 auto;
            border: 1px solid #000;
            padding: 20px;
        }

        .library-name {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .receipt-header {
            text-align: center;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .receipt-content {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .receipt-signature {
            text-align: center;
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="receipt">
        <div class="library-name">
            Sistema de Gestão Bibliotecária
        </div>
        <div class="receipt-header">
            Recibo de Empréstimo de Livros
        </div>
        <div class="receipt-content">
            <p><strong>Data do Empréstimo:</strong> {{ date('d-m-Y', strtotime($emprestimo->data_levantamento)) }}</p>
            <p><strong>Nome do Professor:</strong> {{ $emprestimo->primeiro_nome . ' ' . $emprestimo->sobrenome }}</p>
            <p><strong>Data de Devolução:</strong> {{ date('d-m-Y', strtotime($emprestimo->data_entrega)) }}</p>
            <table>
                <thead>
                    <tr>
                        <th>Título do Livro</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($emprestimo->livro_emprestimos as $key => $livro)
                        <tr>
                            <td> {{ $livro->titulo }}</td>


                        </tr>
                    @endforeach
                    <!-- Adicione mais linhas conforme necessário para listar todos os livros emprestados -->
                </tbody>
            </table>
        </div>
        <div class="receipt-signature">
            ______________________________<br>
            Assinatura do Bibliotecário
        </div>
    </div>
</body>

</html>
