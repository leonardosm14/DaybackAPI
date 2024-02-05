<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>

    <style>
        body {
            background-color: #cdcdcd;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-bottom: 45px;
            font-size: 25px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input {
            width: 300px;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }

        button {
            padding: 10px 20px;
            margin-top: 25px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            text-decoration: none;
            color: #4CAF50;
            display: block;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Realize a atualização</h1>

    <form action="/editarproduto/{{ $produto->id }}" method="POST">

        @csrf
        <label>Tipo de Carregador</label>
        <input type="text" name="carregador" value="{{$produto->tipo}}">
        <br>
        <label>Hardware ID</label>
        <input type="text" name="hardwareid" value="{{$produto->hardware}}">
        <br>
        <label>Tarifa</label>
        <input type="text" name="tarifa" value="{{$produto->tarifa}}">
        <br>
        <button>Atualizar</button>
    </form>

    <a href="/exibirproduto">Ver Carregadores Registrados</a>
</div>

</body>
</html>