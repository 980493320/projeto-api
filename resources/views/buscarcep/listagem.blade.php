<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>


<body>

    <title>Enderecos Cadastrados</title>
    </head>

    <body>


        <div class="container">



            <h1 class="mb-5">
                <div class="jumbotron">
                    Enderecos Cadastrados
            </h1>


            <a class="btn btn-primary" href="{{'adicionar'}}">
                <i class="fas fa-check"></i> Adicione um cep
            </a>

            <a class="btn btn-secondary" href="{{'pdf'}}">
                <i class="fas fa-check"></i> Imprimir
            </a>

            @if(session('sucesso'))
            <div class="alert alert-primary" role="alert">
                {{session('sucesso')}}
            </div>
            @endif

            @if(session('erro'))
            <div class="alert alert-danger" role="alert">
                {{session('erro')}}
            </div>
            @endif
            @csrf


            <div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Logradouro</th>
                            <th scope="col">Numero</th>
                            <th scope="col">Bairro</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Data da criação</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($enderecos as $endereco)
                        <tr>
                            <td>{{$endereco->id}}</td>
                            <td>{{$endereco->logradouro}}</td>
                            <td>{{$endereco->numero}}</td>
                            <td>{{$endereco->bairro}}</td>
                            <td>{{$endereco->cidade}}</td>
                            <td>{{$endereco->estado}}</td>
                            <td>{{$endereco->created_at}}</td>
                            <td>
                                <form method="post" action="{{url('excluir/'.$endereco->id)}}" onsubmit="return confirm('Tem certeza que deseja remover o endereco {{$endereco->logradouro}} ?')">

                                    <a class="btn btn-warning btn-sm" href="{{url('editar/'.$endereco->id)}}"><i class="fas fa-edit"></i></a>


                                    @csrf

                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="far fa-trash-alt"></i>
                                    </button>

                                </form>
                            </td>
                        </tr>


                        @endforeach
                    </tbody>
                </table>

            </div>





            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->


            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        </div>
        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    </body>

</html>