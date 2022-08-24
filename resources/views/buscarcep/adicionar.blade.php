<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title></title>
</head>

<body>


    <div class="container">
        <h1 class="mb-5">
            <div class="jumbotron">
                Adicionar Cep

        </h1>

        <div style="margin-top: 30px;" class="container">
            <form action="{{url('salvar')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Cep</label>
                    <input name="cep" id="cep" type="text" value="{{$cep}}" size="10" maxlength="9" /></label><br />
                    <label>Rua</label>
                    <input name="logradouro" type="text" value="{{$logradouro}}" size="60" /></label><br/>
                    <label>Numero</label>
                    <input type="text" name="numero" id="numero" size="20" /></label><br />
                    <label>Bairro</label>
                    <input name="bairro" type="text" value="{{$bairro}}" size="40" /></label><br />
                    <label>Cidade</label>
                    <input name="cidade" type="text" value="{{$cidade}}" size="40" /></label><br />
                    <label>Estado</label>
                    <input name="estado" type="text" value="{{$estado}}" size="2" /></label><br />

                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a class="btn btn-danger" href="{{'/'}}">
                    <i class="fas fa-check"></i> Cancelar
                </a>


            </form>
        </div>
    </div>


    <script>
        const sel = document.getElementById('numero').required = true;

        const c = document.getElementById('cep');
        c.style.background = 'red'
    </script>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>