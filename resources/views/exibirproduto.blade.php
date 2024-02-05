<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos Registrados</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #000;
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            color: #333;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: #fff;
        }

        .product {
            background-color: #f9f9f9;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            text-decoration: none;
            background-color: #4CAF50;
            color: #fff;
            padding: 8px 8px;
            border-radius: 5px;
        }

        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Produtos Registrados</h1>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo</th>
                    <th>Hardware ID</th>
                    <th>Tarifa</th>
                    <th>Criado em</th>
                    <th>Atualizado em</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produtos as $produto)
                    <tr class="product">
                        <td>{{ $produto->id }}</td>
                        <td>{{ $produto->tipo }}</td>
                        <td>{{ $produto->hardware }}</td>
                        <td>{{ $produto->tarifa }}</td>
                        <td>{{ \Carbon\Carbon::parse($produto->created_at)->format('d/m/Y H:i:s') }}</td>
                        <td>{{ \Carbon\Carbon::parse($produto->updated_at)->format('d/m/Y H:i:s') }}</td>
                        <td>
                            <a href = "{{url('editarproduto', ['id' => $produto->id])}}" class="btn btn-info">Editar</button>
                            <a href = "{{url('excluirproduto', ['id' => $produto->id])}}" class="btn btn-danger">Deletar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="/" style="margin-top: 10px;">Voltar</a>
    </div>
</body>
</html>