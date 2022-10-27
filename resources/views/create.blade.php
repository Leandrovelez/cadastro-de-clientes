<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro</h1>
    <div class="container">
        <div class="row text-secondary">
            <form action="{{route('clientes.salvar')}}" method="POST">
            @csrf
                <label for="nome" class="form-label">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control mb-3"/>
                <label for="email" class="form-label">E-mail</label>
                <input type="email" id="email" name="email" class="form-control mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" id="telefone" name="telefone" class="form-control mb-3">
                <label for="empresa" class="form-label">Nome da empresa</label>
                <input type="empresa" id="empresa" name="empresa" class="form-control mb-3">
                <label for="servicos" class="form-label">Serviços contratados</label>
                <br>
                <select  name="servicos[]" class="js-example-basic-multiple" multiple="multiple">
                    @foreach($servicos as $servico)
                    <option value="{{$servico->id}}">{{$servico->servico}}</option>
                    @endforeach
                </select>
                <br>
                <input type="submit" name="salvar" value="Salvar" class="btn btn-primary mt-3">
            </form>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
        
    </script>
    
</body>
</html>