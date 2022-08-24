<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <title>PDF</title>
</head>

<style>
    body {
        font-family: 'Calibri', 'CalibriB';
    }


    h1 {
        text-align: center;
        font-weight: bold;
        background: #eee;
    }

   
    h3,
    p {
        text-align: center;
        left: 0px;
        font-weight: bold;
        font-size: 14px;
        padding-left: 3px;
        padding-right: 3px;
        margin-bottom: 0;
    }
</style>

<body>

    <h1>Lista de endereços cadastrados</h1>
    <hr>

    @foreach($enderecos as $endereco)
    <h3>ID: {{$endereco->id}}</h3>
    <p>Logradouro: {{$endereco->logradouro}}</p>
    <p>Numero: {{$endereco->numero}}</p>
    <p>Bairro: {{$endereco->bairro}}</p>
    <p>Cidade: {{$endereco->cidade}}</p>
    <p>Estado: {{$endereco->estado}}</p>
    <hr>

    @endforeach

</body>

</html>