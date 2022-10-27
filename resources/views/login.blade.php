<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="d-flex flex-column mb-3">
                    <a href="{{route('clientes.criar')}}">
                        <button type="button" class="btn btn-primary">Cadastrar cliente</button>
                    </a>
                </div>
                <div class="d-flex flex-column-reverse">
                    <a href="{{route('clientes.listar')}}">
                        <button type="button" class="btn btn-primary">Cadastros</button>
                    </a>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>