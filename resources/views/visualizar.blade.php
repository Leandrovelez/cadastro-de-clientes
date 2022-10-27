<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Visualizar cliente</title>
</head>
<body>
    <div class="container">
        <h1>Cliente</h1>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nome</h5>
                        {{$cliente->nome}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">E-mail</h5>
                        {{$cliente->email}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Telefone</h5>
                        {{$cliente->telefone}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Empresa</h5>
                        {{$cliente->empresa}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Serviços contratados</h5>
                        @foreach($servicos as $servico)
                            <small>
                            <i class="alert alert-primary" role="alert">{{$servico}}</i>
                            </small>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <a href="{{route('clientes.listar')}}">
                    <button class="btn btn-primary">Voltar</button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>